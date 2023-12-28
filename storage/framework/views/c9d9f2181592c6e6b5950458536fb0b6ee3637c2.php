<?php $__env->startSection('content'); ?>
    
    <div class="main-layout">
        <a class="auth-layout__logo" href="/">
            <img src="assets/images/logo/logo.png" alt="">
        </a>
        <div class="auth-layout__row">
            <div class="auth-layout__content">
                <div class="auth-layout__inner"><!-- Begin auth page-->
                    <form class="auth-form" method="post" action="<?php echo e(route('register')); ?>" name="register_frm">
                        <?php echo csrf_field(); ?>
                        <div class="auth-form__block">
                            <div class="auth-form__content">
                                <div class="auth-form__top">
                                    <h1 class="title"><?php echo e(__("Registration")); ?></h1>
                                </div>
                                <?php if(!$errors->isEmpty()): ?>
                                    <div
                                        style="text-align: left; padding: 15px; margin-bottom: 25px; border: 2px solid #ff0000; color: #ff0000; border-radius: 30px;">
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <h4 style="font-size: 20px; margin-bottom: 10px;"><?php echo e($error); ?></h4>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="auth-form__row">
                                    <div class="field">
                                        <label><?php echo e(__("Name and surname:")); ?></label>
                                        <input type="text" value="" name="name" id="register_frm_uLogin" required="">
                                    </div>
                                    <div class="field">
                                        <label><?php echo e(__("E-mail:")); ?></label>
                                        <input name="email" id="register_frm_uMail" value="" type="email" required="">
                                    </div>
                                </div>

                                <div class="auth-form__row">
                                    <div class="field">
                                        <label><?php echo e(__("Password:")); ?></label>
                                        <input name="password" id="register_frm_uPass" value="" type="password" required="">
                                    </div>
                                    <div class="field">
                                        <label><?php echo e(__("Repeat password:")); ?></label>
                                        <input name="password_confirmation" id="register_frm_Pass2" value="" type="password" required="">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="register_frm_uRef"><?php echo e(__("Financial password:")); ?> </label>
                                    <input name="fin_password" id="register_frm_uRef" value="" type="password"/>
                                </div>
                                <div class="field">
                                    <label for="register_frm_uRef"><?php echo e(__("Invite code:")); ?></label>
                                    <input name="invite" id="register_frm_uRef" value="<?php echo e(request('code') ?? old('code')); ?>" type="text"/>
                                </div>
                                <div class="field">
                                    <label for="country"><?php echo e(__("Country:")); ?></label>
                                    <select class="no-border" name="country">
                                        <option value="Russia"><?php echo e(__("Russia")); ?></option>
                                        <option value="United Kingdom"><?php echo e(__("United Kingdom")); ?></option>
                                        <option value="USA"><?php echo e(__("USA")); ?></option>
                                        <option value="Poland"><?php echo e(__("Poland")); ?></option>
                                        <option value="China"><?php echo e(__("China")); ?></option>
                                        <option value="Canada"><?php echo e(__("Canada")); ?></option>
                                        <option value="Japan"><?php echo e(__("Japan")); ?></option>
                                        <option value="Germany"><?php echo e(__("Germany")); ?></option>
                                        <option value="Switzerland"><?php echo e(__("Switzerland")); ?></option>
                                        <option value="Austria"><?php echo e(__("Austria")); ?></option>
                                        <option value="New Zealand"><?php echo e(__("New Zealand")); ?></option>
                                        <option value="Ukraine"><?php echo e(__("Ukraine")); ?></option>
                                        <option value="Sweden"><?php echo e(__("Sweden")); ?></option>
                                        <option value="Australia"><?php echo e(__("Australia")); ?></option>
                                        <option value="France"><?php echo e(__("France")); ?></option>
                                        <option value="Norway"><?php echo e(__("Norway")); ?></option>
                                        <option value="Singapore"><?php echo e(__("Singapore")); ?></option>
                                        <option value="Italy"><?php echo e(__("Italy")); ?></option>
                                        <option value="Finland"><?php echo e(__("Finland")); ?></option>
                                        <option value="Spain"><?php echo e(__("Spain")); ?></option>
                                        <option value="UAE"><?php echo e(__("UAE")); ?></option>
                                        <option value="Republic of Kazakhstan"><?php echo e(__("Kazakhstan")); ?></option>
                                    </select>
                                </div>
                                
                                <div class="field">
                                    <label class="checkbox" for="register_frm_Agree">
                                        <input type="checkbox" checked="checked" name="agreement" value="1">
                                        <span><p><?php echo e(__("I agree with")); ?>

                                                <a href="/terms" target="_blank"><?php echo e(__("terms and conditions APY")); ?></a></p>
                                        </span>
                                    </label>
                                </div>
                                <div class="auth-form__bottom">
                                    <button class="btn btn--primary-gr" type="submit" name="register_frm_btn"><span><?php echo e(__("Registration")); ?></span>
                                    </button>
                                    <p><?php echo e(__("Already have an account?")); ?> <a href="<?php echo e(route('login')); ?>"><?php echo e(__("Authorization")); ?></a></p></div>
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
        <div _ngcontent-c0="" class="page-content__content  user-page"><!---->
            <app-registration _nghost-c6=""><!---->
                <div class="user-page__auth auth g-page-wrap fadeInUp" data-show-animation="fadeInUp">
                    <div class="auth__content  g-content-wrap"><h2
                            class="auth__title">Регистрация</h2>
                        <!---->
                        <form method="post" action="<?php echo e(route('register')); ?>"
                              class="auth__form ng-untouched ng-pristine ng-invalid">
                            <?php echo csrf_field(); ?>
                            <ul class="errors">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="auth__inputs-wrap">
                                <div class="auth__form-group form-group"><label
                                        class="form-group__label"
                                        for="registr-input">Имя*</label><input
                                        class="form-group__input ng-untouched ng-pristine ng-invalid"
                                        name="name" id="registr-input" type="text"><!----></div>
                                <div class="auth__form-group form-group"><label
                                        class="form-group__label"
                                        for="registr-input-2">E-mail*</label><input
                                        class="form-group__input ng-untouched ng-pristine ng-invalid"
                                        name="email" id="registr-input-2" type="email"><!----></div>
                                <div class="auth__form-group form-group"><label
                                        class="form-group__label"
                                        for="registr-input-3">Пароль*</label><input
                                        class="form-group__input ng-untouched ng-pristine ng-invalid"
                                        name="password" id="registr-input-3" type="password"><!----></div>
                                <div class="auth__form-group form-group"><label
                                        class="form-group__label"
                                        for="registr-input-4">Подтверждение
                                        пароля*</label><input
                                        class="form-group__input ng-untouched ng-pristine ng-invalid"
                                        name="password_confirmation" id="registr-input-4"
                                        type="password"><!----><!----></div>
                                <div class="auth__form-group form-group"><label
                                        class="form-group__label"
                                        for="registr-input-5">Код приглашения</label>
                                    <div><input class="form-group__input"
                                                name="invite" value="<?php echo e(request()->get('code') ?? old('invite')); ?>"
                                                <?php if(request()->has('code')): ?> readonly <?php endif; ?>
                                                id="registr-input-5" type="text"></div>
                                </div>
                            </div><!---->

                            <button class="auth__btn btn" type="submit"><!---->Зарегистрироваться
                            </button>
                            <div class="auth__links">
                                <a href="<?php echo e(route('login')); ?>">Войти</a>
                            </div>
                        </form>
                    </div>
                </div><!----></app-registration>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nikita/Downloads/apy/apy-wallet.com/resources/views/auth/register.blade.php ENDPATH**/ ?>