

<?php $__env->startSection('title', 'Editar Producto'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-sm">

                <div class="card-header">
                    <h4 class="mb-0">Editar Producto</h4>
                </div>

                <div class="card-body">

                    <form action="<?php echo e(route('productos.update', $producto)); ?>" method="POST">

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label for="codigo" class="form-label">
                                    Código
                                </label>

                                <input type="text" id="codigo" name="codigo"
                                    value="<?php echo e(old('codigo', $producto->codigo)); ?>"
                                    class="form-control <?php $__errorArgs = ['codigo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autofocus>

                                <?php $__errorArgs = ['codigo'];
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

                                <label for="nombre" class="form-label">
                                    Nombre del producto
                                </label>

                                <input type="text" id="nombre" name="nombre"
                                    value="<?php echo e(old('nombre', $producto->nombre)); ?>"
                                    class="form-control <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                <?php $__errorArgs = ['nombre'];
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

                            <label for="descripcion" class="form-label">
                                Descripción
                            </label>

                            <textarea id="descripcion" name="descripcion" rows="3"
                                class="form-control <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('descripcion', $producto->descripcion)); ?></textarea>

                            <?php $__errorArgs = ['descripcion'];
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

                            
                            <div class="col-md-4 mb-3">

                                <label for="precio" class="form-label">
                                    Precio de venta
                                </label>

                                <input type="number" id="precio" name="precio"
                                    value="<?php echo e(old('precio', $producto->precio)); ?>" step="0.01" min="0"
                                    class="form-control <?php $__errorArgs = ['precio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                <?php $__errorArgs = ['precio'];
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


                            
                            <div class="col-md-4 mb-3">

                                <label for="stock" class="form-label">
                                    Stock actual
                                </label>

                                <input type="text" id="stock" value="<?php echo e($producto->stock); ?>" class="form-control"
                                    readonly>

                                <div class="form-text">
                                    El stock se modifica mediante movimientos de Kardex.
                                </div>

                            </div>


                            
                            <div class="col-md-4 mb-3">

                                <label for="costo_promedio" class="form-label">
                                    Costo promedio
                                </label>

                                <input type="text" id="costo_promedio"
                                    value="<?php echo e(number_format($producto->costo_promedio, 4)); ?>" class="form-control"
                                    readonly>

                                <div class="form-text">
                                    Calculado automáticamente por el Kardex.
                                </div>

                            </div>

                        </div>


                        
                        <div class="row">

                            <div class="col-md-6 mb-3">

                                <label for="categoria_id" class="form-label">
                                    Categoría
                                </label>

                                <select id="categoria_id" name="categoria_id"
                                    class="form-select <?php $__errorArgs = ['categoria_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                    <option value="">
                                        Seleccione una categoría
                                    </option>

                                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($categoria->id); ?>"
                                            <?php echo e(old('categoria_id', $producto->categoria_id) == $categoria->id ? 'selected' : ''); ?>>
                                            <?php echo e($categoria->nombre); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>

                                <?php $__errorArgs = ['categoria_id'];
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


                        <div class="d-flex gap-2">

                            <button type="submit" class="btn btn-primary">
                                Actualizar
                            </button>

                            <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">
                                Cancelar
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\InventarioLaravel\resources\views/productos/edit.blade.php ENDPATH**/ ?>