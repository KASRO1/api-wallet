<section id="sidebar">
    <ul class="sidebar-items p-0">
        <li class="sidebar-item sidebar-account">
            <?php if(empty(auth()->user()->avatar_url)): ?>
                <img src="<?php echo e(asset('assets/images/profile/ava.png')); ?>" alt="Avatar">
            <?php else: ?>
                <img class="img-fluid" alt="avatar" src="<?php echo e(asset($user->avatar_url)); ?>">
            <?php endif; ?>
            <p class="sidebar-nickname"><?php echo e($user->name); ?></p>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link <?php if(Route::current()->getName() == 'cabinet' || Route::current()->getName() == 'home'): ?> active <?php endif; ?>" href="<?php echo e(route('cabinet')); ?>">
                <div class="sidebar-icon"><?php echo $__env->make('cabinet.new.icons.user-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                <p class="sidebar-name"><?php echo e(__("Account")); ?></p>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="<?php echo e(route('cabinet.deposits')); ?>" class="sidebar-link <?php if(Route::current()->getName() == 'cabinet.deposits'): ?> active <?php endif; ?>">
                <div class="sidebar-icon">
                    <?php echo $__env->make('cabinet.new.icons.deposit-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <p class="sidebar-name"><?php echo e(__("My deposits")); ?></p>
            </a>

        </li>
        <li class="sidebar-item">
            <a href="<?php echo e(route('cabinet.conversion')); ?>" class="sidebar-link <?php if(Route::current()->getName() == 'cabinet.conversion'): ?> active <?php endif; ?>">
                <div class="sidebar-icon">
                    <?php echo $__env->make('cabinet.new.icons.swap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <p class="sidebar-name"><?php echo e(__("Swap")); ?></p>
            </a>
        </li>
        <?php if($user->is_verified == 0): ?>
            <li class="sidebar-item">
                <a href="<?php echo e(route('cabinet.verification')); ?>" class="sidebar-link <?php if(Route::current()->getName() == 'cabinet.verification'): ?> active <?php endif; ?>">
                    <div class="sidebar-icon">
                        <?php echo $__env->make('cabinet.new.icons.verification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <p class="sidebar-name"><?php echo e(__("Verification")); ?></p>
                </a>
            </li>
        <?php endif; ?>
        
        <li class="sidebar-item">
            <a href="<?php echo e(route('cabinet.withdraw')); ?>" class="sidebar-link <?php if(Route::current()->getName() == 'cabinet.withdraw'): ?> active <?php endif; ?>">
                <div class="sidebar-icon">
                    <?php echo $__env->make('cabinet.new.icons.withdraw-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <p class="sidebar-name"><?php echo e(__("Funds withdrawal")); ?></p>
            </a>

        </li>
        <li class="sidebar-item">
            <a href="<?php echo e(route('cabinet.deals')); ?>" class="sidebar-link <?php if(Route::current()->getName() == 'cabinet.deals'): ?> active <?php endif; ?>">
                <div class="sidebar-icon">
                    <?php echo $__env->make('cabinet.new.icons.transaction-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <p class="sidebar-name"><?php echo e(__("My transactions")); ?></p>
            </a>

        </li>
        <li class="sidebar-item">
            <a href="<?php echo e(route('cabinet.wallet')); ?>" class="sidebar-link <?php if(Route::current()->getName() == 'cabinet.wallet'): ?> active <?php endif; ?>">
                <div class="sidebar-icon"><?php echo $__env->make('cabinet.new.icons.wallets-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                <p class="sidebar-name"><?php echo e(__("My wallets")); ?></p>
            </a>

        </li>
        <?php if($user->special_product): ?>
        <li class="sidebar-item">
            <a href="<?php echo e(route('cabinet.tracking')); ?>" class="sidebar-link <?php if(Route::current()->getName() == 'cabinet.tracking'): ?> active <?php endif; ?>">
                <div class="sidebar-icon"><?php echo $__env->make('cabinet.new.icons.charts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                <p class="sidebar-name"><?php echo e(__("IDO")); ?></p>
            </a>
        </li>
        <?php endif; ?>
        <li class="sidebar-item">
            <a href="<?php echo e(route('cabinet.account')); ?>" class="sidebar-link <?php if(Route::current()->getName() == 'cabinet.account'
        || Route::current()->getName() == 'cabinet.password'
        || Route::current()->getName() == 'cabinet.requisites'
        || Route::current()->getName() == 'cabinet.socials'): ?> active <?php endif; ?>">
                <div class="sidebar-icon">
                    <?php echo $__env->make('cabinet.new.icons.settings-ico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <p class="sidebar-name"><?php echo e(__("Settings")); ?></p>
            </a>

        </li>
    </ul>
</section>

<?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/cabinet/new/sidebar.blade.php ENDPATH**/ ?>