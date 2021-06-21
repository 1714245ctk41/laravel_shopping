<?php $__env->startSection('css'); ?>

    <!-- Summernote css -->
    
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.content-header', ['name' => 'PRODUCT', 'key' => 'Add'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Hướng dẫn</h4>
                <p class="card-title-desc">Điền đầy đủ thông tin bên dưới</p>
                

            <form method="POST" action="<?php echo e(route('product.store')); ?>" data-select2-id="7" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Tên sản phẩm</label>
                            <input value="<?php echo e(old('name')); ?>" id="name" name="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php echo $__env->make('partials.error-validation', ['error_validation' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </div>
                           
                            
                            <div class="form-group">
                                <label for="price">Giá sản phẩm</label>
                                <input value="<?php echo e(old('price')); ?>" id="price" name="price" type="text" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php echo $__env->make('partials.error-validation', ['error_validation' => 'price'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </div>
                            <div class="form-group">

                             <label for="price">Ảnh đại diện</label>

                            <div class="custom-file">
                                
                                <input name="feature_image_path" type="file" class="form-control-fil " >
                                <label   for="customFile">Choose file</label>
                              </div>
                            </div>

                            <div class="form-group">

                                <label for="price">Ảnh chi tiết</label>
   
                               <div class="custom-file">
                                   
                                   <input name="image_path[]" multiple type="file" class="form-control-fil " >
                                   <label name="image_path"  for="customFile">Choose file</label>
                                 </div>
                               </div>

                        </div>
                        

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Danh mục sản phẩm</label>
                                <select id="select2" class="form-control select2 <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="category_id" placeholder="hahah">
                                    <option value="">Chọn danh mục sản phẩm</option>
                                    <?php
                                        echo $htmlOption
                                    ?>
                                </select>
                            <?php echo $__env->make('partials.error-validation', ['error_validation' => 'category_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </div>
                            <div class="form-group" data-select2-id="7">
                                <label class="control-label">Tag sản phẩm</label>

                                <select name="tags[]" class="select2 form-control select2-multiple select2-hidden-accessible" multiple data-placeholder="Choose ..." data-select2-id="4" tabindex="-1" aria-hidden="true">
                                    <option value="AK" data-select2-id="9">Alaska</option>
                                    <option value="HI" data-select2-id="10">Hawaii</option>
                                    <option value="CA" data-select2-id="11">California</option>
                                    <option value="NV" data-select2-id="12">Nevada</option>
                                    <option value="OR" data-select2-id="13">Oregon</option>
                                    <option value="WA" data-select2-id="14">Washington</option>
                                </select>
                                

                            </div>
                           
                        
                            
                        </div>

                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Mô tả</h4>
                                    
        <textarea name="content" class="form-control my-editor <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
           <?php echo e(old('content')); ?>

        </textarea>
        <?php echo $__env->make('partials.error-validation', ['error_validation' => 'content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    
                                </div>
                            </div>
                        </div> <!-- end col -->

                    </div>

                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                </form>

            </div>
        </div>

        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>


<script src="<?php echo e(asset('/admins/product/add/add.js')); ?>"></script>

<!--tinymce js-->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
<!-- Summernote js -->

<!-- init js -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php_mySQL_cakephp2_laravel\laravel\laravel_learn_from_youtube\laravel_shopping\resources\views/admin/product/add.blade.php ENDPATH**/ ?>