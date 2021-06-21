<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.content-header', ['name' => 'Product', 'key' => 'List'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <div class="search-box mr-2 mb-2 d-inline-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <i class="bx bx-search-alt search-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="text-sm-right">
                        <a href="<?php echo e(route('product.create')); ?>">
                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2">
                                <i class="mdi mdi-plus mr-1"></i> Add New Product</button>
                            </a>
                        </div>
                    </div><!-- end col-->
                </div>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Product ID</th>
                                <th>Tên Sản phẩm</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Danh mục</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body font-weight-bold"><?php echo e($product['id']); ?></a> </td>
                                <td><?php echo e($product['name']); ?></td>
                                <td>
                                    <?php echo e(number_format($product['price'])); ?> vnđ
                                </td>

                                <td>
                                    <img src="<?php echo e($product['feature_image_path']); ?>" width="100px"  alt="">
                                    
                                </td>
                                <td>
                                    <?php echo e(optional($product->category)->name); ?>

                                </td>

                                <td>
                                    <a href="<?php echo e(route('product.edit', ['product'=>$product['id']])); ?>"  class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="mdi mdi-pencil font-size-18"></i></a>
                            
                                        
                                        
                                    <a  href="" id="action_delete" data-url="<?php echo e(route('product.delete', ['product'=>$product['id']])); ?>"
                                         class="text-danger action_delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="mdi mdi-close font-size-18"></i></a>
                                </td>
                               
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           

                            
                        </tbody>
                    </table>
                </div>
              
              <?php echo $__env->make('partials.pagination', ['paginator' => $products], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?php echo e(asset('admins/main.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php_mySQL_cakephp2_laravel\laravel\laravel_learn_from_youtube\laravel_shopping\resources\views/admin/product/index.blade.php ENDPATH**/ ?>