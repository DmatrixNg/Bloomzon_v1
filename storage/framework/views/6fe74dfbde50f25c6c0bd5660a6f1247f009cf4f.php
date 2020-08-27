<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row col-md-12 text-center" style="background-color: #2B2950 !important; padding: 10px; text-align: center !important; color:white">
        <h1 class="text-center m-auto pt-3 pb-3"><b>Review &amp; Feedback</b></h1>
    </div>
    <div class="row col-md-12 mb-3" style="background-color: #fff !important; padding: 20px;">
        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-2 p-4" style="border-radius: 20px; background-color: #fcfcfc; width: 100%; border: 1px solid #fcfcfc; text-shadow: #666;">
                <div class="col-md-2">
                    <i class="fa fa-user-circle fa-4x pl-3"></i>
                </div>
                <div class="col-md-4">
                    <span class="badge badge-dark" style="background-color: #2B2950 !important; font-size: 17px;">
                        <?php echo e($review->buyer); ?>

                    </span>
                    <p style="font-size: large;"><?php echo e($review->review_message); ?></p>
                </div>
                <div class="col-md-6 text-right text-danger">
                    <p>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                    </p>
                    <a href="#" class="btn btn-outline-primary mr-4" style="border: solid 1px #666;">Edit</a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/buyer/feedback.blade.php ENDPATH**/ ?>