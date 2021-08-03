<x-layout>
        <x-slot name="title">MonStore</x-slot>
        
        <x-games-section :games="$newones" :section="$section = array('index' => 0, 'name' => 'Most Recent')" id="novedades"/>
        <x-games-section :games="$best" :section="$section = array('index' => 1, 'name' => 'Most Rated')"/>
</x-layout>