<?php $__env->startSection('content'); ?>
<article class="main-layout__content"><!-- Begin page-->
    <section class="investments-intro">
        <div class="container">
            <div class="investments-intro__row">
                <div class="investments-intro__col">
                    <div class="investments-intro__content">
                        <h1 class="investments-intro__title title"><span class="color-primary"><?php echo e(__("APY trading")); ?></span> <?php echo e(__("BOT")); ?></h1>
                        <div class="investments-intro__description">
                            <p><?php echo e(__("B55_bot_info")); ?></p>
                        </div>
                    </div>
                </div>
                <div class="investments-intro__col">
                    <div class="investments-intro__earn">
                        <div class="investments-intro__earn-icon">
                            <svg class="svg-icon">
                                <use href="assets/icons/sprite.svg#icon-wallet"></use>
                            </svg>
                        </div>
                        <p class="investments-intro__earn-label"><?php echo e(__("Earn up to")); ?></p>
                        <p class="investments-intro__earn-value"><?php echo e(__("apy_APY")); ?></p>
                        <p class="investments-intro__earn-subtext"><?php echo e(__("a year")); ?></p>
                    </div>
                </div>
            </div>
            <div class="investments-intro__swiper swiper-container js-investments-swiper swiper-no-swiping">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="investments-swiper-item">
                            <div class="investments-swiper-item__icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-group2"></use>
                                </svg>
                            </div>
                            <p class="investments-swiper-item__title"><?php echo e(__("TOTAL CLIENTS")); ?></p>
                            <p class="investments-swiper-item__value">7.9K</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="investments-swiper-item">
                            <div class="investments-swiper-item__icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-inftx"></use>
                                </svg>
                            </div>
                            <p class="investments-swiper-item__title"><?php echo e(__("INVESTED")); ?></p>
                            <p class="investments-swiper-item__value">$40.7M</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="investments-swiper-item">
                            <div class="investments-swiper-item__icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-monets"></use>
                                </svg>
                            </div>
                            <p class="investments-swiper-item__title"><?php echo e(__("CLIENT'S INCOME")); ?></p>
                            <p class="investments-swiper-item__value">$24.7M</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="investments-swiper-item">
                            <div class="investments-swiper-item__icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-wallet2"></use>
                                </svg>
                            </div>
                            <p class="investments-swiper-item__title"><?php echo e(__("AVERAGE DEPOSIT")); ?></p>
                            <p class="investments-swiper-item__value">$5.15K</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="growing">
        <div class="container">
            <div class="growing__row">
                <div class="growing__content">
                    <p class="growing__subtitle"><?php echo e(__("Last 30 days")); ?></p>
                    <h3 class="growing__title h2"><?php echo e(__("Growing")); ?></h3>
                </div>
                <div class="growing__media"><img class="growing__image" src="<?php echo e(asset('assets/images/growing/chart.png')); ?>" alt="" role="presentation" /></div>
            </div>
        </div>
    </section>
    <section class="calculate">
        <div class="container">
            <h2 class="calculate__title title"><span class="color-primary"><?php echo e(__("Calculate")); ?></span>
                <?php echo e(__("Your Income")); ?>

            </h2>
            <div class="calculate__block">
                <form>
                    <div class="calculate__block-row">
                        <div class="calculate__block-col">
                            <div class="calculate__field field"><label class="calculate__label"><?php echo e(__("Currency")); ?></label>
                                <div class="field-payment">
                                    <div class="field-payment__icon"><img src="assets/images/currency/BTC.svg" alt=""></div>
                                    <select class="js-select-payment" name="currency" id="PSys">
                                        <option value="BTC" data-icon-src="<?php echo e(asset('assets/images/currency/BTC.svg')); ?>">
                                            Bitcoin
                                        </option>
                                        <option value="ETH" data-icon-src="<?php echo e(asset('assets/images/currency/ETH.svg')); ?>">
                                            Ethereum
                                        </option>
                                        <option value="LTC" data-icon-src="<?php echo e(asset('assets/images/currency/LTC.svg')); ?>">
                                            Litecoin
                                        </option>
                                        <option value="DOGE" data-icon-src="<?php echo e(asset('assets/images/currency/DOGE.svg')); ?>">
                                            Dogecoin
                                        </option>
                                        <option value="BNB" data-icon-src="<?php echo e(asset('assets/images/currency/BNB.svg')); ?>">BNB
                                            (BEP20)
                                        </option>
                                        <option value="XRP" data-icon-src="<?php echo e(asset('assets/images/currency/XRP.svg')); ?>">
                                            Ripple (BEP-20)
                                        </option>
                                        <option value="TRX" data-icon-src="<?php echo e(asset('assets/images/currency/TRX.svg')); ?>">
                                            TRON (BEP-20)
                                        </option>
                                        <option value="USDT" data-icon-src="<?php echo e(asset('assets/images/currency/USDT (TRC20).svg')); ?>">USDT
                                            (TRC20)
                                        </option>
                                        <option value="USD" data-icon-src="<?php echo e(asset('assets/images/currency/USD.svg')); ?>">USD
                                        </option>
                                        <option value="USDC" data-icon-src="<?php echo e(asset('assets/images/currency/USDC.svg')); ?>">USDC
                                            (BEP20)
                                        </option>
                                        <option value="BUSD" data-icon-src="<?php echo e(asset('assets/images/currency/BUSD (BEP20).svg')); ?>">BUSD
                                            (BEP20)
                                        </option>
                                        <option value="DASH" data-icon-src="<?php echo e(asset('assets/images/currency/DASH.svg')); ?>">DASH
                                        </option>
                                        <option value="ATOM" data-icon-src="<?php echo e(asset('assets/images/currency/ATOM.svg')); ?>">ATOM
                                        </option>
                                        <option value="AXL" data-icon-src="<?php echo e(asset('assets/images/currency/AXL.png')); ?>">AXL
                                        </option>
                                        <option value="APY" data-icon-src="<?php echo e(asset('assets/images/currency/APY.png')); ?>">APY
                                        </option>
                                        <option value="BCH" data-icon-src="<?php echo e(asset('assets/images/currency/BCH.svg')); ?>">BCH
                                        </option>
                                        <option value="DOT" data-icon-src="<?php echo e(asset('assets/images/currency/DOT.svg')); ?>">Polkadot ( BEP-20 )
                                        </option>
                                        <option value="TON" data-icon-src="<?php echo e(asset('assets/images/currency/TON.svg')); ?>">TON (BEP-20)
                                        </option>
                                        <option value="UMEE" data-icon-src="<?php echo e(asset('assets/images/currency/UMEE.png')); ?>">UMEE
                                        </option>
                                        <option value="BLD" data-icon-src="<?php echo e(asset('assets/images/currency/BLD.png')); ?>">Agoric
                                        </option>
                                        <option value="RUB" data-icon-src="<?php echo e(asset('assets/images/currency/RUB.svg')); ?>">RUB
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <p class="calculate__block-value-label"><?php echo e(__("Average Income Per Year")); ?></p>
                            <p class="calculate__block-value"><?php echo e(__("apy_APY")); ?></p>
                            <a href="<?php echo e(route('investplan.ftx')); ?>" class="btn btn--primary-gr calculate__btn"><?php echo e(__("Invest now")); ?></a>
                        </div>
                        <div class="calculate__block-col">
                            <div class="calculate__field field"><label class="calculate__label"><?php echo e(__("Deposit Total")); ?></label>
                                <div class="calculate__field-group js-slider-field" min="100" max="1000000" step="10"><input type="number" min="100" max="1000000" value="100" name="total" id="Sum">
                                    <div class="calculate__field-group-after" id="curr"></div>
                                </div>
                                <div class="calculate__progress">
                                    <div class="calculate__progress-labels">
                                        <p>100</p>
                                        <p>1,000,000</p>
                                    </div>
                                </div>
                            </div>
                            <table class="calculate__block-table">
                                <tbody>
                                    <tr>
                                        <td><?php echo e(__("Daily Income")); ?></td>
                                        <td><strong class="color-success"><span id="calc1">0</span> <span id="calc1curr"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__("Monthly Income")); ?></td>
                                        <td><strong class="color-success"><span id="calc2">0</span> <span id="calc2curr"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__("Yearly Income")); ?></td>
                                        <td><strong class="color-success"><span id="calc3">0</span> <span id="calc3curr"></span></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        function sch() {
            cid = $('#PSys').val();
            $('#curr').html(curr);
            $('#calc1curr').html(cid);
            $('#calc2curr').html(cid);
            $('#calc3curr').html(cid);
            recalc();
        }

        sch();
        $('#PSys').change(sch);
        setInterval(sch, 250);

        function recalc() {
            z = 1 * $('#Sum').val();
            cid = $('#PSys').val();
            $('#calc1').html(1 * ((z * 0.46 / 100).toFixed(6)));
            $('#calc2').html(1 * ((z * 0.46 * 30 / 100).toFixed(6)));
            $('#calc3').html(1 * ((z * 0.46 * 364 / 100).toFixed(6)));
        }

        $('#Sum').on('change', recalc);
    </script>
    <section class="trading-bot">
        <div class="container">
            <div class="trading-bot__row">
                <div class="trading-bot__content">
                    <h2 class="trading-bot__title title"><span class="color-primary"><?php echo e(__("Why do we")); ?> </span> <?php echo e(__("even need trading robots?")); ?></h2>
                    <div class="trading-bot__text typography">
                        <p><?php echo __("bot_info_1"); ?></p>
                        <p><?php echo __("bot_info_2"); ?></p>
                        <p><?php echo __("bot_info_3"); ?></p>
                        <p><?php echo __("bot_info_4"); ?></p>
                        <p><?php echo __("bot_info_5"); ?></p>
                    </div>
                    <div class="trading-bot__buttons"><a class="btn btn--primary-gr trading-bot__btn" href="<?php echo e(route('register')); ?>"> <span><?php echo e(__("Invest now")); ?></span></a></div>
                </div>
                <div class="trading-bot__media"><img class="trading-bot__image" src="<?php echo e(asset('assets/images/trading-bot/image.png')); ?>" alt="" role="presentation" /></div>
            </div>
        </div>
    </section><!-- End page  -->
</article>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/pages/apybot.blade.php ENDPATH**/ ?>