<?php $__env->startSection('page_title'); ?>
    Page Not Found
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<div class="error-msg-area display-table">
		<div class="vertical-middle">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="error-msg text-center">

							<img src="<?php echo e(asset('assets/frontend/images/404/1.png')); ?>" alt="" >
							
							<h1>Opps! This page Could Not Be Found!</h1>
							<?php if(isset($message) && $message != null): ?>
							<p><?php echo e($message); ?></p>
							<?php else: ?>
							<p>Sorry bit the page you are looking for does not exist, have been removed or name changed</p>
							<?php endif; ?>
							<a href="/" class="btn-common mt-75">go to homepage</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/front/404.blade.php ENDPATH**/ ?>