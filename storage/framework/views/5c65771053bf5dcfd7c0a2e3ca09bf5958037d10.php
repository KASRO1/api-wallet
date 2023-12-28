<?php $__env->startSection('title', __("Invest")); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="invest-ftx">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4 mb-4"><span class="c-violet"><?php echo e(__("APY staking")); ?></span></h1>
            </div>
        </div>
        <form action="<?php echo e(route('cabinet.deposits.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" hidden name="pack" value="apy-staking">
            <div class="row">
                <div class="col-md-6">
                    <fieldset class="select-deposit">
                        <legend><?php echo e(__("Choose payment system")); ?>:</legend>
                        <div>
                            <input id="payment-blockchain" type="radio" name="payment-system" value="blockchain">
                            <label for="payment-blockchain"><?php echo e(__("From Blockchain")); ?></label>
                        </div>
                        <div>
                            <input checked id="payment-balance" type="radio" name="payment-system" value="balance">
                            <label for="payment-balance"><?php echo e(__("From balance")); ?>

                                <div class="c-violet"><?php echo e(__('Available')); ?>: <br><span id="currency-balance">0</span>
                                </div>
                            </label>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <?php echo $__env->make('cabinet.new.deposits._stakingCurrencySelect', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 py-4 my-4">
                    <label for="amount-input"><?php echo e(__("Enter amount")); ?>:</label> <br>
                    <?php if($errors->any()): ?>
                    <?php echo implode('', $errors->all('<div class="error status--danger">:message</div>')); ?>

                    <?php endif; ?>
                    <input data-amount="0" type="text" value="0" class="wallet-item__info-box w-100" hidden name="amountUSD" id="amount-input">
                    <input type="text" value="0" class="wallet-item__info-box w-100" name="amount">
                    <p class="commission"><?php echo e(__("Fees:")); ?> <span class="balance">0.5 APY</span></p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="amount-helper choose-helper mb-md-0 mb-4">
                        <div class="amount-helper__item choose-helper__item">
                            <button data-amount="100" data-currency-eq="" class="choose-helper__btn amount-helper__btn">$100</button>
                        </div>
                        <div class="amount-helper__item choose-helper__item">
                            <button data-amount="1000" data-currency-eq="" class="choose-helper__btn amount-helper__btn">$1000</button>
                        </div>
                        <div class="amount-helper__item choose-helper__item">
                            <button data-amount="10000" data-currency-eq="" class="choose-helper__btn amount-helper__btn active">$10000</button>
                        </div>
                        <div class="amount-helper__item choose-helper__item">
                            <button data-amount="20000" data-currency-eq="" class="choose-helper__btn amount-helper__btn">$20000</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="time-helper choose-helper my-md-0 my-4">
                        <input type="number" name="days" hidden id="time_frame_input" value="30">
                        <div class="choose-helper__item time-helper__item">
                            <button data-time="30" class="choose-helper__btn time-helper__btn active">30 <?php echo e(__("days")); ?></button>
                        </div>
                        <div class="choose-helper__item time-helper__item">
                            <button data-time="60" class="choose-helper__btn time-helper__btn">60 <?php echo e(__("days")); ?></button>
                        </div>
                        <div class="choose-helper__item time-helper__item">
                            <button data-time="120" class="choose-helper__btn time-helper__btn">120 <?php echo e(__("days")); ?></button>
                        </div>
                        <div class="choose-helper__item time-helper__item">
                            <button data-time="240" class="choose-helper__btn time-helper__btn">240 <?php echo e(__("days")); ?></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4 profit-calculate">
                    <div class="profit-calculate-box">
                        <span><?php echo e(__("Daily Profit")); ?>:</span>
                        <p data-timeframe="d" data-currency="BTC">0</p>
                    </div>
                    <div class="profit-calculate-box">
                        <span><?php echo e(__("Monthly Profit")); ?>:</span>
                        <p data-timeframe="m" data-currency="BTC">0</p>
                    </div>
                    <div class="profit-calculate-box">
                        <span><?php echo e(__("Yearly Profit")); ?>:</span>
                        <p data-timeframe="y" data-currency="BTC">0</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-4">
                    <p class="invest-warning">"<?php echo e(__("This is the maximum profit that you can get, in reality, the profit may be less than this amount")); ?>"</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" id="submit-invest" class="btn btn--primary-gr"><?php echo e(__("Invest now")); ?></button>
                </div>
            </div>
        </form>
    </div>
</section>
<?php echo $__env->make('cabinet.new.deposits._profitCalc',['accounts' => $user->accounts,'percent'=>$depositDetails['percent'],'rates'=>$rates], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/cabinet/new/deposits/isolatedtradingpairs.blade.php ENDPATH**/ ?>