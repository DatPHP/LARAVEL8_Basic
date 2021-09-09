<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form method="post" action="/user/view/update/<?php echo e($user->id); ?>">
    <?php echo method_field('PATCH'); ?>
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
    <p>
        <label for="title">Name</label><br>
        <input type="text" name="name" value="<?php echo e($user->name); ?>">
    </p>


    <p>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="<?php echo e($user->email); ?>">
    </p>   
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <p>
        <button type="submit">Submit</button>
    </p>
</form><?php /**PATH /var/www/html/laravel8/resources/views//user/user_update.blade.php ENDPATH**/ ?>