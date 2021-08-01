@props(['games'])

<div class="section-wrapper">
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
