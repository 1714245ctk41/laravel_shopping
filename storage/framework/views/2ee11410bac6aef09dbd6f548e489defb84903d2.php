<?php $__env->startSection('content'); ?>


 <!-- start page title -->
 
                      <?php echo $__env->make('partials.content-header', ['name' => 'slider', 'key' => 'EDIT'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

        
<form method="POST" action="<?php echo e(route('slider.update', ['slider' => $slider])); ?>" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="productname">Tên slider</label>
                                                    <input value="<?php echo e($slider['name']); ?>" id="name" name="name" type="text" class="form-control <?php $__errorArgs = ['name'];
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
                                                        <label for="productname">Mô tả slider</label>
                                                    <textarea rows="4" id="description" name="description" type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e($slider['description']); ?></textarea>
                            <?php echo $__env->make('partials.error-validation', ['error_validation' => 'description'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                                    </div>
                                                
                                                </div>

                                            </div>
                                            <div class="form-group">

                                            <div class="custom-file">

                                                <label for="productname">Thêm hình ảnh slider</label><br>
                                
                                            <input  name="image_path" type="file" class="form-control-fil <?php $__errorArgs = ['image_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
                                                <label   for="customFile">Choose file</label>
                            <?php echo $__env->make('partials.error-validation', ['error_validation' => 'image_path'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                              </div>
                                            </div>
                                        </div>
                                       

                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-title-desc">Hình ảnh cũ</p>
                                            <img src="<?php echo e($slider['image_path']); ?>" width="150px" class="img-fluid" alt="Responsive image">
                                        </div>
                                        </div>
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Edit slider</button>
                                            
                                        </form>
        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

        


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php_mySQL_cakephp2_laravel\laravel\laravel_learn_from_youtube\laravel_shopping\resources\views/admin/slider/edit.blade.php ENDPATH**/ ?>