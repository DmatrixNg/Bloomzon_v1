<?php $__env->startSection('page_title'); ?>
    Seller's Dashboard
<?php $__env->stopSection(); ?>
        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row mb-3 " style="background-color: #000 !important; padding: 20px; ">
                    <div class="col-md-8 p-5 offset-2 " style="height: 800px;">
                        <form>
                            <div class="form-group text-center ">
                                <img src="<?php echo e(asset('storage/seller/' . $seller->avatar)); ?>" height="140" width="140" style="border-radius: 50%">
                                <br>
                                <h3 class="text-white"><?php echo e($seller->name); ?></h3>
                            </div>
                            <h4 class="text-white text-center mt-5"><?php echo e($seller->full_name); ?></h4>
                            <h4 class="text-white text-center mt-5"><?php echo e($seller->phone_number); ?></h4>
                            <h4 class="text-white text-center mt-5"><?php echo e($seller->email); ?></h4>
                            <h4 class="text-white text-center mt-5"><?php echo e($seller->last_login); ?></h4>
                            <div class="text-center mt-5">
                                <a href="edit-profile" class="btn btn-danger btn-lg">Edit Profile</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/seller/account-information.blade.php ENDPATH**/ ?>