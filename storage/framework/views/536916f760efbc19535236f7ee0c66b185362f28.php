<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Код</th>
                <th>Процент</th>
                <th>Использован</th>
                <th class="text-right">
                    <a href="<?php echo e(route('admin.promocodes.create')); ?>" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $promocodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promocode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td data-label="#"><?php echo e($promocode->id); ?></td>
                    <td data-label="Название"><?php echo e($promocode->name); ?></td>
                    <td data-label="Код"><?php echo e($promocode->code); ?></td>
                    <td data-label="Процент"><?php echo e($promocode->value); ?>%</td>
                    <td data-label="Использован"><?php echo e($promocode->users()->count()); ?> раз</td>
                    <td class="text-right">
                        <div class="btn-group">
                            <?php echo $__env->make('admin.components._actions', ['data' => $promocode, 'options' => ['show' => false]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="text-center">Промокодов не найдено</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

        <div>
            <?php echo e($promocodes->render()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/admin/promocodes/index.blade.php ENDPATH**/ ?>