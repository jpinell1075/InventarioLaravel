

<?php $__env->startSection('title', 'Detalle del producto'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h1 class="fw-bold mb-1">
                    Detalle del producto
                </h1>

                <p class="text-muted mb-0">
                    Información del producto seleccionado
                </p>
            </div>

            <div>

                <a href="<?php echo e(url()->previous()); ?>" 
                    class="btn btn-secondary">
                    ← Volver
                </a>

                <a
                    href="<?php echo e(route('movimientos.create', $producto)); ?>"
                    class="btn btn-primary"
                >
                    Registrar entrada
                </a>

                <a href="<?php echo e(route('productos.edit', $producto)); ?>" 
                    class="btn btn-primary">
                    Editar
                </a>

            </div>

        </div>


        <div class="card border-0 shadow-sm">

            <div class="card-header bg-white">

                <h5 class="fw-bold mb-0">
                    <?php echo e($producto->nombre); ?>

                </h5>

            </div>


            <div class="card-body">

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <strong>Código</strong>

                        <div class="text-muted">
                            <?php echo e($producto->codigo); ?>

                        </div>

                    </div>


                    <div class="col-md-6 mb-3">

                        <strong>Categoría</strong>

                        <div class="text-muted">
                            <?php echo e($producto->categoria->nombre); ?>

                        </div>

                    </div>


                    <div class="col-md-6 mb-3">

                        <strong>Precio</strong>

                        <div class="text-muted">
                            C$ <?php echo e(number_format($producto->precio, 2)); ?>

                        </div>

                    </div>


                    <div class="col-md-6 mb-3">

                        <strong>Stock</strong>

                        <div class="text-muted">
                            <?php echo e($producto->stock); ?>

                        </div>

                    </div>


                    <div class="col-12 mb-3">

                        <strong>Estado del stock</strong>

                        <div class="mt-1">

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

                        </div>

                    </div>


                    <div class="col-12">

                        <strong>Descripción</strong>

                        <div class="text-muted mt-1">

                            <?php echo e($producto->descripcion ?: 'Sin descripción'); ?>


                        </div>

                    </div>


                    <div class="col-md-6 mt-3">

                        <strong>Creado</strong>

                        <div class="text-muted">
                            <?php echo e($producto->created_at->format('d/m/Y H:i')); ?>

                        </div>

                    </div>


                    <div class="col-md-6 mt-3">

                        <strong>Última actualización</strong>

                        <div class="text-muted">
                            <?php echo e($producto->updated_at->format('d/m/Y H:i')); ?>

                        </div>

                    </div>



                </div>

            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\InventarioLaravel\resources\views/productos/show.blade.php ENDPATH**/ ?>