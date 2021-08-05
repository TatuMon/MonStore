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
                <p class="genres">
                    @foreach($game->genres as $genre)
                        {{ $genre['name'] }}
                        @if(!$loop->last)
                            | 
                        @endif
                    @endforeach
                </p>
                <p class="platforms">
                    @foreach($game->platforms as $platform)
                        {{ $platform['name'] }}
                        @if(!$loop->last)
                            | 
                        @endif
                    @endforeach
                </p>
            </div>

            <div id="rating">
                <h3><i class="fas fa-star"></i>{{ round($game->total_rating) }}/100</h3>
                <h3>Votes: {{ $game->total_rating_count }}<h3>
            </div>

            <div id="add-info-links">
                <a class="btn-link" href="#buy">Buy</a>
                <a class="btn-link" href="#communities">Communities</a>
                <a class="btn-link" href="#official">Official</a>
            </div>
        </div>
        <div id="game-multimedia">
            <div id="trailer">
                @foreach ($game->videos as $video)
                    @if ($video['name'] = 'trailer')
                        <iframe class="video"
                        src="https://www.youtube.com/embed/{{ $video['video_id'] }}">
                        </iframe>
                        @break
                    @endif
                @endforeach
            </div>
            <div id="screenshots">
                @foreach ($game->screenshots as $ss)
                    @if ($loop->index < 4)
                        <img src="{{ str_replace('t_thumb', 't_screenshot_med', $ss['url'] ?? null) }}">
                    @endif
                @endforeach
            </div>
        </div>
        <div id="links">
            <div id="buy">
                <h3>Buy</h3>
                <div id="buy-links">
                    @foreach ($game->websites as $website)
                        <p>{{ $website['category'] }}</p>
                        @if ($website['category'] == 16)
                            <a href="{{ $website['url'] }}">{{ $webEnum->search($website['category']) }}</a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div id="communities">
                <h3>Communities</h3>
                <div id="comm-links">

                </div>
            </div>
            <div id="official">
                <h3>Official</h3>
                <div id="off-links">

                </div>
            </div>
        </div>
    </div>
</x-layout>