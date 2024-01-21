<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo e($title ??"title1"); ?></title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/admin.css">
   
    
    
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.sass'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/admin.sass'); ?>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="https://unpkg.com/htmx.org@1.9.6"
    integrity="sha384-FhXw7b6AlE/jyjlZH5iHa/tTe9EpJ1Y55RjcgPbjeWMskSxZt1v9qkxLJWNJaGni" crossorigin="anonymous">
</script>

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
</body>

</html>
<?php /**PATH /home/noname00/laravel/resources/views/components/layouts/admin.blade.php ENDPATH**/ ?>