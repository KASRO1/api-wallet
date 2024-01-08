<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("user-search")->html();
} elseif ($_instance->childHasBeenRendered('N8MMH16')) {
    $componentId = $_instance->getRenderedChildComponentId('N8MMH16');
    $componentTag = $_instance->getRenderedChildComponentTagName('N8MMH16');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('N8MMH16');
} else {
    $response = \Livewire\Livewire::mount("user-search");
    $html = $response->html();
    $_instance->logRenderedChild('N8MMH16', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/admin/users/index.blade.php ENDPATH**/ ?>