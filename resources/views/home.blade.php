<x-layout>
        <x-slot name="title">MonStores</x-slot>
        
        @if (!empty($newones) && !empty($best))
                <x-games-section :games="$newones" :section="$section = array('index' => 0, 'name' => 'Last additions')" id="novedades"/>
                <x-games-section :games="$best" :section="$section = array('index' => 1, 'name' => 'Best rated')"/>
        @else
                <h1 style="text-align: center">No games were found, try reloading the page</h1>
        @endif
</x-layout>