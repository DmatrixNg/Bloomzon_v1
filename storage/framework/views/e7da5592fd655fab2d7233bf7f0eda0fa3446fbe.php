<?php $__env->startSection('page_title'); ?>
    Fast Food & Groceries Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-center" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                            <h1 style="padding: 10px;"><b>Control/Routing Check</b></h1>
                            <img src="<?php echo e(asset('assets/dashboard/img/route.png')); ?>" height="900">
                        </div>
                    </div>
                </div>

            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.shopper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/shopper/routing.blade.php ENDPATH**/ ?>