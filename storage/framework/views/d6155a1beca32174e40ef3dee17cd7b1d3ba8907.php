
<?php $__env->startSection('page_title'); ?>
    <?php echo e(__("Account Policy")); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="card container my-5 py-5 z-depth-1">

	<h2 class="text-center"><?php echo e(__("Account Policy")); ?></h2>

	<br>

	<section class=" px-md-5 mx-md-5 dark-grey-text">


		<div class="row d-flex text-left">


			<div class="col-lg-12">
				<p>
					<?php echo e(\App\SiteConfig::find(1)->accountpolicy); ?>

				</p>

			</div>


		</div>

	</section>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/front/accountpolicy.blade.php ENDPATH**/ ?>