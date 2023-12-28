<?php $__env->startSection('content'); ?>
<article class="main-layout__content"><!-- Begin page-->
    <section class="company">
        <div class="container">
            <h1 class="company__title title"><?php echo e(__("APY Technology")); ?></h1>
            <div class="company__text typography">
                <p><strong><?php echo __("B55_comp_1"); ?> </strong></p>
                <p><?php echo __("B55_comp_2"); ?> </p>
                <p> <?php echo __("B55_comp_3"); ?> </p>
                <p> <?php echo __("B55_comp_4"); ?> </p>
            </div>
            <div class="statistics company__statistics">
                <div class="statistics__row">
                    <div class="statistics__col-left">
                        <h2 class="title title--small title--line statistics__title"><?php echo e(__("B55 finance statistics and information")); ?></h2>
                    </div>
                    <div class="statistics__col-right">
                        <ul class="statistics__list">
                            <li>
                                <p class="statistics__value"><span class="js-count" data-count="30">30</span><small>K</small></p>
                                <div class="statistics__description">
                                    <p><?php echo e(__("over 30 thousand customers worldwide")); ?></p>
                                </div>
                            </li>
                            <li>
                                <p class="statistics__value"><span class="js-count" data-count="50">50</span><small>mln$</small>
                                </p>
                                <div class="statistics__description">
                                    <p><?php echo e(__("of daily trading volume")); ?> </p>
                                </div>
                            </li>
                            <li>
                                <p class="statistics__value"><span class="js-count" data-count="75">75</span><small>%</small></p>
                                <div class="statistics__description">
                                    <p><?php echo e(__("of customers recommend us to their friends")); ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="documents">
        <div class="container">
            <div class="documents__swiper swiper-container js-documents-swiper swiper-no-swiping">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="documents__row">
                            <div class="documents__col">
                                <div class="documents__media"><img class="documents__image" src="<?php echo e(asset('pdf/doc2.png')); ?>" alt="" role="presentation" /></div>
                            </div>
                            <div class="documents__col">
                                <div class="documents__content">
                                    <h2 class="documents__title title"><span class="color-primary"><?php echo e(__("APY information document")); ?> </span></h2>
                                    <div class="documents__text typography">
                                        <p><?php echo __("legal_address"); ?></p>
                                    </div>
                                    <a class="doc-link" href="<?php echo e(asset('pdf/apy_wallet_docs.pdf')); ?>" download="download">
                                        <span><?php echo e(__("Download PDF")); ?></span><span class="doc-link__icon"><svg class="svg-icon">
                                                <use href="assets/icons/sprite.svg#icon-pdf"></use>
                                            </svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="documents__row">
                            <div class="documents__col">
                                <div class="documents__media"><img class="documents__image" src="<?php echo e(asset('pdf/doc.png')); ?>" alt="" role="presentation" /></div>
                            </div>
                            <div class="documents__col">
                                <div class="documents__content">
                                    <h2 class="documents__title title"><span class="color-primary"><?php echo e(__("APY information document")); ?> </span></h2>
                                    <div class="documents__text typography">
                                        <p><?php echo __("legal_address"); ?> </p>
                                    </div>
                                    <a class="doc-link" href="<?php echo e(asset('pdf/apy_wallet_docs.pdf')); ?>" download="download">
                                        <span><?php echo e(__("Download PDF")); ?></span><span class="doc-link__icon"><svg class="svg-icon">
                                                <use href="assets/icons/sprite.svg#icon-pdf"></use>
                                            </svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="documents__swiper-arrows">
                    <div style="transform: rotate(180deg)" class="documents__swiper-left" ref="prev">
                        <?php echo $__env->make('cabinet.new.icons.arrow-back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div style="transform: rotate(180deg)" class="documents__swiper-right" ref="next">
                        <?php echo $__env->make('cabinet.new.icons.arrow-back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="media-about">
        <div class="container">
            <h2 class="title media-about__title"><?php echo e(__("THEY TALK")); ?> <span class="color-primary"> <?php echo e(__("ABOUT US …")); ?></span>
            </h2>
            <div class="media-about__swiper">
                <div class="swiper-container js-media-about-swiper swiper-no-swiping">
                    <div class="media-about__swiper-right" ref="next">
                        <svg class="svg-icon">
                            <use href="assets/icons/sprite.svg#icon-arrow2"></use>
                        </svg>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a href="https://medium.com/@apywellys23/apy-wallet-a9eed9dca508" target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img src="<?php echo e(asset('assets/images/media-about/quote.png')); ?>" alt=""></div>
                                    <div class="media-about-item__description">
                                        <h4 style="margin-bottom: 10px; font-weight:bold;">About multi-currency crypto wallet</h4>
                                        <p>APY is a cryptocurrency exchange that combines advanced financial tools with decentralization. The main functionality of the wallet is based on built -in swaps (which allow users to trade cryptocurrency from the inside of their wallet).</p>
                                    </div>
                                    <div class="media-about-item__image"><img src="<?php echo e(asset('assets/images/media-about/medium-logo.png')); ?>" style="width: 190px;"></div>
                                </div>
                            </a></div>
                        <div class="swiper-slide"><a href="https://medium.com/@apy_wallet/apy-crypto-lending-99993d9e58a3" target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img src="<?php echo e(asset('assets/images/media-about/quote.png')); ?>" alt=""></div>
                                    <div class="media-about-item__description">
                                        <h5 style="margin-bottom: 10px; font-weight:bold;">APY Crypto Lending</h5>
                                        <p>The advent of crypto lending was a crucial breakthrough in DeFi. Lenders could suddenly generate passive yields from formerly illiquid assets. Borrowers could immediately receive cash for....</p>
                                    </div>
                                    <div class="media-about-item__image"><img src="<?php echo e(asset('assets/images/media-about/medium-logo.png')); ?>" style="width: 150px;">
                                    </div>
                                </div>
                            </a></div>
                        <div class="swiper-slide"><a href="https://medium.com/@apy_wallet/apy-liquidity-pools-1f1ddec12740" target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img src="<?php echo e(asset('assets/images/media-about/quote.png')); ?>" alt=""></div>
                                    <div class="media-about-item__description">
                                        <h5 style="margin-bottom: 10px; font-weight:bold;">APY Liquidity Pools</h5>
                                        <p>Liquidity pools are one of the foundational technologies behind the current DeFi ecosystem. They are an essential part of automated market makers..</p>
                                    </div>
                                    <div class="media-about-item__image">
                                        <img src="<?php echo e(asset('assets/images/media-about/medium-logo.png')); ?>" style="width: 200px;">
                                    </div>
                                </div>
                            </a></div>
                        <div class="swiper-slide"><a href="https://medium.com/@apy_wallet/apy-defi-staking-96581684662b" target="_blank" style="text-decoration: none; color: #4A4A4A;">
                                <div class="media-about-item">
                                    <div class="media-about-item__icon"><img src="<?php echo e(asset('assets/images/media-about/quote.png')); ?>" alt=""></div>
                                    <div class="media-about-item__description">
                                        <h5 style="margin-bottom: 10px; font-weight:bold;">APY De-Fi staking</h5>
                                        <p>DeFi staking is the process of locking crypto assets into a smart contract in exchange for rewards and generating passive income...</p>
                                    </div>
                                    <div class="media-about-item__image">
                                        <img src="<?php echo e(asset('assets/images/media-about/medium-logo.png')); ?>" style="width: 200px;">
                                    </div>
                                </div>
                            </a></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-team our-team--light">
        <div class="container">
            <div class="our-team__row">
                <div class="our-team__col">
                    <a class="media-block" href="http://vimeo.com/767749676" data-fancybox="our-team">
                        <img src="<?php echo e(asset('media/promo_preview.jpg')); ?>" alt="">
                    </a>
                </div>
                <div class="our-team__col">
                    <div class="our-team__content">
                        <h2 class="title title--small our-team__title"><?php echo e(__("Our team")); ?></h2>
                        <div class="our-team__typography typography">
                            <p><strong><?php echo e(__("B55_team_1")); ?> </strong></p>
                            <p><?php echo e(__("B55_team_2")); ?> </p>
                        </div>
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

    
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!-- End page  -->
</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/pages/company.blade.php ENDPATH**/ ?>