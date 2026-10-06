

<?php $__env->startSection('title', 'Registrar entrada de inventario'); ?>

<?php $__env->startSection('content'); ?>

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card shadow-sm">

            <div class="card-header">
                <h5 class="mb-0">
                    Registrar entrada de inventario
                </h5>
            </div>

            <div class="card-body">

                
                <div class="alert alert-light border">

                    <div class="row">

                        <div class="col-md-6">
                            <strong>Producto:</strong><br>
                            <?php echo e($producto->nombre); ?>

                        </div>

                        <div class="col-md-3">
                            <strong>Código:</strong><br>
                            <?php echo e($producto->codigo); ?>

                        </div>

                        <div class="col-md-3">
                            <strong>Stock actual:</strong><br>
                            <?php echo e($producto->stock); ?>

                        </div>

                    </div>

                    <hr>

                    <div>
                        <strong>Costo promedio actual:</strong>
                        C$ <?php echo e(number_format($producto->costo_promedio, 4)); ?>

                    </div>

                </div>

                <form
                    method="POST"
                    action="<?php echo e(route('movimientos.store', $producto)); ?>"
                >

                    <?php echo csrf_field(); ?>

                    
                    <div class="mb-3">

                        <label for="cantidad" class="form-label">
                            Cantidad a ingresar
                        </label>

                        <input
                            type="number"
                            id="cantidad"
                            name="cantidad"
                            value="<?php echo e(old('cantidad')); ?>"
                            step="0.001"
                            min="0.001"
                            class="form-control <?php $__errorArgs = ['cantidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        >

                        <?php $__errorArgs = ['cantidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>

                    
                    <div class="mb-3">

                        <label for="costo_unitario" class="form-label">
                            Costo unitario
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                C$
                            </span>

                            <input
                                type="number"
                                id="costo_unitario"
                                name="costo_unitario"
                                value="<?php echo e(old('costo_unitario')); ?>"
                                step="0.0001"
                                min="0"
                                class="form-control <?php $__errorArgs = ['costo_unitario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            >

                            <?php $__errorArgs = ['costo_unitario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                    </div>

                    
                    <div class="mb-3">

                        <label for="concepto" class="form-label">
                            Concepto
                        </label>

                        <input
                            type="text"
                            id="concepto"
                            name="concepto"
                            value="<?php echo e(old('concepto')); ?>"
                            maxlength="255"
                            class="form-control <?php $__errorArgs = ['concepto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            placeholder="Ej.: Compra de mercadería"
                        >

                        <?php $__errorArgs = ['concepto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>

                    
                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label for="referencia_tipo" class="form-label">
                                Tipo de referencia
                            </label>

                            <input
                                type="text"
                                id="referencia_tipo"
                                name="referencia_tipo"
                                value="<?php echo e(old('referencia_tipo')); ?>"
                                maxlength="50"
                                class="form-control <?php $__errorArgs = ['referencia_tipo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Ej.: compra"
                            >

                            <?php $__errorArgs = ['referencia_tipo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label for="referencia_id" class="form-label">
                                Número de referencia
                            </label>

                            <input
                                type="number"
                                id="referencia_id"
                                name="referencia_id"
                                value="<?php echo e(old('referencia_id')); ?>"
                                min="1"
                                class="form-control <?php $__errorArgs = ['referencia_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Ej.: 125"
                            >

                            <?php $__errorArgs = ['referencia_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                    </div>

                    
                    <div class="d-flex justify-content-between mt-4">

                        <a
                            href="<?php echo e(route('productos.show', $producto)); ?>"
                            class="btn btn-secondary"
                        >
                            Cancelar
                        </a>

                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            Registrar entrada
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\InventarioLaravel\resources\views/movimientos/create.blade.php ENDPATH**/ ?>