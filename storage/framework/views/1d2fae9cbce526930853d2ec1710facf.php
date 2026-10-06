

<?php $__env->startSection('title', 'Productos'); ?>

<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1 class="mb-0">Listado de Productos</h1>

        <form action="<?php echo e(route('productos.index')); ?>" method="GET" class="mb-4">

            <div class="input-group">

                <input type="text" name="buscar" class="form-control" placeholder="Buscar por código o nombre..."
                    value="<?php echo e($buscar); ?>">

                <?php if(request('stock')): ?>
                    <input type="hidden" name="stock" value="<?php echo e(request('stock')); ?>">
                <?php endif; ?>

                <button type="submit" class="btn btn-primary">
                    Buscar
                </button>

                <?php if($buscar): ?>
                    <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">
                        Limpiar
                    </a>
                <?php endif; ?>

            </div>

        </form>

        <a href="<?php echo e(route('productos.create')); ?>" class="btn btn-primary">
            Nuevo producto
        </a>

    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <?php if(request('stock') === 'bajo'): ?>
        <div class="alert alert-warning d-flex justify-content-between align-items-center">

            <div>
                <strong>Filtro activo:</strong>
                Stock bajo
                <span class="ms-2">
                    Productos con stock entre 1 y 5
                </span>
            </div>

            <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-sm btn-outline-dark">
                Quitar filtro
            </a>

        </div>
    <?php elseif(request('stock') === 'agotado'): ?>
        <div class="alert alert-danger d-flex justify-content-between align-items-center">

            <div>
                <strong>Filtro activo:</strong>
                Agotados
                <span class="ms-2">
                    Productos sin existencias
                </span>
            </div>

            <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-sm btn-outline-dark">
                Quitar filtro
            </a>

        </div>
    <?php elseif(request('stock') === 'disponibles'): ?>
        <div class="alert alert-success d-flex justify-content-between align-items-center">

            <div>
                <strong>Filtro activo:</strong>
                Disponibles

                <span class="ms-2">
                    Productos con stock mayor a 5
                </span>
            </div>

            <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-sm btn-outline-dark">
                Quitar filtro
            </a>

        </div>
    <?php endif; ?>


    <?php if($productos->isEmpty()): ?>

        <?php if($buscar && request('stock') === 'bajo'): ?>
            <div class="alert alert-warning">
                No se encontraron productos con <strong>stock bajo</strong>
                que coincidan con:
                <strong><?php echo e($buscar); ?></strong>
            </div>
        <?php elseif($buscar && request('stock') === 'agotado'): ?>
            <div class="alert alert-danger">
                No se encontraron productos <strong>agotados</strong>
                que coincidan con:
                <strong><?php echo e($buscar); ?></strong>
            </div>
        <?php elseif($buscar): ?>
            <div class="alert alert-warning">
                No se encontraron productos para:
                <strong><?php echo e($buscar); ?></strong>
            </div>
        <?php elseif(request('stock') === 'bajo'): ?>
            <div class="alert alert-warning">
                No existen productos con <strong>stock bajo</strong>.
            </div>
        <?php elseif(request('stock') === 'agotado'): ?>
            <div class="alert alert-danger">
                No existen productos <strong>agotados</strong>.
            </div>
        <?php else: ?>
            <div class="alert alert-info">
                No existen productos registrados.
            </div>
        <?php endif; ?>
    <?php else: ?>
        <div class="table-responsive">

            <table class="table table-striped table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th class="text-center">Acciones</th>
                    </tr>

                </thead>

                <tbody>

                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                            <td><?php echo e($producto->id); ?></td>

                            <td><?php echo e($producto->codigo); ?></td>

                            <td><?php echo e($producto->nombre); ?></td>

                            <td><?php echo e($producto->categoria->nombre); ?></td>

                            <td>
                                C$ <?php echo e(number_format($producto->precio, 2)); ?>

                            </td>

                            <td>
                                <?php echo e($producto->stock); ?>


                                <?php
                                    $estado = $producto->estado_stock;
                                    $codigoEstado = $producto->estado_stock_codigo;
                                ?>

                                <!-- <div>
                                                Stock: <?php echo e($producto->stock); ?> |
                                                Código: <?php echo e($codigoEstado); ?> |
                                                Estado: <?php echo e($estado); ?>

                                            </div> -->

                                <?php if($codigoEstado === 'agotado'): ?>
                                    <span class="badge bg-danger">
                                        <?php echo e($estado); ?>

                                    </span>
                                <?php elseif($codigoEstado === 'bajo'): ?>
                                    <span class="badge bg-warning text-dark">
                                        <?php echo e($estado); ?>

                                    </span>
                                <?php else: ?>
                                    <span class="badge bg-success">
                                        <?php echo e($estado); ?>

                                    </span>
                                <?php endif; ?>
                            </td>

                            <td class="text-center">

                                <a href="<?php echo e(route('productos.show', $producto)); ?>"
                                    class="btn btn-sm btn-outline-secondary">
                                    Ver
                                </a>

                                <a href="<?php echo e(route('productos.edit', $producto)); ?>" class="btn btn-sm btn-warning">
                                    Editar
                                </a>

                                <form action="<?php echo e(route('productos.destroy', $producto)); ?>" method="POST" class="d-inline"
                                    onsubmit="return confirm('¿Está seguro de eliminar este producto?');">

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>

                                </form>

                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>

        </div>

        <div class="mt-3">

            <?php echo e($productos->links()); ?>


        </div>

    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\InventarioLaravel\resources\views/productos/index.blade.php ENDPATH**/ ?>