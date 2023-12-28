<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("user-search")->html();
} elseif ($_instance->childHasBeenRendered('PuywsL8')) {
    $componentId = $_instance->getRenderedChildComponentId('PuywsL8');
    $componentTag = $_instance->getRenderedChildComponentTagName('PuywsL8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PuywsL8');
} else {
    $response = \Livewire\Livewire::mount("user-search");
    $html = $response->html();
    $_instance->logRenderedChild('PuywsL8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/admin/users/index.blade.php ENDPATH**/ ?>