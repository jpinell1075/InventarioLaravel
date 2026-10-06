

<?php $__env->startSection('title', 'Nueva Categoría'); ?>

<?php $__env->startSection('content'); ?>

<div class="row justify-content-center">

<div class="col-md-6">

    <div class="card shadow-sm">

        <div class="card-header">
            <h4 class="mb-0">Nueva Categoría</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo e(route('categorias.store')); ?>" method="POST">

                <?php echo csrf_field(); ?>

                <div class="mb-3">

                    <label for="nombre" class="form-label">
                        Nombre de la categoría
                    </label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        value="<?php echo e(old('nombre')); ?>"
                        class="form-control <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        autofocus
                    >

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

                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        Guardar
                    </button>

                    <a href="<?php echo e(route('categorias.index')); ?>"
                    class="btn btn-secondary">
                        Cancelar
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\InventarioLaravel\resources\views/categorias/create.blade.php ENDPATH**/ ?>