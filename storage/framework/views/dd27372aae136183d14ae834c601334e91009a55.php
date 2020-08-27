

<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row m-5">
        <div class="col-md-6">
            <div class="card align-items-center dashboard_box">
                <img src="<?php echo e(asset('front_assets/assets/img/messageicon.png')); ?>" width="200" height="180" alt="">
            </div>
            <a href="messages.html" class="btn dashboard_btn text-white">Messages</a>
        </div>
        <div class="col-md-6">
            <div class="card align-items-center dashboard_box">
                <img src="<?php echo e(asset('front_assets/assets/img/usersicon.png')); ?>" width="200" height="160" alt="">

            </div>
            <a href="allusers.html" class="btn dashboard_btn text-white">User Management</a>
        </div>

    </div>
    
    <div class="row m-5">
        <div class="col-md-6 justify-content-center">
            <div class="card align-items-center dashboard_box">
                <img src="<?php echo e(asset('front_assets/assets/img/settings.png')); ?>" width="180" height="180" alt="">

            </div>
            <a href="settings.html" class="btn dashboard_btn">Settings</a>
        </div>
        <div class="col-md-6 justify-content-center">
            <div class="card align-items-center dashboard_box">
                <img src="<?php echo e(asset('front_assets/assets/img/payouticon.png')); ?>" width="180" height="180" alt="">

            </div>
            <a href="manufacturerpayout.html" class="btn dashboard_btn">Payout Request</a>
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/admin/dashboard.blade.php ENDPATH**/ ?>