

<?php $__env->startSection('title', 'Categorías'); ?>

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h1 class="mb-0">Listado de Categorías</h1>

    <a href="<?php echo e(route('categorias.create')); ?>" class="btn btn-primary">
        Nueva categoría
    </a>

</div>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

<?php if($categorias->isEmpty()): ?>

    <div class="alert alert-info">
        No existen categorías registradas.
    </div>

<?php else: ?>

    <div class="table-responsive">

        <table class="table table-striped table-hover align-middle">

            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Creada</th>
                    <th>Actualizada</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>

            <tbody>

                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($categoria->id); ?></td>

                        <td><?php echo e($categoria->nombre); ?></td>

                        <td><?php echo e($categoria->created_at); ?></td>

                        <td><?php echo e($categoria->updated_at); ?></td>

                        <td class="text-center">

                            <a href="<?php echo e(route('categorias.edit', $categoria)); ?>"
                                class="btn btn-sm btn-warning">
                                Editar
                            </a>

                            <form action="<?php echo e(route('categorias.destroy', $categoria)); ?>"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('¿Está seguro de eliminar esta categoría?');">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button type="submit"
                                        class="btn btn-sm btn-danger">
                                    Eliminar
                                </button>

                            </form>

                        </td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

        </table>

    </div>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\InventarioLaravel\resources\views/categorias/index.blade.php ENDPATH**/ ?>