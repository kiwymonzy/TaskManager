<!-- resources/views/projects/show.blade.php -->



<?php $__env->startSection('title', 'Project Details'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Project Details</h1>

    <p><strong>ID:</strong> <?php echo e($project->id); ?></p>
    <p><strong>Name:</strong> <?php echo e($project->name); ?></p>

    <a href="<?php echo e(route('projects.index')); ?>" class="btn btn-primary">Back to Projects</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Documents\taskmanager\resources\views/projects/show.blade.php ENDPATH**/ ?>