

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Task List</h2>
        <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-success mb-3">Create Task</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Project</th>
                    <th>Staff</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($task->id); ?></td>
                        <td><?php echo e($task->name); ?></td>
                        <td><?php echo e($task->description ?: 'Not available'); ?></td>
                        <td>
                            <?php if($task->project): ?>
                                <?php echo e($task->project->name); ?>

                            <?php else: ?>
                                Not assigned
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($task->staff): ?>
                                <?php echo e($task->staff->name); ?>

                            <?php else: ?>
                                Not assigned
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo e(route('tasks.edit', $task->id)); ?>" class="btn btn-primary">Edit</a>
                            <form action="<?php echo e(route('tasks.destroy', $task->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this task?')">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Documents\taskmanager\resources\views/tasks/index.blade.php ENDPATH**/ ?>