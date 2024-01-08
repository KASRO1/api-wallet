<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <?php if(session('success')): ?>
            <div class="alert col-12 col-md-6 offset-md-3 alert-success my-4" role="alert">
                Успешно!
            </div>
        <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="alert alert-danger my-4 col-12 col-md-6 offset-md-3"><?php echo e(session('error')); ?></div>
            <?php endif; ?>
            <h2 class="col-12 text-center my-4">Сгенерировать график</h2>
        <form method="POST" class="col-12 col-md-6 offset-md-3" action="<?php echo e(route('admin.graph.build')); ?>">
            <?php echo csrf_field(); ?>
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'open','label' => 'Стартовая цена']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'open','label' => 'Стартовая цена']); ?>
                <input type="text" value="<?php echo e(old('open')); ?>"
                       class="form-control col-12 <?php echo e($errors->has('open') ? 'is-invalid' : ''); ?>" name="open">
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'close','label' => 'Коннечная цена']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'close','label' => 'Коннечная цена']); ?>
                <input type="text" value="<?php echo e(old('close')); ?>"
                       class="form-control col-12 <?php echo e($errors->has('close') ? 'is-invalid' : ''); ?>" name="close">
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'start_time','label' => 'Дата начала']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'start_time','label' => 'Дата начала']); ?>
                <input type="date"
                       class="form-control col-12 <?php echo e($errors->has('start_time') ? 'is-invalid' : ''); ?>"
                       name="start_time"
                       value="<?php echo e(old('start_time')); ?>">
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'duration','label' => 'Дни со старта']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'duration','label' => 'Дни со старта']); ?>
                <input type="number" value="<?php echo e(old('duration')); ?>"
                       name="duration"
                       class="form-control col-12 <?php echo e($errors->has('duration') ? 'is-invalid' : ''); ?>">
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'user','label' => 'Пользователь']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'user','label' => 'Пользователь']); ?>
                <select name="user_id" class="form-control">
                    <option value="-1">Пользователь</option>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
            <button class="btn btn-primary" type="submit">Сгенерировать свечи</button>
        </form>

            <h2 class="col-12 text-center my-4">Изменить свечи</h2>
            <form method="POST" class="col-12 col-md-6 offset-md-3 mt-4" action="<?php echo e(route('admin.graph.modify')); ?>">
            <?php echo csrf_field(); ?>
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'high','label' => 'High']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'high','label' => 'High']); ?>
                <input type="text" value="<?php echo e(old('high')); ?>"
                       class="form-control col-12" name="high">
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'low','label' => 'Low']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'low','label' => 'Low']); ?>
                <input type="text" value="<?php echo e(old('low')); ?>"
                       class="form-control col-12" name="low">
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'open','label' => 'Open']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'open','label' => 'Open']); ?>
                <input type="text"
                       class="form-control col-12"
                       name="open"
                       value="<?php echo e(old('open')); ?>">
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'close','label' => 'Close']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'close','label' => 'Close']); ?>
                <input type="text" value="<?php echo e(old('close')); ?>"
                       name="close"
                       class="form-control col-12">
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'time','label' => 'Дата (парные часы)']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'time','label' => 'Дата (парные часы)']); ?>
                <input type="datetime-local"
                       class="form-control col-12"
                       name="time"
                       value="<?php echo e(old('time')); ?>">
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
             <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'user','label' => 'Пользователь']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'user','label' => 'Пользователь']); ?>
                <select name="user_id" class="form-control">
                    <option value="-1">Пользователь</option>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
            <button class="btn btn-primary" type="submit">Добавить свечь</button>
        </form>

        <form class="col-12 col-md-6 offset-md-3 text-right my-4" method="POST" action="<?php echo e(route('admin.graph.destroy')); ?>">
            <?php echo csrf_field(); ?>
            <button class="btn btn-danger">Удалить графики</button>
        </form>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/admin/tracking.blade.php ENDPATH**/ ?>