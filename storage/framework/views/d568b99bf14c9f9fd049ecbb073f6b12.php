<head>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <title><?php echo e($title??"title"); ?></title>
        <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.sass'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/admin.sass'); ?>
</head>

<body>
    <div class="grid grid-cols-12 gap-4  lg:px-44">

        <?php if (isset($component)) { $__componentOriginal34749735ac3f291565554a0aefacc32d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal34749735ac3f291565554a0aefacc32d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.NavigationBar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('NavigationBar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal34749735ac3f291565554a0aefacc32d)): ?>
<?php $attributes = $__attributesOriginal34749735ac3f291565554a0aefacc32d; ?>
<?php unset($__attributesOriginal34749735ac3f291565554a0aefacc32d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal34749735ac3f291565554a0aefacc32d)): ?>
<?php $component = $__componentOriginal34749735ac3f291565554a0aefacc32d; ?>
<?php unset($__componentOriginal34749735ac3f291565554a0aefacc32d); ?>
<?php endif; ?>
        <?php echo e($slot); ?>

        
    </div>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body
<?php /**PATH /home/noname00/laravel/resources/views/layouts/admin.blade.php ENDPATH**/ ?>