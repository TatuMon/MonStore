@props(['game'])

<div class="game-card">
    <h1 class="game-name">{{ $game->name }}</h1>
    <a href="/games/{{ $game->slug }}"><img src="{{ str_replace('t_thumb', 't_cover_big', $game->cover['url'] ?? null) }}"></a>
    <p>Rating: {{ round($game->total_rating) }}/100</p>
    <a href="/games/{{ $game->slug }}"><i class="fas fa-ellipsis-h"></i></a>
</div>