
<div class="col-span-9 col-start-4 ">

    <h2>Articke list : </h2>
    <ul class=" article_list">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        {
            <li style="margin: 20px 0; fontSize: 2rem">
                <a href=<?php echo e('/' . $item->post_slug); ?>>
                    <?php echo e($item->post_title); ?>

                </a>
            </li>
        }
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
    </ul>
</div>
<?php /**PATH /home/noname00/laravel/resources/views/livewire/admin/Order.blade.php ENDPATH**/ ?>