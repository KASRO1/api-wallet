<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-4 py-3">
            <form method="post" action="<?php echo e(route('admin.update-apyrate')); ?>" class="form-inline">
                <?php echo csrf_field(); ?>
                <div class="form-group" style="display: flex; column-gap: 10px; align-items: center">
                    <label for="apy_rate">APY курс (APY => USDT) : </label>
                    <div style="display: flex; column-gap: 3px; align-items: center">
                        <input type="text" name="apy_rate" class="form-control" value="<?php echo e($apy_rate); ?>" placeholder="">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4 py-3">
            <form method="post" action="<?php echo e(route('admin.update-preferencerate')); ?>" class="form-inline">
                <?php echo csrf_field(); ?>
                <div class="form-group" style="display: flex; column-gap: 10px; align-items: center">
                    <label class="control-label">Токен предпочтения : </label>
                    <div style="display: flex; column-gap: 3px; align-items: center">
                        <select class="form-control <?php echo e($errors->has('currency') ? 'is-invalid' : ''); ?>" name="preference_currency">
                            <option value="NONE">NONE</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_TON); ?>" <?php if($preference_currency == \App\Account::CURRENCY_TON): ?> selected <?php endif; ?>>TON</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DAI); ?>" <?php if($preference_currency == \App\Account::CURRENCY_DAI): ?> selected <?php endif; ?>>DAI</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_TRX); ?>" <?php if($preference_currency == \App\Account::CURRENCY_TRX): ?> selected <?php endif; ?>>TRX</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_XRP); ?>" <?php if($preference_currency == \App\Account::CURRENCY_XRP): ?> selected <?php endif; ?>>XRP</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BNB); ?>" <?php if($preference_currency == \App\Account::CURRENCY_BNB): ?> selected <?php endif; ?>>BNB</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DOGE); ?>" <?php if($preference_currency == \App\Account::CURRENCY_DOGE): ?> selected <?php endif; ?>>DOGE</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_LTC); ?>" <?php if($preference_currency == \App\Account::CURRENCY_LTC): ?> selected <?php endif; ?>>LTC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BTC); ?>" <?php if($preference_currency == \App\Account::CURRENCY_BTC): ?> selected <?php endif; ?>>BTC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BCH); ?>" <?php if($preference_currency == \App\Account::CURRENCY_BCH): ?> selected <?php endif; ?>>BCH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_ETH); ?>" <?php if($preference_currency == \App\Account::CURRENCY_ETH): ?> selected <?php endif; ?>>ETH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DASH); ?>" <?php if($preference_currency == \App\Account::CURRENCY_DASH): ?> selected <?php endif; ?>>DASH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_ATOM); ?>" <?php if($preference_currency == \App\Account::CURRENCY_ATOM): ?> selected <?php endif; ?>>ATOM</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BCH); ?>" <?php if($preference_currency == \App\Account::CURRENCY_BCH): ?> selected <?php endif; ?>>BCH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DOT); ?>" <?php if($preference_currency == \App\Account::CURRENCY_DOT): ?> selected <?php endif; ?>>DOT</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_UMEE); ?>" <?php if($preference_currency == \App\Account::CURRENCY_UMEE): ?> selected <?php endif; ?>>UMEE</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_AVAX); ?>" <?php if($preference_currency == \App\Account::CURRENCY_AVAX): ?> selected <?php endif; ?>>AVAX</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_KAVA); ?>" <?php if($preference_currency == \App\Account::CURRENCY_KAVA): ?> selected <?php endif; ?>>KAVA</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_UNI); ?>" <?php if($preference_currency == \App\Account::CURRENCY_UNI): ?> selected <?php endif; ?>>UNI</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_LINK); ?>" <?php if($preference_currency == \App\Account::CURRENCY_LINK): ?> selected <?php endif; ?>>LINK</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_GRT); ?>" <?php if($preference_currency == \App\Account::CURRENCY_GRT): ?> selected <?php endif; ?>>GRT</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DYDX); ?>" <?php if($preference_currency == \App\Account::CURRENCY_DYDX): ?> selected <?php endif; ?>>DYDX</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DODO); ?>" <?php if($preference_currency == \App\Account::CURRENCY_DODO): ?> selected <?php endif; ?>>DODO</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_COMP); ?>" <?php if($preference_currency == \App\Account::CURRENCY_COMP): ?> selected <?php endif; ?>>COMP</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DAO); ?>" <?php if($preference_currency == \App\Account::CURRENCY_DAO): ?> selected <?php endif; ?>>DAO</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_AXL); ?>" <?php if($preference_currency == \App\Account::CURRENCY_AXL): ?> selected <?php endif; ?>>AXL</option>
                        </select>
                        <input type="text" name="preference_currency_rate" class="form-control" value="<?php echo e($preference_currency_rate); ?>" placeholder="Ставка">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12">
        <table class="table table-hovered">
            <thead>
                <tr>
                    <th><b>Пользователь</b> <span class="badge badge-info">Ожидают верификацию</span></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $forVerifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td data-label="Ожидают верификацию">
                        <a href="<?php echo e(route('admin.users.edit', $user)); ?>"><?php echo e($user->name); ?></a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="col-12">
        <table class="table table-hovered">
            <thead>
                <tr>
                    <th><b>Пользователь</b> <span class="badge badge-info">Ожидание вывод средств</span></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $forWithdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td data-label="Ожидают верификацию">
                        <a href="<?php echo e(route('admin.users.edit', $item->user)); ?>"><?php echo e($item->user->name); ?></a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>


    <div class="col-12 mb-4">
        <table class="table table-hovered">
            <thead>
                <tr>
                    <th>Пакет</th>
                    <th>Пользователь</th>
                    <th>Сумма</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    
                    <td data-label="Код"><?php echo e($dep->name); ?></td>
                    <td data-label="Пользователь">
                        <a href="<?php echo e(route('admin.users.edit', $dep->user)); ?>"><?php echo e($dep->user->name); ?></a>
                    </td>
                    <td data-label="Сумма">
                        <?php echo e($dep->amount / 100000); ?>

                        <?php echo e($dep->currency); ?>

                    </td>
                    <td data-label="Статус">
                        <?php if($dep->status == \App\Deposit::STATUS_NOT_PAYED): ?>
                        В ожидании оплаты
                        <?php elseif($dep->status == \App\Deposit::STATUS_PAYED): ?>
                        Оплачено
                        <?php elseif($dep->status == \App\Deposit::STATUS_CANCELED): ?>
                        Отменено
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="col-12">
        <table class="table table-hovered">
            <thead>
                <tr>
                    <th>Код</th>
                    <th>Пользователь</th>
                    <th>Сумма</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td data-label="Код"><?php echo e($income->id); ?></td>
                    <td data-label="Пользователь">
                        <a href="<?php echo e(route('admin.users.edit', $income->user)); ?>"><?php echo e($income->user->name); ?></a>
                    </td>
                    <td data-label="Сумма">
                        <?php echo e($income->amount / 100000); ?>

                        <?php echo e($income->currency); ?>

                    </td>
                    <td data-label="Статус">
                        <?php if($income->status == \App\Income::STATUS_WAITING): ?>
                        В ожидании
                        <?php elseif($income->status == \App\Income::STATUS_SUCCESS): ?>
                        Обработано
                        <?php elseif($income->status == \App\Income::STATUS_ERROR): ?>
                        Ошибка
                        <?php elseif($income->status == \App\Income::STATUS_PAID_BY_USER): ?>
                        Оплачено
                        <?php elseif($income->status == \App\Income::STATUS_CANCELED): ?>
                        Отменено
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="col-12">
        <hr>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Значение</th>
                <th>Пользователь</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $tracking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($item->datetime); ?></td>
                <td><?php echo e($item->value); ?></td>
                <td><?php if($item->user_id): ?> <a href="<?php echo e(route('admin.users.edit', $item->user_id)); ?>">#<?php echo e($item->user_id); ?></a> <?php else: ?> - <?php endif; ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="4" class="text-center">Записей нет</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>