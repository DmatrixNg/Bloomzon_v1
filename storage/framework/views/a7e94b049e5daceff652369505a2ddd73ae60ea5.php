<?php $__env->startSection('page_title'); ?>
    Review and Feddback
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="card p-0">
                <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-12 text-center ml-0">
                        <h2>Review &amp; Feedback</h2>
                    </div>

                </div>
                <div class="row col-md-12 mb-3" style="padding: 20px;">

                    <?php if(count($reviews)): ?>
                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mb-2 p-4" style="border-radius: 20px; background-color: #fcfcfc; width: 100%; border: 1px solid #fcfcfc; text-shadow: #666;">
                        <a href="reply-review">
                            <div class="col-md-2">
                            <img src="<?php echo e(asset('storage/assets/buyer/avatar/'.$review->buyer_id->avatar)); ?>" class="img img-circle" width="70" height="70">
                            </div>
                            <div class="col-md-4">
                                <span class="badge badge-dark" style="background-color: #2B2950 !important; font-size: 17px;">
                                    <?php echo e($review->buyer_id->full_name); ?>

                                </span>
                                <p style="font-size: large;"><?php echo e($review->message); ?></p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p>
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <?php if($i < $review->rating): ?>
                                    <span class="fa fa-star-o"></span>
                                    <?php else: ?>
                                    <span class="fa fa-star"></span>
                                    <?php endif; ?>

                                    <?php endfor; ?>
                                   
                                </p>
                            <a href="<?php echo e(url('buyer/reply-review/'.$review->id)); ?>" class="btn btn-outline-primary mr-4" style="border: solid 1px #666;">Reply</button>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <h3 class="alert alert-warning">
                        No reviews
                    </h3>
                    <?php endif; ?>


                </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/sqt/bloom/resources/views/dashboard/buyer/review-feedback.blade.php ENDPATH**/ ?>