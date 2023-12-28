<?php $__env->startSection('title', __("Wallets")); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="wallets">
    <div class="container">
        <div class="row section__heading">
            <div class="col-md-7 col-12">
                <p class="py-4"><?php echo e(__("My wallets")); ?></p>
            </div>
            <div class="col-md-5 col-12">
                <p class="py-4"><?php echo e(__("Balance")); ?>: <span class="wallet-item__amount"><?php echo e(number_format($total_balance / 100000, 2)); ?> USD</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-4">
                <?php $__currentLoopData = \App\Outcome::getSystems(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $systemKey => $systemName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form method="POST" action="<?php echo e(route('cabinet.requisites.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="wallet-item">
                        <div class="row">
                            <div class="col-md-7 col-12">
                                <div class="wallet-item__currency">
                                    <p><?php echo e(__("Currency")); ?>:</p>
                                    <div class="wallet-item__info-box wallet-item__info-box-currency">
                                        <?php if($systemName['short'] == 'RUB'): ?>
                                        <img src="<?php echo e(asset('assets/images/currency/'.$systemName['name'].'.svg')); ?>" onerror="this.src='<?php echo e(asset('assets/images/currency/'.$systemName['name'].'.png')); ?>'" alt="<?php echo e($systemName['short']); ?>" class="wallet-item__info-box-ico">
                                        <?php else: ?>
                                        <img src="<?php echo e(asset('assets/images/currency/'.$systemName['short'].'.svg')); ?>" onerror="this.src='<?php echo e(asset('assets/images/currency/'.$systemName['short'].'.png')); ?>'" alt="<?php echo e($systemName['short']); ?>" class="wallet-item__info-box-ico">
                                        <?php endif; ?>
                                        <span><?php echo e($systemName['name']); ?></span>
                                    </div>
                                    <p><?php echo e(__("Wallet address")); ?>:</p>
                                    
                                    <input type="text" name="<?php echo e($systemKey); ?>_wallet" class="wallet-item__info-box w-100" id="input_pibze21v" value="<?php echo e($requisites[$systemKey .'_wallet'] ?? null); ?>">
                                    
                                </div>
                            </div>
                            <div class="col-md-5 col-12">
                                <p><?php echo e(__("Balance")); ?>:</p>
                                <p class="wallet-item__amount"><?php echo e($account->where('currency',$systemName['short'])->isEmpty() ? 0 : number_format($account->where('currency',$systemName['short'])->first()->balance / 100000, 2)); ?> <?php echo e($systemName['short']); ?></p>
                                <div class="wallet-item__btn-group d-flex">
                                    <button class="wallet-item__btn"><?php echo e(__("Save")); ?></button>
                                    <?php if($systemName['short'] != 'RUB'): ?>
                                    <a href="<?php echo e(route('cabinet.income',$systemName['short'])); ?>" class="wallet-item__btn wallet-item__btn__add"><?php echo e(__("Add funds")); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
    </div>
    </div>
    </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/cabinet/new/wallets.blade.php ENDPATH**/ ?>