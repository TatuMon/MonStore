<x-layout>
    <x-slot name="title">Collections</x-slot>
    <h1>Recently updated collections</h1>

    @foreach ($collections as $collection)
        <div class="collection">
            <h3>{{ $collection->name }}</h3>
            <a href="{{ $collection->slug }}">go to collection</a>
        </div>
    @endforeach
</x-layout>