<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Task Manager'); ?></title>
    <!-- Add your stylesheets, scripts, or CDN links here -->
</head>
<body>
    <div class="container mt-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Dell\Documents\taskmanager\resources\views/layouts/app.blade.php ENDPATH**/ ?>