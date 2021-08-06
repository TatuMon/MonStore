@props(['pages'])

<div id="paginator">
    @if (ceil($pages) <= 5)
        @for ($i = 1; $i <= ceil($pages); $i++)
            <x-paginator-link :page="$i"/>
        @endfor
    @else
        @if(request('page') <= 5)
            @for ($i = 1; $i <= 5; $i++)
                <x-paginator-link :page="$i"/>
            @endfor
            <a class="pag-link" href="">...</a>
            <x-paginator-link :page="ceil($pages)"/>
        @else
        <x-paginator-link :page="1"/>
        <a class="pag-link" href="">...</a>
            @for ($i = request('page') - 4; $i <= request('page') + 4; $i++)
                <x-paginator-link :page="$i"/>
            @endfor
        <a class="pag-link" href="">...</a>
        <x-paginator-link :page="ceil($pages)"/>
        @endif
    @endif
</div>