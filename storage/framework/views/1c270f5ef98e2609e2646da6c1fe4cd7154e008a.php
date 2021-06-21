<?php $__env->startSection('content'); ?>


 <!-- start page title -->
 
                      <?php echo $__env->make('partials.content-header', ['name' => 'user', 'key' => 'Add'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

        
<form method="POST" action="<?php echo e(route('users.update', ['user' => $user->id])); ?>" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="productname">Nhập tên</label>
                                                    <input value="<?php echo e($user->name); ?>" id="name" name="name" type="text" class="form-control ">
                            

                                                    </div>
                                                
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="productname">Nhập email</label>
                                                    <input value="<?php echo e($user->email); ?>" id="email" name="email" type="email" class="form-control ">
                            

                                                    </div>
                                                
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="productname">Nhập password</label>
                                                    <input value="" id="password" name="password" type="password" class="form-control ">
                            

                                                    </div>
                                                
                                                </div>

                                            </div>

                                            <div class="form-group" data-select2-id="7">
                                                <label class="control-label">Vai trò</label>
                
                                                <select name="role_id[]" class="select2_init form-control select2-multiple select2-hidden-accessible" multiple data-placeholder="Choose ..." data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                    <option value=""></option>
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option 
                                                <?php echo e($rolesOfUser->contains('id', $role->id) ? 'selected' : ''); ?>

                                                value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                   
                                            </select>
                                                
                
                                            </div>
                         


                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Chỉnh sửa</button>
                                            
                                        </form>
        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

        


<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


<script src="<?php echo e(asset('/admins/product/add/add.js')); ?>"></script>
<script>
    $('.select2_init').select2({
        'placeholder': 'Chọn vai trò'
    })
</script>

<!--tinymce js-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php_mySQL_cakephp2_laravel\laravel\laravel_learn_from_youtube\laravel_shopping\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>