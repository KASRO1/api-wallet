<?php $__env->startSection('title',__("Notifications")); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="flex flex-column flex-grow trans-0-3">
        <div data-v-1f79091c="" data-v-5e99d920=""
             class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
            <div data-v-1f79091c="" class="grid-column-12 grid-column-6--xl grid-column-start-4--xl">
                <div class="accordion" id="notification-list">
                    <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('notification', ['notification' => $notification,'list' => true])->html();
} elseif ($_instance->childHasBeenRendered('SXQEPsP')) {
    $componentId = $_instance->getRenderedChildComponentId('SXQEPsP');
    $componentTag = $_instance->getRenderedChildComponentTagName('SXQEPsP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('SXQEPsP');
} else {
    $response = \Livewire\Livewire::mount('notification', ['notification' => $notification,'list' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('SXQEPsP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/cabinet/new/notifications.blade.php ENDPATH**/ ?>