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
                    <?php if(count($bproducts)): ?>
                    <?php $__currentLoopData = $bproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 mb-3 p-3">
                            <div class="p-3">
                                <div class="row bg-white p-5" style="height: 280px;">
                                    <img src="<?php echo e(asset('storage/assets/product/avatars/'.$product->avatars[0])); ?>" width="100%">
                                </div>
                                <div style="margin-top: -25px;" class="text-right"> <a href="<?php echo e(url('product-details/'.base64_encode($product->id))); ?>" class="btn btn-danger btn-lg"><?php echo e($product->product_name); ?></a></div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <?php else: ?>
                <h3 class="alert alert-warning">No product from bloomzon yet - please check back later</h3>
                <?php endif; ?>
                </div>
                <?php echo e($bproducts->links()); ?>

            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/sqt/bloom/resources/views/dashboard/buyer/bloomzon-products.blade.php ENDPATH**/ ?>