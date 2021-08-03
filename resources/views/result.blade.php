<x-layout>
    <x-slot name="title">{{ request('name') }}</x-slot>
    @if(!empty($games))
        <div id="result-main">
            @foreach ($games as $game)
                <x-game-card :loop="$loop" :game="$game"/>
            @endforeach
        </div>
    @else
        <h1 style="text-align: center">No games were found</h1>
    @endif
</x-layout>