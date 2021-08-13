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
                @if ($game->parent_game)
                    <p class="parent">
                        This game belongs to: <a class="text-link" href="/games/{{ $game->parent_game['slug'] }}">{{ $game->parent_game['name'] }}</a>
                    </p>
                @endif
            </div>

            <div id="add-info-links">
                <button class="btn-link" href="#buy">Buy</button>
                <button class="btn-link" href="#communities">Communities</button>
                <button class="btn-link" href="#official">Official</button>
            </div>
            <div id="links">
                <div id="buy" class="info-link">
                    <h3><i class="fas fa-shopping-cart"></i>BUY:</h3>
                    <div id="buy-links" class="game-links">
                        @foreach ($game->websites as $website)
                            @if (10 <= $website['category'] && $website['category'] != 14 && $website['category'] <= 17)
                                <a class="btn-link" href="{{ $website['url'] }}" target="_blank">{{ $webEnum['webEnum']->search($website['category']) }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div id="communities" class="info-link">
                    <h3>COMMUNITIES:</h3>
                    <div id="comm-links" class="game-links">
                        @foreach ($game->websites as $website)
                            @if ($website['category'] == 14 || $website['category'] == 18)
                                <a class="btn-link" href="{{ $website['url'] }}" target="_blank">{{ $webEnum['webEnum']->search($website['category']) }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div id="official" class="info-link">
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
                        <img src="{{ str_replace('t_thumb', 't_screenshot_med', $ss['url'] ?? null) }}" id="img-{{ $loop->index }}" class="screenshot">
                    @endif
                @endforeach
            </div>
            <div id="expanded-ss">
                <img>
            </div>
        </div>
        <div id="add-content">
            @if ($game->dlcs || $game->expansions)
                <h2 class="txt-center">Expansions and DLCs<h2>
                @if($game->dlcs)
                    <div id="dlcs" class="extra-content">
                        @foreach ($game->dlcs as $dlc)
                            <x-game-card-dlc :game="$dlc" :loop="$loop"/>
                        @endforeach
                    </div>
                @endif
                @if ($game->expansions)
                    <div id="expansions" class="extra-content">
                        @foreach ($game->expansions as $expansion)
                            <x-game-card-dlc :game="$expansion" :loop="$loop"/>
                        @endforeach
                    </div>
                @endif
            @endif
        </div>
    </div>
</x-layout>