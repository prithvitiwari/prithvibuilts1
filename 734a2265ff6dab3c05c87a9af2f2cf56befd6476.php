<?php if($paginator->hasPages()): ?>
<?php if($paginator->lastPage() > 1): ?>
<?php
$query_array = [];
foreach( $query as $key => $key_value ){
if($key!='page'){
$query_array[] = urlencode( $key ) . '=' . urlencode( $key_value );
}
}
$query = implode( '&', $query_array );
?>
<nav style="flex-direction: row;" aria-label="Demo of active current page number">
    <div class="justify-content-start">Showing <?php echo e($paginator->firstItem()); ?> to <?php echo e($paginator->lastItem()); ?> of total <?php echo e($paginator->total()); ?> entries</div>
    <ul class="pagination justify-content-end">
        <li class="page-item <?php echo e(($paginator->currentPage() == 1) ? ' disabled' : ''); ?>">
            <a class="page-link" href="<?php echo e($paginator->url(1).'&'.$query); ?>">First</a>
        </li>
        <li class="page-item <?php echo e(($paginator->currentPage() == 1) ? ' disabled' : ''); ?>">
            <a class="page-link" href="<?php echo e($paginator->url($paginator->currentPage() - 1).'&'.$query); ?>">Previous</a>
        </li>
        <?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
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
            <?php if($from < $i && $i < $to): ?> <li class="page-item <?php echo e(($paginator->currentPage() == $i) ? ' active' : ''); ?>">
                <a class="page-link" href="<?php echo e($paginator->url($i).'&'.$query); ?>"><?php echo e($i); ?></a>
                </li>
                <?php endif; ?>
                <?php endfor; ?>
                <li class="page-item <?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : ''); ?>">
                    <a class="page-link" href="<?php echo e($paginator->url($paginator->currentPage() + 1).'&'.$query); ?>">Next</a>
                </li>
                <li class="page-item <?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : ''); ?>">
                    <a class="page-link" href="<?php echo e($paginator->url($paginator->lastPage()).'&'.$query); ?>">Last</a>
                </li>
    </ul>
</nav>
<?php endif; ?>
<?php endif; ?><?php /**PATH /home2/vijaycku/public_html/resources/views/frontend/templete/pagination.blade.php ENDPATH**/ ?>