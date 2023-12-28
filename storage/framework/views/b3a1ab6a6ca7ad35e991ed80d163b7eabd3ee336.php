<?php $__env->startSection('title', __("Transfer")); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="flex flex-column flex-grow trans-0-3">
        <div data-v-0297da3b="" class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section__heading py-4 mb-2">
                        <span class="c-violet"><?php echo e(__("Internal payments")); ?></span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('transfer-form', [])->html();
} elseif ($_instance->childHasBeenRendered('MtEnNbi')) {
    $componentId = $_instance->getRenderedChildComponentId('MtEnNbi');
    $componentTag = $_instance->getRenderedChildComponentTagName('MtEnNbi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MtEnNbi');
} else {
    $response = \Livewire\Livewire::mount('transfer-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('MtEnNbi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/cabinet/new/transfer.blade.php ENDPATH**/ ?>