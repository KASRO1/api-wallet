<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Тема</th>
                <th>E-mail</th>
                <th>Сообщение</th>
                <th>Создан в</th>
                <th class="text-right"></th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $supports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td data-label="#"><?php echo e($item->id); ?></td>
                    <td data-label="Тема"><?php echo e($item->topic); ?></td>
                    <td data-label="E-mail"><?php echo e($item->email); ?></td>
                    <td data-label="Сообщение"><?php echo e($item->message); ?></td>
                    <td data-label="Создан в"><?php echo e($item->created_at); ?></td>
                    <td data-label="" class="text-right">
                        <div class="btn-group">
                            <?php echo $__env->make('admin.components._actions', ['data' => $item, 'options' => ['show' => false, 'edit' => false]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="text-center">Сообщение не найдено</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

        <div>
            <?php echo e($supports->render()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/admin/supports/index.blade.php ENDPATH**/ ?>