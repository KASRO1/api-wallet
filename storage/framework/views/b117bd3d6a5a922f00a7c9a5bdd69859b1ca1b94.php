<?php $__env->startSection('title', __("Deposits")); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="deposit">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4 mb-4"><?php echo e(__("My deposits")); ?></h1>
            </div>
        </div>
        <?php if(\Session::has('success')): ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <?php echo e(__("Congratulation!")); ?></strong> <?php echo \Session::get('success'); ?>

                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="row">
            <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 mb-4">
                <div class="deposit__block
                        <?php if($dep->name == 'APY trading bot'): ?> investments-block--color-1 <?php endif; ?>
                        <?php if($dep->name == 'APY staking'): ?> investments-block--color-2 <?php endif; ?>
                        <?php if($dep->name == 'IDO investments'): ?> investments-block--color-3 <?php endif; ?>
                        <?php if($dep->name == 'Classic Stacking'): ?> investments-block--color-4 <?php endif; ?>
                        <?php if($dep->name == 'Liquidity pools'): ?> investments-block--color-5 <?php endif; ?>
                        <?php if($dep->name == 'DeFi стейкинг'): ?> investments-block--color-6 <?php endif; ?>
                        ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                
                                <h5 class="package_name my-4"><?php echo e($dep->name); ?></h5>
                                <p class="package_info">
                                    <?php if($dep->name == 'APY trading bot'): ?>
                                    <?php echo e(__("Highly accurate algorithmic bot, making more than 1000 deals in 24 hours")); ?>

                                    <?php endif; ?>
                                    <?php if($dep->name == 'IDO investments'): ?>
                                    <?php echo e(__("A crowdfunding method that allows crypto projects to launch their own token through decentralized exchanges.")); ?>

                                    <?php endif; ?>
                                    <?php if($dep->name == 'Liquidity pools'): ?>
                                    <?php echo e(__("Token pools that provide the trading process of currency pairs with liquidity from users who, in return, receive rewards from the project depending on the share they invested.")); ?>

                                    <?php endif; ?>
                                    <?php if($dep->name == 'APY staking'): ?>
                                    <?php echo e(__("A utility token for use within the products of the ecosystem.")); ?>

                                    <?php endif; ?>
                                    <?php if($dep->name == 'DeFi стейкинг'): ?>
                                    <?php echo e(__("DeFi provides automatic execution of transactions according to pre-established conditions.")); ?>

                                    <?php endif; ?>
                                    <?php if($dep->name == 'Classic Stacking'): ?>
                                    <?php echo e(__("Placing cryptocurrency assets with the aim of receiving rewards for maintaining the blockchain's operability and network security.")); ?>

                                    <?php endif; ?>
                                </p>
                                <?php if(($dep->name == 'APY trading bot' ||
                                $dep->name == 'APY staking' ||
                                $dep->name == 'Liquidity pools'
                                ) &&
                                now()->diffInDays($dep->start_time) >= 14 &&
                                $dep->status == \App\Deposit::STATUS_OPENED &&
                                $dep->balance > $dep->amount
                                ): ?>
                                <form method="POST" id="claim_form" action="<?php echo e(route('cabinet.deposits.claim',['deposit'=>$dep->id])); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button class="claim_button"><?php echo e(__("Receive a Profit")); ?></button>
                                    <p class="commission"><?php echo e(__("Fees:")); ?> <span class="balance">0.5 APY</span></p>
                                </form>
                                <!-- <a href="<?php echo e(route('cabinet.deposits.claim',['deposit'=>$dep->id])); ?>" class="claim_button mt-4"><?php echo e(__("Receive a Profit")); ?></a> -->
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="profit_box">
                                    <div class="profit_ico"><?php echo $__env->make('cabinet.new.icons.coins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                                    <h6 class="my-4"><?php echo e(__("Overall profit")); ?></h6>
                                    <?php if($dep->name == 'Liquidity pools'): ?>
                                    <?php if(strtolower($dep->currency) == 'usdt'): ?>
                                    <p class="profit_amount"><?php echo e(number_format(($dep->balance - $dep->amount) / 100000 * (1 / floatval($apyRate)), 2, '.', '')); ?> APY</p>
                                    <?php elseif(Illuminate\Support\Facades\DB::table('exchange_rates')->where('pair', strtolower($dep->currency) . '_usdt')->exists()): ?>
                                    <p class="profit_amount"><?php echo e(number_format(($dep->balance - $dep->amount) / 100000 * Illuminate\Support\Facades\DB::table('exchange_rates')->where('pair', strtolower($dep->currency) . '_usdt')->first()->rate * (1 / floatval($apyRate)), 2, '.', '')); ?> APY</p>
                                    <?php else: ?>
                                    <p class="profit_amount"><?php echo e(number_format(($dep->balance - $dep->amount) / 100000 * config('currencies.' . strtolower($dep->currency) . '_usdt') * (1 / floatval($apyRate)), 2, '.', '')); ?> APY</p>
                                    <?php endif; ?>
                                    <?php else: ?>
                                    <p class="profit_amount"><?php echo e(number_format(($dep->balance - $dep->amount) / 100000,strlen(($dep->balance - $dep->amount) / 100000) - 1,'.','')); ?> <?php echo e($dep->currency); ?></p>
                                    <?php endif; ?>

                                    <!-- <p class="profit_amount"><?php echo e((float)(($dep->balance - $dep->amount) / 100000)); ?></p> -->
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <ul class="deposit_status">
                                    <li><span class="status_heading"><?php echo e(__("An amount")); ?>:</span> <?php echo e($dep->amount /100000); ?> <?php echo e($dep->currency); ?></li>
                                    <?php if($dep->status != \App\Deposit::STATUS_NOT_PAYED): ?>
                                    <li><span class="status_heading"><?php echo e(__("Starting date")); ?>:</span> <?php echo e(date('M d Y',strtotime($dep->start_time))); ?> </li>
                                    <li><span class="status_heading"><?php echo e(__("Ending date")); ?>:</span> <?php echo e(date('M d Y', strtotime($dep->end_time))); ?> </li>
                                    <?php endif; ?>
                                    <?php if($dep->referal_percent != 0): ?>
                                    <li><span class="status_heading"><?php echo e(__("Referral percent")); ?>:</span> +<?php echo e($dep->referal_percent); ?>%</li>
                                    <?php endif; ?>
                                    <?php if($dep->status == \App\Deposit::STATUS_NOT_PAYED): ?>
                                    <li><?php echo e(__("Deposit is not paid yet!")); ?></li>
                                    <?php if($user->is_verified == 2): ?>
                                    <li><a href="<?php echo e(route('cabinet.showWallet',['id'=>$dep->id])); ?>" class="status_heading"><?php echo e(__("Pay")); ?></a></li>
                                    <?php endif; ?>
                                    <?php if($user->is_verified == 0): ?>
                                    <li><a href="<?php echo e(route('cabinet.verification')); ?>" class="status_heading"><?php echo e(__("Pay")); ?></a></li>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if($dep->status == \App\Deposit::STATUS_CANCELED): ?>
                                    <li>Deposit is canceled</li>
                                    <?php endif; ?>
                                    <?php if($dep->status == \App\Deposit::STATUS_PAYED): ?>
                                    <li><?php echo e(__("Waiting for confirmation")); ?></li>
                                    <?php endif; ?>
                                    <li><span class="status_heading"><?php echo e(__("Days")); ?>:</span> <br> <span class="days"><?php echo e(round((strtotime($dep->end_time) - strtotime($dep->start_time)) / (60*60*24))); ?></span> </li>
                                    <?php if($dep->status == \App\Deposit::STATUS_OPENED): ?>
                                    <progress class="w-100 c-violet" max="<?php echo e(round((strtotime($dep->end_time) - strtotime($dep->start_time)) / (60*60*24))); ?>" value="<?php echo e(round((strtotime($dep->end_time) - strtotime($dep->start_time) - (strtotime($dep->start_time) - time())) / (60*60*24)) - round((strtotime($dep->end_time) - strtotime($dep->start_time)) / (60*60*24))); ?>">
                                    </progress>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12">
                <a href="<?php echo e(route('cabinet')); ?>" class="btn btn--primary-gr mb-4"><?php echo e(__("Add new deposit")); ?></a>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/cabinet/new/deposits.blade.php ENDPATH**/ ?>