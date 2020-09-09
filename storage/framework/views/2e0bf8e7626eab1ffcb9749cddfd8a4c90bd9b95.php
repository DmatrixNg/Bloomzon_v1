<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>
<?php

    /** \App\Order::where('buyer_id',Auth::user()->id)->get();  **/
?>
        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <a href="purchase-history">
                            <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">

                                <h3><b><i class="fas fa-paste"></i> TOTAL ORDERS </b></h3>
                                    <h2 style="font-size: 70px;"><?php echo e(count($orders)); ?></h2>
                                        <p style="color: crimson; font-size: 16px">Track, Return or Buy product again</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="points">
                            <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">

                                <h3><b><i class="far fa-dot-circle"></i> YOUR POINTS</b></h3>
                                <h2 style="font-size: 70px;"><?php echo e(auth()->guard('buyer')->user()->point->total_point ?? 0); ?></h2>
                                <p style="color: crimson; font-size: 16px">Buy with your points and get discounts</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                    <a href="<?php echo e(asset('buyer/edit-login-details')); ?>">
                            <div class="card text-center pt-3" style="color: #02499B; background-color: white; padding: 30px;">
                                <h2 style="font-size: 70px;"><i class="fas fa-user-lock"></i></h2>
                                <h4>Login &amp; Security Settings</h4><br><br>
                                <p style="color: crimson; font-size: 16px">Edit Login Details</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                            <h2 style="font-size: 70px;"><i class="fas fa-play"></i></h2>
                            <h4> <a href="<?php echo e(url(app()->getLocale())); ?>/#bloomzon_tv" target="_blank"> Stream Bloomzon TV </a> </h4>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="<?php echo e(url(app()->getLocale())); ?>/track-delivery">
                            <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                                <h2 style="font-size: 70px;"><i class="fas fa-route"></i></h2>
                                <h4>Track Your Purchase</h4><br>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="<?php echo e(url("buyer/delivery-status")); ?>">
                            <div class="card text-center pt-3" style="color: #02499B; background-color: white; padding: 30px;">
                                <h2 style="font-size: 70px;"><i class="fas fa-truck"></i></h2>
                                <h4>Delivery Alert</h4><br><br>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="update-account-details">
                            <div class="card text-center pt-3" style="color: #02499B; background-color: white; padding: 30px;">
                                <h2 style="font-size: 70px;"><i class="fas fa-credit-card"></i></h2>
                                <h4>Update &amp; Save Payment Method</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/new/Bloomzon_v1/resources/views/dashboard/buyer/home.blade.php ENDPATH**/ ?>