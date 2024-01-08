<ul data-v-fd87438e="" class="margin-y-0 padding-left-0 no-list">
    <li data-v-fd87438e="">
        <a data-v-fd87438e="" href="<?php echo e(route('cabinet.account')); ?>" aria-current="page" class="profile-sidebar__link flex justify-between items-center border-rounded-3 padding-y-2 <?php if(Route::currentRouteName() == 'cabinet.account'): ?> router-link-exact-active router-link-active profile-sidebar__link--active bg-white shadowed font-medium <?php endif; ?>">
            <div data-v-fd87438e="" class="flex items-center flex-grow padding-right-3">
                <div data-v-fd87438e="" class="width-3 height-1-25 flex justify-center items-center flex-no-shrink">
                    <svg data-v-fd87438e="" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="<?php if(Route::currentRouteName() == 'cabinet.account'): ?> fill-primary <?php else: ?> fill-gray <?php endif; ?> height-full">
                        <path data-v-fd87438e="" d="M0 21a8 8 0 0116 0H0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"></path>
                    </svg>
                </div>
                <?php echo e(__("Personal information")); ?>

            </div>
        </a>
    </li>
    
    <li data-v-fd87438e="">
        <a data-v-fd87438e="" href="<?php echo e(route('cabinet.transfer')); ?>" class="profile-sidebar__link flex justify-between items-center border-rounded-3 padding-y-2 <?php if(Route::currentRouteName() == 'cabinet.requisites'): ?> router-link-exact-active router-link-active profile-sidebar__link--active bg-white shadowed font-medium <?php endif; ?>">
            <div data-v-fd87438e="" class="flex items-center flex-grow padding-right-3">
                <div data-v-fd87438e="" class="width-3 height-1-25 flex justify-center items-center flex-no-shrink">
                    <svg data-v-fd87438e="" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="<?php if(Route::currentRouteName() == 'cabinet.requisites'): ?> fill-primary <?php else: ?> fill-gray <?php endif; ?> height-full">
                        <path data-v-fd87438e="" d="M20 3h-7a6 6 0 100 12h7v2a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1h18a1 1 0 011 1v2zm-7 2h8v8h-8a4 4 0 110-8zm0 3v2h3V8h-3z"></path>
                    </svg>
                </div>
                <?php echo e(__("Internal payments")); ?>

            </div>
        </a>
    </li>
    <li data-v-fd87438e="">
        <a data-v-fd87438e="" href="<?php echo e(route('cabinet.referals')); ?>" class="profile-sidebar__link flex justify-between items-center border-rounded-3 padding-y-2 <?php if(Route::currentRouteName() == 'cabinet.requisites'): ?> router-link-exact-active router-link-active profile-sidebar__link--active bg-white shadowed font-medium <?php endif; ?>">
            <div data-v-fd87438e="" class="flex items-center flex-grow padding-right-3">
                <div data-v-fd87438e="" class="width-3 height-1-25 flex justify-center items-center flex-no-shrink">
                    <svg data-v-fd87438e="" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="<?php if(Route::currentRouteName() == 'cabinet.requisites'): ?> fill-primary <?php else: ?> fill-gray <?php endif; ?> height-full">
                    <path data-v-fd87438e="" d="M11.576 15.271l-5.11-2.787a3.5 3.5 0 110-4.968l5.11-2.787a3.5 3.5 0 11.958 1.755l-5.11 2.787c.102.48.102.977 0 1.458l5.11 2.787a3.5 3.5 0 11-.958 1.755z"></path>
                    </svg>
                </div>
                <?php echo e(__("Referral program")); ?>

            </div>
        </a>
    </li>
    
    <li data-v-fd87438e="">
        <a data-v-fd87438e="" href="<?php echo e(route('cabinet.password')); ?>" class="profile-sidebar__link flex justify-between items-center border-rounded-3 padding-y-2 <?php if(Route::currentRouteName() == 'cabinet.password'): ?> router-link-exact-active router-link-active profile-sidebar__link--active bg-white shadowed font-medium <?php endif; ?>">
            <div data-v-fd87438e="" class="flex items-center flex-grow padding-right-3">
                <div data-v-fd87438e="" class="width-3 height-1-25 flex justify-center items-center flex-no-shrink">
                    <svg data-v-fd87438e="" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="<?php if(Route::currentRouteName() == 'cabinet.password'): ?> fill-primary <?php else: ?> fill-gray <?php endif; ?> height-full">
                        <path data-v-fd87438e="" d="M.783 1.826L9 0l8.217 1.826a1 1 0 01.783.976v9.987a6 6 0 01-2.672 4.992L9 22l-6.328-4.219A6 6 0 010 12.79V2.802a1 1 0 01.783-.976zM9 10a2.5 2.5 0 100-5 2.5 2.5 0 000 5zm-4.473 5h8.946a4.5 4.5 0 00-8.946 0z"></path>
                    </svg>
                </div>
                <?php echo e(__("Safety")); ?>

            </div>
        </a>
    </li>
</ul><?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/cabinet/_account-menu.blade.php ENDPATH**/ ?>