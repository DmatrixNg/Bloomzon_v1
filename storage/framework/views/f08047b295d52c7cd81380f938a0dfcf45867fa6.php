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
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Email Address</label>
                                        <input type="text" id="email" name="email">
                                        <small style="color: #999;">(Enter a unique Email address) </small>
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
                                        <label>Phone</label>
                                        <input type="text" id="phone" name="phone">
                                        <small style="color: #999;">(Enter contact phone) </small>
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Password</label>
                                        <input type="password" id="email" name="password">
                                        <small style="color: #999;">(Create Unique Password, Minimum of 8
                                            characters)</small>
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Select operation currency</label>
                                        <select class="form-control" name="operating_currency">
                                            <option value="naira">Naira</option>
                                            <option value="dollars">Dollar</option>
                                            <option value="pounds">Pounds</option>
                                        </select>
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

<?php $__env->startPush('scripts'); ?>
    <script>
        FormHandler('registerForm', {
            requestUrl: '/api/v1/crud/users',
            requestType: 'POST',
            cb: response => {
                if (response.success) {
                    return swal({
                        title: 'Success!',
                        text: 'Account created successfully!, check email for further details',
                        icon: 'success',
                        button: 'Proceed to Login'
                    }).then(() => window.location.href = '/login')
                }
                return swal({
                    title: 'Error!',
                    text: 'We had error creating your account.Please try again',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/front/auth/admin/register.blade.php ENDPATH**/ ?>