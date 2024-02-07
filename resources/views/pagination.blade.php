<nav aria-label="Page navigation example" class="custom-pagination text-center mb-5">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="fa-solid fa-chevron-left"></i></a></li>
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item" aria-current="page"><span class="page-link active">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="fa-solid fa-chevron-right"></i></a></li>
    </ul>
</nav>
