<?php $__env->startSection('page_title'); ?>
Product Details
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!--products-area start-->

<div class="mm-page mm-slideout" id="mm-0">
    <div class="product-details-area mt-20">
        <div class="container-fluid">
            <div class="product-details">
                <div class="row">
                    <div class="col-lg-1 col-md-2">
                        <ul class="nav nav-tabs products-nav-tabs">
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <li><a data-toggle="tab" href="#product-<?php echo e($key); ?>"><img src="<?php echo e(asset('storage/assets/product/avatars/'.$image)); ?>" alt=""></a></li>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tab-content">
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div id="product-<?php echo e($key); ?>" class="tab-pane fade in show <?php if($key == 0): ?>active <?php endif; ?>">
                                <div class="product-details-thumb">
                                    <a class="venobox vbox-item" data-gall="myGallery" href="<?php echo e(asset('storage/assets/product/avatars/'.$image)); ?>"><i class="fa fa-search-plus"></i></a>
                                    <img src="<?php echo e(asset('storage/assets/product/avatars/'.$image)); ?>" alt="">
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                        </div>
                    </div>
                
                    <div class="col-lg-7 mt-sm-50">
                        <div class="row">
                            <div class="col-lg-8 col-md-7">
                                <div class="product-details-desc">
                                    <h2><?php echo e($product->product_name); ?></h2>
                                    <ul>
                                        <li>

                                            <?php echo e(substr($product->product_description, 0, 900)); ?>...
                                        </li>

                                    </ul>
                                    <div class="product-meta">
                                        <ul class="list-none">
                                            <li>SKU: <?php echo e($product->stock_level); ?> <span>|</span></li>
                                            <?php if($product->category_id->name ?? $product->name): ?>
                                            <li>Categories:
                                                <a href="/category/<?php echo e($product->category_id->name ?? $product->name); ?>"><?php echo e($product->category_id->name ?? $product->name); ?></a>
                                                <span>|</span>
                                            </li>
                                            <?php endif; ?>
                                            
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                    <div class="product-meta">
                                        <ul class="list-none">
                                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#terms-conditions" tabindex="0">Terms &amp; Conditions</a> <span>|</span></li>
                                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#policy" tabindex="0">Return Policy</a> <span>|</span></li>
                                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#delivery_terms" tabindex="0">Delivery Terms</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="social-icons style-5">
                                        <span>Share Link:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                                <div class="product-action stuck text-left">
                                    <div class="free-delivery">
                                        <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                    </div>
                                    <div class="product-price-rating">
                                        <div>
                                            <?php if($product->product_sales_price): ?>
                                            <del><?php echo e($product->product_currency === 1 ? 'NGN': '$'); ?><?php echo e(number_format($product->product_price)); ?></del>
                                        </div>
                                        <span><?php echo e($product->product_currency === 1 ? 'NGN': '$'); ?><?php echo e(number_format($product->product_sales_price)); ?></span>
                                        <?php else: ?>
                                        <span>$<?php echo e(number_format($product->product_price)); ?></span>
                                        <?php endif; ?>

                                        <div class="pull-right">
                                            <?php for($i=0; $i<$product->rating; $i++): ?>
                                                <i class="fa fa-star"></i>
                                                <?php endfor; ?>
                                                <?php for($k=0; $k< (5 - $product->rating); $k++): ?>
                                                    <i class="fa fa-star-o"></i>
                                                    <?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="product-colors mt-20">
                                        <label>Select Color:</label>
                                        <ul class="list-none">
                                           <?php
                                            foreach($colors as $col){  ?>
                                            <li><?php echo e($col); ?></li>
                                            <?php 
                                            }
                                            ?>
                                            
                                        </ul>

                                    </div>
                                    <div class="product-quantity mt-15">
                                        <label>Quantity:</label>
                                        <input type="number" id="qty_<?php echo e($product->id); ?>" value="1">
                                    </div>
                                    <div class="add-to-get mt-50">
                                        <a href="#" id="cart" class="add-to-cart cart" data-product-id="<?php echo e($product->id); ?>">Add to Cart</a>
                                        <a href="/cart" class="add-to-cart text-white bg-danger" >Check out</a>
                                        
                                    </div>
                                    <div class="product-features mt-50">
                                        <ul class="list-none">
                                            
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-review-area mt-45">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs product-review-nav">
                        <li><a class="active" data-toggle="tab" href="#description">Description</a></li>
                        <li><a  data-toggle="tab" href="#specifications">Specifications</a></li>
                        <li><a  data-toggle="tab" href="#reviews">Reviews </a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane active fade in show ">
                            <div class="product-description">
                                <h2><?php echo e($product->product_name); ?></h2>
                                <p><?php echo e($product->product_description); ?></p>
                                <div class="site-image mb-25">

                                </div>
                            </div>
                        </div>
                        <div id="specifications" class="tab-pane fade specifications">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Customer Rating</td>
                                        <td>
                                            <div class="product-rating">
                                                <?php for($i=0; $i<$product->rating; $i++): ?>
                                                    <i class="fa fa-star"></i>
                                                    <?php endfor; ?>
                                                    <?php for($k=0; $k< (5 - $product->rating); $k++): ?>
                                                        <i class="fa fa-star-o"></i>
                                                        <?php endfor; ?>

                                                        <span>(<?php echo e($product->rating); ?>)</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td><strong class="price">$<?php echo e(number_format($product->product_price)); ?></strong></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div id="reviews" class="tab-pane  fade">
                            <div class="blog-comments product-comments mt-0">
                                <ul class="list-none">
                                    <?php $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>

                                        <div class="comment-avatar text-center">
                                            <img src="<?php echo e(asset('storage/assets/buyer/avatar/'.$review->buyer_id->avatar)); ?>" alt="" height="50" width="50" h>
                                            <div class="product-rating mt-10">
                                                
                                                <?php for($i = 1; $i <= 5; $i++): ?> 
                                                <?php if($i > $review->rating): ?>
                                                <i class="fa fa-star-o"></i>
                                                <?php else: ?>
                                                <i class="fa fa-star"></i>
                                                <?php endif; ?>
                                                <?php endfor; ?> 
                                                

                                            </div>
                                        </div>
                                        <div class="comment-desc">
                                            <span><?php echo e(date($review->createdAt)); ?></span>
                                            <h4><?php echo e($review->buyer_id->name); ?></h4>
                                            <p><?php echo e($review->review_message); ?>. </p>
                                        </div>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                                            <input type="hidden" value="<?php echo e($product->seller_id->id); ?>" name="seller_id" />
                                            <input type="hidden" value="<?php echo e(Auth::guard('buyer')->user()->id); ?>" name="buyer_id" />
                                            <input type="hidden" value="0" id="rating" name="rating" />
                                            <input type="hidden" value="1" name="status" />
                                            <button name="" class="btn-common mt-25">Submit</button>
                                            <?php else: ?>
                                            <a href="<?php echo e(url('buyer/login')); ?>" class="btn btn-danger btn-lg">Login</a>
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
    <div class="best-sellers mt-45">
        <div class="container-fluid fix">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="text-dark">Related Products</h3>
                    </div>
                </div>
            </div>
            <div class="row four-items cv-visible slick-initialized slick-slider slick-dotted">
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 7920px; transform: translate3d(-1584px, 0px, 0px);">
                        <div class="col-lg-3 slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 396px;" tabindex="-1">

                        </div>
                    </div>
                </div>

                <ul class="slick-dots" style="" role="tablist">
                    <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide04" aria-label="2 of 2" tabindex="-1">2</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>
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
            }).then(e=>window.location.reload())
        }
    })
</script>



<!--products-area end-->
<div class="modal fade" id="terms-conditions" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>TERMS &amp; CONDITIONS</h2>
                                    <p class="text-justify">
                                      <?php echo e($product->seller_id->terms_and_conditions); ?>

                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delivery_terms" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Delivery Terms</h2>
                                    <p class="text-justify">
                                      <?php echo e($product->seller_id->delivery_terms); ?>

                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="policy" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Return Policy</h2>
                                    <p class="text-justify">
                                      <?php echo e($product->seller_id->policy); ?>

                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/sqt/bloom/resources/views/front/product-details.blade.php ENDPATH**/ ?>