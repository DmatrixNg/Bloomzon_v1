
<?php $__env->startSection('page_title'); ?>
    Networking Agents
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<!--products-area start-->
	<div class="mm-page mm-slideout" id="mm-0"><div class="product-details-area mt-20">
		<div class="container-fluid">
			<div class="product-details">
				<div class="row">
					<div class="col-lg-6 col-md-7 offset-1">
						<div class="tab-content">
							<div id="product-1" class="tab-pane fade in show active">
								<div class="product-details-thumb">
									<a class="venobox vbox-item" data-gall="myGallery" href="#"><i class="fa fa-search-plus"></i></a>
									<img src="<?php echo e(asset('storage/assets/networking_agent/avatar/'.$agent->avatar)); ?>')}}" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mt-sm-50">
						<div class="product-details-desc">
							<h3><small>NAMES:</small> <span class="pl-5"><?php echo e($agent->full_name); ?></span></h3>
							<h3><small>AGENT ID: </small> <span class="pl-4">NA<?php echo e($agent->id); ?></span></h3>
							<h3><small>LOCATION: </small> <span class="pl-4"><?php echo e($agent->street_address); ?></span></h3>
							<h3><small>CONTACT NUMBER: </small> <span class="pl-4"><?php echo e($agent->phone); ?></span></h3>
							<h3><small>CONTACT EMAIL: </small> <span class="pl-5"><?php echo e($agent->email); ?></span></h3>
							<div class="social-icons style-5">
								<span>Share Link:</span>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-rss"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!--products-area end-->
	
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/front/networkingagent-details.blade.php ENDPATH**/ ?>