@if ($paginator->hasPages())
    <ul class="pagination text-center" role="navigation" aria-label="Pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled pagination-previous"><span>Previous</span></li>
        @else
            <li class="pagination-previous"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="current"><span class="show-for-sr">You're on page</span> <span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}" aria-label="Page {{$page}}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination-next"><a href="{{ $paginator->nextPageUrl() }}" aria-label="Next page" rel="next">Next</a></li>
        @else
            <li class="disabled pagination-next"><span>Next</span></li>
        @endif
    </ul>
@endif
