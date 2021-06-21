<?php $__env->startSection('content'); ?>


 <!-- start page title -->
 
                      <?php echo $__env->make('partials.content-header', ['name' => 'category', 'key' => 'Add'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

        
<form method="POST" action="<?php echo e(route('categories.store')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="productname">Tên danh mục</label>
                                                        <input id="category_name" name="category_name" type="text" class="form-control">
                                                    </div>
                                                
                                                </div>
                                             
        
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Category</label>
                                                        <select class="form-control select2" name="select_parent_id">
                                                            <option value="0">Chọn danh mục cha</option>
                                                            <?php
                                                                echo $htmlOption
                                                            ?>
                                                        </select>
                                                    </div>
                                            
                                                    
                                                </div>
                                            </div>
        
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Save Changes</button>
                                            
                                        </form>
        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

        


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php_mySQL_cakephp2_laravel\laravel\laravel_learn_from_youtube\laravel_shopping\resources\views/admin/category/add.blade.php ENDPATH**/ ?>