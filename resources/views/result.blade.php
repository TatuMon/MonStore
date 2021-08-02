<x-layout>
    <x-slot name="title">{{ request('search') }}</x-slot>
    <div id="result-main">
        @foreach ($games as $game)
            <x-game-card :loop="$loop" :game="$game"/>
        @endforeach
    </div>
</x-layout>