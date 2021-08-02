<x-layout>
        <x-slot name="title">MonStore</x-slot>
        <div id="main">
            <x-games-section :games="$newones" :section="$section = ['index' => 0, 'name' => 'Most Recent']" id="novedades"/>
            <x-games-section :games="$best" :section="$section = ['index' => 1, 'name' => 'Most Rated']"/>
        </div>

        <script src="js/app.js"></script>
</x-layout>