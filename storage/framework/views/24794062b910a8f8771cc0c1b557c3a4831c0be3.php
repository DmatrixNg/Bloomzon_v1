<?php $__env->startSection('content'); ?>

    <div class="col-md-10 mb-5">
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo e(route('shopper.delivery-request')); ?>">
                    <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                        <img src="<?php echo e(asset('assets/dashboard/img/bike.png')); ?>" width="120" style="margin: 0 auto;">
                        <h1><b>Delivery Request</b></h1>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="<?php echo e(route('shopper.warehouse-package')); ?>">
                    <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                        <img src="<?php echo e(asset('assets/dashboard/img/truck.png')); ?>" width="120" style="margin: 0 auto;">
                        <h1><b>Sent in Goods</b></h1>
                    </div>
                </a>
            </div>

        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                    <h1 style="padding: 10px;"><b>Track Delivery Merchants</b></h1>
                    <img src="<?php echo e(asset('assets/dashboard/img/route.png')); ?>" height="600">
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.shopper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/shopper/home.blade.php ENDPATH**/ ?>