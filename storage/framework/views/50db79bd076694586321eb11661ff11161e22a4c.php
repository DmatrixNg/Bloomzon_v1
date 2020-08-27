
<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>
        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row mb-3 " style="background-color: #000 !important; padding: 20px; ">
                    <div class="col-md-8 p-5 offset-2 " style="height: 800px;">
                        <form>
                            <div class="form-group text-center ">
                                <img src="<?php echo e(asset('storage/buyer/'.$buyer->avatar)); ?>" class="img img-circle " width="120 " height="120 "><br>
                                <h3 class="text-white"><?php echo e($buyer->name); ?></h3>
                            </div>
                            <h4 class="text-white text-center mt-5"><?php echo e($buyer->full_name); ?></h4>
                            <h4 class="text-white text-center mt-5"><?php echo e($buyer->phone_number); ?></h4>
                            <h4 class="text-white text-center mt-5"><?php echo e($buyer->email); ?></h4>
                            <h4 class="text-white text-center mt-5"><?php echo e($buyer->last_login); ?></h4>
                            <div class="text-center mt-5">
                                <a href="edit-profile" class="btn btn-danger btn-lg">Edit Profile</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/buyer/account-information.blade.php ENDPATH**/ ?>