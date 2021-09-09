<table border="1">

<a href="/user/news/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create</a>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>           
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($row->id); ?></td>
            <td><?php echo e($row->name); ?></td>
            <td><?php echo e($row->email); ?></td>
            <td><a href="/user/view/edit/<?php echo e($row->id); ?>">Edit</a> | 
            
            
                <form method="POST" action="/user/view/delete/<?php echo e($row->id); ?>" onsubmit="return ConfirmDelete( this )">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit">Delete</button>
                </form>

        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /var/www/html/laravel8/resources/views/user/view.blade.php ENDPATH**/ ?>