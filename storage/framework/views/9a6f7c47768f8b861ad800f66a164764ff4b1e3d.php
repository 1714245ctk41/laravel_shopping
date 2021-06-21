<?php $__env->startSection('content'); ?>


 <!-- start page title -->
 
                      <?php echo $__env->make('partials.content-header', ['name' => 'permission', 'key' => 'Add'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

        
<form method="POST" action="<?php echo e(route('permissions.store')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Chọn tên module</label>
                                                        <select class="form-control select2" name="module_parent">
                                                            <option value="">Chọn tên module</option>
                                                            <?php $__currentLoopData = config('permissions.Table_module'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $moduleItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($moduleItem); ?>"><?php echo e($moduleItem); ?></option>
                                                                
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            
                                                        </select>
                                                    </div>
                                            
                                                    
                                                </div>
                                            </div>

                                            

                                            <div class="row">
                                                <?php $__currentLoopData = config('permissions.module_children'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module_children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    
                                                <div class="col-md-3">

                                                    <div class="card-body">
                                                        <h5 class="card-title mt-0">
                    
                                                            <div
                                                                class="custom-control custom-checkbox custom-checkbox-outline custom-checkbox-primary mb-3">
                                                        <input value="<?php echo e($module_children); ?>" type="checkbox"
                                                                name="module_children[]"
                                                                    class="custom-control-input checkbox_children"
                                                                    id="customCheck-outlinecolorlist<?php echo e($module_children); ?>">
                                                                <label class="custom-control-label"
                                                                    for="customCheck-outlinecolorlist<?php echo e($module_children); ?>"><?php echo e($module_children); ?></label>
                                                            </div>
                    
                                                        </h5>
                                                    </div>
                    

                                                </div>
                                                
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                              
                                            </div>
        
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Lưu thay đổi</button>
                                            
                                        </form>
        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

        


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php_mySQL_cakephp2_laravel\laravel\laravel_learn_from_youtube\laravel_shopping\resources\views/admin/permission/add.blade.php ENDPATH**/ ?>