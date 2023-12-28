<?php $__env->startSection('content'); ?>
<article class="main-layout__content"><!-- Begin page-->
    <section class="investments-intro">
        <div class="container">
            <div class="investments-intro__row">
                <div class="investments-intro__col">
                    <div class="investments-intro__content">
                        <h1 class="investments-intro__title title"><span class="color-primary"><?php echo e(__("Liquidity")); ?> </span> <?php echo e(__("pools")); ?></h1>
                        <div class="investments-intro__description">
                            <p><?php echo e(__("liq_info1")); ?> </p>
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
                        <p class="investments-intro__earn-value"><?php echo e(__("apy_Liq")); ?></p>
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
                            <p class="investments-swiper-item__value">5.5K</p>
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
                            <p class="investments-swiper-item__value">$20.6M</p>
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
                            <p class="investments-swiper-item__value">$8.8M</p>
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
                            <p class="investments-swiper-item__value">$3.75K</p>
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
            <h2 class="calculate__title title">
                <span class="color-primary"><?php echo e(__("Calculate")); ?></span>
                <?php echo e(__("Your Income")); ?>

            </h2>
            <div class="calculate__block">
                <form>
                    <div class="calculate__block-row">
                        <div class="calculate__block-col">
                            <div class="calculate__field field"><label class="calculate__label">Currency</label>
                                <div class="field-payment">
                                    <div class="field-payment__icon"><img src="assets/images/currency/BTC.svg" alt=""></div>
                                    <select class="js-select-payment" name="currency" id="PSys">
                                        <option value="BTC" data-icon-src="<?php echo e(asset('assets/images/currency/BTC.svg')); ?>">
                                            Bitcoin
                                        </option>
                                        <option value="ETH" data-icon-src="<?php echo e(asset('assets/images/currency/ETH.svg')); ?>">
                                            Ethereum
                                        </option>
                                        <option value="BNB" data-icon-src="<?php echo e(asset('assets/images/currency/BNB.svg')); ?>">BNB
                                            (BEP20)
                                        </option>
                                        <option value="USDT" data-icon-src="<?php echo e(asset('assets/images/currency/USDT (TRC20).svg')); ?>">USDT
                                            (TRC20)
                                        </option>
                                        <option value="USDC" data-icon-src="<?php echo e(asset('assets/images/currency/USDC.svg')); ?>">USDC
                                            (BEP20)
                                        </option>
                                        <option value="BUSD" data-icon-src="<?php echo e(asset('assets/images/currency/BUSD (BEP20).svg')); ?>">BUSD
                                            (BEP20)
                                        </option>
                                        <option value="RUB" data-icon-src="<?php echo e(asset('assets/images/currency/RUB.svg')); ?>">RUB
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <p class="calculate__block-value-label"><?php echo e(__("Average Income Per Year")); ?></p>
                            <p class="calculate__block-value"><?php echo e(__("apy_Liq")); ?></p>
                            <a href="<?php echo e(route('investplan.liquidity')); ?>" class="btn btn--primary-gr calculate__btn"><?php echo e(__("Invest now")); ?></a>
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
                                        <td><strong class="color-success"><span id="calc1">0</span> <span id="calc1curr">APY</span></strong></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__("Monthly Income")); ?></td>
                                        <td><strong class="color-success"><span id="calc2">0</span> <span id="calc2curr">APY</span></strong></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__("Yearly Income")); ?></td>
                                        <td><strong class="color-success"><span id="calc3">0</span> <span id="calc3curr">APY</span></strong></td>
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
        const rates = JSON.parse('<?php echo json_encode($rates); ?>')
        let ddd = {};
        for (const rate1 of rates) {
            ddd[rate1[0]] = rate1[1];
        }
        ddd.USDT = 1;

        function sch() {
            cid = $('#PSys').val();
            $('#curr').html(cid);
            recalc();
        }

        sch();
        $('#PSys').change(sch);
        setInterval(sch, 250);

        function recalc() {
            z = 1 * $('#Sum').val();
            cid = $('#PSys').val();
            rate = ddd[cid] * ddd['APY'];
            $('#calc1').html(1 * ((z * rate * 0.59 / 100).toFixed(6)));
            $('#calc2').html(1 * ((z * rate * 0.59 * 30 / 100).toFixed(6)));
            $('#calc3').html(1 * ((z * rate * 0.59 * 364 / 100).toFixed(6)));
        }
        $('#Sum').on('change', recalc);
    </script>
    <section class="trading-bot">
        <div class="container">
            <div class="trading-bot__row">
                <div class="trading-bot__content">
                    <h2 class="trading-bot__title title"><span class="color-primary"> <?php echo e(__(("Investment strategy for"))); ?></span> <?php echo e(__("Liq pools")); ?></h2>
                    <div class="trading-bot__text typography">
                        <p><?php echo e(__("liq_info2")); ?></p>
                        <p><?php echo e(__("liq_info3")); ?></p>
                        <p><?php echo e(__("liq_info4")); ?></p>
                        <p><?php echo e(__("liq_info5")); ?></p>
                        <p><?php echo e(__("liq_info6")); ?></p>
                        <p><?php echo e(__("liq_info7")); ?></p>
                    </div>
                    <div class="trading-bot__buttons"><a class="btn btn--primary-gr trading-bot__btn" href="<?php echo e(route('register')); ?>"> <span><?php echo e(__("Invest now")); ?></span></a></div>
                </div>
                <div class="trading-bot__media"><img class="trading-bot__image" src="assets/images/trading-bot/image.png" alt="" role="presentation" /></div>
            </div>
        </div>
    </section><!-- End page  -->
</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/pages/liquidity.blade.php ENDPATH**/ ?>