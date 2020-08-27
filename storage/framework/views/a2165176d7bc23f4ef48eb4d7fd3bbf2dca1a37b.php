<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-center" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                            <h1 style="padding: 10px;"><b>Track Delivery Merchants</b></h1>
                            <div class="badge badge-danger col-2 p-3 m-3" style="background-color: crimson;">Agent ID: John219</div>
                            <div class="badge badge-danger col-2 p-3 m-3" style="background-color: crimson;">Distance: 10Km Away</div>
                            <img src="<?php echo e(asset('assets/dashboard/img/route.png')); ?>" height="600">
                        </div>
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/buyer/track-order.blade.php ENDPATH**/ ?>