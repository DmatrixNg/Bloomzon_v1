        

<?php $__env->startSection('page_title'); ?>
    Seller Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="panel-group text-center mt-5 mb-5" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading p-5">
                        <a style="color: #02499B;" href="#">
                             <h2 class="panel-title"><i class="fas fa-upload"></i> Account Upgrade</h2>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading p-5">
                        <a style="color: #02499B;" href="<?php echo e(route('seller.all-coupons')); ?>">
                             <h2 class="panel-title"><i class="fas fa-bullhorn"></i> Promotion Code</h2>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading p-5">
                        <a style="color: #02499B;" href="<?php echo e(url('seller/subscription')); ?>">
                             <h2 class="panel-title"><i class="fas fa-box-open"></i> Package Update</h2>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading p-5">
                        <a style="color: #02499B;" href="<?php echo e(url('seller/policy')); ?>">
                             <h2 class="panel-title"><i class="fas fa-handshake"></i> Trading Policies</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/dashboard/seller/settings.blade.php ENDPATH**/ ?>