@props(['games', 'section'])

<div class="section-wrapper">
    <h1 class="section-title">{{ $section }}</h1>
    <div class="carousel" id="carousel-0">
        @foreach ($games as $game)
            <div id="game-{{ $loop->index }}" class="game-card">
                <a href="/games/{{ $game->slug }}" style="inline-block">
                    <img src="{{ str_replace('t_thumb', 't_cover_big', $game->cover['url'] ?? null) }}">
                </a>
                <div class="info-wrapper">
                    <a class="game-name" href="/games/{{ $game->slug }}" style="inline-block">{{ $game->name }}</a>
                    <p class="game-rating">Rating: {{ round($game->total_rating) }}/100</p>
                    <p class="platforms">
                        @foreach($game->platforms as $platform)
                            {{ $platform['name'] }}
                            @if(!$loop->last)
                                | 
                            @endif
                        @endforeach
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="arrow-prev carousel-arrow"> &#10094; </div>
    <div class="arrow-next carousel-arrow"> &#10095; </div>
</div>
