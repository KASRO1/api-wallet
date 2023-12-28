<?php if($list): ?>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-<?php echo e($notification->created_at->format('i-s')); ?>">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-<?php echo e($notification->created_at->format('i__s')); ?>" aria-expanded="true" aria-controls="panelsStayOpen-<?php echo e($notification->created_at->format('i__s')); ?>">
               <?php echo e($notification->title); ?> (<?php echo e($notification->created_at->format('Y-m-d, H:i:s')); ?>)
            </button>
        </h2>
        <div id="panelsStayOpen-<?php echo e($notification->created_at->format('i__s')); ?>" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-<?php echo e($notification->created_at->format('i-s')); ?>">
            <div class="accordion-body">
                <?php echo $notification->text; ?>

            </div>
        </div>
    </div>
<?php else: ?>
    <div class="toast <?php if(!$notification->is_read): ?> show <?php endif; ?>" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto"><?php echo e($notification->title); ?></strong>
            <small><?php echo e($notification->created_at); ?></small>
            <button wire:click="open" type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?php echo $notification->text; ?>

        </div>
    </div>

<?php endif; ?>
<?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/livewire/notif-toast.blade.php ENDPATH**/ ?>