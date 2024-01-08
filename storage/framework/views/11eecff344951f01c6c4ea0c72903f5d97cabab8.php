<?php $__env->startSection('title', __("Transactions")); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4"><?php echo e(__("Your operations")); ?></h1>
            </div>


            <div class="col-12">
                <main class="flex flex-column flex-grow trans-0-3">
                    <div data-v-4cd0b858="" class="shadowed border-rounded-3 bg-white margin-top-2 margin-top-6--md margin-top-0--lg">
                        <div data-v-4cd0b858="">
                            <div class="shadowed border-rounded-3 bg-white margin-top-0 margin-top-6--md margin-top-0--lg">
                                <ul data-v-4aba4d7a="" class="margin-y-0 margin-bottom-4 padding-x-3 no-list flex--md border-bottom-gray relative">
                                    <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
                                        <a href="<?php echo e(route('cabinet.deals', ['mode' => 'incomes'])); ?>" data-v-4aba4d7a="" class="tab flex items-center text-accent font-medium relative <?php if($mode == 'incomes'): ?> router-link-exact-active router-link-active tab--active <?php endif; ?>" aria-current="page">
                                            <svg data-v-481c1e7a="" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="<?php if($mode == 'incomes'): ?> fill-primary <?php else: ?> fill-gray <?php endif; ?> height-1-25 margin-right-2 flex-no-shrink"><path data-v-481c1e7a="" d="M13 0l5 5v14.008a.993.993 0 01-.993.992H.993A1 1 0 010 19.008V.992C0 .444.445 0 .993 0H13zm-3 10V6H8v4H5l4 4 4-4h-3z" fill="#9195A8"></path></svg>
                                            <?php echo e(__("Refill")); ?>

                                        </a>
                                    </li>
                                    <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
                                        <a href="<?php echo e(route('cabinet.deals', ['mode' => 'outcomes'])); ?>" data-v-4aba4d7a="" class="tab flex items-center text-accent font-medium relative <?php if($mode == 'outcomes'): ?> router-link-exact-active router-link-active tab--active <?php endif; ?>" aria-current="page">
                                            <svg data-v-481c1e7a="" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="<?php if($mode == 'outcomes'): ?> fill-primary <?php else: ?> fill-gray <?php endif; ?> height-1-25 margin-right-2 flex-no-shrink"><path data-v-481c1e7a="" d="M13 0l5 5v14.008a.993.993 0 01-.993.992H.993A1 1 0 010 19.008V.992C0 .444.445 0 .993 0H13zm-3 10h3L9 6l-4 4h3v4h2v-4z" fill="#9195A8"></path></svg>
                                            <?php echo e(__("Withdrawal")); ?>

                                        </a>
                                    </li>
                                    <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
                                        <a href="<?php echo e(route('cabinet.deals', ['mode' => 'conversions'])); ?>" data-v-4aba4d7a="" class="tab flex items-center text-accent font-medium relative <?php if($mode == 'conversions'): ?> router-link-exact-active router-link-active tab--active <?php endif; ?>" aria-current="page">
                                            <svg data-v-481c1e7a="" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="<?php if($mode == 'conversions'): ?> fill-primary <?php else: ?> fill-gray <?php endif; ?> height-1-25 margin-right-2 flex-no-shrink"><path data-v-481c1e7a="" d="M1 0h18a1 1 0 011 1v16a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm12 4v2H9v2h4v2l3.5-3L13 4zM7 14v-2h4v-2H7V8l-3.5 3L7 14z" fill="#9195A8"></path></svg>
                                            <?php echo e(__("Swap")); ?>

                                        </a>
                                    </li>
                                    <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
                                        <a href="<?php echo e(route('cabinet.deals', ['mode' => 'claims'])); ?>" data-v-4aba4d7a="" class="tab flex items-center text-accent font-medium relative <?php if($mode == 'claims'): ?> router-link-exact-active router-link-active tab--active <?php endif; ?>" aria-current="page">
                                            <svg data-v-481c1e7a="" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="<?php if($mode == 'claims'): ?> fill-primary <?php else: ?> fill-gray <?php endif; ?> height-1-25 margin-right-2 flex-no-shrink"><path data-v-481c1e7a="" d="M1 0h18a1 1 0 011 1v16a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm12 4v2H9v2h4v2l3.5-3L13 4zM7 14v-2h4v-2H7V8l-3.5 3L7 14z" fill="#9195A8"></path></svg>
                                            <?php echo e(__("Claim")); ?>

                                        </a>
                                    </li>
                                </ul>
                                <?php if($mode === 'incomes'): ?>
                                    <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                                        <thead data-v-4c61e7bd="">
                                        <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_code")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_amount")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_currency")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_date")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_status")); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody data-v-4c61e7bd=""><!---->
                                        <?php $__empty_1 = true; $__currentLoopData = $incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                            <tr>
                                                <td class="padding-3 font-medium text-left"><?php echo e($income->id); ?></td>
                                                <td>
                                                    <?php echo e($income->amount / 100000); ?>


                                                    <?php echo e($income->currency); ?>

                                                    <?php if($income->promocode_id != null): ?>
                                                        +<?php echo e(\App\Promocode::getPromoPercent($income->promocode_id)['value']); ?>%
                                                        (<?php echo e($income->amount/100*\App\Promocode::getPromoPercent($income->promocode_id)['value']/100000); ?> <?php echo e($income->currency); ?>)
                                                    <?php endif; ?>
                                                    
                                                </td>
                                                
                                                <td class="padding-3 font-medium text-left">
                                                    <?php echo e($income->currency); ?>

                                                    
                                                </td>
                                                <td class="padding-3 font-medium text-left"><?php echo e($income->created_at->format('d.m.Y')); ?></td>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php if($income->status == \App\Income::STATUS_WAITING): ?>
                                                        <?php echo e(__("Pending")); ?> <a href="<?php echo e(route('cabinet.income.show', ['id'=>$income->id])); ?>"><?php echo e(__("Get details")); ?></a>
                                                    <?php elseif($income->status == \App\Income::STATUS_SUCCESS): ?>
                                                        <?php echo e(__("Processed")); ?>

                                                    <?php elseif($income->status == \App\Income::STATUS_ERROR): ?>
                                                        <?php echo e(__("Error")); ?>

                                                    <?php elseif($income->status == \App\Income::STATUS_PAID_BY_USER): ?>
                                                        <?php echo e(__("Payed")); ?>

                                                    <?php elseif($income->status == \App\Income::STATUS_CANCELED): ?>
                                                        <?php echo e(__("Canceled")); ?>

                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr data-v-4c61e7bd="">
                                                <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> <?php echo e(__("The list is empty")); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                <?php endif; ?>
                                <?php if($mode == 'outcomes'): ?>
                                    <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                                        <thead data-v-4c61e7bd="">
                                        <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_code")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_amount")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_currency")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_system")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_date")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_status")); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody data-v-4c61e7bd=""><!---->
                                        <?php $__empty_1 = true; $__currentLoopData = $outcomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outcome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td class="padding-3 font-medium text-left"><?php echo e($outcome->id); ?></td>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php echo e($outcome->amount / 100000); ?> <?php echo e($outcome->currency); ?>


                                                    
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php echo e($outcome->currency); ?>

                                                    
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php if(isset(\App\Outcome::getSystems()[$outcome->payment_system]['name'])): ?>
                                                        <?php echo e(\App\Outcome::getSystems()[$outcome->payment_system]['name']); ?>

                                                    <?php endif; ?>
                                                </td>
                                                <td class="padding-3 font-medium text-left"><?php echo e($outcome->created_at->format('d.m.Y')); ?></td>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php if($outcome->status == \App\Outcome::STATUS_WAITING): ?>
                                                        <?php echo e(__("Pending")); ?>

                                                    <?php elseif($outcome->status == \App\Outcome::STATUS_SUCCESS): ?>
                                                        <?php echo e(__("Processed")); ?>

                                                    <?php elseif($outcome->status == \App\Outcome::STATUS_ERROR): ?>
                                                        <?php echo e(__("Error")); ?>

                                                    <?php elseif($outcome->status == \App\Outcome::STATUS_CANCELED): ?>
                                                        <?php echo e(__("Canceled")); ?>

                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr data-v-4c61e7bd="">
                                                <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> <?php echo e(__("The list is empty")); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                <?php endif; ?>
                                <?php if($mode == 'conversions'): ?>
                                    <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                                        <thead data-v-4c61e7bd="">
                                        <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_amount_from")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_currency_from")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_amount_in")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_currency_in")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_date")); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody data-v-4c61e7bd=""><!---->
                                        <?php $__empty_1 = true; $__currentLoopData = $conversions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php echo e($conversion->amount / 100000); ?>

                                                    <?php echo e($conversion->currency_one); ?>

                                                    
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php echo e($conversion->currency_one); ?>

                                                    
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php echo e($conversion->final_amount / 100000); ?>

                                                    <?php echo e($conversion->currency_two); ?>

                                                    
                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php echo e($conversion->currency_two); ?>

                                                    
                                                </td>
                                                <td class="padding-3 font-medium text-left"><?php echo e($conversion->created_at->format('d.m.Y')); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr data-v-4c61e7bd="">
                                                <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> <?php echo e(__("The list is empty")); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                <?php endif; ?>
                                <?php if($mode == 'claims'): ?>
                                    <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                                        <thead data-v-4c61e7bd="">
                                        <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_deposit_id")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_deposit_name")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_amount")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_currency")); ?></th>
                                            <th class="padding-3 font-medium text-left"><?php echo e(__("th_date")); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody data-v-4c61e7bd=""><!---->
                                        <?php $__empty_1 = true; $__currentLoopData = $claims; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $claim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php echo e($claim->deposit_id); ?>

                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php echo e($claim->deposit_name); ?>

                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php echo e($claim->amount / 100000); ?>

                                                    <?php echo e($claim->currency); ?>

                                                </td>
                                                <td class="padding-3 font-medium text-left">
                                                    <?php echo e($claim->currency); ?>

                                                </td>
                                                <td class="padding-3 font-medium text-left"><?php echo e($claim->created_at->format('d.m.Y')); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr data-v-4c61e7bd="">
                                                <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> <?php echo e(__("The list is empty")); ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                <?php endif; ?>
                            </div>
                        </div><!----><!----><!----></div>
                </main>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/cabinet/new/deals.blade.php ENDPATH**/ ?>