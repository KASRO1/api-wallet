<?php $__env->startSection('title', __("Conversion")); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__heading py-4 mb-4">
                    <?php echo e(__("Swap")); ?>

                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('conversion-form', [])->html();
} elseif ($_instance->childHasBeenRendered('lZatPdj')) {
    $componentId = $_instance->getRenderedChildComponentId('lZatPdj');
    $componentTag = $_instance->getRenderedChildComponentTagName('lZatPdj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lZatPdj');
} else {
    $response = \Livewire\Livewire::mount('conversion-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('lZatPdj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/cabinet/new/conversion.blade.php ENDPATH**/ ?>