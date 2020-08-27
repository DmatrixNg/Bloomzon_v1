<?php $__env->startSection('page_title'); ?>
    Advertise On Bloomzon
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <div class="page-banner-area bg-1">
		<div class="container">
			<div class="row align-items-center height-400">
				<div class="col-lg-8 offset-lg-4">
					<div class="page-banner-text">
						<h2>Advertise on Bloomzon</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="about-area mt-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img class="img-100p" src="<?php echo e(asset('assets/frontend/images/about/1.jpg')); ?>" alt="" >
				</div>
				<div class="col-lg-6 mt-sm-30">
					<div id="accordion">
					  <div class="card single-faq">
						<div class="card-header faq-heading" id="headingOne">
						  <h5 class="mb-0">
							<a href="#collapseOne" class="btn btn-link" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
							  How do I become an author?
								<i class="fa fa-plus-circle pull-right"></i>
								<i class="fa fa-minus-circle pull-right"></i>
							</a>
						  </h5>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						  <div class="card-body">
							<p>The graphical control element accordion is a vertically stacked list of items, such as labels or thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that item. There can be zero expanded items, exactly one, or more than one item expanded at a time, depending on the configuration stacked list of items, such as labels or thumbnails.</p>
						  </div>
						</div>
					  </div>
					  <div class="card single-faq">
						<div class="card-header faq-heading" id="headingTwo">
							<h5 class="mb-0">
								<a href="#collapseTwo" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Is my license transferable?
									<i class="fa fa-plus-circle pull-right"></i>
									<i class="fa fa-minus-circle pull-right"></i>
								</a>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						  <div class="card-body">
							<p>The graphical control element accordion is a vertically stacked list of items, such as labels or thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that item. There can be zero expanded items, exactly one, or more than one item expanded at a time, depending on the configuration stacked list of items, such as labels or thumbnails.</p>
						  </div>
						</div>
					  </div>
					   <div class="card single-faq">
						<div class="card-header faq-heading" id="headingThree">
						  <h5 class="mb-0">
							<a href="#collapseThree" class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							  What do you mean by item and end product?
								<i class="fa fa-plus-circle pull-right"></i>
								<i class="fa fa-minus-circle pull-right"></i>
							</a>
						  </h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						  <div class="card-body">
							<p>The graphical control element accordion is a vertically stacked list of items, such as labels or thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that item. There can be zero expanded items, exactly one, or more than one item expanded at a time, depending on the configuration stacked list of items, such as labels or thumbnails.</p>
						  </div>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/front/advertise_your_products.blade.php ENDPATH**/ ?>