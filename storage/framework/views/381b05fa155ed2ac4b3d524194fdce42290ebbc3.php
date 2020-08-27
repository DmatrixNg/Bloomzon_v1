<?php $__env->startSection('page_title'); ?>
    Fast Food & Groceries Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-10">
        <div class="row text-center" style="background-color: #2B2950 !important; padding: 10px; text-align: center !important; color:white">
            <div class="col-md-12">
                <h1 class="text-center m-auto pt-3 pb-3"><b>Update Your Account</b></h1>
            </div>
        </div>
        <form method="POST" action="<?php echo e(url('/fast_food_grocery/store_settings')); ?>" class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <?php echo csrf_field(); ?>
        <input type="hidden" value="<?php echo e(Auth::guard('fast_food_grocery')->user()->id); ?>" name="id" />
            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> Shop Location </b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <textarea name="shop_location" rows="5" class="form-control"><?php echo e(auth()->guard()->user()->delivery_terms); ?></textarea>
                    <?php $__errorArgs = ['shop_location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> Delivery Policy </b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <textarea name="delivery_terms" rows="5" class="form-control"><?php echo e(auth()->guard()->user()->delivery_terms); ?></textarea>
                    <?php $__errorArgs = ['delivery_terms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> Terms & Conditions </b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <textarea name="terms_and_conditions" rows="5" class="form-control"><?php echo e(auth()->guard()->user()->terms_and_conditions); ?></textarea>
                    <?php $__errorArgs = ['terms_and_conditions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> Type of Service</b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <textarea name="terms_of_purchase" rows="5" class="form-control"><?php echo e(auth()->guard()->user()->terms_of_purchase); ?></textarea>
                    <?php $__errorArgs = ['terms_of_purchase'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> <?php echo e(__('Delivery Method')); ?></b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <select id="delivery_method" class="form-control <?php $__errorArgs = ['delivery_method'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="delivery_method" autocomplete="delivery_method" placeholder="Phone Number">
                        <option value="Bike">Bike</option>
                        <option value="Car">Car</option>
                    </select>
                    <?php $__errorArgs = ['delivery_method'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b><?php echo e(__('Delivery Agent')); ?></b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <select id="delivery_agent" class="form-control <?php $__errorArgs = ['delivery_agent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="delivery_agent" value="<?php echo e(old('delivery_agent')); ?>" autocomplete="delivery_agent" placeholder="Phone Number">
                        <option value="Personal">Personal</option>
                        <option value="Bloomzon Rider">Bloomzon Rider</option>
                    </select>
                    <?php $__errorArgs = ['delivery_agent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> Means of Identification</b>
                    </span>
                </div>

                <div class="col-md-6 text-center">
                    <input type="file" name="means_of_identification" class="form-control ">
                    <?php $__errorArgs = ['means_of_identification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            
            <div class="col-md-12 p-5 text-center">
                <button type="submit" class="btn btn-danger btn-lg">Save Update</button>
            </div>

        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.fast_food_grocery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/fast_food_grocery/settings.blade.php ENDPATH**/ ?>