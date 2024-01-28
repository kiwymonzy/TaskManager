<!-- resources/views/projects/index.blade.php -->



<?php $__env->startSection('content'); ?>
    <h1>Projects</h1>

    <a href="<?php echo e(route('projects.create')); ?>" class="btn btn-success">Create Project</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success mt-3">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($project->id); ?></td>
                    <td><?php echo e($project->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('projects.show', $project->id)); ?>" class="btn btn-info">Show</a>
                        <a href="<?php echo e(route('projects.edit', $project->id)); ?>" class="btn btn-primary">Edit</a>
                        <form action="<?php echo e(route('projects.destroy', $project->id)); ?>" method="POST" style="display:inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Documents\taskmanager\resources\views/projects/index.blade.php ENDPATH**/ ?>