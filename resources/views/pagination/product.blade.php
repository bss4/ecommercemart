<?php 
$link_limit = 6; 
/*if(isset($searchVariable)){
    $paginator->appends($searchVariable);
}
if(isset($sortBy) && isset($order)){
    $paginator->appends(['sortBy' => $sortBy, 'order'=>$order])->links();
}*/
?>

@if($paginator->lastPage() > 1)
    
    <nav class="nt-pagination w__100 tc paginate_ajax">
        <ul class="pagination-page page-numbers">
            <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                <a class="page-numbers" href="{{ ($paginator->currentPage() == 1) ? 'javascript:void(0)' : $paginator->url($paginator->currentPage()-1) }}" tabindex="-1" aria-disabled="true"><figure><i class="fa fa-angle-left"></i><!--<img src="{{ WEBSITE_IMG_URL.'pagination-left-arrow.png' }}" alt="img">--></figure>Previous</a>
            </li>

            @for($i = 1; $i <= $paginator->lastPage(); $i++)
                <?php
                    $half_total_links = floor($link_limit / 2);
                    $from = $paginator->currentPage() - $half_total_links;
                    $to = $paginator->currentPage() + $half_total_links;
                    if ($paginator->currentPage() < $half_total_links) {
                        $to += $half_total_links - $paginator->currentPage();
                    }
                    if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                        $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                    }
                ?>

                @if ($from < $i && $i < $to)
                    <li>
                        <a class="page-numbers {{ ($paginator->currentPage() == $i) ? ' current' : '' }}" href='{{ $paginator->url($i) }}'>{{ $i }}</a>
                    </li>
                @endif
            @endfor

            <li class=" {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                <a class="page-numbers next" href="{{ ($paginator->currentPage() == $paginator->lastPage()) ? 'javascript:void(0)' : $paginator->url($paginator->currentPage()+1) }}">Next<figure><!--<img src="{{ WEBSITE_IMG_URL.'pagination-right-arrow.png'}}" alt="img">--><i class="fa fa-angle-right"></i></figure></a>
            </li>
        </ul>
    </nav>
@endif