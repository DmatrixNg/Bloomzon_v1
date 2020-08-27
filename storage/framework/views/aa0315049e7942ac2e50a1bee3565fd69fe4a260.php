<?php $__env->startSection('page_title'); ?>
    Shopper'sDashboard
<?php $__env->stopSection(); ?>


        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3 text-white"><b>Payment Request</b></h1>
                </div>
                <div class="row col-md-12 mb-3" style="background-color: #2B2950 !important; padding: 20px;">
                    <?php if(count($payment_requests)): ?>
                    <?php $__currentLoopData = $payment_requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment_request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-2 p-4" style="border-radius: 0; background-color: #5C5B78; width: 100%; color: white;">
                            <div class="col-md-4">
                                <p class="text-white"><?php echo e(\Carbon\Carbon::parse($payment_request->user_id->created_at)->format('Y/m/d')); ?></p>
                                <img src="<?php echo e(asset('storage/assets/buyer/avatar/'.$payment_request->user_id->avatar)); ?>" class="img img-circle" width="70" height="70">
                            </div>
                            <div class="col-md-5">
                                <p class="p-0 mb-3" style="font-size: 12px;"><span>SELLER ID: </span></p>
                                <p class="p-0 mb-3" style="font-size: 12px;"><span>REQUEST: </span></p>
                                <p class="p-0 mb-3" style="font-size: 12px;"><span>AMOUNT: </span></p>
                                <a href="<?php echo e(route('shopper.request-details',$payment_request->id)); ?>" class="btn btn-danger btn-sm">Proceed to Payment</a>
                            </div>
                            <div class="col-md-3">
                                <p class="p-0 mb-3"><span><?php echo e($payment_request->user_id->id); ?></span></p>
                                <p class="p-0 mb-3"><span><?php echo e($payment_request->narration); ?></span></p>
                                <p class="p-0 mb-3"><span><?php echo e(number_format($payment_request->amount)); ?></span></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="alert alert-warning">
                        No Payment request made
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.shopper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/shopper/wallet.blade.php ENDPATH**/ ?>