<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <title>Add Product | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('./assets/images/favicon.ico')); ?>">

        <!-- select2 css -->
        <link href="<?php echo e(asset('./assets/libs/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css">

        <!-- dropzone css -->
        <link href="<?php echo e(asset('./assets/libs/dropzone/min/dropzone.min.css')); ?>" rel="stylesheet" type="text/css">

        <!-- Bootstrap Css -->
        <link href="<?php echo e(asset('./assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="<?php echo e(asset('./assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="<?php echo e(asset('./assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css">
        <?php echo $__env->yieldContent('css'); ?>

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?php echo $__env->yieldContent('content'); ?>
                       

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

     


        <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('./assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('./assets/libs/node-waves/waves.min.js')); ?>"></script>

        <!-- select 2 plugin -->
        <script src="<?php echo e(asset('./assets/libs/select2/js/select2.min.js')); ?>"></script>

        <!-- dropzone plugin -->
        <script src="<?php echo e(asset('./assets/libs/dropzone/min/dropzone.min.js')); ?>"></script>

        <!-- init js -->
        <script src="<?php echo e(asset('./assets/js/pages/ecommerce-select2.init.js')); ?>"></script>

        <!-- App js -->
        <script src="<?php echo e(asset('./assets/js/app.js')); ?>"></script>


        <?php echo $__env->yieldContent('js'); ?>

    </body>
</html>
<?php /**PATH D:\php_mySQL_cakephp2_laravel\laravel\laravel_learn_from_youtube\laravel_shopping\resources\views/layouts/admin.blade.php ENDPATH**/ ?>