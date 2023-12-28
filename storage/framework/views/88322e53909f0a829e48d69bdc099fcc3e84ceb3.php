<div data-v-fd87438e="" class="profile-sidebar flex flex-no-shrink flex-column justify-between">
    <div data-v-fd87438e="">
        <div data-v-fd87438e="" class="flex flex-column items-center bg-blue-gr bg-no-repeat bg-cover bg-center padding-x-4 padding-top-4 padding-bottom-3 text-center color-white">
            <div data-v-fd87438e="" class="avatar width-7 height-7 flex flex-no-shrink justify-center items-center border-round relative overflow-hidden bg-no-repeat bg-center bg-cover no-outline">
                <?php if(empty($user->avatar_url)): ?>
                    <svg data-v-fd87438e="" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-half-full fill-white"><path data-v-fd87438e="" d="M0 21a8 8 0 0116 0H0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"></path></svg>
                <?php else: ?>
                    <img src="<?php echo e(asset($user->avatar_url)); ?>" style="width: 88px; height: 88px;" class="height-full border-round fill-white">
                <?php endif; ?>
            </div>
            <div data-v-fd87438e="" class="avatar-cropper"></div>
            <div data-v-fd87438e="" class="font-medium margin-top-3"><?php echo e(auth()->user()->name); ?></div>
            <div data-v-fd87438e="" class="font-sm margin-bottom-3">
                <div data-v-fd87438e=""> <?php echo e(auth()->user()->email); ?></div>
            </div>
            
        </div>
        <div data-v-fd87438e="" class="padding-3">
            <?php echo $__env->make('cabinet._account-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div data-v-fd87438e="" class="flex items-center padding-3 btn-copy" data-clipboard-text="<?php echo e(route('register', ['code' => $user->code])); ?>">
        <div data-v-fd87438e="" class="width-3 height-1-25 flex justify-center items-center flex-no-shrink">
            <svg data-v-fd87438e="" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="height-full fill-gray">
                <path data-v-fd87438e=""
                      d="M2 17h16v-5h2v6a1 1 0 01-1 1H1a1 1 0 01-1-1v-6h2v5zm8-9H7a5.992 5.992 0 00-4.854 2.473A8.003 8.003 0 0110 4V0l8 6-8 6V8z"></path>
            </svg>
        </div>
        <div data-v-fd87438e="" class="font-sm referral-link" style="margin: 0;">
            <div data-v-fd87438e=""> <?php echo e(__("Invite your friends")); ?></div>
            <div data-v-fd87438e="" class="flex items-center">
                <div data-v-fd87438e="" class="color-gray text-nowrap text-dots overflow-hidden flex-grow">
                    <?php echo e(route('register', ['code' => $user->code])); ?>

                </div>
                <button id="referral-copylink">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115.77 122.88" style="enable-background:new 0 0 115.77 122.88;fill: #7e839a;width: 15px;" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M89.62,13.96v7.73h12.19h0.01v0.02c3.85,0.01,7.34,1.57,9.86,4.1c2.5,2.51,4.06,5.98,4.07,9.82h0.02v0.02 v73.27v0.01h-0.02c-0.01,3.84-1.57,7.33-4.1,9.86c-2.51,2.5-5.98,4.06-9.82,4.07v0.02h-0.02h-61.7H40.1v-0.02 c-3.84-0.01-7.34-1.57-9.86-4.1c-2.5-2.51-4.06-5.98-4.07-9.82h-0.02v-0.02V92.51H13.96h-0.01v-0.02c-3.84-0.01-7.34-1.57-9.86-4.1 c-2.5-2.51-4.06-5.98-4.07-9.82H0v-0.02V13.96v-0.01h0.02c0.01-3.85,1.58-7.34,4.1-9.86c2.51-2.5,5.98-4.06,9.82-4.07V0h0.02h61.7 h0.01v0.02c3.85,0.01,7.34,1.57,9.86,4.1c2.5,2.51,4.06,5.98,4.07,9.82h0.02V13.96L89.62,13.96z M79.04,21.69v-7.73v-0.02h0.02 c0-0.91-0.39-1.75-1.01-2.37c-0.61-0.61-1.46-1-2.37-1v0.02h-0.01h-61.7h-0.02v-0.02c-0.91,0-1.75,0.39-2.37,1.01 c-0.61,0.61-1,1.46-1,2.37h0.02v0.01v64.59v0.02h-0.02c0,0.91,0.39,1.75,1.01,2.37c0.61,0.61,1.46,1,2.37,1v-0.02h0.01h12.19V35.65 v-0.01h0.02c0.01-3.85,1.58-7.34,4.1-9.86c2.51-2.5,5.98-4.06,9.82-4.07v-0.02h0.02H79.04L79.04,21.69z M105.18,108.92V35.65v-0.02 h0.02c0-0.91-0.39-1.75-1.01-2.37c-0.61-0.61-1.46-1-2.37-1v0.02h-0.01h-61.7h-0.02v-0.02c-0.91,0-1.75,0.39-2.37,1.01 c-0.61,0.61-1,1.46-1,2.37h0.02v0.01v73.27v0.02h-0.02c0,0.91,0.39,1.75,1.01,2.37c0.61,0.61,1.46,1,2.37,1v-0.02h0.01h61.7h0.02 v0.02c0.91,0,1.75-0.39,2.37-1.01c0.61-0.61,1-1.46,1-2.37h-0.02V108.92L105.18,108.92z"></path></g></svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    const copyBtn = document.getElementById('referral-copylink')
    // return a promise
    function copyToClipboard(textToCopy) {
        // navigator clipboard api needs a secure context (https)
        if (navigator.clipboard && window.isSecureContext) {
            // navigator clipboard api method'
            return navigator.clipboard.writeText(textToCopy);
        } else {
            // text area method
            let textArea = document.createElement("textarea");
            textArea.value = textToCopy;
            // make the textarea out of viewport
            textArea.style.position = "fixed";
            textArea.style.left = "-999999px";
            textArea.style.top = "-999999px";
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();
            return new Promise((res, rej) => {
                // here the magic happens
                document.execCommand('copy') ? res() : rej();
                textArea.remove();
            });
        }
    }
    let animInt = null
    function animateCopyButton() {
        let pos = 0;
        const REPEAT_TIME = 2;
        const ANIMATION_SPEED = 20;
        const ANIMATION_SCALE = 1.4;
        clearInterval(animInt);
        animInt = setInterval(frame, ANIMATION_SPEED);

        copyBtn.style.transition = `${ANIMATION_SPEED}ms`;
        function frame() {
            if (pos === REPEAT_TIME) {
                copyBtn.style.transform = 'none';
                clearInterval(animInt);
                return;
            }
            copyBtn.style.transform = `scaleX(${ANIMATION_SCALE}) scaleY(${ANIMATION_SCALE})`;
            pos++;
        }
    }
    copyBtn.addEventListener('click', ()=>{
         copyToClipboard('<?php echo e(route('register', ['code' => $user->code])); ?>')
             .then(()=> {
                 animateCopyButton();
             })
            .catch(()=>console.log('failed('))
    })
</script>
<?php /**PATH /var/www/www-root/data/www/apy-wallet.com/resources/views/cabinet/_account-sidebar.blade.php ENDPATH**/ ?>