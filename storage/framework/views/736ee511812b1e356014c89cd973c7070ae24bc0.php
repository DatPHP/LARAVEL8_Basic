<html>  
   <head>
      <title>View User Records</title>
   </head>  
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>           
            <td>Email</td>
         </tr>
         <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
   </body>
</html><?php /**PATH /var/www/html/laravel8/resources/views/user/getlist.blade.php ENDPATH**/ ?>