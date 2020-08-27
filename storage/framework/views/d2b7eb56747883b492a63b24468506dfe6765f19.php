<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row m-5">
        <div class="col-md-6">
            <div class="card align-items-center dashboard_box">
                <img src="<?php echo e(asset('assets/dashboard/img/messageicon.png')); ?>" width="200" height="180" alt="">
            </div>
            <a href="<?php echo e(route('admin.all-messages')); ?>" class="btn dashboard_btn text-white">Messages</a>
        </div>
        <div class="col-md-6">
            <div class="card align-items-center dashboard_box">
                <img src="<?php echo e(asset('assets/dashboard/img/usersicon.png')); ?>" width="200" height="160" alt="">

            </div>
            <a href="<?php echo e(route('admin.create-user')); ?>" class="btn dashboard_btn text-white">User Management</a>
        </div>

    </div>
    
    <div class="row m-5">
        <div class="col-md-6 justify-content-center">
            <div class="card align-items-center dashboard_box">
                <img src="<?php echo e(asset('assets/dashboard/img/settings.png')); ?>" width="180" height="180" alt="">

            </div>
            <a href="<?php echo e(url('/admin/settings')); ?>" class="btn dashboard_btn">Settings</a>
        </div>
        <div class="col-md-6 justify-content-center">
            <div class="card align-items-center dashboard_box">
                <img src="<?php echo e(asset('assets/dashboard/img/payouticon.png')); ?>" width="180" height="180" alt="">

            </div>
            <a href="<?php echo e(url('/admin/payout-request')); ?>" class="btn dashboard_btn">Payout Request</a>
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/admin/dashboard.blade.php ENDPATH**/ ?>