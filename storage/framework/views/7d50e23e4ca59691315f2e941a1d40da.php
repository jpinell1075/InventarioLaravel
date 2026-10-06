<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title', 'InventarioLaravel'); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('categorias.index')); ?>">
                InventarioLaravel
            </a>

            <div class="navbar-nav">
                <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                    Dashboard
                </a>
                <a class="nav-link" href="<?php echo e(route('categorias.index')); ?>">
                    Categorías
                </a>
                <a class="nav-link" href="<?php echo e(route('productos.index')); ?>">
                    Productos
                </a>
            </div>
        </div>
    </nav>

    <main class="container py-4">

        <?php echo $__env->yieldContent('content'); ?>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php /**PATH C:\laragon\www\InventarioLaravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>