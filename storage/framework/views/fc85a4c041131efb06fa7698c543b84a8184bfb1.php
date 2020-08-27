<?php $__env->startSection('page_title'); ?>
    Professional Service
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
									<a class="venobox vbox-item" data-gall="myGallery" href="assets/images/products/product-details/deliverer.jpg"><i class="fa fa-search-plus"></i></a>
									<img src="<?php echo e(asset('storage/assets/professional/avatar/'.$proservice->avatar)); ?>" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mt-sm-50">
						<div class="product-details-desc">
							<h3><small>NAMES:</small> <span class="pl-5"><?php echo e($proservice->full_name); ?></span></h3>
							<h3><small> ID: </small> <span class="pl-4">PS<?php echo e($proservice->id); ?></span></h3>
							<h3><small>LOCATION: </small> <span class="pl-4"><?php echo e($proservice->street_address); ?></span></h3>
							<h3><small>CONTACT NUMBER: </small> <span class="pl-4"><?php echo e($proservice->phone); ?></span></h3>
							<h3><small>CONTACT EMAIL: </small> <span class="pl-5"><?php echo e($proservice->email); ?></span></h3>
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
</div><div class="product-review-area mt-45">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs product-review-nav">
                   
                    <li><a class="" data-toggle="tab" href="#termscond">Description</a></li>
                    <li><a data-toggle="tab" href="#deliverymet">Further Specification</a></li>
                    <li><a data-toggle="tab" href="#reviews">Review (<?php echo e(count($proservice->reviews)); ?>)</a></li>
                </ul>
                <div class="tab-content">
                  
                    <div id="termscond" class="tab-pane fade active termscond">
                        <div class="product-description">
                            <h2>Terms &amp; Conditions</h2>
                            <p><?php echo e($proservice->terms_and_conditions); ?></p>
                        </div>
                    </div>
                    <div id="deliverymet" class="tab-pane fade deliverymet">
                        <div class="product-description">
                            <h2>Delivery Method</h2>
                        <p><?php echo e($proservice->delivery_terms); ?></p>
                        </div>
                    </div>
                   
                    <div id="reviews" class="tab-pane fade">
                        <div class="blog-comments product-comments mt-0">
                            <ul class="list-none">
                               <?php if(count($proservice->reviews)): ?>
                                <?php $__currentLoopData = $proservice->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="comment-avatar text-center">
                                        <img src="assets/images/blog/comment/4.jpg" alt="">
                                        <div class="product-rating mt-10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="comment-desc">
                                        <span><?php echo e($review->created_at); ?></span>
                                        <h4><?php echo e($review->buyer_id->full_name); ?></h4>
                                        <p><?php echo e($review->review_message); ?> </p>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                               
                            </ul>
                        </div>
                        <div class="blog-comment-form product-comment-form mt-05">
                            <h4><span>Add Review</span></h4>
                            <form name="reviewForm" id="reviewForm">
                                <div class="row mt-30">
                                    <?php if(Auth::guard('buyer')->user()): ?>
                                    <div class="col-sm-6 single-form">
                                        <input type="text" value="<?php echo e(Auth::guard('buyer')->user()->full_name); ?>" disabled>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" value="<?php echo e(Auth::guard('buyer')->user()->email); ?>" disabled>
                                    </div>
                                    <?php else: ?>
                                    <div class="col-sm-4 single-form">
                                        <h5>Please login to add review</h5>
                                        <a href="/login" class="btn btn-danger btn-lg">Login</a>
                                    </div>
                                    <div class="col-sm-4 single-form">
                                    </div>
                                    <?php endif; ?>
                                    <div class="col-sm-12">
                                        <div class="product-rating style-2">
                                            <span>Your Rating:</span>
                                            <i class="fa fa-star-o" onclick="rate(1)" id="star1"></i>
                                            <i class="fa fa-star-o" onclick="rate(2)" id="star2"></i>
                                            <i class="fa fa-star-o" onclick="rate(3)" id="star3"></i>
                                            <i class="fa fa-star-o" onclick="rate(4)" id="star4"></i>
                                            <i class="fa fa-star-o" onclick="rate(5)" id="star5"></i>

                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea name="review_message" placeholder="Messages"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <?php if(Auth::guard('buyer')->user()): ?>
                                        <input type="hidden" value="<?php echo e($product->id); ?>" name="product_id" />
                                        <input type="hidden" value="<?php echo e($product->proservice_id->id); ?>" name="seller_id" />
                                        <input type="hidden" value="<?php echo e(Auth::guard('buyer')->user()->id); ?>" name="buyer_id" />
                                        <input type="hidden" value="0" id="rating" name="rating" />
                                        <input type="hidden" value="1" name="status" />
                                        <button name="" class="btn-common mt-25">Submit</button>
                                        <?php else: ?>
                                        <a href="<?php echo e(url('buyer/login')); ?>" class="btn btn-danger btn-lg">Login to review</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
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


<?php $__env->startPush('scripts'); ?>
<script>
    var element = document.getElementById('cart');
        element.onclick = async e => {
            e.preventDefault();
            
            const productId = e.target.getAttribute('data-product-id');
            const quantity = document.getElementById(`qty_${productId}`).value;
            try{
                console.log("pressed")
                const response = await (await fetch(`/cart/add/${productId}/${quantity}`, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            })).json();
            console.log(response);
            if (response.success) {
                return swal({
                    'title': 'Cart Updated',
                    'text': 'Product Added to cart successfully',
                    'icon': 'success'
                }).then(()=>{
                    window.location.reload();

                }
                )
            }
            }
            catch(e){
                console.log(e)
            }
           
        }
           

    function rate(rate) {
        var s1 = document.getElementById('star1')
        var s2 = document.getElementById('star2')
        var s3 = document.getElementById('star3')
        var s4 = document.getElementById('star4')
        var s5 = document.getElementById('star5')
        var rateInput = document.getElementById('rating');
        switch (rate) {
            case 1:
                s1.className = 'fa fa-star';
                s2.className = 'fa fa-star-o';
                s3.className = 'fa fa-star-o';
                s4.className = 'fa fa-star-o';
                s5.className = 'fa fa-star-o';
                rateInput.value = 1;
                break;
            case 2:
                s1.className = 'fa fa-star';
                s2.className = 'fa fa-star';
                s3.className = 'fa fa-star-o';
                s4.className = 'fa fa-star-o';
                s5.className = 'fa fa-star-o';
                rateInput.value = 2;
                break;
            case 3:
                s1.className = 'fa fa-star';
                s2.className = 'fa fa-star';
                s3.className = 'fa fa-star';
                s4.className = 'fa fa-star-o';
                s5.className = 'fa fa-star-o';
                rateInput.value = 3;
                break;
            case 4:
                s1.className = 'fa fa-star';
                s2.className = 'fa fa-star';
                s3.className = 'fa fa-star';
                s4.className = 'fa fa-star';
                s5.className = 'fa fa-star-o';
                rateInput.value = 4;
                break;
            case 5:
                s1.className = 'fa fa-star';
                s2.className = 'fa fa-star';
                s3.className = 'fa fa-star';
                s4.className = 'fa fa-star';
                s5.className = 'fa fa-star';
                rateInput.value = 5;
                break;
            default:
                s1.className = 'fa fa-star-0';
                s2.className = 'fa fa-star-0';
                s3.className = 'fa fa-star-0';
                s4.className = 'fa fa-star-0';
                s5.className = 'fa fa-star-0';
                rateInput.value = 0;
                break;
        }
    }



    FormHandler('reviewForm', {
        requestUrl: '/product/reviews/add',
        requestType: 'POST',
        cb: response => {
            if (response.success) {
                return swal({
                    title: 'Success!',
                    text: 'Reviews created successfully!',
                    icon: 'success',

                })
            }
            return swal({
                title: 'Error!',
                text: 'We had error adding your review. Please try again',
                icon: 'error',
                button: 'Try Again'
            })
        }
    })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/front/proservice-details.blade.php ENDPATH**/ ?>