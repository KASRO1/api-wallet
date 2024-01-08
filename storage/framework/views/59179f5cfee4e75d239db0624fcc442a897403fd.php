<div data-v-0297da3b="" class="grid-column-12 grid-column-6--xl grid-column-start-4--xl padding-bottom-5">
    <?php if($success): ?>
    <div class="alert alert-success">
        <?php echo e($this->amount); ?> <?php echo e($currencyOneName); ?> было успешно сконвертировано в <?php echo e($converted); ?> <?php echo e($currencyTwoName); ?>

    </div>
    <?php endif; ?>

    <?php if($error): ?>
    <div class="alert alert-danger">
        <?php echo e($error); ?>

    </div>
    <?php endif; ?>

    <p data-v-0297da3b="" class="color-gray font-sm margin-bottom-5"> <?php echo e(__("conversion_details")); ?> </p>
    <div data-v-0297da3b=""  style="border: 1px solid rgba(34, 34, 34, 0.07);max-width: 500px" class="margin-bottom-7 bg-light p-3 border-rounded-6 w-75 m-auto  conversion d-flex flex-column relative">
        <div data-v-0297da3b="" style="background: rgb(241,241,241);" class=" p-3 border-rounded-3 grid-column-12 grid-column-5--md">
            <span data-v-0297da3b="" class="flex font-sm color-gray font-medium margin-bottom-1"> <?php echo e(__("You pay")); ?> </span>
            <div data-v-0297da3b="" class="flex " >
                <div data-v-7f923647="" data-v-0297da3b="" data-vv-as=" " class="field flex-grow field--left"><!---->
                    <div data-v-7f923647="" class="relative">
                        <div data-v-7f923647="" >
                            <input data-v-7f923647="" class="bg-transparent font-xl" wire:model="amount" id="input_7g3417wn" name="amount_one" autocomplete="" type="text" placeholder="<?php echo e(__("Exchange amount")); ?>">
                        </div>
                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                    </div>
                </div>
                <div data-v-fa5ceebe="" data-v-0297da3b="" class="sticky-select--right sticky-select">
                    <select wire:model="currencyOne" class="h-100 border-rounded-max px-2"   name="currency_one">
                        <?php if($currencyTwo != \App\Account::CURRENCY_USDT &&
                            $currencyTwo != \App\Account::CURRENCY_BUSD &&
                            $currencyTwo != \App\Account::CURRENCY_USDC &&
                            $currencyTwo != \App\Account::CURRENCY_APY &&
                            $currencyTwo != \App\Account::CURRENCY_RUB_ACC
                        ): ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_USDT); ?>">USDT</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BUSD); ?>">BUSD</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_USDC); ?>">USDC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_APY); ?>">APY</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_RUB_ACC); ?>">RUB</option>

                        <?php elseif(($currencyOne == \App\Account::CURRENCY_USDT ||
                            $currencyOne == \App\Account::CURRENCY_BUSD ||
                            $currencyOne == \App\Account::CURRENCY_USDC ||
                            $currencyOne == \App\Account::CURRENCY_RUB_ACC) && 
                            $currencyTwo == \App\Account::CURRENCY_APY
                        ): ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_USDT); ?>">USDT</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BUSD); ?>">BUSD</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_USDC); ?>">USDC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_RUB_ACC); ?>">RUB</option>
                        <?php elseif(($currencyOne != \App\Account::CURRENCY_USDT &&
                            $currencyOne != \App\Account::CURRENCY_BUSD &&
                            $currencyOne != \App\Account::CURRENCY_USDC &&
                            $currencyOne != \App\Account::CURRENCY_RUB_ACC) && 
                            $currencyTwo == \App\Account::CURRENCY_APY
                        ): ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_TON); ?>">TON</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_TRX); ?>">TRX</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_XRP); ?>">XRP</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BNB); ?>">BNB</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DOGE); ?>">DOGE</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_LTC); ?>">LTC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BTC); ?>">BTC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_ETH); ?>">ETH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DASH); ?>">DASH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_USD_PM); ?>">USD</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_ATOM); ?>">ATOM</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BCH); ?>">BCH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DOT); ?>">DOT</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BLD); ?>">BLD</option>
                        <?php else: ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_TON); ?>">TON</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_TRX); ?>">TRX</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_XRP); ?>">XRP</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BNB); ?>">BNB</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DOGE); ?>">DOGE</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_LTC); ?>">LTC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BTC); ?>">BTC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_ETH); ?>">ETH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DASH); ?>">DASH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_USD_PM); ?>">USD</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_APY); ?>">APY</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_ATOM); ?>">ATOM</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BCH); ?>">BCH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DOT); ?>">DOT</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BLD); ?>">BLD</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div data-v-0297da3b="" class="font-sm color-gray margin-top-2"> <?php echo e(__("Balans:")); ?> <?php echo e($oneBalance); ?> <?php echo e($currencyOneName); ?></div>
        </div>

        <div class="d-flex align-items-center cursor-pointer">
            <div class="styled__ArrowWrapper-sc-5907de0f-3 kcOFcM"><div wire:click="$emit('swap')" data-testid="swap-currency-button" color="#222222" class="styled__ArrowContainer-sc-5907de0f-10 kJdnHp"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#222222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></div></div>
        </div>
        <div data-v-0297da3b="" style="background: rgb(241,241,241);" class="p-3 border-rounded-3 grid-column-12 grid-column-5--md">
            <span data-v-0297da3b="" class="flex font-sm color-gray font-medium margin-bottom-1"> <?php echo e(__("You recive")); ?> </span>
            <div data-v-0297da3b="" class="flex">
                <div data-v-7f923647="" data-v-0297da3b="" data-vv-as=" " class="field flex-grow field--left">
                    <div data-v-7f923647="" class="bg-transparent font-xl overflow-hidden">
                        <div data-v-7f923647="" class=""><?php echo e($converted); ?></div>
                    </div>
                </div>
                <div data-v-fa5ceebe="" data-v-0297da3b="" class="sticky-select--right sticky-select">
                    <select wire:model="currencyTwo" class="h-100 border-rounded-max px-2"  name="currency_two">
                        <?php if($currencyOne != \App\Account::CURRENCY_USDT &&
                            $currencyOne != \App\Account::CURRENCY_BUSD &&
                            $currencyOne != \App\Account::CURRENCY_USDC &&
                            $currencyOne != \App\Account::CURRENCY_APY &&
                            $currencyOne != \App\Account::CURRENCY_RUB_ACC
                        ): ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_USDT); ?>">USDT</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BUSD); ?>">BUSD</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_USDC); ?>">USDC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_APY); ?>">APY</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_RUB_ACC); ?>">RUB</option>
                        <?php elseif(($currencyTwo == \App\Account::CURRENCY_USDT ||
                            $currencyTwo == \App\Account::CURRENCY_BUSD ||
                            $currencyTwo == \App\Account::CURRENCY_USDC ||
                            $currencyTwo == \App\Account::CURRENCY_RUB_ACC) && 
                            $currencyOne == \App\Account::CURRENCY_APY
                        ): ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_USDT); ?>">USDT</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BUSD); ?>">BUSD</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_USDC); ?>">USDC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_RUB_ACC); ?>">RUB</option>
                        <?php elseif(($currencyTwo != \App\Account::CURRENCY_USDT &&
                            $currencyTwo != \App\Account::CURRENCY_BUSD &&
                            $currencyTwo != \App\Account::CURRENCY_USDC &&
                            $currencyTwo != \App\Account::CURRENCY_RUB_ACC) && 
                            $currencyOne == \App\Account::CURRENCY_APY
                        ): ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_TON); ?>">TON</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_TRX); ?>">TRX</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_XRP); ?>">XRP</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BNB); ?>">BNB</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DOGE); ?>">DOGE</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_LTC); ?>">LTC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BTC); ?>">BTC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_ETH); ?>">ETH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DASH); ?>">DASH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_USD_PM); ?>">USD</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_ATOM); ?>">ATOM</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BCH); ?>">BCH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DOT); ?>">DOT</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BLD); ?>">BLD</option>
                        <?php else: ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_TON); ?>">TON</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_TRX); ?>">TRX</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_XRP); ?>">XRP</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BNB); ?>">BNB</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DOGE); ?>">DOGE</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_LTC); ?>">LTC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BTC); ?>">BTC</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_ETH); ?>">ETH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DASH); ?>">DASH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_USD_PM); ?>">USD</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_APY); ?>">APY</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_ATOM); ?>">ATOM</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BCH); ?>">BCH</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_DOT); ?>">DOT</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BLD); ?>">BLD</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center  margin-top-3">


            <div data-v-0297da3b="" class="font-sm color-gray"> <?php echo e(__("Balans:")); ?> <?php echo e($twoBalance); ?> <?php echo e($currencyTwoName); ?></div>
            <div data-v-0297da3b="" class="d-flex gap-1">1 <?php echo e($currencyOneName); ?> =
                <div data-v-0297da3b="" class=""> <?php echo e(number_format($currencyRate,5)); ?>


                    <span data-v-0297da3b="" class="color-gray"> <?php echo e($currencyTwoName); ?> </span>
                </div>
            </div>
            </div>
        </div>
        <button data-v-141d1a81="" wire:click="$emit('convert')" type="button" data-v-0297da3b="" <?php if(! $isCanChange): ?> disabled <?php endif; ?> class="width-full margin-top-2 button button--primary <?php if(! $isCanChange): ?> button--disabled <?php endif; ?> button--mini">
        <span data-v-141d1a81="" class="button__content">
            <svg data-v-0297da3b="" data-v-141d1a81="" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-white height-1 margin-right-2">
                <path data-v-0297da3b="" data-v-141d1a81="" d="M1 0h18a1 1 0 011 1v16a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm12 4v2H9v2h4v2l3.5-3L13 4zM7 14v-2h4v-2H7V8l-3.5 3L7 14z" fill="#9195A8"></path>
            </svg>
            <?php echo e(__("Swap")); ?>

        </span>
        </button>
    </div>

</div><?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/livewire/conversion-form.blade.php ENDPATH**/ ?>