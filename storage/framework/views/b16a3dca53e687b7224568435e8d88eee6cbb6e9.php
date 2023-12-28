<?php $__env->startSection('content'); ?>
    <div class="main-layout">
        <a class="auth-layout__logo" href="/"><img src="assets/images/logo/logo.png" alt=""></a>
        <div class="auth-layout__row">
            <div class="auth-layout__content">
                <div class="auth-layout__inner"><!-- Begin auth page-->
                    <?php if(session()->has('no-user')): ?>
                        <div
                            style="text-align: left; padding: 15px; margin-bottom: 25px; border: 2px solid #ff0000; color: #ff0000; border-radius: 30px;">
                            <?php if(session()->has('no-user')): ?>
                                <h4 style="font-size: 26px; margin-bottom: 10px;"><?php echo e(__("Incorrect recovery phrase")); ?></h4>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <form class="auth-form" action="<?php echo e(route('password.reset')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="auth-form__block">
                            <div class="auth-form__content">
                                <h1 class="title"><?php echo e(__("Enter seed phrase")); ?></h1>
                            </div>
                        </div>
                        <div class="field _error">
                            <label><?php echo e(__("Recovery phrase")); ?>:</label>
                            <input name="seed_phrase" type="text" placeholder="Enter seed phrase">
                        </div>
                        <div class="auth-form__bottom">
                            <button class="btn btn--primary-gr" name="login_frm_btn" type="submit">
                                <span><?php echo e(__("Reset account")); ?></span>
                            </button>
                        </div>
                    </form>
            </div>
            </div>
            <div class="auth-layout__media">
                <?php if(app()->getLocale() == 'ru'): ?>
                    <img src="<?php echo e(asset('assets/images/auth/b55_es(ru).png')); ?>" alt="">
                <?php elseif(app()->getLocale() == 'en'): ?>
                    <img src="<?php echo e(asset('assets/images/auth/b55_es(eng).png')); ?>" alt="">
                <?php else: ?>
                    <img src="<?php echo e(asset('assets/images/auth/b55_es(eng).png')); ?>" alt="">
                <?php endif; ?>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="footer__top"><a class="footer__logo" href="/">
                        <img src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt="">
                    </a>
                    <nav class="footer__nav">
                        <ul>
                            <li><a href="<?php echo e(route('page.company')); ?>"><?php echo e(__("Company")); ?></a></li>
                            <li><a href="<?php echo e(route('page.apybot')); ?>"><?php echo e(__("Investments")); ?></a></li>
                            <li><a href="<?php echo e(route('page.ref')); ?>"><?php echo e(__("Ref Program")); ?></a></li>
                            <li><a href="<?php echo e(route('page.token')); ?>"><?php echo e(__("Token")); ?></a></li>
                        </ul>
                    </nav>
                    <div class="footer__col-right">
                        <?php if(auth()->guard()->check()): ?>
                            
                            <a class="btn btn--size-small btn--calypso footer__btn" href="<?php echo e(route('cabinet')); ?>"> <span><?php echo e(__("Cabinet")); ?></span></a>
                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>
                            <a class="btn btn--size-small btn--calypso footer__btn"
                               href="<?php echo e(route('login')); ?>"> <span><?php echo e(__("Log in")); ?></span></a>
                            <a class="btn btn--line-black btn--calypso btn--size-small footer__btn" href="<?php echo e(route('register')); ?>">
                                <span><?php echo e(__("Sign Up")); ?></span></a>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="footer_center">
                    <div class="footer_widget">
                        <div class="footer_title"><?php echo e(__("Investment strategies")); ?>:</div>
                        <div class="footer_link">
                            <ul>
                                <li><a href="<?php echo e(route('page.defistaking')); ?>"><?php echo e(__("DeFi staking")); ?></a></li>
                                <li><a href="<?php echo e(route('page.classicstaking')); ?>"><?php echo e(__("Classic Staking")); ?></a></li>
                                <li><a href="<?php echo e(route('page.liquidity')); ?>"><?php echo e(__("Liquidity pools")); ?></a></li>
                                <li><a href="<?php echo e(route('page.staking')); ?>"><?php echo e(__("APY staking")); ?></a></li>
                                <li><a href="<?php echo e(route('page.investIDO')); ?>"><?php echo e(__("IDO")); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_widget">
                        <div class="footer_title"><?php echo e(__("TRADING BOTS")); ?>:</div>
                        <div class="footer_link">
                            <ul>
                                <li><a href="<?php echo e(route('page.apybot')); ?>"><?php echo e(__("APY trading bot")); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_widget">
                        <div class="footer_title"><?php echo e(__("LEGAL INFORMATION")); ?>:</div>
                        <div class="footer_link">
                            <ul>
                                <li><a href="<?php echo e(route('page.company')); ?>"><?php echo e(__("About us")); ?></a></li>
                                <li>
                                    <a href="https://find-and-update.company-information.service.gov.uk/company/14277515"
                                       target="_blank"><?php echo e(__("Check the information")); ?></a></li>
                                <li><a href="<?php echo e(route('page.terms')); ?>"><?php echo e(__("Terms of use")); ?></a></li>
                                <li><a href="<?php echo e(asset('/pdf/Whitepaper.pdf')); ?>" target="_blank"><?php echo e(__("White Paper")); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <style>.footer_center {
                        display: flex;
                        margin-top: 35px;
                        border-top: 2px solid #80C2F1;
                        padding-top: 20px;
                    }

                    .footer_widget {
                        width: 30%;
                    }

                    .footer_title {
                        text-transform: uppercase;
                        font-weight: bold;
                        margin-bottom: 15px;
                    }

                    .footer_link ul {
                        margin: 0;
                        padding: 0;
                    }

                    .footer_link ul li {
                        list-style: none;
                    }

                    .footer_link ul li a {
                        display: block;
                        padding: 7px 0;
                        color: #80C2F1;
                    }

                    @media  screen and (max-width: 980px) {
                        .footer_center {
                            display: block;
                        }

                        .footer_widget {
                            width: 100%;
                            text-align: center;
                            margin-bottom: 20px;
                        }
                    }</style>
                <div class="footer__bottom"><p class="footer__copyright">© <span class="js-current-year"></span>,
                        <?php echo e(__("b55.io. All rights reserved.")); ?> <a
                            href="https://find-and-update.company-information.service.gov.uk/company/14277515"
                            target="_blank"><?php echo e(__("Company number 14277515")); ?></a></p></div>
            </div>
        </footer>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/pages/recover.blade.php ENDPATH**/ ?>