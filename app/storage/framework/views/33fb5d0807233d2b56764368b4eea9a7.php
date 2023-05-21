<?php $__env->startSection('content'); ?>


    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.panel.calendarPopupBox','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('panel.calendarPopupBox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <div id="activityCalendar" class="w-100">

    </div>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('assets'); ?>

    <script>

        var calendarCurrentEvents = <?php echo json_encode($jsonCurrentMonth, JSON_UNESCAPED_SLASHES); ?>;

    </script>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js'></script>
    <script src="<?php echo e(asset('js/calendarMain.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/calendarMain.css')); ?>">

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.userPanelLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\48794\Desktop\pracaDyplomowa\app\resources\views/userPanel.blade.php ENDPATH**/ ?>