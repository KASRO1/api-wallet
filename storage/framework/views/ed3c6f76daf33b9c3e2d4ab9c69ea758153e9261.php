<div class="container-fluid">

    <?php if(session('error')): ?>
        <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
    <?php endif; ?>
        <div class="col-12 col-md-6 py-4 my-2">
            <form action="">
                <input wire:model.debounce ="search" type= "text" class="form-control col-lg-8" name="userSearch" placeholder="Поиск по имени">
            </form>
        </div>
        <div wire:loading.flex class=" justify-content-center">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    <table class="table" wire:loading.remove>
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Дата регистрации</th>
            <th>
            </th>
        </tr>
        </thead>
        <tbody>
        <div>
            <input wire:model.debounce ="search" type= "text" class="form-control col-lg-8" name="userSearch">
        </div>
        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td data-label="#"><?php echo e($user->id); ?></td>
                <td data-label="Имя"><?php echo e($user->name); ?></td>
                <td data-label="Email"><?php echo e($user->email); ?></td>
                <td data-label="Дата регистрации"><?php echo e($user->created_at); ?></td>
                <td data-label="" class="text-right">
                    <div class="btn-group">
                        <?php echo $__env->make('admin.components._actions', ['data' => $user, 'options' => ['show' => false], 'route' => 'admin.users'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="5" class="text-center">Пользователей нет</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/livewire/user-search.blade.php ENDPATH**/ ?>