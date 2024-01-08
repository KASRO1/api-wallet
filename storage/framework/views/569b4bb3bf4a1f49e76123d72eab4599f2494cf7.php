<?php
    if(!isset($route))
    {
        $route = Str::replaceLast('.index', '', Route::currentRouteName());
    }

    $options = array_merge([
        'show' => true,
        'edit' => true,
        'delete' => true,
    ], (array) ($options ?? []));
?>

<?php if($options['show']): ?>
    <a href="<?php echo e(route($route . '.show', $data)); ?>" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></a>
<?php endif; ?>

<?php if($options['edit']): ?>
    <a href="<?php echo e(route($route . '.edit', $data)); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
<?php endif; ?>

<?php if($options['delete']): ?>
    <form id="delete-form-<?php echo e($data->id); ?>" action="<?php echo e(route($route .'.destroy', $data)); ?>" method="POST"
          style="display: none;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
    </form>

    <a  class="btn btn-sm btn-danger" href="<?php echo e(route($route .'.destroy', $data)); ?>"
        onclick="event.preventDefault(); if(confirm('Точно хотите удалить?')) {
            document.getElementById('delete-form-<?php echo e($data->id); ?>').submit(); }">
        <i class="fas fa-trash"></i>
    </a>
<?php endif; ?>

<?php if(isset($options['hide']) ? $options['hide'] : false): ?>
    <form id="hide-form-<?php echo e($data->id); ?>" action="<?php echo e(route($route .'.hide', $data)); ?>" method="POST"
          style="display: none;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>
    </form>
    <a  class="btn btn-sm btn-danger" href="<?php echo e(route($route .'.hide', $data)); ?>"
        onclick="
            event.preventDefault();
            if(confirm('Точно хотите скрыть?')) {
            document.getElementById('hide-form-<?php echo e($data->id); ?>').submit();
            // document.location.href = event.currentTarget.href;
            }
            ">
        <i class="fa fa-eye-slash"></i>
    </a>
<?php endif; ?>
<?php /**PATH /Users/nikita/PhpstormProjects/api-wallet/resources/views/admin/components/_actions.blade.php ENDPATH**/ ?>