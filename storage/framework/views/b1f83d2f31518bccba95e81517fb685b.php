<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo e($title); ?></title>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.sass'); ?>
    
    <!-- <link rel="stylesheet" href="/css/home.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://unpkg.com/htmx.org@1.9.6"
        integrity="sha384-FhXw7b6AlE/jyjlZH5iHa/tTe9EpJ1Y55RjcgPbjeWMskSxZt1v9qkxLJWNJaGni" crossorigin="anonymous">
    </script>
</head>

<body>

    <?php if (isset($component)) { $__componentOriginaled6f415a085a00e13eedf7cab9e75398 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled6f415a085a00e13eedf7cab9e75398 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.Header','data' => ['time' => $time]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['time' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($time)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled6f415a085a00e13eedf7cab9e75398)): ?>
<?php $attributes = $__attributesOriginaled6f415a085a00e13eedf7cab9e75398; ?>
<?php unset($__attributesOriginaled6f415a085a00e13eedf7cab9e75398); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled6f415a085a00e13eedf7cab9e75398)): ?>
<?php $component = $__componentOriginaled6f415a085a00e13eedf7cab9e75398; ?>
<?php unset($__componentOriginaled6f415a085a00e13eedf7cab9e75398); ?>
<?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>
    <?php if (isset($component)) { $__componentOriginal1a1b0b46746169d35e1b0264de6171df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1a1b0b46746169d35e1b0264de6171df = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.Footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1a1b0b46746169d35e1b0264de6171df)): ?>
<?php $attributes = $__attributesOriginal1a1b0b46746169d35e1b0264de6171df; ?>
<?php unset($__attributesOriginal1a1b0b46746169d35e1b0264de6171df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a1b0b46746169d35e1b0264de6171df)): ?>
<?php $component = $__componentOriginal1a1b0b46746169d35e1b0264de6171df; ?>
<?php unset($__componentOriginal1a1b0b46746169d35e1b0264de6171df); ?>
<?php endif; ?>


</body>

</html>
<?php /**PATH /home/noname00/laravel/resources/views/layout/HomeLayout.blade.php ENDPATH**/ ?>