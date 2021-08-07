@props(['pages'])

<div id="paginator">
    @if ($pages <= 5)
        @for ($i = 1; $i <= $pages; $i++)
            <x-paginator-link :page="$i"/>
        @endfor
    @else
        @if(request('page') <= 5)
            @for ($i = 1; $i <= 5; $i++)
                <x-paginator-link :page="$i"/>
            @endfor
            <a class="pag-link" href="">...</a>
            <x-paginator-link :page="$pages"/>
        @else
            @if (request('page') < $pages)
                <x-paginator-link :page="1"/>
                <a class="pag-link disable-link" href="">...</a>
                    @for ($i = request('page') - 4; $i <= request('page') + 4; $i++)
                        <x-paginator-link :page="$i"/>
                    @endfor
                <a class="pag-link disable-link" href="">...</a>
                <x-paginator-link :page="$pages"/>
            @else
                <x-paginator-link :page="1"/>
                <a class="pag-link disable-link" href="">...</a>
                    @for ($i = $pages - 8; $i <= $pages; $i++)
                        <x-paginator-link :page="$i"/>
                    @endfor
                <a class="pag-link disable-link" href="">...</a>
                <x-paginator-link :page="$pages"/>
            @endif
        @endif
    @endif
</div>