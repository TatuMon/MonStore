<x-layout>
    <x-slot name="title">Games List</x-slot>
    
    <div id="order-page">
        <div id="order" x-data="{show : false}">
            <h3 @click="show =! show" class="btn-link filter-btn">Order by</h3>
            <div class="filter-opts" x-show="show" @click.away="show = false">
                <a data-by="name" data-how="asc" class="filter-opt">Alphabetical Order <i class="fas fa-sort-alpha-up"></i></a>
                <a data-by="name" data-how="desc" class="filter-opt">Alphabetical Order <i class="fas fa-sort-alpha-up-alt"></i></a>
                <a data-by="first_release_date" data-how="desc" class="filter-opt">Release Date <i class="fas fa-sort-numeric-up-alt"></i></a>
                <a data-by="first_release_date" data-how="asc" class="filter-opt">Release Date <i class="fas fa-sort-numeric-up"></i></a>
                <a data-by="total_rating" data-how="desc" class="filter-opt">Rating <i class="fas fa-star"></i></a>
            </div>
        </div>
        <div id="filters" x-data="{show : false}">
            <h3 @click="show =! show" class="btn-link filter-btn">Filter by</h3>
            <div class="filter-opts" x-show="show" @click.away="show = false">
                <div x-show="genres" id="genres">
                    @foreach ($genres as $genre)
                        <a class="filter-opt">{{ $genre->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @if(!empty($games))
        <div id="result-main">
            @foreach ($games as $game)
                <x-game-card :loop="$loop" :game="$game"/>
            @endforeach
        </div>
    @else
        <h1 style="text-align: center">No games were found</h1>
    @endif

    <x-paginator :pages="$pages"/>
</x-layout>