<?php $__env->startSection('page_title'); ?>
    Register
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="about-area mt-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 text-center mb-2">
					<div class="card">
						<div class="card-body">
						<h5 class="card-title">BUYER</h5>
						<p class="card-text">Click to register as a buyer.</p>
						<a href="<?php echo e(route('buyer.register')); ?>" class="btn btn-primary">Register</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center mb-2">
				<div class="card">
					<div class="card-body">
					  <h5 class="card-title">SELLER</h5>
					  <p class="card-text">Click to register as a seller.</p>
					  <a href="<?php echo e(route('seller.register')); ?>" class="btn btn-primary">Register</a>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 text-center mb-2">
				<div class="card">
					<div class="card-body">
					  <h5 class="card-title">NETWORKING AGENT</h5>
					  <p class="card-text">Click to register as a networking agent.</p>
					  <a href="<?php echo e(route('networking_agent.register')); ?>" class="btn btn-primary">Register</a>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 text-center mb-2">
				<div class="card">
					<div class="card-body">
					  <h5 class="card-title">Professional Service</h5>
					  <p class="card-text">Click to register as a Professional service provider.</p>
					  <a href="<?php echo e(route('professional.register')); ?>" class="btn btn-primary">Register</a>
					</div>
				  </div>
				</div>

				<div class="col-lg-4 text-center mb-2">
				<div class="card">
					<div class="card-body">
					  <h5 class="card-title">Fast Food & Groceries</h5>
					  <p class="card-text">Click to register as a Fast Food & Groceries provider.</p>
					  <a href="<?php echo e(url('fast_food_grocery/register')); ?>" class="btn btn-primary">Register</a>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 text-center mb-2">
				<div class="card">
					<div class="card-body">
					  <h5 class="card-title">Manufacturer</h5>
					  <p class="card-text">Click to register as a Manufacturer provider.</p>
					  <a href="<?php echo e(url('nmanufacturer/register')); ?>" class="btn btn-primary">Register</a>
					</div>
				  </div>
				</div>
			
			
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php
$redirect = strpos(url()->previous(),'product-details') == true?url()->previous():'/home';
?>

<?php $__env->startPush('scripts'); ?>
    <script>
		
        FormHandler('loginForm', {
            requestUrl: '/auth/register/web',
            cb: response => {
                if (response.success) {
                    return swal({
                        title: 'Success!',
                        text: 'You\'ve logged in successfully',
                        icon: 'success',
                        button: 'Proceed to dashboard'
                    }).then(() => {
                        window.location.href = '<?= $redirect ?>'
                    })
                }

                return swal({
                    title: 'Error!',
                    text: 'We had error logging you in. Please Try Again',
                    icon: 'error',
                    button: 'Try Again'
                });
            }
        });
    </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/auth/register.blade.php ENDPATH**/ ?>