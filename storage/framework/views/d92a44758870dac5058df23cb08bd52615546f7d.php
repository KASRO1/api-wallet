<div class="mobile-menu">
    <div class="mobile-menu__close">
        <?php echo $__env->make('cabinet.new.icons.arrow-back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="mobile-menu__inner">
        <?php if(auth()->guard()->guest()): ?>
            <div class="mobile-menu__top">
                <a class="btn btn--calypso btn--size-small mobile-menu__btn" href="<?php echo e(route('login')); ?>">
                    <span><?php echo e(__("Log in")); ?></span></a>
                <a class="btn btn--calypso btn--line-black btn--size-small mobile-menu__btn"
                   href="<?php echo e(route('register')); ?>"> <span><?php echo e(__("Sign Up")); ?></span></a>
            </div>
        <?php endif; ?>
            <?php if(auth()->guard()->check()): ?>
                <div class="mobile-menu__top">
                    <form action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn--calypso btn--size-small mobile-menu__btn">
                            <span><?php echo e(__("Log out")); ?></span>
                        </button>
                    </form>

                </div>
            <?php endif; ?>
        <div class="profile-navigation"><a class="profile-navigation__user" href="<?php echo e(route('cabinet')); ?>">
                <span class="profile-navigation__avatar"> <img src="<?php echo e(asset('assets/images/profile/ava.png')); ?>" alt=""></span>
                <span class="profile-navigation__username"><?php if(auth()->guard()->check()): ?> <?php echo e(auth()->user()->name); ?> <?php endif; ?> </span>
            </a>
            <ul class="profile-navigation__list">
                <li><a href="<?php echo e(route('cabinet')); ?>">
                                <span class="svg-icon">
                                    <?php echo $__env->make('cabinet.new.icons.user-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </span>
                        <span><?php echo e(__("Account")); ?></span></a></li>
                <li><a href="<?php echo e(route('cabinet.deposits')); ?>">
                                <span class="svg-icon">
                                    <?php echo $__env->make('cabinet.new.icons.deposit-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </span>
                        <span><?php echo e(__("My deposits")); ?></span></a></li>
                <li><a href="<?php echo e(route('cabinet.conversion')); ?>">
                                <span class="svg-icon">
                                    <?php echo $__env->make('cabinet.new.icons.swap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </span>
                        <span><?php echo e(__("Swap")); ?> </span></a></li>
                <li><a href="<?php echo e(route('cabinet.withdraw')); ?>">
                                <span class="svg-icon">
                                    <?php echo $__env->make('cabinet.new.icons.withdraw-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </span>
                        <span><?php echo e(__("Funds withdrawal")); ?></span></a></li>
                <li><a href="<?php echo e(route('cabinet.deals')); ?>">
                                <span class="svg-icon">
                                    <?php echo $__env->make('cabinet.new.icons.transaction-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </span>
                        <span><?php echo e(__("My transactions")); ?></span></a></li>
                <li><a href="<?php echo e(route('cabinet.wallet')); ?>">
                                <span class="svg-icon">
                                    <?php echo $__env->make('cabinet.new.icons.wallets-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </span>
                        <span><?php echo e(__("My wallets")); ?></span></a></li>
                <li><a href="<?php echo e(route('cabinet.account')); ?>">
                                <span class="svg-icon">
                                    <?php echo $__env->make('cabinet.new.icons.settings-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </span>
                        <span><?php echo e(__("Settings")); ?></span></a></li>
            </ul>
        </div>
        <nav class="mobile-menu__nav">
            <ul>
                <li><a href="<?php echo e(route('page.company')); ?>"><?php echo e(__("Company")); ?></a></li>
                <li><a href="<?php echo e(route('page.apybot')); ?>"><?php echo e(__("Investments")); ?></a></li>
                <li><a href="<?php echo e(route('page.ref')); ?>"><?php echo e(__("Ref Program")); ?></a></li>
                <li><a href="<?php echo e(route('page.token')); ?>"><?php echo e(__("Token")); ?></a></li>
            </ul>
        </nav>
        <div class="social">
            <ul>
                <li><a href="https://twitter.com/apy_wallet" target="_blank">
                        <?xml version="1.0" encoding="iso-8859-1"?>
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 310 310"  xml:space="preserve">
<g id="XMLID_826_">
    <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
C307.394,57.037,305.009,56.486,302.973,57.388z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                    </a>
                </li>
                <li><a href="https://t.me/apy_wallet" target="_blank">
                        <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.4193 7.30899C41.4193 7.30899 45.3046 5.79399 44.9808 9.47328C44.8729 10.9883 43.9016 16.2908 43.1461 22.0262L40.5559 39.0159C40.5559 39.0159 40.3401 41.5048 38.3974 41.9377C36.4547 42.3705 33.5408 40.4227 33.0011 39.9898C32.5694 39.6652 24.9068 34.7955 22.2086 32.4148C21.4531 31.7655 20.5897 30.4669 22.3165 28.9519L33.6487 18.1305C34.9438 16.8319 36.2389 13.8019 30.8426 17.4812L15.7331 27.7616C15.7331 27.7616 14.0063 28.8437 10.7686 27.8698L3.75342 25.7055C3.75342 25.7055 1.16321 24.0823 5.58815 22.459C16.3807 17.3729 29.6555 12.1786 41.4193 7.30899Z"/>
                        </svg>

                    </a>
                </li>
                <li><a href="https://vk.com/apy_wallet" target="_blank">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m23.456 5.784c-.27.849-.634 1.588-1.09 2.259l.019-.03q-.672 1.12-1.605 2.588-.8 1.159-.847 1.2c-.138.173-.234.385-.267.618l-.001.007c.027.212.125.397.268.535l.4.446q3.21 3.299 3.611 4.548c.035.092.055.198.055.309 0 .194-.062.373-.167.52l.002-.003c-.176.181-.422.293-.694.293-.03 0-.061-.001-.09-.004h.004-2.631c-.001 0-.003 0-.005 0-.337 0-.647-.118-.89-.314l.003.002c-.354-.291-.669-.606-.951-.948l-.009-.012q-.691-.781-1.226-1.315-1.782-1.694-2.63-1.694c-.021-.002-.045-.003-.07-.003-.165 0-.319.051-.446.138l.003-.002c-.104.13-.167.298-.167.479 0 .036.002.07.007.105v-.004c-.027.314-.043.679-.043 1.048 0 .119.002.237.005.355v-.017 1.159c.01.047.016.101.016.156 0 .242-.11.458-.282.601l-.001.001c-.387.177-.839.281-1.316.281-.102 0-.202-.005-.301-.014l.013.001c-1.574-.03-3.034-.491-4.275-1.268l.035.02c-1.511-.918-2.763-2.113-3.717-3.525l-.027-.042c-.906-1.202-1.751-2.56-2.471-3.992l-.07-.154c-.421-.802-.857-1.788-1.233-2.802l-.06-.185c-.153-.456-.264-.986-.31-1.535l-.002-.025q0-.758.892-.758h2.63c.024-.002.052-.003.081-.003.248 0 .477.085.658.228l-.002-.002c.2.219.348.488.421.788l.003.012c.484 1.367.997 2.515 1.587 3.615l-.067-.137c.482.97 1.015 1.805 1.623 2.576l-.023-.031q.8.982 1.248.982c.009.001.02.001.032.001.148 0 .277-.08.347-.2l.001-.002c.074-.19.117-.411.117-.641 0-.049-.002-.098-.006-.146v.006-3.879c-.021-.457-.133-.884-.32-1.267l.008.019c-.124-.264-.273-.492-.45-.695l.003.004c-.164-.164-.276-.379-.311-.619l-.001-.006c0-.17.078-.323.2-.423l.001-.001c.121-.111.283-.178.46-.178h.008 4.146c.022-.003.047-.004.073-.004.195 0 .37.088.486.226l.001.001c.103.188.164.413.164.651 0 .038-.002.075-.005.112v-.005 5.173c-.002.024-.003.052-.003.08 0 .184.051.357.139.504l-.002-.004c.073.108.195.178.333.178h.001c.176-.012.336-.07.471-.162l-.003.002c.272-.187.506-.4.709-.641l.004-.005c.607-.686 1.167-1.444 1.655-2.25l.039-.07c.344-.57.716-1.272 1.053-1.993l.062-.147.446-.892c.155-.446.571-.76 1.06-.76.019 0 .038 0 .057.001h-.003 2.631q1.066 0 .8.981z"/></svg>
                    </a>
                </li>
            </ul>

            <ul>
                <li class="interfaceLink interfaceLink1">
                    <a <?php if(App::isLocale("en")): ?> style="border: 2px solid #2d4077" <?php endif; ?> href="<?php echo e(route('lang', 'en')); ?>">
                        <img src="<?php echo e(asset('images/flags/gb.png')); ?>" alt="">
                    </a></li>
                <li class="interfaceLink">
                    <a <?php if(App::isLocale("ru")): ?> style="border: 2px solid #2d4077" <?php endif; ?> href="<?php echo e(route('lang', 'ru')); ?>">
                        <img src="<?php echo e(asset('images/flags/ru.png')); ?>" alt="">
                    </a></li>

                <style>
                    .mobile-menu .social{
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                    }
                    .mobile-menu .social ul:first-child{
                        margin: 10px 0 0;
                    }
                    .interfaceLink a {
                        width: auto;
                        height: auto;
                        text-decoration: none;
                    }

                    .interfaceLink1 a {
                        margin-left: 15px;
                    }

                    .interfaceLink a:hover {
                        color: #000;
                    }

                    .interfaceLink a img {
                        width: 27px;
                        height: 20px;
                    }
                    .header__user-ico{
                        max-width: 30px;
                        margin-right: 10px;
                    }
                    .header__user-ico svg{
                        width: 30px;
                    }
                    .header__user-link{
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        text-decoration: none;
                    }
                </style>
            </ul>
        </div>

    </div>
</div>
<?php /**PATH /Users/nikita/Downloads/apy/apy-wallet.com/resources/views/components/_mobile-nav.blade.php ENDPATH**/ ?>