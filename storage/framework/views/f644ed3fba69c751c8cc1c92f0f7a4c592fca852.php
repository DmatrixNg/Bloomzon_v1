<?php $__env->startSection('page_title'); ?>
    Create Account
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="about-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-3 text-center">

                    <div class="product-single p-0 row">
                        <form action="<?php echo e(url('admin/register')); ?>" method="post" class="contact-form mt-sm-30 col-md-12" >
                        <?php echo csrf_field(); ?>

                            <div class="row p-5"
                                style="background-color: #02499B !important; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                <div class="form-group col-md-12">
                                    <h3 class="text-white">Setup An Account</h3>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="text-white">Account Type</label>
                                    
                                </div>
                            </div>
                            <div id="contactForm">
                                <div class="row text-left">
                                    <div class="col-sm-12 form-group">
                                        <label for="email"><?php echo e(__('Email')); ?><abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="email" type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" autocomplete="email" autofocus placeholder="Email">
                                        
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
                                        <label for="name"><?php echo e(__('Full Name')); ?><abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" autocomplete="name" autofocus placeholder="Full Name">
                                        
                                        <?php $__errorArgs = ['name'];
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
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Password</label>
                                        <input type="password" id="email" name="password">
                                        <small style="color: #999;">(Create Unique Password, Minimum of 8
                                            characters)</small>
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Password</label>
                                        <input type="confirm_password" id="confirm_password" name="confirm_password">
                                        <small style="color: #999;">Enter Code here again to confirm</small>
                                    </div>
                                    
                                    <div class="col-sm-12 text-center">
                                        <button class="btn btn-primary">Create Account</button>
                                    </div>

                                    <hr>
                                    <div class="col-sm-12 text-center pt-30">Have an account yet? <a href="login">Login</a>
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


<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/front/auth/admin/register.blade.php ENDPATH**/ ?>