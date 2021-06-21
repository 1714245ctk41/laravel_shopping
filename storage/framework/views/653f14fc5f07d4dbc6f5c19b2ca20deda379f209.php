<?php if($paginator->lastPage()>1): ?>

<ul class="pagination pagination-rounded justify-content-end mb-2">
    
    <li class="page-item <?php echo e(($paginator->currentPage() == 1) ? ' disabled' : ''); ?>">
        <a class="page-link" href="<?php echo e($paginator->url($paginator->currentPage()-1)); ?>" aria-label="Previous">
            <i class="mdi mdi-chevron-left"></i>
            
        </a>
    </li>
    
    <?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
        <li class=" page-item <?php echo e(($paginator->currentPage() == $i) ? ' active' : ''); ?>">
            <a class="page-link" href="<?php echo e($paginator->url($i)); ?>"><?php echo e($i); ?></a>
        </li>
    <?php endfor; ?>

    <li class="page-item <?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : ''); ?>" >
        <a class="page-link" href="<?php echo e($paginator->url($paginator->currentPage()+1)); ?>" aria-label="Next">
            <i class="mdi mdi-chevron-right"></i>
        </a>
    </li>
</ul>

<?php endif; ?>

<?php /**PATH D:\php_mySQL_cakephp2_laravel\laravel\laravel_learn_from_youtube\laravel_shopping\laravel_backend\resources\views/partials/pagination.blade.php ENDPATH**/ ?>