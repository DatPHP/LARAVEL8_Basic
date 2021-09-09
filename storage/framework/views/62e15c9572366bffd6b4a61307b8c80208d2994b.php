<html>  
   <head>
      <title>List Truyện</title>
   </head>  
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Tên Truyện</td>
            <td>Tác Giả</td>
            <td>Số Chương</td>
         </tr>
         <?php $__currentLoopData = $list_truyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $truyen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
            <td><?php echo e($truyen->id); ?></td>
            <td><?php echo e($truyen->tentruyen); ?></td>
            <td><?php echo e($truyen->tacgia); ?></td>
            <td><?php echo e($truyen->chap); ?></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
   </body>
</html><?php /**PATH /var/www/html/laravel8/resources/views/truyen/list_truyen.blade.php ENDPATH**/ ?>