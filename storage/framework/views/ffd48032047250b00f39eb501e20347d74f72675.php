
<?php $__env->startSection('page_title'); ?>
    Networking Agent Dashboard
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="mt-5" style="background-color: white; padding: 30px;">
            <div class="container">
                <div class="row mb-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-2">
                        <h5 class="p-3">Stage 1</h5>
                    </div>
                    <?php if(count($stage1)): ?>
                        <?php $__currentLoopData = $stage1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-1">
                                <i class="fa fa-male fa-4x" style="color: #0149a0;"></i> <br>
                                <?php echo e($seller->seller->products->count() == 0 ? 'Inactive' : 'Active'); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="alert alert-warning">You do not have any seller</div>
                    <?php endif; ?>
                    <div class="col-md-12 p-5">
                        <p class="text-gray">(You need <?php echo e(7 - count($stage1)); ?> users to complete this state)</p>
                    </div>
                </div>
                <div class="row mb-5"  style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-2">
                        <h5>Stage 2</h5>
                    </div>
                    <?php if(count($stage2)): ?>
                    <?php $__currentLoopData = $stage2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-1">
                            <i class="fa fa-male fa-4x" style="color: #0149a0;"></i><br>
                            <?php echo e($seller->seller->products->count() ? 'Inactive' : 'Active'); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <div class="alert alert-warning">You do not have any seller for this stage</div>
                <?php endif; ?>
                <div class="col-md-12 p-5">
                    <p class="text-gray">(You need <?php echo e(14 - count($stage2)); ?> users to complete this state)</p>
                </div>
                </div>
                <div class="row mb-5"   style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-2">
                        <h5>Stage 3</h5>
                    </div>
                    <?php if(count($stage3)): ?>
                        <?php $__currentLoopData = $stage1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-1">
                                <i class="fa fa-male fa-4x" style="color: #0149a0;"></i><br>
                                <?php echo e($seller->seller->products->count() ? 'Inactive' : 'Active'); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="alert alert-warning">You do not have any seller for this stage</div>
                    <?php endif; ?>
                    <div class="col-md-12 p-5">
                        <p class="text-gray">(You need <?php echo e(28 - count($stage3)); ?> users to complete this state)</p>
                    </div>

                </div>
            </div>
        </div>
        <br><br>

        <div class="container">
            <div class="float-left">
                <a href="#" style="background-color: #BA220E; color:white; width: 150px; border-radius: 20px; padding:10px;">SITE</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>








<?php $__env->startSection('OldContent'); ?>
    <div class="col-md-10">
        <div class="col-md-12 text-center mt-5 mb-5"
            style="padding: 10px; text-align: center !important; border-bottom: 1px solid #f2f2f2;">
            <h1 class="text-center m-auto pt-3 pb-3 "><b>Your Histogram History</b></h1>
        </div>
        <div class="row mt-5 mb-5" style="border-bottom: #f2f2f2 solid 1px;">
            <div class="col-md-12">
                <h5 class="p-3">STAGE 1</h5>
            </div>

            <?php if(count($stage1)): ?>
                <?php $__currentLoopData = $stage1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-md-2">
                        <img style="margin-left: 25px;" class="text-center" height="50" width="50"
                            src="<?php echo e(asset('storage/assets/seller/avatar/' . $stage->seller->avatar)); ?>"><br>
                        <button class="btn"
                            style="font-size: 10px; background: #AF2E1D; color: white; border-radius: 30px;"><?php echo e($stage->seller->full_name); ?></button>
                        <p class="text-center"><strong>Active</strong></p>
                        <hr style="background-color: #1DAF3F; height: 5px; margin-top: -10px;">

                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <p style="color: #02499B;">(Needs <?php echo e(7 - count($stage1)); ?> sellers to
                    complete this stage)</p>
            <?php else: ?>
                <div class="alert alert-warning">You have added no seller</div>
            <?php endif; ?>
        </div>
        <div class="row mt-5 mb-5" style="border-bottom: #f2f2f2 solid 1px;">
            <div class="col-md-12">
                <h5 class="p-3">STAGE 2</h5>
            </div>

            <?php if(count($stage2)): ?>
                <?php $__currentLoopData = $stage2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-md-2">
                        <img style="margin-left: 25px;" class="text-center"
                            src="<?php echo e(asset('storage/assets/seller/avatar/' . $stage->seller->avatar)); ?>"><br>
                        <button class="btn"
                            style="font-size: 10px; background: #AF2E1D; color: white; border-radius: 30px;"><?php echo e($stage->seller->full_name); ?></button>
                        <p class="text-center"><strong>Active</strong></p>
                        <hr style="background-color: #1DAF3F; height: 5px; margin-top: -10px;">

                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <br> <p style="color: #02499B;">(Needs <?php echo e(7 - count($stage1)); ?> sellers to
                    complete this stage)</p>
            <?php else: ?>
                <div class="alert alert-warning">You have added no seller</div>
            <?php endif; ?>
        </div>
        <div class="row mt-5 mb-5" style="border-bottom: #f2f2f2 solid 1px;">
            <div class="col-md-12">
                <h5 class="p-3">STAGE 3</h5>
            </div>

            <?php if(count($stage3)): ?>
                <?php $__currentLoopData = $stage3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-md-2">
                        <img style="margin-left: 25px;" class="text-center" width="20" height="20"
                            src="<?php echo e(asset('storage/assets/seller/avatar/' . $stage->seller->avatar)); ?>"><br>
                        <button class="btn"
                            style="font-size: 10px; background: #AF2E1D; color: white; border-radius: 30px;"><?php echo e($stage->seller->full_name); ?></button>
                        <p class="text-center"><strong>Active</strong></p>
                        <hr style="background-color: #1DAF3F; height: 5px; margin-top: -10px;">

                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <br> <p style="color: #02499B;">(Needs <?php echo e(7 - count($stage1)); ?> sellers to
                    complete this stage)</p>
            <?php else: ?>
                <div class="alert alert-warning">You have added no seller</div>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <a href="<?php echo e(route('networking_agent.create-seller')); ?>" class="btn" style="background: #02499B; color: white; border-radius: 30px;"> Add Seller</a>
            
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.networking_agent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/networking_agent/histogram.blade.php ENDPATH**/ ?>