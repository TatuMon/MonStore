@props(['games', 'section'])

<div class="section-wrapper">
    <h1 class="section-title">{{ $section['name'] }}</h1>
    <div class="carousel" id="carousel-{{ $section['index'] }}">
        @foreach ($games as $game)
            <x-game-card :loop="$loop" :game="$game"/>
        @endforeach
    </div>
    <div class="arrow-prev carousel-arrow"> &#10094; </div>
    <div class="arrow-next carousel-arrow"> &#10095; </div>
</div>
