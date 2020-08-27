<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row col-md-12 ml-1 mt-5 mb-5" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
            <div class="col-md-12 text-center ml-0">
                <h2><i class="fas fa-box-open"></i> Trading Policy</h2>
            </div>
        </div>
        <form style="padding: 20px;" action="<?php echo e(url('manufacturer/update_profile')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="row mt-4 mb-4">
                <div class="col-md-7 m-auto">
                    <h4 style="color: #02499B; ">Profile</h4>
                    <textarea name="profile" class="form-control" rows="5"><?php echo e(auth()->guard('manufacturer')->user()->profile); ?></textarea>
                    <?php $__errorArgs = ['profile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

            </div>
            <hr>


            <div class="row mt-4 mb-4">
                <div class="col-md-7 m-auto">
                    <h4 style="color: #02499B; ">Terms & Condition</h4>
                    <textarea class="form-control" name="terms_and_conditions" rows="5"><?php echo e(auth()->guard('manufacturer')->user()->terms_and_conditions); ?></textarea>
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
                </div>

            </div>
            <hr>
            <div class="row mt-4 mb-4">
                <div class="col-md-7 m-auto">
                    <h4 style="color: #02499B; ">Policy</h4>
                    <textarea class="form-control" name="policies" rows="5"><?php echo e(auth()->guard('manufacturer')->user()->policies); ?> </textarea>
                    <?php $__errorArgs = ['policies'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

            </div>
            <hr>
            
            <div class="row mt-4 mb-4">
                <div class="col-md-7 m-auto">
                    <h4 style="color: #02499B;">Terms of Purchase</h4>
                    <textarea name="terms_of_purchase" class="form-control" rows="5"><?php echo e(auth()->guard('manufacturer')->user()->terms_of_purchase); ?></textarea>

                    <?php $__errorArgs = ['terms_of_purchase'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-md-7 m-auto">
                    <div id="error_list"></div>
                <button type="submit" class="btn" style="color: white; background-color: #AF2E1D; border-radius: 5px;">UPDATE</button>
                </div></div>

        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('dashboard.manufacturer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/manufacturer/settings.blade.php ENDPATH**/ ?>