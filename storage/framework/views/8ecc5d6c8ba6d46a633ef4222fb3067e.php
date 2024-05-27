
<div class="col-span-9 col-start-4 ">

<h2>Tags list : </h2>
<ul class=" tags_list">

    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

<?php /**PATH /home/noname00/laravel/resources/views/livewire/admin/Tag.blade.php ENDPATH**/ ?>