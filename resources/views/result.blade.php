<x-layout>
    <x-slot name="title">Games List</x-slot>
    
    @if(!empty($games[0]))
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