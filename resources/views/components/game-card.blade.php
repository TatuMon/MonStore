@props(['loop', 'game'])

<div id="game-{{ $loop->index }}" class="game-card">
    <a href="/games/{{ $game->slug }}" style="inline-block">
        <img src="{{ str_replace('t_thumb', 't_cover_big', $game->cover['url'] ?? null) }}">
    </a>
    <div class="info-wrapper">
        <a class="game-name" href="/games/{{ $game->slug }}" style="inline-block">{{ $game->name }}</a>
        <p class="gamecard-info">
            @foreach($game->genres as $genre)
                {{ $genre['name'] }}
                @if(!$loop->last)
                    | 
                @endif
            @endforeach
        </p>
        <p class="gamecard-info">Rating: {{ round($game->total_rating) }}/100</p>
        <p class="gamecard-info">
            @foreach($game->platforms as $platform)
                {{ $platform['name'] }}
                @if(!$loop->last)
                    | 
                @endif
            @endforeach
        </p>
    </div>
</div>