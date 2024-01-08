<div class="form-group row">
    <?php if((isset($label) && $label !== false) || !isset($label)): ?>
        <label for="<?php echo e($name); ?>" class="col-lg"><?php echo app('translator')->get($label ?? Str::ucfirst($name)); ?>:</label>
    <?php endif; ?>
    <?php echo e($slot); ?>

    <div class="offset-lg-4 invalid-feedback">
        <?php echo e($errors->first($name)); ?>

    </div>
</div>
<?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/admin/components/_form-group.blade.php ENDPATH**/ ?>