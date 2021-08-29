<html>
<head>
    <title>App Name - <?php echo $__env->yieldContent('title', 'Hoc.tv'); ?></title>
</head>
<body>
<?php $__env->startSection('sidebar'); ?>
    This is the master sidebar.
<?php echo $__env->yieldSection(); ?>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo $__env->yieldPushContent('scripts'); ?>


</body>
</html><?php /**PATH /var/www/html/laravel8/resources/views/layouts/template.blade.php ENDPATH**/ ?>