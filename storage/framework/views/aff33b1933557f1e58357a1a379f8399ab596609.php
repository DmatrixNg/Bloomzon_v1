    <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="row" style="background-color: #AF2E1D; padding: 30px;">
                <div class="col-md-12 text-center text-white">
                   <i class="fa fa-user-circle fa-3x"></i>
                    <h4><?php echo e(auth()->guard('manufacturer')->user()->full_name); ?></h4>
                    <p> <?php echo e(auth()->guard('manufacturer')->user()->phone_number); ?> </p>
                    <p><?php echo e(auth()->guard('manufacturer')->user()->email); ?></p>
                    <p><?php echo e(auth()->guard('manufacturer')->user()->street_address); ?></p>
                    <h5>sdsd</h5>
                    <br>
                    <a class="btn" href="<?php echo e(url('manufacturer/edit-profile')); ?>" style="background-color: #AF2E1D; border: 1px solid white; padding: 10px; color: white; border-radius: 20px;">EDIT PROFILE</a>

                </div>
            </div>
            
            <form class="row align-items-center" action="<?php echo e(url('manufacturer/update_profile')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                <div class="col-md-6 text-center form-group p-4 m-auto">
                    <label for="company_profile">Company Profile</label>
                    <textarea class="form-control" id="company_profile" name="profile" rows="5" style="border-radius: 0px !important;"><?php echo e(auth()->guard('manufacturer')->user()->profile); ?></textarea>
                    <?php $__errorArgs = ['profile'];
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
                    <div class="p-3 text-center">
                        <a href="#" class="btn btn-sm btn-primary d-none">View</a>
                        <a href="#" class="btn btn-sm btn-danger d-none">Remove</a>
                    </div>
                </div>
                <div class="col-md-6 text-center form-group p-4 m-auto">
                    <label for="terms_conditions">Terms & Conditions</label>
                    <textarea class="form-control" id="terms_conditions" name="terms_and_conditions" rows="5" style="border-radius: 0px !important;"><?php echo e(auth()->guard('manufacturer')->user()->terms_and_conditions); ?></textarea>
                    <?php $__errorArgs = ['terms_and_conditions'];
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
                    <div class="p-3 text-center">
                        <a href="#" class="btn btn-sm btn-primary d-none">View</a>
                        <a href="#" class="btn btn-sm btn-danger d-none">Remove</a>
                    </div>
                </div>
                <div class="col-md-6 text-center form-group p-4 m-auto">
                    <label for="terms_of_purchase">Terms of Purchase</label>
                    <textarea name="terms_of_purchase" id="terms_of_purchase" class="form-control" rows="5" style="border-radius: 0px !important;"><?php echo e(auth()->guard('manufacturer')->user()->terms_of_purchase); ?></textarea>
                    <?php $__errorArgs = ['terms_of_purchase'];
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
                    <div class="p-3 text-center">
                        <a href="#" class="btn btn-sm btn-primary d-none">View</a>
                        <a href="#" class="btn btn-sm btn-danger d-none">Remove</a>
                    </div>
                </div>
                <div class="col-md-6 text-center form-group p-4 m-auto">
                    <label for="policy">Policy</label>
                    <textarea class="form-control" id="policy" name="policies" rows="5" style="border-radius: 0px !important;"><?php echo e(auth()->guard('manufacturer')->user()->policies); ?></textarea>
                    <?php $__errorArgs = ['policies'];
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
                    <div class="p-3 text-center">
                        <a href="#" class="btn btn-sm btn-primary d-none">Update</a>
                        <a href="#" class="btn btn-sm btn-danger d-none">Remove</a>
                    </div>
                </div>
                <div class="mt-5">
                    <button class="btn text-center" type="submit" href="#" style="background-color: #AF2E1D; padding: 10px; color: white; width: 250px;">Update</button>
                </div>
            </form>
        </div>
    <?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        FormHandler('manufacturerUpdateForm', {
            requestUrl: '/api/v1/crud/users/<?php echo e(Auth::user()->id); ?>',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!!',
                        text:  'Profile Updated successfully',
                        icon: 'success'
                    })
                }
                console.log(response);
                return swal({
                    title: 'Failed!!',
                    text:   'There was an error updating your profile, please try again.',
                    icon:   'error'
                })
            }
        })
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.manufacturer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/manufacturer/profile_view.blade.php ENDPATH**/ ?>