 
<?php $__env->startSection('content'); ?>
    <ul class="col-9">
        <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            {
            <li style="margin: 20px 0; fontSize: 2rem">
                <a href=<?php echo e('/' . $item->post_slug); ?>>
                    <?php echo e($item->post_title); ?>

                </a>
            </li>
            }
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.AdminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\noname\Desktop\laravel-app1\resources\views/admin/AdminArticle.blade.php ENDPATH**/ ?>