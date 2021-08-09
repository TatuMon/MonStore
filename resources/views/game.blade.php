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
                <p id="rating"><i class="fas fa-star"></i>{{ round($game->total_rating) }}/100</p>
                    
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

            <div id="add-info-links">
                <a class="btn-link" href="#buy">Buy</a>
                <a class="btn-link" href="#communities">Communities</a>
                <a class="btn-link" href="#official">Official</a>
            </div>
        </div>
        <div id="game-multimedia">
            <div id="trailer">
                @if (isset($game->videos))
                    @foreach ($game->videos as $video)
                        @if ($video['name'] = 'trailer')
                            <iframe class="video"
                            src="https://www.youtube.com/embed/{{ $video['video_id'] }}">
                            </iframe>
                            @break
                        @endif
                    @endforeach
                @endif
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
                <h3><i class="fas fa-shopping-cart"></i>BUY:</h3>
                <div id="buy-links" class="game-links">
                    @foreach ($game->websites as $website)
                        @if (10 <= $website['category'] && $website['category'] != 14 && $website['category'] <= 17)
                            <a class="btn-link" href="{{ $website['url'] }}" target="_blank">{{ $webEnum['webEnum']->search($website['category']) }}</a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div id="communities">
                <h3>COMMUNITIES:</h3>
                <div id="comm-links" class="game-links">
                    @foreach ($game->websites as $website)
                        @if ($website['category'] == 14 || $website['category'] == 18)
                            <a class="btn-link" href="{{ $website['url'] }}" target="_blank">{{ $webEnum['webEnum']->search($website['category']) }}</a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div id="official">
                <h3>OFFICIAL:</h3>
                <div id="off-links" class="game-links">
                    @foreach ($game->websites as $website)
                        @if ($website['category'] >= 1 && $website['category'] <= 9)
                            <a class="btn-link" href="{{ $website['url'] }}" target="_blank">{{ $webEnum['webEnum']->search($website['category']) }}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>