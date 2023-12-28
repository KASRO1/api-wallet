<?php $__env->startSection('title',__("Show requisites")); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4">
                    <?php echo e(__("Confirm")); ?> <br> <span class="c-violet"><?php echo e(__("Payment for")); ?></span>
                    <?php echo e($income->currency); ?>

                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="c-violet"><?php echo e(__("Payment system")); ?>:</p>
                <img class="currency-ico" src="<?php echo e(asset('assets/images/currency/'.$income->currency.'.svg')); ?>"
                     onerror="this.src='<?php echo e(asset('assets/images/currency/'.$income->currency.'.png')); ?>'"
                     alt="<?php echo e($income->currency); ?>">
                <span class="currency-name"><?php echo e($income->currency); ?></span>
                <p class="c-violet mt-4"><?php echo e(__("Amount")); ?>:</p>
                <p class="amount-val font-bold"><?php echo e($income->amount / 100000); ?> <span class="c-violet"><?php echo e($income->currency); ?></span></p>
            </div>
            <div class="col-md-6">
                <p class="my-4">
                    <?php echo e(__("Your unique id")); ?>:
                    <strong style="font-weight: bold;"><?php echo e($user->id); ?></strong>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-4">
                <p class="c-violet"><?php echo e(__("Address")); ?>:</p>
                <p class="wallet-item__info-box"><?php echo e($wallets); ?></p>
                <?php if($comment): ?>
                <p class="c-violet"><?php echo e(__("Comment")); ?>:</p>
                <p class="wallet-item__info-box"><?php echo e($comment); ?></p>
                <?php endif; ?>
                <p class="my-4"><?php echo e(__("showWall_info")); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-around">



                <form method="POST" action="<?php echo e(route('cabinet.income.update',['id'=>$income->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="confirm" hidden value="confirm">
                    <button class="btn btn--primary-gr"><?php echo e(__("Payed")); ?></button>
                </form>
                <form method="POST" action="<?php echo e(route('cabinet.income.update',['id'=>$income->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="text" hidden value="decline" name="decline">
                    <button class="btn btn--primary-gr"><?php echo e(__("Cancel")); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/cabinet/new/incomeReq.blade.php ENDPATH**/ ?>