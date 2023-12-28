<?php $__env->startSection('content'); ?>
    <style>.contact-us__social svg {
            fill: #000;
        }</style>
    <article class="main-layout__content"><!-- Begin page-->
        <section class="intro">
            <div class="container">
                <div class="intro__video-wrapper">
                    <?php if(app()->getLocale() == 'ru'): ?>
                        <video poster="<?php echo e(asset('media/poster(ru).png')); ?>" class="intro__video" autoplay muted playsinline>
                        </video>
                        <img style="max-width: 100%" src="<?php echo e(asset('media/poster(ru).png')); ?>" alt=""></div>
                    <?php elseif(app()->getLocale() == 'en'): ?>
                        <video poster="<?php echo e(asset('media/poster(eng).png')); ?>" class="intro__video" autoplay muted playsinline>
                        </video>
                        <img style="max-width: 100%" src="<?php echo e(asset('media/poster(eng).png')); ?>" alt=""></div>
                    <?php else: ?>
                        <video poster="<?php echo e(asset('media/poster(eng).png')); ?>" class="intro__video" autoplay muted playsinline>
                        </video>
                        <img style="max-width: 100%" src="<?php echo e(asset('media/poster(eng).png')); ?>" alt=""></div>
                    <?php endif; ?>
                    
                <div class="intro__col-left">
                    <div class="intro__title-wrapper"><h2 class="intro__title"><span
                                class="color-primary js-text-print"
                                data-text="<?php echo e(__('Profitable and affordable storage of cryptocurrency assets with APY Wallet')); ?>"></span></h2></div>
                    <div class="intro__description"><p><?php echo e(__('B55 is the easiest way to get stable profits')); ?></p></div>
                    <div class="intro__buttons">
                        <a class="btn btn--primary-gr intro__btn" href="<?php echo e(route('register')); ?>">
                            <span><?php echo e(__("Register for free")); ?></span></a>
                        <a class="btn btn--line-primary-gr intro__btn"
                                                           href="<?php echo e(route('page.company')); ?>"> <span><?php echo e(__("Learn more")); ?></span></a></div>
                    
                </div>
            </div>
        </section>
        <section class="statistics">
            <div class="container">
                <div class="statistics__row">
                    <div class="statistics__col-left"><h2
                            class="title title--small title--line statistics__title"><?php echo __("B55 financial <br>statistics"); ?>

                        </h2></div>
                    <div class="statistics__col-right">
                        <ul class="statistics__list">
                            <li><p class="statistics__value"><span class="js-count"
                                                                   data-count="30">30</span><small>K</small></p>
                                <div class="statistics__description"><p><?php echo e(__("over 30 thousand customers worldwide")); ?></p>
                                </div>
                            </li>
                            <li><p class="statistics__value"><span class="js-count"
                                                                   data-count="50">50</span><small>mln$</small>
                                </p>
                                <div class="statistics__description"><p><?php echo e(__("of daily trading volume")); ?> </p></div>
                            </li>
                            <li><p class="statistics__value"><span class="js-count"
                                                                   data-count="75">75</span><small>%</small></p>
                                <div class="statistics__description"><p><?php echo e(__("of customers recommend us to their friends")); ?></p></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="investments">
            <div class="container">
                <div class="investments__row">
                    <div class="investments__col">
                        <div class="investments__content"><h2 class="investments__title title"><span class="color-primary"><?php echo e(__("6 best offers for passive income within APY")); ?></span></h2>
                            <div class="investments__description"><p><?php echo e(__("Stake and earn - allows you to earn interest on your cryptocurrency by depositing it for a selected period of time.")); ?></p></div>
                        </div><!---->
                        <a href="<?php echo e(route('page.apybot')); ?>" style="color: #fff; text-decoration: none;">
                            <div class="investments-block investments-block--color-1">
                                <div class="lastPr"><?php echo e(__("BOT_percent")); ?><span><?php echo e(__("PROFIT LAST MONTH")); ?></span></div>
                                <style>.lastPr {
                                        border-radius: 100px 0 0 100px;
                                        position: relative;
                                        left: 50px;
                                        background: #1E2B4E;
                                        color: #fff;
                                        font-weight: bold;
                                        font-size: 30px;
                                        text-align: center;
                                        padding: 7px 0;
                                        margin-bottom: 10px;
                                    }

                                    .lastPr span {
                                        font-weight: normal;
                                        font-size: 13px;
                                        display: block;
                                        width: 100%;
                                    }</style>
                                <h4 class="investments-block__title"><?php echo e(__("APY trading bot")); ?></h4>
                                <ul class="investments-block__list">
                                    <li><?php echo e(__("BOT_detail_1")); ?></li>
                                    <li><?php echo e(__("BOT_detail_2")); ?></li>
                                    <li><?php echo e(__("BOT_detail_3")); ?></li>
                                    <li><?php echo e(__("BOT_detail_4")); ?></li>
                                </ul>
                            </div>
                        </a>
                        <a class="try-for-free" href="<?php echo e(route('register')); ?>"><span><?php echo e(__("Register account")); ?></span>

                        </a></div>
                    <div class="investments__col"><!---->
                        <a href="<?php echo e(route('page.defistaking')); ?>"
                                                            style="color: #fff; text-decoration: none;">
                            <div class="investments-block investments-block--color-2">
                                <div class="lastPr"><?php echo e(__("DeFi_percent")); ?><span><?php echo e(__("PROFIT LAST MONTH")); ?></span></div>
                                <h4 class="investments-block__title"><?php echo e(__("DeFi staking")); ?></h4>
                                <ul class="investments-block__list">
                                    <li><?php echo e(__("DeFi_detail_1")); ?></li>
                                    <li><?php echo e(__("DeFi_detail_2")); ?></li>
                                    <li><?php echo e(__("DeFi_detail_3")); ?></li>
                                </ul>
                                <div class="investments-block__indicator" data-percent="15">
                                    <div class="investments-block__indicator-top"><p
                                            class="investments-block__indicator-percent"></p></div>
                                    <div class="investments-block__indicator-bar"><span></span></div>
                                </div>
                            </div>
                        </a><!----><a href="<?php echo e(route('page.investIDO')); ?>"
                                      style="color: #000; text-decoration: none;">
                            <div class="investments-block investments-block--color-3"><h4
                                    class="investments-block__title"><?php echo e(__("Investments in IDO")); ?></h4>
                                <ul class="investments-block__list">
                                    <li><?php echo e(__("IDO_detail_1")); ?></li>
                                    <li><?php echo e(__("IDO_detail_2")); ?></li>
                                </ul>
                                <div class="investments-block__indicator" data-percent="15">
                                    <div class="investments-block__indicator-top"><p
                                            class="investments-block__indicator-percent"></p></div>
                                    <div class="investments-block__indicator-bar"><span></span></div>
                                </div>
                            </div>
                        </a></div>
                    <div class="investments__col"><!---->
                        <a href="<?php echo e(route('page.staking')); ?>"
                                                            style="color: #000; text-decoration: none;">
                            <div class="investments-block investments-block--color-4">
                                <div class="lastPr"><?php echo e(__("APY_percent")); ?><span><?php echo e(__("PROFIT LAST MONTH")); ?></span></div>
                                <h4 class="investments-block__title"><?php echo e(__("APY staking")); ?></h4>
                                <ul class="investments-block__list">
                                    <li><?php echo e(__("APY_detail_1")); ?></li>
                                    <li><?php echo e(__("APY_detail_2")); ?></li>
                                    <li><?php echo e(__("APY_detail_3")); ?></li>
                                    <li><?php echo e(__("APY_detail_4")); ?></li>
                                </ul>
                                <div class="investments-block__indicator" data-percent="48">
                                    <div class="investments-block__indicator-top"><p
                                            class="investments-block__indicator-percent"></p></div>
                                    <div class="investments-block__indicator-bar"><span></span></div>
                                </div>
                            </div>
                        </a><!----><a href="<?php echo e(route('page.liquidity')); ?>" style="color: #000; text-decoration: none;">
                            <div class="investments-block investments-block--color-5">
                                <div class="lastPr"><?php echo e(__("liq_percent")); ?><span><?php echo e(__("PROFIT LAST MONTH")); ?></span></div>
                                <h4 class="investments-block__title"><?php echo e(__("Liquidity pools")); ?></h4>
                                <ul class="investments-block__list">
                                    <li><?php echo e(__("liq_detail_1")); ?></li>
                                    <li><?php echo e(__("liq_detail_2")); ?></li>
                                </ul>
                            </div>
                        </a><!----><a href="<?php echo e(route('page.classicstaking')); ?>" style="color: #fff; text-decoration: none;">
                            <div class="investments-block investments-block--color-6">
                                <div class="lastPr"><?php echo e(__("land_percent")); ?><span><?php echo e(__("PROFIT LAST MONTH")); ?></span></div>
                                <h4 class="investments-block__title"><?php echo e(__("Classic Staking")); ?></h4>
                                <ul class="investments-block__list">
                                    <li><?php echo e(__("land_detail_1")); ?></li>
                                    <li><?php echo e(__("land_detail_2")); ?></li>
                                </ul>
                            </div>
                        </a></div>
                </div>
            </div>
        </section>
        <section class="how-deposit">
            <div class="container">
                <div class="how-deposit__row">
                    <div class="how-deposit__col"><h2 class="title title--small title--line how-deposit__title">
                            <?php echo e(__("How to create a deposit?")); ?></h2>
                        <ol class="numbers-list">
                            <li><?php echo e(__("Create an account on the company website")); ?></li>
                            <li><?php echo e(__("Log into your account")); ?></li>
                            <li><?php echo e(__("Choose an investment strategy of interest")); ?></li>
                            <li><?php echo e(__("Select a payment system and amount")); ?></li>
                            <li><?php echo e(__("Make a payment")); ?></li>
                            <li><?php echo e(__("Start making profit every day!")); ?></li>
                        </ol>
                        <div class="how-deposit__buttons">
                            <a class="btn btn--primary-gr how-deposit__btn"
                                                             href="<?php echo e(route('register')); ?>"> <span><?php echo e(__("Create a deposit")); ?></span></a>
                        </div>
                    </div>
                    <div class="how-deposit__col">
                        <div class="how-deposit__notebook" style="opacity: 1; visibility: inherit; transform: translate(0px);">
                            <?php if(app()->getLocale() == 'ru'): ?>
                                <img src="<?php echo e(asset('assets/images/investments/notebook(ru).png')); ?>" alt="">
                            <?php elseif(app()->getLocale() == 'en'): ?>
                                <img src="<?php echo e(asset('assets/images/investments/notebook(eng).png')); ?>" alt="">
                            <?php else: ?>
                                <img src="<?php echo e(asset('assets/images/investments/notebook(eng).png')); ?>" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="earn">
            <div class="container">
                <div class="earn__content"><h2 class="title earn__title"><span class="color-primary"><?php echo e(__("Earn more together with your friends!")); ?> </span></h2>
                    <div class="earn__description"><p><?php echo e(__("More than 75% of our clients invite their friends from all over the world and receive additional profits.")); ?></p></div>
                    <div class="earn__buttons"><a class="btn btn--primary-gr earn__btn" href="<?php echo e(route('page.ref')); ?>"> <span><?php echo e(__("Learn more")); ?></span></a>
                    </div>
                </div>
                <svg class="earn__map" viewbox="0 0 1661 798" style="enable-background:new 0 0 1661 798"
                     xml:space="preserve">
                    <image class="img-map" style="overflow:visible" width="1537"
                                                 height="798" xlink:href="assets/images/growing/9C88C843.png"
                                                 transform="translate(96)"></image>
                    
                    <ellipse class="st1" cx="201.5" cy="194.1" rx="7.5" ry="6.9"></ellipse>
                    <ellipse cx="400.5" cy="418.1" rx="7.5" ry="6.9" style="fill:#74cbf2"></ellipse>
                    <ellipse class="st1" cx="1346.5" cy="501.1" rx="7.5" ry="6.9"></ellipse>
                    <path
                        d="M1511.5 476.1c-4.1 0-7.5 3.1-7.5 6.9s3.3 6.9 7.5 6.9 7.5-3.1 7.5-6.9-3.4-6.9-7.5-6.9z"
                        style="fill:#a2a8f1"></path>
                    <path class="st1"
                          d="M1446.5 187.1c-4.1 0-7.5 3.1-7.5 6.9 0 3.8 3.3 6.9 7.5 6.9s7.5-3.1 7.5-6.9c-.1-3.8-3.4-6.9-7.5-6.9z"></path></svg>
            </div>
        </section>
        <section class="why-would">
            <div class="container">
                <div class="why-would__row">
                    <div class="why-would__col"></div>
                    <div class="why-would__col"><h2 class="title why-would__title"><?php echo e(__("Why B55?")); ?></h2></div>
                </div>
                <div class="why-would__row">
                    <div class="why-would__col">
                        <ul class="why-would__list">
                            <li><p class="why-would__value">99<small>%</small></p>
                                <div class="why-would__description"><?php echo e(__("of invested funds are in 24/7 turnover")); ?></div>
                            </li>
                            <li><p class="why-would__value">132<small>K</small></p>
                                <div class="why-would__description"><?php echo e(__("in 24 hours")); ?></div>
                            </li>
                            <li><p class="why-would__value">321</p>
                                <div class="why-would__description"><?php echo __("new clients a day<br> on average"); ?></div>
                            </li>
                        </ul>
                    </div>
                    <div class="why-would__col">
                        <div class="why-would__typography typography"><p><strong><?php echo e(__("B55_info_1")); ?> </strong></p>
                            <p><?php echo e(__("B55_info_2")); ?> </p></div>
                        <div class="advantages-swiper">
                            <div class="swiper-container js-advantages-swiper swiper-no-swiping">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="advantages-item">
                                            <div class="advantages-item__icon">
                                                <svg class="svg-icon">
                                                    <use href="assets/icons/sprite.svg#icon-chat"></use>
                                                </svg>
                                            </div>
                                            <p class="advantages-item__text"><?php echo e(__("Convenient interface")); ?></p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="advantages-item">
                                            <div class="advantages-item__icon">
                                                <svg class="svg-icon">
                                                    <use href="assets/icons/sprite.svg#icon-doc"></use>
                                                </svg>
                                            </div>
                                            <p class="advantages-item__text"><?php echo e(__("Protection and reliability")); ?></p></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="advantages-item">
                                            <div class="advantages-item__icon">
                                                <svg class="svg-icon">
                                                    <use href="assets/icons/sprite.svg#icon-file"></use>
                                                </svg>
                                            </div>
                                            <p class="advantages-item__text"><?php echo e(__("License availability")); ?></p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-team">
            <div class="container">
                <div class="our-team__row">
                    <div class="our-team__col"><a class="media-block" href="http://vimeo.com/767749676"
                                                  data-fancybox="our-team"><img
                                src="<?php echo e(asset('media/promo_preview.jpg')); ?>" alt=""></a></div>
                    <div class="our-team__col">
                        <div class="our-team__content"><h2 class="title title--small our-team__title"><?php echo e(__("Our team")); ?></h2>
                            <div class="our-team__typography typography"><p><strong><?php echo e(__("B55_team_1")); ?> </strong></p>
                                <p><?php echo e(__("B55_team_2")); ?> </p></div>
                        </div>
                    </div>
                </div>
                <div class="team-swiper">
                    <div class="swiper-container js-team-swiper swiper-no-swiping">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/1-1.jpg" alt=""></div>
                                    <p class="team-item__name">Clara Fowler</p>
                                    <p class="team-item__description"><?php echo e(__("Founder")); ?></p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/2.jpg" alt=""></div>
                                    <p class="team-item__name">Juniper Mckinney</p>
                                    <p class="team-item__description"><?php echo e(__("Founder")); ?></p>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/3.jpg" alt=""></div>
                                    <p class="team-item__name">Sam Doughty</p>
                                    <p class="team-item__description"><?php echo e(__("Adviser")); ?></p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/4.jpg" alt=""></div>
                                    <p class="team-item__name">Brandon Burum</p>
                                    <p class="team-item__description">CTO</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/5.jpg" alt=""></div>
                                    <p class="team-item__name">Brent Woods</p>
                                    <p class="team-item__description"><?php echo e(__("Creative Director")); ?></p>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/6.jpg" alt=""></div>
                                    <p class="team-item__name">Shanda Will</p>
                                    <p class="team-item__description"><?php echo e(__("Communications & PR")); ?></p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/7.jpg" alt=""></div>
                                    <p class="team-item__name">Moris Hudson</p>
                                    <p class="team-item__description"><?php echo e(__("Partnership")); ?></p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/8.jpg" alt=""></div>
                                    <p class="team-item__name">Lizbeth Wade</p>
                                    <p class="team-item__description"><?php echo e(__("Brand")); ?></p>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/9.jpg" alt=""></div>
                                    <p class="team-item__name">Aron Waters</p>
                                    <p class="team-item__description"><?php echo e(__("CFO")); ?></p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/10.jpg" alt=""></div>
                                    <p class="team-item__name">Curtis Bond</p>
                                    <p class="team-item__description"><?php echo e(__("COO")); ?></p>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/11.jpg" alt=""></div>
                                    <p class="team-item__name">Julie Randall</p>
                                    <p class="team-item__description"><?php echo e(__("CCO")); ?></p>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <div class="team-item__image"><img src="images/team/12.jpg" alt=""></div>
                                    <p class="team-item__name">Justina Johnson</p>
                                    <p class="team-item__description"><?php echo e(__("Content")); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="media-about">
            <div class="container"><h2 class="title media-about__title"><?php echo e(__("THEY TALK")); ?> <span class="color-primary"> <?php echo e(__("ABOUT US …")); ?></span>
                </h2>
                <div class="media-about__swiper">
                    <div class="swiper-container js-media-about-swiper swiper-no-swiping">
                        <div class="media-about__swiper-right" ref="next">

                        </div>
                        <div class="media-about__swiper-left" ref="prev">

                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><a href="https://medium.com/@apywellys23/apy-wallet-a9eed9dca508"
                                                         target="_blank"
                                                         style="text-decoration: none; color: #4A4A4A;">
                                    <div class="media-about-item">
                                        <div class="media-about-item__icon"><img
                                                src="<?php echo e(asset('assets/images/media-about/quote.png')); ?>" alt=""></div>
                                        <div class="media-about-item__description">
                                            <h4 style="margin-bottom: 10px; font-weight:bold;">About multi-currency crypto wallet</h4>
                                            <p>APY is a cryptocurrency exchange that combines advanced financial tools with decentralization. The main functionality of the wallet is based on built -in swaps (which allow users to trade cryptocurrency from the inside of their wallet).</p></div>
                                        <div class="media-about-item__image"><img
                                                src="<?php echo e(asset('assets/images/media-about/medium-logo.png')); ?>"
                                                style="width: 190px;"></div>
                                    </div>
                                </a></div>
                            <div class="swiper-slide"><a
                                    href="https://medium.com/@apy_wallet/apy-crypto-lending-99993d9e58a3"
                                    target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                    <div class="media-about-item">
                                        <div class="media-about-item__icon"><img
                                                src="<?php echo e(asset('assets/images/media-about/quote.png')); ?>" alt=""></div>
                                        <div class="media-about-item__description">
                                            <h5 style="margin-bottom: 10px; font-weight:bold;">APY Crypto Lending</h5>
                                            <p>The advent of crypto lending was a crucial breakthrough in DeFi. Lenders could suddenly generate passive yields from formerly illiquid assets. Borrowers could immediately receive cash for....</p></div>
                                        <div class="media-about-item__image"><img
                                                src="<?php echo e(asset('assets/images/media-about/medium-logo.png')); ?>" style="width: 150px;">
                                        </div>
                                    </div>
                                </a></div>
                            <div class="swiper-slide"><a
                                    href="https://medium.com/@apy_wallet/apy-liquidity-pools-1f1ddec12740"
                                    target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                    <div class="media-about-item">
                                        <div class="media-about-item__icon"><img
                                                src="<?php echo e(asset('assets/images/media-about/quote.png')); ?>" alt=""></div>
                                        <div class="media-about-item__description">
                                            <h5 style="margin-bottom: 10px; font-weight:bold;">APY Liquidity Pools</h5>
                                            <p>Liquidity pools are one of the foundational technologies behind the current DeFi ecosystem. They are an essential part of automated market makers..</p></div>
                                        <div class="media-about-item__image">
                                            <img src="<?php echo e(asset('assets/images/media-about/medium-logo.png')); ?>" style="width: 200px;">
                                        </div>
                                    </div>
                                </a></div>
                            <div class="swiper-slide"><a
                                    href="https://medium.com/@apy_wallet/apy-defi-staking-96581684662b"
                                    target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                    <div class="media-about-item">
                                        <div class="media-about-item__icon"><img
                                                src="<?php echo e(asset('assets/images/media-about/quote.png')); ?>" alt=""></div>
                                        <div class="media-about-item__description">
                                            <h5 style="margin-bottom: 10px; font-weight:bold;">APY De-Fi staking</h5>
                                            <p>DeFi staking is the process of locking crypto assets into a smart contract in exchange for rewards and generating passive income...</p></div>
                                        <div class="media-about-item__image">
                                            <img src="<?php echo e(asset('assets/images/media-about/medium-logo.png')); ?>" style="width: 200px;">
                                        </div>
                                    </div>
                                </a></div>
                            <div class="swiper-slide"><a
                                    href="https://medium.com/@apy_wallet/apy-wallet-idos-cb9f8e6a441d"
                                    target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                    <div class="media-about-item">
                                        <div class="media-about-item__icon"><img
                                                src="<?php echo e(asset('assets/images/media-about/quote.png')); ?>" alt=""></div>
                                        <div class="media-about-item__description">
                                            <h5 style="margin-bottom: 10px; font-weight:bold;">APY Wallet IDOs</h5>
                                            <p>An initial DEX offering, or IDO, is a new and exciting type of decentralized and permissionless crowdfunding platform..</p></div>
                                        <div class="media-about-item__image">
                                            <img src="<?php echo e(asset('assets/images/media-about/medium-logo.png')); ?>" style="width: 200px;">
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </section>




















































        <section class="faq">
            <div class="container">
                <ul class="accordion">
                    <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("How does it work?")); ?> </span>
                        </h4>
                        <div data-accordion="content-container">
                            <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_1")); ?> </p></div>
                        </div>
                    </li>
                    <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("What is the minimum amount to top up the wallet?")); ?></span>
                        </h4>
                        <div data-accordion="content-container">
                            <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_2")); ?> </p></div>
                        </div>
                    </li>
                    <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("What is the withdrawal processing time?")); ?></span>
                        </h4>
                        <div data-accordion="content-container">
                            <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_3")); ?> </p></div>
                        </div>
                    </li>
                    <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("When will I be able to withdraw my assets from staking?")); ?></span>
                        </h4>
                        <div data-accordion="content-container">
                            <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_4")); ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("How much will I earn if I invite a friend to the company?")); ?></span>
                        </h4>
                        <div data-accordion="content-container">
                            <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_5")); ?> </p></div>
                        </div>
                    </li>
                    <li class="accordion__item"><h4 class="accordion__title" data-accordion="trigger"><span><?php echo e(__("Should I invest to earn money in the partner program?")); ?></span>
                        </h4>
                        <div data-accordion="content-container">
                            <div class="accordion__content typography" data-accordion="content"><p><?php echo e(__("B55_A_6")); ?> </p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="contact-us" id="contact-us">
            <div class="container">
                <div class="contact-us__content">
                    <div class="contact-us__content-text typography"><p>125 Sandhurst Road, London, England, NW9 9LL</p></div>
                    <div class="contact-us-form">
                        <form class="support-form" action="<?php echo e(route('support.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <h3 class="contact-us-form__title"><?php echo e(__("Contact Us")); ?></h3>
                            <div class="contact-us-form__field field">
                                <label><?php echo e(__("Topic")); ?></label>
                                <input type="text" name="topic">
                            </div>
                            <div class="contact-us-form__field field">
                                <label>E-mail*</label>
                                <input type="text" name="email">
                            </div>
                            <div class="contact-us-form__field field">
                                <label><?php echo e(__("Message")); ?></label>
                                <input type="text" name="message">
                            </div>
                            <button class="contact-us-form__btn btn" type="submit">
                                <span><?php echo e(__("Send Message")); ?></span>
                            </button>
                        </form>
                    </div>
                    <ul class="contact-us__social social">
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

                        <li class="interfaceLink interfaceLink1"><a href="<?php echo e(route('lang', 'en')); ?>">
                                <img src="<?php echo e(asset('images/flags/gb.png')); ?>" alt="">
                            </a></li>
                        <li class="interfaceLink interfaceLink1"><a href="<?php echo e(route('lang', 'ru')); ?>">
                                <img src="<?php echo e(asset('images/flags/ru.png')); ?>" alt="">
                            </a></li>
                        <style>
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
                        </style>
                    </ul>
                </div>
            </div>
            <div class="contact-us__map" style="display:flex;" id="map" data-lat="51.0667758" data-lng="-1.327379"
                 data-zoom="16">
                 <iframe width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=125%20Sandhurst%20Road,%20London,%20England,%20NW9%209LL+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

                </div>
        </section><!-- End page  --></article>
<?php $__env->stopSection(); ?>
































<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/welcome.blade.php ENDPATH**/ ?>