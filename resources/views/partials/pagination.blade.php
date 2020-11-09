@if ($paginator->lastPage()>1)

<ul class="pagination pagination-rounded justify-content-end mb-2">
    
    <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a class="page-link" href="{{ $paginator->url($paginator->currentPage()-1) }}" aria-label="Previous">
            <i class="mdi mdi-chevron-left"></i>
            
        </a>
    </li>
    
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class=" page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
    @endfor

    <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}" >
        <a class="page-link" href="{{ $paginator->url($paginator->currentPage()+1) }}" aria-label="Next">
            <i class="mdi mdi-chevron-right"></i>
        </a>
    </li>
</ul>

@endif

