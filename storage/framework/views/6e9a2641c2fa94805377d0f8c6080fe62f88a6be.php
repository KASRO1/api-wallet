<?php $__env->startSection('title', __("Referral")); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <main class="flex flex-column flex-grow trans-0-3 ">
                    <div data-v-98a0e610=""
                         class="padding-top-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
                        <div data-v-98a0e610="" class="padding-x-3 padding-bottom-3 border-bottom-gray relative">
                            <div data-v-98a0e610="" class="grid grid-row-gap-3 grid-column-gap-4--md shadowed border-rounded-3">
                                <div data-v-98a0e610="" class="grid grid-row-gap-3 grid-column-gap-3--sm grid-column-12 grid-column-12--lg relative">
                                    <div data-v-98a0e610="" class="hidden block--lg vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                                    <div data-v-98a0e610="" class="flex flex-column items-start justify-between grid-column-12 grid-column-3--sm padding-3 relative">
                                        <div data-v-98a0e610="" class="hidden block--sm vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                                        <svg data-v-98a0e610="" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-bottom-4"><path data-v-98a0e610="" d="M10 9a5 5 0 015 5v6H5v-6a5 5 0 015-5zm-6.712 3.006a6.984 6.984 0 00-.28 1.65L3 14v6H0v-4.5a3.5 3.5 0 013.119-3.48l.17-.014h-.001zm13.424 0A3.501 3.501 0 0120 15.5V20h-3v-6c0-.693-.1-1.362-.288-1.994zM3.5 6a2.5 2.5 0 110 5 2.5 2.5 0 010-5zm13 0a2.5 2.5 0 110 5 2.5 2.5 0 010-5zM10 0a4 4 0 110 8 4 4 0 010-8z" fill="#F85446"></path></svg>
                                        <div data-v-98a0e610="" class="flex items-center text-accent">
                                            <div data-v-98a0e610="" class="font-lg">
                                                <?php echo e(\App\Support\Helpers::getReferalsBalance($user)); ?>

                                                <svg data-v-5851cc65="" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-right-2" style="fill: rgb(13, 129, 59);"><path data-v-5851cc65="" d="M9.391 9.498c0 .328-.106.715-.915.835V8.836c.29.09.52.185.68.281.163.098.235.215.235.381zM6.96 5.923c.165-.122.376-.208.63-.257V7.23a2.758 2.758 0 01-.67-.288.515.515 0 01-.246-.47c0-.232.09-.406.286-.55z"></path><path data-v-5851cc65="" clip-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zm-8.287 4.458c.08.08.192.125.315.125.122 0 .23-.04.313-.116a.422.422 0 00.136-.322v-.528c.39-.043.743-.14 1.048-.29.37-.182.661-.426.866-.727.209-.306.315-.658.315-1.045 0-.47-.124-.857-.367-1.147a2.22 2.22 0 00-.857-.63 7.198 7.198 0 00-1.006-.32V5.624c.38.026.752.104 1.108.23a.58.58 0 00.685-.143.623.623 0 00.162-.422.602.602 0 00-.418-.596 5.501 5.501 0 00-1.537-.316v-.511a.438.438 0 00-.448-.448.423.423 0 00-.32.136.448.448 0 00-.119.312v.526a3.008 3.008 0 00-1.092.313c-.369.196-.654.457-.848.778a2.02 2.02 0 00-.288 1.057c0 .447.124.818.368 1.103.231.27.518.478.853.621.275.117.614.232 1.008.34v1.752a4.205 4.205 0 01-1.402-.338.692.692 0 00-.274-.057.61.61 0 00-.618.619c0 .136.04.258.121.362.075.1.17.173.282.22a5.87 5.87 0 001.891.46v.523a.43.43 0 00.123.314z"></path></svg>
                                            </div>
                                        </div>
                                        <div data-v-98a0e610="" class="text-accent font-medium"> <?php echo e(__("Overal partner investments")); ?></div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div data-v-98a0e610="" class="flex flex-column items-start justify-between grid-column-12 grid-column-3--sm padding-3 relative">
                                        <svg data-v-98a0e610="" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-bottom-4"><path data-v-98a0e610="" d="M10 14H0v2h10v-2zM10 7H0v2h10V7zM18 0H0v2h18V0zM14 9h2v5h-2v2h6v-2h-2V7h-4v2z" fill="#F85446"></path></svg>
                                        <div data-v-98a0e610="" class="flex items-center text-accent">
                                            <div data-v-98a0e610="" class="font-lg"><?php echo e(count($referals[0])); ?></div>
                                            <div data-v-98a0e610=""
                                                 class="flex items-center bg-litest-green border-rounded-2 font-medium font-xs overflow-hidden margin-left-2">
                                                <div data-v-98a0e610="" class="padding-x-2 color-white bg-green border-rounded-2">
                                                    <?php echo e(count($activeReferalsList[0])); ?>

                                                </div>
                                                <div data-v-98a0e610="" class="color-green padding-x-2"><?php echo e(__("Active")); ?></div>
                                            </div>
                                        </div>
                                        <div data-v-98a0e610="" class="text-accent font-medium"> <?php echo e(__("First level referals")); ?></div>
                                    </div>
                                    <div data-v-98a0e610="" class="flex flex-column items-start justify-between grid-column-12 grid-column-3--sm padding-3 relative">
                                        <svg data-v-98a0e610="" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-bottom-4"><path data-v-98a0e610="" d="M10 14H0v2h10v-2zM10 7H0v2h10V7zM18 0H0v2h18V0zM14 9h2v5h-2v2h6v-2h-2V7h-4v2z" fill="#F85446"></path></svg>
                                        <div data-v-98a0e610="" class="flex items-center text-accent">
                                            <div data-v-98a0e610="" class="font-lg"><?php echo e(count($referals[1])); ?></div>
                                            <div data-v-98a0e610=""
                                                 class="flex items-center bg-litest-green border-rounded-2 font-medium font-xs overflow-hidden margin-left-2">
                                                <div data-v-98a0e610="" class="padding-x-2 color-white bg-green border-rounded-2">
                                                    <?php echo e(count($activeReferalsList[1])); ?>

                                                </div>
                                                <div data-v-98a0e610="" class="color-green padding-x-2"><?php echo e(__("Active")); ?></div>
                                            </div>
                                        </div>
                                        <div data-v-98a0e610="" class="text-accent font-medium"> <?php echo e(__("Second level referals")); ?></div>
                                    </div>
                                    <div data-v-98a0e610="" class="flex flex-column items-start justify-between grid-column-12 grid-column-3--sm padding-3 relative">
                                        <svg data-v-98a0e610="" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 margin-bottom-4"><path data-v-98a0e610="" d="M10 14H0v2h10v-2zM10 7H0v2h10V7zM18 0H0v2h18V0zM14 9h2v5h-2v2h6v-2h-2V7h-4v2z" fill="#F85446"></path></svg>
                                        <div data-v-98a0e610="" class="flex items-center text-accent">
                                            <div data-v-98a0e610="" class="font-lg"><?php echo e(count($referals[2])); ?></div>
                                            <div data-v-98a0e610=""
                                                 class="flex items-center bg-litest-green border-rounded-2 font-medium font-xs overflow-hidden margin-left-2">
                                                <div data-v-98a0e610="" class="padding-x-2 color-white bg-green border-rounded-2">
                                                    <?php echo e(count($activeReferalsList[2])); ?>

                                                </div>
                                                <div data-v-98a0e610="" class="color-green padding-x-2"><?php echo e(__("Active")); ?></div>
                                            </div>
                                        </div>
                                        <div data-v-98a0e610="" class="text-accent font-medium"> <?php echo e(__("Third level referals")); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-98a0e610="" class="margin-top-3 color-white">
                                <div data-v-98a0e610=""
                                     class="padding-x-3 padding-top-3 padding-bottom-3 bg-blue-gr bg-no-repeat bg-center bg-cover border-rounded-3">
                                    <div data-v-98a0e610="" class="flex--sm items-center padding-y-3">
                                        <div data-v-98a0e610=""
                                             class="avatar-border flex justify-center items-center flex-no-shrink width-5 height-5 border-round bg-no-repeat bg-center bg-cover"
                                             style="    background: linear-gradient(135deg, rgba(163,150,229,1) 0%, rgba(129,210,240,1) 100%);">
                                            <svg data-v-98a0e610="" viewBox="0 0 16 21" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg" class="height-half-full fill-white">
                                                <path data-v-98a0e610=""
                                                      d="M0 21a8 8 0 0116 0H0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6z"></path>
                                            </svg>
                                        </div>
                                        <div data-v-98a0e610=""
                                             class="min-width-none flex flex-column items-start margin-left-3--sm margin-top-3 margin-top-0--sm">
                                            <b data-v-98a0e610=""><?php echo e(auth()->user()->name); ?></b>
                                            <div data-v-98a0e610="" class="font-sm"> <?php echo e(__("This is your referal link")); ?>

                                            </div>
                                            <div data-v-98a0e610="" class="flex items-center font-sm max-width-full"><span
                                                    data-v-98a0e610="" class="flex-grow overflow-hidden text-dots text-nowrap">
                                        <?php echo e(route('register', ['code' => $user->code])); ?>

                                                    <button id="referral-copylink">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115.77 122.88" style="enable-background:new 0 0 115.77 122.88;fill: #7e839a;width: 15px;" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M89.62,13.96v7.73h12.19h0.01v0.02c3.85,0.01,7.34,1.57,9.86,4.1c2.5,2.51,4.06,5.98,4.07,9.82h0.02v0.02 v73.27v0.01h-0.02c-0.01,3.84-1.57,7.33-4.1,9.86c-2.51,2.5-5.98,4.06-9.82,4.07v0.02h-0.02h-61.7H40.1v-0.02 c-3.84-0.01-7.34-1.57-9.86-4.1c-2.5-2.51-4.06-5.98-4.07-9.82h-0.02v-0.02V92.51H13.96h-0.01v-0.02c-3.84-0.01-7.34-1.57-9.86-4.1 c-2.5-2.51-4.06-5.98-4.07-9.82H0v-0.02V13.96v-0.01h0.02c0.01-3.85,1.58-7.34,4.1-9.86c2.51-2.5,5.98-4.06,9.82-4.07V0h0.02h61.7 h0.01v0.02c3.85,0.01,7.34,1.57,9.86,4.1c2.5,2.51,4.06,5.98,4.07,9.82h0.02V13.96L89.62,13.96z M79.04,21.69v-7.73v-0.02h0.02 c0-0.91-0.39-1.75-1.01-2.37c-0.61-0.61-1.46-1-2.37-1v0.02h-0.01h-61.7h-0.02v-0.02c-0.91,0-1.75,0.39-2.37,1.01 c-0.61,0.61-1,1.46-1,2.37h0.02v0.01v64.59v0.02h-0.02c0,0.91,0.39,1.75,1.01,2.37c0.61,0.61,1.46,1,2.37,1v-0.02h0.01h12.19V35.65 v-0.01h0.02c0.01-3.85,1.58-7.34,4.1-9.86c2.51-2.5,5.98-4.06,9.82-4.07v-0.02h0.02H79.04L79.04,21.69z M105.18,108.92V35.65v-0.02 h0.02c0-0.91-0.39-1.75-1.01-2.37c-0.61-0.61-1.46-1-2.37-1v0.02h-0.01h-61.7h-0.02v-0.02c-0.91,0-1.75,0.39-2.37,1.01 c-0.61,0.61-1,1.46-1,2.37h0.02v0.01v73.27v0.02h-0.02c0,0.91,0.39,1.75,1.01,2.37c0.61,0.61,1.46,1,2.37,1v-0.02h0.01h61.7h0.02 v0.02c0.91,0,1.75-0.39,2.37-1.01c0.61-0.61,1-1.46,1-2.37h-0.02V108.92L105.18,108.92z"></path></g></svg>
                </button>
                                    </span>
                                            </div>
                                        </div>
                                    </div><!----></div>
                            </div>
                        </div>

                        <div data-v-98a0e610="" class="padding-x-3 padding-bottom-3">
                            <div class="margin-y-3">
                                <b><?php echo e(__("First level")); ?></b>
                            </div>
                            <div data-v-98a0e610="" class="padding-0-15 shadowed border-rounded-3 overflow-auto fix-tooltip">
                                <table data-v-98a0e610="" class="table width-full text-nowrap table--no-hover">
                                    <thead data-v-98a0e610="">
                                    <tr data-v-98a0e610="" class="font-sm color-gray bg-litest-gray">
                                        <th class="padding-3 font-medium text-left"><?php echo e(__("Invited")); ?></th>
                                        <th class="padding-3 font-medium text-left"><?php echo e(__("Date")); ?></th>
                                        <th class="padding-3 font-medium text-left"><?php echo e(__("Status")); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody data-v-98a0e610=""><!---->
                                    <?php $__empty_1 = true; $__currentLoopData = $referals[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td class="padding-3 font-medium text-left"><?php echo e($item->hidden_email); ?></td>
                                            <td class="padding-3 font-medium text-left"><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                            <td class="padding-3 font-medium text-left"><?php echo e($item->is_depositet ? __('Active') : __('Inactive')); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr data-v-98a0e610="">
                                            <td data-v-98a0e610="" colspan="3"
                                                class="text-center text-accent padding-3 color-gray font-medium"> <?php echo e(__("No partners")); ?>

                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div data-v-98a0e610="" class="padding-x-3 padding-bottom-3">
                            <div class="margin-y-3">
                                <b><?php echo e(__("Second level")); ?></b>
                            </div>
                            <div data-v-98a0e610="" class="padding-0-15 shadowed border-rounded-3 overflow-auto fix-tooltip">
                                <table data-v-98a0e610="" class="table width-full text-nowrap table--no-hover">
                                    <thead data-v-98a0e610="">
                                    <tr data-v-98a0e610="" class="font-sm color-gray bg-litest-gray">
                                        <th class="padding-3 font-medium text-left"><?php echo e(__("Invited")); ?></th>
                                        <th class="padding-3 font-medium text-left"><?php echo e(__("Date")); ?></th>
                                        <th class="padding-3 font-medium text-left"><?php echo e(__("Status")); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody data-v-98a0e610=""><!---->
                                    <?php $__empty_1 = true; $__currentLoopData = $referals[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td class="padding-3 font-medium text-left"><?php echo e($item->hidden_email); ?></td>
                                            <td class="padding-3 font-medium text-left"><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                            <td class="padding-3 font-medium text-left"><?php echo e($item->is_depositet ? __('Active') : __('Inactive')); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr data-v-98a0e610="">
                                            <td data-v-98a0e610="" colspan="3"
                                                class="text-center text-accent padding-3 color-gray font-medium"> <?php echo e(__("No partners")); ?>

                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div data-v-98a0e610="" class="padding-x-3 padding-bottom-3">
                            <div class="margin-y-3">
                                <b><?php echo e(__("Third level")); ?></b>
                            </div>
                            <div data-v-98a0e610="" class="padding-0-15 shadowed border-rounded-3 overflow-auto fix-tooltip">
                                <table data-v-98a0e610="" class="table width-full text-nowrap table--no-hover">
                                    <thead data-v-98a0e610="">
                                    <tr data-v-98a0e610="" class="font-sm color-gray bg-litest-gray">
                                        <th class="padding-3 font-medium text-left"><?php echo e(__("Invited")); ?></th>
                                        <th class="padding-3 font-medium text-left"><?php echo e(__("Date")); ?></th>
                                        <th class="padding-3 font-medium text-left"><?php echo e(__("Status")); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody data-v-98a0e610=""><!---->
                                    <?php $__empty_1 = true; $__currentLoopData = $referals[2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td class="padding-3 font-medium text-left"><?php echo e($item->hidden_email); ?></td>
                                            <td class="padding-3 font-medium text-left"><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                            <td class="padding-3 font-medium text-left"><?php echo e($item->is_depositet ? __('Active') : __('Inactive')); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr data-v-98a0e610="">
                                            <td data-v-98a0e610="" colspan="3"
                                                class="text-center text-accent padding-3 color-gray font-medium"> <?php echo e(__("No partners")); ?>

                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/cabinet/new/referals.blade.php ENDPATH**/ ?>