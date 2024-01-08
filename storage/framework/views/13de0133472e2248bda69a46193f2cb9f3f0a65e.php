<?php $__env->startSection('title', __("Wallets")); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="wallets">
    <div class="container">
        <div class="row section__heading">
            <div class="col-md-7 d-flex align-items-center gap-3 col-12">
                <p class="py-4"><?php echo e(__("My wallets")); ?></p>
                <div class="d-flex gap-2">
                    <a href="<?php echo e(route("cabinet.wallet")); ?>" class="btn btn-primary" style="height: 30px; padding: 0 10px;">Криптовалюта</a>
                    <a  href="<?php echo e(route("cabinet.wallet.fiat")); ?>" class="btn btn-primary" style="height: 30px; padding: 0 10px;">Фиат</a>
                </div>
            </div>
            <div class="col-md-5 col-12">
                <p class="py-4"><?php echo e(__("Balance")); ?>: <span class="wallet-item__amount"><?php echo e(number_format($total_balance / 100000, 2)); ?> USD</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 w-75 m-auto my-4">
                <div class="w-100 justify-end d-flex">
                    <button data-izimodal-open="#modal" data-izimodal-transitionin="fadeInDown" class="btn btn-primary" style="border-radius: 8px">
                        <?php echo e(__("Add funds")); ?>

                    </button>
                </div>
                <?php $__currentLoopData = \App\Outcome::currencyCrypto(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $systemKey => $systemName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form method="POST" action="<?php echo e(route('cabinet.requisites.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="wallet-item">
                        <div class="row">
                            <div class="col-md-7 col-12  m-auto">
                                <div class="wallet-item__currency d-flex gap-3">
                                    <div class="d-flex  align-items-center">
                                        <?php if($systemName['short'] == 'RUB'): ?>
                                        <img  src="<?php echo e(asset('assets/images/currency/'.$systemName['name'].'.svg')); ?>" onerror="this.src='<?php echo e(asset('assets/images/currency/'.$systemName['name'].'.png')); ?>'" alt="<?php echo e($systemName['short']); ?>" class="wallet-item__info-box-ico wallet-img">
                                        <?php else: ?>
                                        <img src="<?php echo e(asset('assets/images/currency/'.$systemName['short'].'.svg')); ?>" onerror="this.src='<?php echo e(asset('assets/images/currency/'.$systemName['short'].'.png')); ?>'" alt="<?php echo e($systemName['short']); ?>" class="wallet-item__info-box-ico wallet-img">
                                        <?php endif; ?>

                                    </div>
                                    <div class="w-100 d-flex align-items-center">
                                    <span class="font-lg"><?php echo e($systemName['name']); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 text-right align-items-center d-flex justify-end">
                                <p class="wallet-item__amount align-items-center font-xl"><?php echo e($account->where('currency',$systemName['short'])->isEmpty() ? 0 : number_format($account->where('currency',$systemName['short'])->first()->balance / 100000, 2)); ?> <?php echo e($systemName['short']); ?></p>

                            </div>
                        </div>
                    </div>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
    </div>
    </div>
    </div>
    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="d-flex w-100 mb-4 justify-between align-items-center">
                <h2 class="font-xl"><?php echo e(__("Adding funds for your")); ?></h2>
                <span class="close" data-izimodal-close="" data-izimodal-transitionout="fadeOutDown" id="closeModalBtn">&times;</span>

            </div>
        <div class="d-flex flex-column gap-3">
            <div>
                <label for="coins"><?php echo e(__("Select cryptocurrency")); ?>:</label>
                <select onload="getWalletInSelect(this)" onchange="getWalletInSelect(this)" class="form-control" id="coins" >
                    <?php $__currentLoopData = \App\Outcome::currencyCryptoDeposit(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $systemKey => $systemName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($systemName['short']); ?>"><?php echo e($systemName['name']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>

            </div>
            <div>
                <div id="qrBlock" class="d-flex justify-content-center my-4">
                    <img height="800px" id="qrImg" src="">

                </div>
                <input class="form-control" id="address_deposit" value="<?php echo e($wallets[0]['address']); ?>" disabled >
            </div>

        </div>
        </div>
    </div>
</section>
<?php if(count($wallets) === 0): ?>
    <script>
        $.ajax({
            url: "<?php echo e(route('wallet.generate')); ?>",
            type: "POST",
            data: {
                _token: "<?php echo e(csrf_token()); ?>"
            },
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log(data);
            }
        })

    </script>
<?php endif; ?>
    <script id="__DATA__">
<?php echo json_encode($wallets); ?>

    </script>
    <script>
        function getWalletInSelect(select){
            const coin = select.value;
            const wallets = JSON.parse(document.getElementById('__DATA__').innerText);
            const qr_img = document.getElementById('qrImg');
            const address_deposit = document.getElementById('address_deposit');

            wallets.forEach((wallet) => {
                if(wallet.currency === coin){
                    qr_img.src = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" + wallet.address;
                    address_deposit.value = wallet.address;
                }
            })
        }

            const select = document.getElementById('coins');
            getWalletInSelect(select);

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/cabinet/new/wallets.blade.php ENDPATH**/ ?>