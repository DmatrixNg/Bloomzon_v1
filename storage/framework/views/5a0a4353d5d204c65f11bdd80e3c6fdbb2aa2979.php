<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row" style="padding: 40px;">
            <div class="col-md-8 offset-2 text-center mt-2 mb-5">
                <img src="" height="120" class="rounded">
                <h5 class="text-center "></h5>
            </div>
            <div class="col-md-8 offset-2">
                <form method="post" action="<?php echo e(url('manufacturer/update-profile')); ?>">
                <?php echo csrf_field(); ?>
                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left" style="font-size: 18px;">Edit Profile image</div>
                        <input class="col-md-10" type="file" name="avatar" style="border-radius:20px; font-size: 12px; height: 30px; background-color: #535057" class="btn">

                        <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>

                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left" style="font-size: 18px;">Full Name</div>
                        <input style="background-color:#1A1A1A; height: 40px;" id="name" value="<?php echo e(auth()->guard('manufacturer')->user()->full_name); ?>" type="text" name="full_name" placeholder="" class="col-md-10 text-white">

                        <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-inline mb-5">
                        <div class="text-left col-md-12"  style="font-size: 18px;" for="phone">Phone</div>
                        <input style="background-color:#1A1A1A; height:40px;" id="phone" value="<?php echo e(auth()->guard('manufacturer')->user()->phone_number); ?>" type="text" name="phone_number" placeholder="" class="col-md-10 text-white">

                        <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left " style="font-size: 18px;">Email</div>
                        <input style="background-color:#1A1A1A; height: 40px;"  id="email" type="email" value="<?php echo e(auth()->guard('manufacturer')->user()->email); ?>" name="email" placeholder="" class="col-md-10 text-white">

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left" style="font-size: 18px;">Street Address</div>
                        <input style="background-color:#1A1A1A; height: 40px;" id="street_address" value="<?php echo e(auth()->guard('manufacturer')->user()->street_address); ?>" type="text" name="street_address" placeholder="" class="col-md-10 text-white">

                        <?php $__errorArgs = ['street_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left "  style="font-size: 18px;">Billing Address</div>
                        <input style="background-color:#1A1A1A; height: 40px;" id="billing_address" value="<?php echo e(auth()->guard('manufacturer')->user()->billing_address); ?>" type="text" name="billing_address" placeholder="" class="col-md-10 text-white">

                        <?php $__errorArgs = ['billing_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group mt-4 mb-4 text-center">
                        <button  class="btn" style="border: 1px solid white; width: 150px; background-color:#AF2E1D; border-radius: 20px; color: white;">SAVE</button>
                    </div>

                </form>

            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.manufacturer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/manufacturer/profile_edit.blade.php ENDPATH**/ ?>