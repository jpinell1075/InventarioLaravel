<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Laravel</title>
</head>

<body>

    <h1>Lista de productos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Código</th>
                <th>Producto</th>
                <th>Precio</th>
            </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($producto['codigo']); ?></td>
                    <td><?php echo e($producto['nombre']); ?></td>
                    <td><?php echo e($producto['precio']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</body>

</html>
<?php /**PATH C:\laragon\www\InventarioLaravel\resources\views/hola/index.blade.php ENDPATH**/ ?>