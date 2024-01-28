<!-- resources/views/staffs/edit.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Edit Staff</h2>
        <form action="<?php echo e(route('staffs.update', $staff->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($staff->name); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($staff->email); ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e($staff->phone); ?>">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="4"><?php echo e($staff->address); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Staff</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Documents\taskmanager\resources\views/staffs/edit.blade.php ENDPATH**/ ?>