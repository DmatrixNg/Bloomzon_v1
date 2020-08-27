
<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">

                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Bloomzon Products</h1>
                    </div>
                </div>

                <div class="row">

                    <?php $__currentLoopData = $bproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 mb-3 p-3">
                            <div class="p-3">
                                <div class="row bg-white p-5" style="height: 280px;">
                                    <img src="<?php echo e(asset('buyer_assets/img/bag.png')); ?>" width="100%">
                                </div>
                                <div style="margin-top: -25px;" class="text-right"> <a href="product-list?bproducts=Ymxvb216b25fcHJvZHVjdHM=" class="btn btn-danger btn-lg"><?php echo e($product->product_name); ?></a></div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/buyer/bloomzon-products.blade.php ENDPATH**/ ?>