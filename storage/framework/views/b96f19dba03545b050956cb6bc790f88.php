

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Staff List</h2>
        <a href="<?php echo e(route('staffs.create')); ?>" class="btn btn-success mb-3">Create Staff</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($staff->id); ?></td>
                        <td><?php echo e($staff->name); ?></td>
                        <td><?php echo e($staff->email); ?></td>
                        <td><?php echo e($staff->phone ?: 'Not available'); ?></td>
                        <td><?php echo e($staff->address ?: 'Not available'); ?></td>
                        <td>
                            <a href="<?php echo e(route('staffs.show', $staff->id)); ?>" class="btn btn-info">View</a>
                            <a href="<?php echo e(route('staffs.edit', $staff->id)); ?>" class="btn btn-primary">Edit</a>
                            <form action="<?php echo e(route('staffs.destroy', $staff->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this staff member?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Documents\taskmanager\resources\views/staffs/index.blade.php ENDPATH**/ ?>