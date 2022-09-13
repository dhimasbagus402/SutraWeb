@if ($paginator->hasPages())
    <nav class="pagination-container">
        <div class="pagination">
        @if ($paginator->onFirstPage())
            <a class="disabled ax" href="#">PREV</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-newer ax" rel="prev">PREV</a>
        @endif

        <span class="pagination-inner">
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination-active ax"><span>{{ $page }}</span></li>
                    @else
                        <li><a class="ax" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pagination-older ax" rel="next">NEXT</a>
        @else
            <a class="disabled ax" href="#">NEXT</a>
        @endif
    </ul>
@endif 
