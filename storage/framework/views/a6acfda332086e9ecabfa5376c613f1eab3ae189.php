<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row mb-5 mt-5">
        <div class="col-md-12 text-center">
            <h2>Review &amp; Feedback</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            

        </div>
        <div class="col-md-4"></div>
        
    </div>


    <div class="container" style="background-color: #fff; padding: 20px;">
    
        <div class="row" style="color: #02499B">
            <div class="col-md-2">
                <h5>Names</h5>
            </div>
            <div class="col-md-4">
                <h5>Review Messages</h5>
            </div>
            <div class="col-md-2">
                <h5>Products</h5>
            </div>
            <div class="col-md-2">
                <h5>For User</h5>
            </div>
            <div class="col-md-2">
                <h5>Action</h5>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row" style="background-color: white; color: black; border-radius: 20px; padding: 20px; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-2">
                        <p><?php echo e($review->buyer_id->full_name); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><?php echo e($review->review_message); ?></p>
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo e(asset('storage/assets/product/avatars/'.$review->product_id->avatars[0])); ?>" height="35" width="35" alt="bag">
                    </div>
                    <div class="col-md-2">
                        <p><?php echo e($review->seller->full_name); ?></p>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown col-2">
                            <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Approve
                            </a>
        
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                <a class="dropdown-item" href="">Approve</a>
                                <a class="dropdown-item" href="">Reject</a>
                                <a class="dropdown-item" href="">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    
    </div>
    
    <div class="container">
        <?php echo e($reviews); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/admin/review.blade.php ENDPATH**/ ?>