<?php $__env->startSection('title',__("Add funds")); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container" id="income">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4 my-4"><?php echo e(__("Add funds")); ?></h1>
                <h3 class="section__subheading py-4 mb-4"><?php echo e(__("Adding funds for your")); ?> <?php echo e($wallet); ?> <span class="c-violet"><?php echo e(__("wallet")); ?></span></h3>
            </div>
            <div class="col-12">
                <?php if($errors->isNotEmpty()): ?>
                    <ul class="">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="alert alert-warning"><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('cabinet.income.add')); ?>">
                    <?php echo csrf_field(); ?>
                    <input id="paySstm" type="text" hidden name="payment_system" value="<?php echo e(\App\Outcome::BITCOIN); ?>">
                    <input type="text" value="<?php echo e($wallet); ?>" hidden name="currency">
                    <label for="amount"><?php echo e(__("Enter amount")); ?></label>
                    <input class="wallet-item__info-box w-100" type="text" name="amount">
                    <button type="submit" class="btn"><?php echo e(__("Add funds")); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/cabinet/new/income.blade.php ENDPATH**/ ?>