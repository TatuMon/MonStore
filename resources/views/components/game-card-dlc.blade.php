@props(['loop', 'game'])

<div id="game-{{ $loop->index }}" class="game-card">
    <a href="/games/{{ $game['slug'] }}" style="inline-block">
        @if (isset($game['cover']))
            <img src="{{ str_replace('t_thumb', 't_cover_big', $game['cover']['url'] ?? null) }}">
        @else
        <img src="{{ asset('images/noCoverArt.gif') }}">
        @endif
    </a>
    <div class="info-wrapper">
        <a class="game-name" href="/games/{{ $game['slug'] }}" style="inline-block">{{ $game['name'] }}</a>
        <p class="gamecard-info">
            @if (isset($game['total_rating']))
                @foreach($game['genres'] as $genre)
                    {{ $genre['name'] }}
                    @if(!$loop->last)
                        | 
                    @endif
                @endforeach
            @endif
        </p>
        @if (isset($game['total_rating']))
            <p class="gamecard-info">Rating: {{ round($game['total_rating']) }}/100</p>
        @endif
        <p class="gamecard-info">
            @if (isset($game['platforms']))
                @foreach($game['platforms'] as $platform)
                    {{ $platform['name'] }}
                    @if(!$loop->last)
                        | 
                    @endif
                @endforeach
            @endif
        </p>
    </div>
</div>