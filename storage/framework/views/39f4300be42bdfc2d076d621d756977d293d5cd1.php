
<?php $__env->startSection('page_title'); ?>
    Professional Service
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container text-center mt-5">


    <p class="text-left"><a href="<?php echo e(url("/")); ?>">Home</a> <i class="fa fa-chevron-right"></i> <a style="color:grey;" href="fastfood.html">Fast Food Vendors</a></p>

    <h4 class="text-left"><?php echo e(strtoupper(\Request::segment(1))); ?> VENDOR</h4>

    <div class="row mt-5">
        <?php if(!count($proservices)): ?>
        <div class="alert alert-warning">No Vendor</div>
        <?php else: ?>
        <?php $__currentLoopData = $proservices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proservice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
            <div class="card" style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">
                <div class="card-up white lighten-1"></div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Avatar -->
                        <div class="avatar mx-auto white">
                            <img src="<?php echo e(asset('storage/assets/professional/avatar/'.$proservice->avatar)); ?>" class="rounded-circle" alt="" width="200" height="200">
                        </div>
                        <!-- Content -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="testimonial_heading font-weight-bold"><?php echo e($proservice->company_name); ?></h3>
                        <p class="testimonial_heading2"><?php echo e($proservice->full_name); ?></p>
                        <p class="testimonial_heading2"><?php echo e($proservice->shop_address); ?></p>
                        <a href="<?php echo e(url(app()->getLocale().'/proservice-details/'.$proservice->id)); ?>" class="btn btn-outline-primary">View Services</a>

                    </div>
                    <br>
                    <!-- Quotation -->
                    <p class="testimonial_text"><?php echo e($proservice->service_description); ?>.</p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/front/proservices.blade.php ENDPATH**/ ?>