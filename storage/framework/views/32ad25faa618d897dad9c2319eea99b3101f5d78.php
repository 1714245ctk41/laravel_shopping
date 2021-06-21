<?php $__env->startSection('css'); ?>

    <!-- Summernote css -->
    
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('partials.content-header', ['name' => 'PRODUCT', 'key' => 'EDIT'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Hướng dẫn</h4>
                <p class="card-title-desc">Điền đầy đủ thông tin bên dưới</p>

            <form method="POST" action="<?php echo e(route('product.update', ['product' => $product->id])); ?>" data-select2-id="7" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="name" ">Tên sản phẩm</label>
                                <input value="<?php echo e($product->name); ?>" id="name" name="name" type="text" class="form-control">
                            </div>
                           
                            
                            <div class="form-group">
                                <label for="price">Giá sản phẩm</label>
                                <input value="<?php echo e($product->price); ?>" id="price" name="price" type="text" class="form-control">
                            </div>
                            <div class="form-group">

                             <label for="price">Ảnh đại diện</label>

                            <div class="custom-file">
                                
                                <input name="feature_image_path" type="file" class="form-control-fil" >
                                <label   for="customFile">Choose file</label>
                              </div>
                            </div>

                            <div class="form-group">

                                <label for="price">Ảnh chi tiết</label>
   
                               <div class="custom-file">
                                   
                                   <input name="image_path[]" multiple type="file" class="form-control-fil" >
                                   <label name="image_path"  for="customFile">Choose file</label>
                                 </div>
                               </div>

                        </div>
                        

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Danh mục sản phẩm</label>
                                <select class="form-control select2" name="category_id">
                                    <option value="0">Chọn danh mục</option>
                                    <?php
                                        echo $htmlOption
                                    ?>
                                </select>
                            </div>
                            <div class="form-group" data-select2-id="7">
                                <label class="control-label">Tag sản phẩm</label>

                                <select name="tags[]" class="select2 form-control select2-multiple select2-hidden-accessible" multiple data-placeholder="Choose ..." data-select2-id="4" tabindex="-1" aria-hidden="true">
                                   
                                    <?php $__currentLoopData = $product->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  
                                    <option value="<?php echo e($tag->name); ?>" data-select2-id="14" selected><?php echo e($tag->name); ?></option>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                

                            </div>
                            <div class="form-group">
                                <label for="name" ">Ảnh đại diện hiện tại</label><br>
                                     <img src="<?php echo e($product->feature_image_path); ?>" width="100px" alt="">
                                </div>

                                
                        
                            
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="name" ">Ảnh chi tiết hiện tại</label><br>
                                <?php $__currentLoopData = $product->productImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_image_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e($product_image_item->image_path); ?>" width="100px" alt="">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     
                                </div>

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Mô tả</h4>
                                    
                                <textarea name="content" class="form-control my-editor" value="<?php echo e($product->content); ?>"><?php echo e($product->content); ?></textarea>

                                    
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php_mySQL_cakephp2_laravel\laravel\laravel_learn_from_youtube\laravel_shopping\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>