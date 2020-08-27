<?php $__env->startSection('page_title'); ?>
    Fast Food Groceries
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container text-center mt-5">


    <p class="text-left"><a href="index.html">Home</a> <i class="fa fa-chevron-right"></i> <a style="color:grey;" href="fastfood.html">Fast Food Vendors</a></p>

    <h4 class="text-left"><?php echo e(strtoupper(\Request::segment(1))); ?> VENDOR</h4>
    
    <div class="row mt-5">
        <?php if(!count($fast_foods)): ?>
        <div class="alert alert-warning">No Vendor</div>
        <?php else: ?>
        <?php $__currentLoopData = $fast_foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ffg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
            <div class="card" style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">
                <div class="card-up white lighten-1"></div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Avatar -->
                        <div class="avatar mx-auto white">
                            <img src="<?php echo e(asset('storage/assets/fast_food_grocery/avatar/'.$ffg->avatar)); ?>" class="rounded-circle" alt="" width="200" height="200">
                        </div>
                        <!-- Content -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="testimonial_heading font-weight-bold"><?php echo e($ffg->company_name); ?></h3>
                        <p class="testimonial_heading2"><?php echo e($ffg->full_name); ?></p>
                        <p class="testimonial_heading2"><?php echo e($ffg->shop_address); ?></p>
                        <a href="<?php echo e(url('/fast-food-details/'.$ffg->id)); ?>" class="btn btn-primary border-0 h2">View Profile</a>
                        <a href="<?php echo e(url('/vendor-food-list/'.$ffg->id)); ?>" class="btn btn-danger border-0 h2">View Products</a>
                    </div>
                    <br>
                    <!-- Quotation -->
                    <p class="testimonial_text"><?php echo e($ffg->service_description); ?>.</p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/front/fast-food-grocery.blade.php ENDPATH**/ ?>