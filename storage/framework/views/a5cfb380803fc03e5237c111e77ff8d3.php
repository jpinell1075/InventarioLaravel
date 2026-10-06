

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="fw-bold mb-1">Dashboard</h1>
                <p class="text-muted mb-0">
                    Resumen general del inventario
                </p>
            </div>
        </div>

        <div class="row g-4">

            
            <div class="col-md-6 col-xl">

                <a href="<?php echo e(route('productos.index')); ?>" class="text-decoration-none text-dark">

                    <div class="card dashboard-card shadow-sm h-100">

                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <p class="text-muted mb-1">
                                        Total productos
                                    </p>

                                    <h2 class="fw-bold mb-0">
                                        <?php echo e($totalProductos); ?>

                                    </h2>

                                    <small class="text-primary">
                                        Ver productos →
                                    </small>
                                </div>

                                <div class="bg-primary bg-opacity-10 rounded-circle p-3">
                                    <span class="fs-3">📦</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </a>

            </div>

            
            <div class="col-md-6 col-xl">

                <a href="<?php echo e(route('productos.index', ['stock' => 'disponibles'])); ?>" class="text-decoration-none text-dark">

                    <div class="card dashboard-card shadow-sm h-100">

                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">

                                <div>

                                    <p class="text-muted mb-1">
                                        Disponibles
                                    </p>

                                    <h2 class="fw-bold mb-0 text-success">
                                        <?php echo e($productosDisponibles); ?>

                                    </h2>

                                    <small class="text-primary">
                                        Ver productos →
                                    </small>

                                </div>

                                <div class="bg-success bg-opacity-10 rounded-circle p-3">

                                    <span class="fs-3">
                                        ✓
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </a>

            </div>

            
            <div class="col-md-6 col-xl">

                <a href="<?php echo e(route('productos.index', ['stock' => 'bajo'])); ?>" class="text-decoration-none text-dark">

                    <div class="card dashboard-card shadow-sm h-100">

                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <p class="text-muted mb-1">
                                        Stock bajo
                                    </p>

                                    <h2 class="fw-bold mb-0 text-warning">
                                        <?php echo e($productosStockBajo); ?>

                                    </h2>

                                    <small class="text-primary">
                                        Ver productos →
                                    </small>
                                </div>

                                <div class="bg-warning bg-opacity-10 rounded-circle p-3">
                                    <span class="fs-3">⚠</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </a>

            </div>

            
            <div class="col-md-6 col-xl">

                <a href="<?php echo e(route('productos.index', ['stock' => 'agotado'])); ?>" class="text-decoration-none text-dark">

                    <div class="card dashboard-card shadow-sm h-100">

                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <p class="text-muted mb-1">
                                        Agotados
                                    </p>

                                    <h2 class="fw-bold mb-0 text-danger">
                                        <?php echo e($productosAgotados); ?>

                                    </h2>

                                    <small class="text-primary">
                                        Ver productos →
                                    </small>
                                </div>

                                <div class="bg-danger bg-opacity-10 rounded-circle p-3">
                                    <span class="fs-3">!</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </a>

            </div>

            
            <div class="col-md-6 col-xl">

                <a href="<?php echo e(route('categorias.index')); ?>" class="text-decoration-none text-dark">

                    <div class="card dashboard-card shadow-sm h-100">

                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <p class="text-muted mb-1">
                                        Categorías
                                    </p>

                                    <h2 class="fw-bold mb-0 text-primary">
                                        <?php echo e($totalCategorias); ?>

                                    </h2>

                                    <small class="text-primary">
                                        Ver categorías →
                                    </small>
                                </div>

                                <div class="bg-secondary bg-opacity-10 rounded-circle p-3">
                                    <span class="fs-3">📁</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </a>

            </div>

        </div>

        
        <div class="row mt-5">

            <div class="col-12">

                <div class="card border-0 shadow-sm">

                    <div class="card-header bg-white border-0 py-3">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>
                                <h5 class="fw-bold mb-1">
                                    Alertas de inventario
                                </h5>

                                <p class="text-muted mb-0">
                                    Productos con stock bajo o agotado
                                </p>
                            </div>

                            <span class="badge bg-danger">
                                <?php echo e($productosAlerta->count()); ?> productos
                            </span>

                        </div>

                    </div>

                    <div class="card-body p-0">

                        <?php if($productosAlerta->count() > 0): ?>

                            <div class="table-responsive">

                                <table class="table table-hover align-middle mb-0">

                                    <thead class="table-light">

                                        <tr>
                                            <th class="ps-4">Código</th>
                                            <th>Producto</th>
                                            <th>Categoría</th>
                                            <th class="text-center">Stock</th>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center">Acción</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php $__currentLoopData = $productosAlerta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>

                                                <td class="ps-4">
                                                    <?php echo e($producto->codigo); ?>

                                                </td>

                                                <td class="fw-semibold">

                                                    <a href="<?php echo e(route('productos.show', $producto)); ?>"
                                                        class="text-decoration-none">

                                                        <?php echo e($producto->nombre); ?>


                                                    </a>

                                                </td>

                                                <td>
                                                    <?php echo e($producto->categoria->nombre); ?>

                                                </td>

                                                <td class="text-center">
                                                    <?php echo e($producto->stock); ?>

                                                </td>

                                                <td class="text-center">

                                                    <?php if($producto->estado_stock_codigo === 'agotado'): ?>
                                                        <span class="badge bg-danger">
                                                            Agotado
                                                        </span>
                                                    <?php else: ?>
                                                        <span class="badge bg-warning text-dark">
                                                            Stock bajo
                                                        </span>
                                                    <?php endif; ?>

                                                </td>

                                                <td class="text-center">

                                                    <a href="<?php echo e(route('productos.show', $producto)); ?>"
                                                        class="btn btn-sm btn-outline-secondary">
                                                        Ver
                                                    </a>

                                                    <a href="<?php echo e(route('productos.edit', $producto)); ?>"
                                                        class="btn btn-sm btn-outline-primary">
                                                        Editar
                                                    </a>

                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>

                                </table>

                            </div>
                        <?php else: ?>
                            <div class="text-center py-5">

                                <div class="fs-1 mb-3">
                                    ✓
                                </div>

                                <h5 class="fw-bold">
                                    Inventario en buen estado
                                </h5>

                                <p class="text-muted mb-0">
                                    No hay productos con stock bajo o agotado.
                                </p>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

        
        <div class="card shadow-sm mt-4">

            <div class="card-header bg-white">
                <h5 class="mb-0">
                    Últimos productos registrados
                </h5>

                <small class="text-muted">
                    Los 5 productos agregados recientemente
                </small>
            </div>

            <div class="card-body p-0">

                <?php if($ultimosProductos->isEmpty()): ?>

                    <div class="p-4 text-muted">
                        No existen productos registrados.
                    </div>
                <?php else: ?>
                    <div class="table-responsive">

                        <table class="table table-hover mb-0">

                            <thead class="table-light">
                                <tr>
                                    <th>Código</th>
                                    <th>Producto</th>
                                    <th>Categoría</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Acción</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php $__currentLoopData = $ultimosProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                        <td>
                                            <?php echo e($producto->codigo); ?>

                                        </td>

                                        <td>

                                            <a href="<?php echo e(route('productos.show', $producto)); ?>"
                                                class="text-decoration-none fw-semibold">

                                                <?php echo e($producto->nombre); ?>


                                            </a>

                                        </td>

                                        <td>
                                            <?php echo e($producto->categoria->nombre); ?>

                                        </td>

                                        <td>
                                            C$ <?php echo e(number_format($producto->precio, 2)); ?>

                                        </td>

                                        <td>
                                            <?php echo e($producto->stock); ?>

                                        </td>

                                        <td class="text-center">

                                            <?php if($producto->estado_stock_codigo === 'agotado'): ?>
                                                <span class="badge bg-danger">
                                                    Agotado
                                                </span>
                                            <?php elseif($producto->estado_stock_codigo === 'bajo'): ?>
                                                <span class="badge bg-warning text-dark">
                                                    Stock bajo
                                                </span>
                                            <?php else: ?>
                                                <span class="badge bg-success">
                                                    Disponible
                                                </span>
                                            <?php endif; ?>

                                        </td>

                                        <td class="text-center">

                                            <a href="<?php echo e(route('productos.show', $producto)); ?>"
                                                class="btn btn-sm btn-outline-primary">

                                                Ver

                                            </a>

                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>

                    </div>

                <?php endif; ?>

            </div>

            <div class="card-footer bg-white text-end">

                <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-sm btn-primary">

                    Ver todos los productos →

                </a>

            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<style>
    .dashboard-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border: 1px solid #e5e7eb !important;
    }

    .dashboard-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.12) !important;
    }
</style>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\InventarioLaravel\resources\views/dashboard.blade.php ENDPATH**/ ?>