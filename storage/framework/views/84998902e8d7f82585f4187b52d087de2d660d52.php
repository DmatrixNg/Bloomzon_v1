<?php $__env->startSection('page_title'); ?>
    Login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="about-area mt-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 text-center">
				<div class="card">
					<div class="card-body">
					  <h5 class="card-title">BUYER</h5>
					  <p class="card-text">Click to login as a buyer.</p>
					  <a href="<?php echo e(route('buyer.login')); ?>" class="btn btn-primary">Login</a>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 text-center">
				<div class="card">
					<div class="card-body">
					  <h5 class="card-title">SELLER</h5>
					  <p class="card-text">Click to login as a seller.</p>
					  <a href="<?php echo e(route('seller.login')); ?>" class="btn btn-primary">Login</a>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 text-center">
				<div class="card">
					<div class="card-body">
					  <h5 class="card-title">NETWORKING AGENT</h5>
					  <p class="card-text">Click to login as a networking agent.</p>
					  <a href="<?php echo e(route('networking_agent.login')); ?>" class="btn btn-primary">Login</a>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 text-center">
				<div class="card">
					<div class="card-body">
					  <h5 class="card-title">Professional Service</h5>
					  <p class="card-text">Click to login as a Professional service provider.</p>
					  <a href="<?php echo e(route('professional.login')); ?>" class="btn btn-primary">Login</a>
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
            requestUrl: '/auth/login/web',
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

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/auth/login.blade.php ENDPATH**/ ?>