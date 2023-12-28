<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:site_name" content="APY Wallet">
    <meta name="title" content="APY Wallet">
    <meta property="og:title" content="APY Wallet">
    <meta property="twitter:title" content="APY Wallet">
    <meta name="description" content="Step into the decentralization">
    <meta property="twitter:description" content="Step into the decentralization">
    <meta property="og:description" content="Step into the decentralization">
    <meta property="og:url" content="/">
    <meta property="og:image" content="/img/preview.png">
    <meta name="twitter:image:src" content="/img/preview.png">
    <meta name="twitter:card" content="summary_large_image">
    
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/cabinet_sheet.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/cabinet.css')); ?>">
    <link href="<?php echo e(asset('assets/app.f39ec460.css')); ?>" rel="preload" as="style">
    <link href="<?php echo e(asset('assets/app.f39ec460.css')); ?>" rel="stylesheet">
    <?php echo \Livewire\Livewire::styles(); ?>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Cabinet - <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
<div id="cabinet" class="container-fluid p-0">
    <div class="loader"><img src="<?php echo e(asset('assets/images/spinner.svg')); ?>" alt=""></div>
    <div class="row m-0">
        <div class="col-xl-1 d-xl-block d-none p-0">
            <?php echo $__env->make('cabinet.new.sidebar',['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-xl-11 col-lg-12 p-0">
            <?php echo $__env->yieldContent('content'); ?>

        </div>
    </div>
</div>
<?php echo $__env->make('cabinet.new._mobile-nav', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div aria-live="polite" aria-atomic="true" style="top: 45%; z-index: 1000; flex-direction: column;" class="position-fixed d-flex justify-content-center align-items-center w-100">
<?php $__currentLoopData = $user->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('notification', ['notification' => $notif,'list' => false])->html();
} elseif ($_instance->childHasBeenRendered('lCITphr')) {
    $componentId = $_instance->getRenderedChildComponentId('lCITphr');
    $componentTag = $_instance->getRenderedChildComponentTagName('lCITphr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lCITphr');
} else {
    $response = \Livewire\Livewire::mount('notification', ['notification' => $notif,'list' => false]);
    $html = $response->html();
    $_instance->logRenderedChild('lCITphr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<script src="<?php echo e(asset('assets/js/vendors.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<?php echo \Livewire\Livewire::scripts(); ?>

<script type="text/javascript">var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();Tawk_API.visitor = {name: "Kolyan",email: "kolyan@mail.ru",hash: "22779de3112981c2e287a115fe9d8f36b72030adfc68c85ddf5f027192b3b967"};(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];s1.async=true;s1.src="https://embed.tawk.to/64554f076a9aad4bc579257b/1gvmjpedt";s1.charset="UTF-8";s1.setAttribute("crossorigin","*");s0.parentNode.insertBefore(s1,s0);})();</script>
</body>
</html>
<?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/layouts/cabinet.blade.php ENDPATH**/ ?>