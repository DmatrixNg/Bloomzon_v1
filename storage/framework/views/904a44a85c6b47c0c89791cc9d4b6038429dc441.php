

<?php $__env->startSection('page_title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
	<div class="about-area mt-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-3 text-center">
					<img class="img-100p" src="assets/images/bloomzon.png" width="120" height="auto" alt="" >
					<h3>Welcome to Bloomzoon</h3>
					<div class="product-single">
						<div class="contact-form mt-sm-30">
							<h4>Admin's Login Form</h4>
							<form method="POST" action="<?php echo e(url('/admin/login')); ?>">
                                <?php echo csrf_field(); ?>
								<div class="row">
									<div class="col-sm-12 mt-30">
										<label for="email"><?php echo e(__('Email Address')); ?><abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
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

									<div class="col-sm-12 mt-30">
										<label for="password"><?php echo e(__('Password')); ?><abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" placeholder="Password">
									</div>

									
									<div class="col-sm-12 mt-5">
										<div class="row">
											<div class="col-md-2 offset-3"><input <?php echo e(old('remember') ? 'checked' : ''); ?> id="remember" name="remember" type="checkbox" class="pull-left" ></div>
											<div class="col-md-4 text-left pt-2"><label style="color: #999; "><?php echo e(__('Remember password')); ?></label></div>
										</div>
									</div>
							

									<div class="col-sm-12">
										<button class="btn btn-primary btn-lg">Login</button>
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
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/front/auth/admin/login.blade.php ENDPATH**/ ?>