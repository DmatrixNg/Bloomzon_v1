
<?php $__env->startSection('page_title'); ?>
    Create Account
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="about-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-3 text-center">

                    <div class="product-single p-0 row">
                        <form class="contact-form mt-sm-30 col-md-12" method="POST" action="<?php echo e(url('/seller/register')); ?>">
                            <?php echo csrf_field(); ?>
                           
                            <div class="row p-5"
                                style="background-color: #02499B !important; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                <div class="form-group col-md-12">
                                    <h3 class="text-white">Setup A Seller's Account</h3>
                                </div>


                                <div class="form-group col-md-12 d-none">
                                    <label class="text-white">Account Type</label>
                                    <select class="form-control" name="account_type">
                                        <option value="buyer">Buyer</option>
                                        <option value="seller">Seller</option>
                                        <!-- <option value="grocery">Fast Food & Vendor</option> -->
                                        <option value="grocery">Groceries Seller</option>
                                        <option value="networkingAgent">Networking Agent</option>
                                        <option value="manufacturer">Manufacturer</option>
                                        <option value="professionalService">Professional Service</option>
                                    </select>
                                </div>

                            </div>

                            <div id="contactForm">
                                <ul id="error_list"></ul>
                                <div class="row text-left">
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label for="email"><?php echo e(__('Email Address')); ?><abbr class="text-danger"
                                                title="required field">*</abbr></label>
                                        <input id="email" type="email"
                                            class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                            value="<?php echo e(old('email')); ?>" autocomplete="email" autofocus placeholder="Email">

                                        <?php $__errorArgs = ['email'];
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

                                    <div class="col-sm-12 form-group">
                                        <label for="phone_number"><?php echo e(__('Phone Number')); ?><abbr class="text-danger"
                                                title="required field">*</abbr></label>
                                        <input id="phone_number" type="text"
                                            class="form-control <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="phone_number" value="<?php echo e(old('phone_number')); ?>"
                                            autocomplete="phone_number" autofocus placeholder="Phone Number">

                                        <?php $__errorArgs = ['phone_number'];
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

                                    <div class="col-sm-12 form-group">
                                        <label for="password"><?php echo e(__('Password')); ?><abbr class="text-danger"
                                                title="required field">*</abbr></label>
                                        <input id="password" type="password"
                                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                                            value="<?php echo e(old('password')); ?>" autocomplete="password" autofocus
                                            placeholder="Password">

                                        <?php $__errorArgs = ['password'];
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

                                    <div class="col-sm-12 form-group">
                                        <label for="password_confirmation"><?php echo e(__('Confirm Password')); ?><abbr
                                                class="text-danger" title="required field">*</abbr></label>
                                        <input id="password_confirmation" type="password_confirmation"
                                            class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>"
                                            autocomplete="password_confirmation" autofocus placeholder="Confirm Password">

                                        <?php $__errorArgs = ['password_confirmation'];
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

                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>

                                    <hr>
                                    <div class="col-sm-12 text-center pt-30">
                                        Have an account yet?
                                        <a href="<?php echo e(url('seller/login')); ?>">Login</a>
                                        <br>
                                        <br>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/front/auth/seller/register.blade.php ENDPATH**/ ?>