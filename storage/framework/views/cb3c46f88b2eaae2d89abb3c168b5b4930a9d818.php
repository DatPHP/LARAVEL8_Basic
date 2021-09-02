<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##

    <p>This is appended to the master sidebar.</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>This is my body content.</p>

    <?php
    $message = "Hoc.tv";
    ?>

   <?php echo e($message); ?>



   <?php echo (now())->format('d-m-y h:i'); ?>


<?php if (\Illuminate\Support\Facades\Blade::check('disk', 'local')): ?>
    <!-- The application is using the local disk... -->
    <p> a </p>
<?php elseif (\Illuminate\Support\Facades\Blade::check('disk', 's3')): ?>
    <!-- The application is using the s3 disk... -->
    <p> b </p>
<?php else: ?>
    <!-- The application is using some other disk... -->
    <p> c </p>
<?php endif; ?>


<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts', '<script>alert("Hello!")</script>'); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        alert("Hello again!")
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPrepend('scripts'); ?>
    <script>
        alert("Hello again!0123")
    </script>
<?php $__env->stopPrepend(); ?>



<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel8/resources/views/home/index.blade.php ENDPATH**/ ?>