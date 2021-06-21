<?php $__env->startSection('content'); ?>


<!-- start page title -->

<?php echo $__env->make('partials.content-header', ['name' => 'Role', 'key' => 'Edit'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end page title -->
<div class="roles-create-wrapper">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                

                <form method="POST" action="<?php echo e(route('roles.update', ['role' => $role->id])); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="productname">Tên vai trò</label>
                                <input value="<?php echo e($role->name); ?>" id="name" name="name" type="text"
                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <?php echo $__env->make('partials.error-validation', ['error_validation' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="productname">Mô tả vai trò</label>
                                <textarea rows="4" id="description" name="display_name" type="text"
                                    class="form-control "><?php echo e($role->display_name); ?></textarea>
                                
                                
                                
                            </div>

                        </div>

                    </div>

            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
    <div class="card border border-primary">
    <div class="card-header bg-transparent border-primary">

        <h5 class="my-0 text-primary">
            <div
                class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                <input  type="checkbox"
                    class="custom-control-input checkall"
                    id="customCheck-outlinecolorcheckall">
                <label class="custom-control-label"
                    for="customCheck-outlinecolorcheckall">
                    <i
                        class="mdi mdi-bullseye-arrow mr-3"></i>checkall
                </label>
            </div>

        </h5>
    </div>
</div>
</div>
</div>


            <div class="row">
                <?php $__currentLoopData = $permissionsParent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissionsParentItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-12">

                    <div class="card border border-primary">
                        <div class="card-header bg-transparent border-primary">

                            <h5 class="my-0 text-primary">
                                <div
                                    class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                    <input  value=<?php echo e($permissionsParentItem->id); ?> type="checkbox"
                                        class="custom-control-input checkbox_wrapper"
                                        id="customCheck-outlinecolor<?php echo e($permissionsParentItem->id); ?>">
                                    <label class="custom-control-label"
                                        for="customCheck-outlinecolor<?php echo e($permissionsParentItem->id); ?>">
                                        <i
                                            class="mdi mdi-bullseye-arrow mr-3"></i><?php echo e($permissionsParentItem->display_name); ?>

                                    </label>
                                </div>

                            </h5>
                        </div>
                        <div class="row">
                            <?php $__currentLoopData = $permissionsParentItem->permissionsChildren; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="col-3">

                                <div class="card-body">
                                    <h5 class="card-title mt-0">

                                        <div
                                            class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                            <input value="<?php echo e($item->id); ?>" type="checkbox"
                                            name="permission_id[]"
                                            <?php echo e($permissionsChecked->contains('id', $item->id) ? 'checked': ''); ?>

                                                class="custom-control-input checkbox_children"
                                                id="customCheck-outlinecolor<?php echo e($item->id); ?>">
                                            <label class="custom-control-label"
                                                for="customCheck-outlinecolor<?php echo e($item->id); ?>"><?php echo e($item->name); ?></label>
                                        </div>

                                    </h5>
                                </div>


                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>


            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Thêm vai trò</button>
            
            </form>

        </div>
    </div>
</div>

</div>
<!-- end row -->

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
$(function(){
    $('.checkbox_wrapper').on('click', function() {
    $(this).parents('.card').find('.checkbox_children').prop('checked', $(this).prop('checked'));
})

$('.checkall').on('click', function(){
    $(this).parents().find('.checkbox_children').prop('checked', $(this).prop('checked'));
    $(this).parents().find('.checkbox_wrapper').prop('checked', $(this).prop('checked'));


})
})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php_mySQL_cakephp2_laravel\laravel\laravel_learn_from_youtube\laravel_shopping\resources\views/admin/role/edit.blade.php ENDPATH**/ ?>