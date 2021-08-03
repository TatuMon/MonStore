<x-layout>
    <x-slot name="title">{{ $game->name }}</x-slot>
    <div id="game">
        <div id="game-main-info">
            <div id="cover">
                <img src="{{ str_replace('t_thumb', 't_cover_big', $game->cover['url'] ?? null) }}">
            </div>

            <div id="name">
                <h1>{{ $game->name }}</h1>
                <p>{{ $game->first_release_date->format('Y') }}</p>
            </div>

            <div id="description">
                <p>{{ $game->summary }}</p>
            </div>

            <div id="rating">
                <h3><i class="fas fa-star"></i>{{ round($game->total_rating) }}/100</h3>
                <h3>Votes: {{ $game->total_rating_count }}<h3>
            </div>
        </div>
        <div id="screenshots">
            @foreach ($game->screenshots as $ss)
                <img src="{{ str_replace('t_thumb', 't_screenshot_med', $ss['url'] ?? null) }}">
            @endforeach
        </div>
    </div>
</x-layout>