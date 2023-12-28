<?php $__env->startSection('content'); ?>
<article class="main-layout__content"><!-- Begin page-->
    <section class="invest">
        <div class="container">
            <div class="invest__row">
                <div class="invest__col">
                    <h1 class="invest__title title">
                        <span class="color-primary"><?php echo e(__("The referral")); ?></span>
                        <?php echo e(__("program of B55")); ?>

                    </h1>
                    <div class="invest__description">
                        <p><?php echo __("Earn more! Invite a friend and get an increased allocation on the upcoming IDO!"); ?></p>
                    </div>
                    <ul class="invest__list">
                        <li>
                            <div class="invest__list-item-icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-percent"></use>
                                </svg>
                            </div>
                            <p class="invest__list-item-title"><?php echo e(__("Percentage")); ?></p>
                            <p class="invest__list-item-value">8.5<sup>%</sup></p>
                        </li>
                        <li>
                            <div class="invest__list-item-icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-group"></use>
                                </svg>
                            </div>
                            <p class="invest__list-item-title"><?php echo e(__("Levels")); ?></p>
                            <p class="invest__list-item-value">3</p>
                        </li>
                    </ul>
                </div>
                <div class="invest__col">
                    <div class="invest__image-wrapper">
                        <img class="invest__image" src="<?php echo e(asset('assets/images/invest/scheme.png')); ?>" alt="" role="presentation" />
                        <img class="invest__image" src="<?php echo e(asset('assets/images/invest/scheme.png')); ?>" alt="" role="presentation" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="start-now">
        <div class="container">
            <div class="start-now__row">
                <div class="start-now__col">
                    <h2 class="start-now__title title"><span class="color-primary"><?php echo e(__("How")); ?></span> <?php echo e(__("to start?")); ?></h2>
                    <div class="start-now__buttons"><a class="btn btn--primary-gr start-now__btn" href="<?php echo e(route('register')); ?>"> <span><?php echo e(__("Start now")); ?></span></a></div>
                </div>
                <div class="start-now__col">
                    <ol class="start-now__numbers-list numbers-list">
                        <li><?php echo e(__("Complete the free registration process")); ?></li>
                        <li><?php echo e(__("Copy your referral link located the Referral Program section")); ?></li>
                        <li><?php echo e(__("Send this link to a friend")); ?></li>
                        <li><?php echo e(__("ref_info1")); ?>

                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="trading-bot">
        <div class="container">
            <div class="trading-bot__row">
                <div class="trading-bot__content">
                    <div class="trading-bot__text typography">
                        <p style="font-size: 120%; font-weight: 700;"><?php echo __("referral1"); ?></p>
                        <p><?php echo __("referral2"); ?></p>
                        <p><?php echo __("referral3"); ?></p>
                        <p><?php echo __("referral4"); ?></p>
                        <p><?php echo __("referral5"); ?></p>
                    </div>
                </div>
                <div class="trading-bot__media"><img class="trading-bot__image" src="assets/images/trading-bot/image.png" alt="" role="presentation" /></div>
            </div>
        </div>
    </section><!-- End page  -->
</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/pages/referral.blade.php ENDPATH**/ ?>