<?php $__env->startSection('content'); ?>

<div class="col-md-10" style="background-color: #6610f2;">
    <div class="row row justify-content-center mt-5"><h1 class="text-white">Buyer Details</h1></div>

    <div class="row mt-5">
        <div class="col-md-6 offset-3">
            <div class="text-white justify-content-center">

                <img src="<?php echo e(asset('storage/assets/buyer/avatar/'. $buyer->avatar)); ?>" width="200px" />


                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                        Full Name:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;"><?php echo e($buyer->full_name); ?></div>
                    </div>
                </div>


                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                        Email:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;"><?php echo e($buyer->email); ?></div>
                    </div>
                </div>

                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                    Phone Number:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;"><?php echo e($buyer->phone_number); ?></div>
                    </div>
                </div>

                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                    Address:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;"><?php echo e($buyer->street_address); ?></div>
                    </div>
                </div>


                
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/buyer-details.blade.php ENDPATH**/ ?>