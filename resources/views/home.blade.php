<x-layout>
        <x-slot name="title">MonStore</x-slot>
        
        @if (!empty($newones) && !empty($best))
                <x-games-section :games="$newones" :section="$section = array('index' => 0, 'name' => 'Last Aditions')" id="novedades"/>
                <x-games-section :games="$best" :section="$section = array('index' => 1, 'name' => 'Most Rated')"/>
        @else
                <h1 style="text-align: center">No games were found, try reloading the page</h1>
        @endif
</x-layout>