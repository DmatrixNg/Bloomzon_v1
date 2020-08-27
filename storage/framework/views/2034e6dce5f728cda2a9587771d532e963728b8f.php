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
                                    <i class="fa fa-male fa-4x" style="color: #0149a0;"></i>
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
                                <i class="fa fa-male fa-4x" style="color: #0149a0;"></i>
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
                                    <i class="fa fa-male fa-4x" style="color: #0149a0;"></i>
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

<?php echo $__env->make('layouts.dashboard.networking_agent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/networking_agent/home.blade.php ENDPATH**/ ?>