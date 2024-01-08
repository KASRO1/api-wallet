<?php $__env->startSection('content'); ?>
    
    <div class="main-layout">
        <a class="auth-layout__logo" href="/"><img src="assets/images/logo/logo.png" alt=""></a>
        <div class="auth-layout__row">
            <div class="auth-layout__content">
                <div class="auth-layout__inner"><!-- Begin auth page-->
                    <?php if(session()->has('banned') || session()->has('2fa_needed')
                    || !$errors->isEmpty()): ?>
                    <div
                        style="text-align: left; padding: 15px; margin-bottom: 25px; border: 2px solid #ff0000; color: #ff0000; border-radius: 30px;">
                        <?php if(session()->has('banned')): ?>
                            <h4 style="font-size: 26px; margin-bottom: 10px;"><?php echo e(__("Access to personal account is blocked")); ?></h4>
                        <?php endif; ?>
                        <?php if(session()->has('2fa_needed')): ?>
                                <h4 style="font-size: 26px; margin-bottom: 10px;"><?php echo e(__("To sign in to this account, you need a temporary code with Google Authenticator.")); ?></h4>
                        <?php else: ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!session()->has('banned')): ?>
                                        <h4 style="font-size: 26px; margin-bottom: 10px;"><?php echo e($error); ?></h4>
                                    <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <form class="auth-form" name="login_frm" action="<?php echo e(route("login")); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="auth-form__block">
                            <div class="auth-form__content"><h1 class="title"><?php echo e(__("Login")); ?></h1>
                                <div class="field _error">
                                    <label><?php echo e(__("Email")); ?>:</label>
                                    <input type="text" name="email" id="login_frm_Login" value=""
                                                                                      autofocus
                                                                                      required="">
                                </div>
                                <div class="field">
                                    <label><?php echo e(__("Enter password")); ?>:</label>
                                    <input type="password" name="password" id="login_frm_Pass"
                                                                                        value="" required="">
                                </div>
                                
                                <div class="grid-column-12">
                                    <div class="field">
                                        <label for="input_f61623m91">
                                            <?php echo e(__("Code Google Authenticator")); ?>

                                        </label>

                                        <input id="input_f61623m91" autocomplete="" name="ga_code" type="password"
                                               placeholder="<?php echo e(__("Enter Google Authenticator code")); ?>">
                                    </div>
                                </div>
                                <div class="auth-form__bottom">
                                    <button class="btn btn--primary-gr" name="login_frm_btn" type="submit">
                                        <span><?php echo e(__("Sign in")); ?> </span>
                                    </button>
                                </div>
                                <div class="auth-form__links">
                                    <p><?php echo e(__("No account?")); ?> <a href="<?php echo e(route('register')); ?>"><?php echo e(__("Registration")); ?></a></p>
                                    <p style="margin-left: 15px;"><a href="<?php echo e(route('password.reset')); ?>"><?php echo e(__("Reset account")); ?></a></p>
                                </div>
                            </div>
                        </div>
                    </form><!-- End auth page--></div>
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
                                href="https://find-and-update.company-information.service.gov.uk/company/14080408"
                                target="_blank"><?php echo e(__("Company number 14080408")); ?></a></p></div>
                </div>
            </footer>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
    <main _ngcontent-c0="" class="page-content">
        <div _ngcontent-c0="" class="page-content__content  user-page">
            <app-login _nghost-c4="">
                <div _ngcontent-c4="" class="user-page__auth auth g-page-wrap fadeInUp" data-show-animation="fadeInUp">
                    <div _ngcontent-c4="" class="auth__content  g-content-wrap">
                        <h2 _ngcontent-c4="" class="auth__title">Вход</h2>
                        <form method="post" action="<?php echo e(route('login')); ?>"
                              class="auth__form ng-untouched ng-pristine ng-invalid">
                            <?php echo csrf_field(); ?>
                            <div _ngcontent-c4="" class="auth__inputs-wrap">
                                <div _ngcontent-c4="" class="auth__form-group form-group"><label _ngcontent-c4=""
                                                                                                 class="form-group__label"
                                                                                                 for="registr-input">Ваш
                                        E-mail</label><input _ngcontent-c4=""
                                                             class="form-group__input ng-untouched ng-pristine ng-invalid"
                                                             name="email" id="registr-input" type="email">
                                </div>
                                <div _ngcontent-c4="" class="auth__form-group form-group"><label _ngcontent-c4=""
                                                                                                 class="form-group__label"
                                                                                                 for="registr-input-2">Ваш
                                        пароль</label><input _ngcontent-c4=""
                                                             class="form-group__input ng-untouched ng-pristine ng-invalid"
                                                             name="password" id="registr-input-2"
                                                             type="password"></div>
                            </div>
                            <div _ngcontent-c4="" class="auth__checkbox-wrap"><label _ngcontent-c4=""
                                                                                     class="auth__checkbox  checkbox  _center">
                                    Запомнить меня <input _ngcontent-c4="" checked="" name="remember"
                                                          type="checkbox"
                                                          class="ng-untouched ng-pristine ng-valid"><span
                                        _ngcontent-c4="" class="checkbox__mark"></span></label></div>
                            <button _ngcontent-c4="" class="auth__btn btn" type="submit" tabindex="0">Войти</button>
                            <div _ngcontent-c4="" class="auth__links">
                                <a _ngcontent-c4="" href="<?php echo e(route('register')); ?>"><?php echo app('translator')->get('app.Не имеете аккаунт'); ?>?</a>
                                                        <a _ngcontent-c4="" href="/ru/request-reset-password">Забыли пароль?</a></div>
                        </form>
                    </div>
                </div>
            </app-login>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/auth/login.blade.php ENDPATH**/ ?>