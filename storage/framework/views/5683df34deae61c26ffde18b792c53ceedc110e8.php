
<?php $__env->startSection('page_title'); ?>
    Category - 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <!--products-area start-->
	<div class="shop-area">
		<div class="container">
        <p class="text-left"><a href="index.html">Home</a> <i class="fa fa-chevron-right"></i> <a style="color:grey;" href="categories.html"><?php echo e($page_title); ?></a></p>
		    <h3><?php echo e($page_title); ?> </h3>
			<div class="row mt-3">
				<div class="col-md-9">
					<div class="tab-content">
						<div id="grid-products" class="tab-pane active">
							<div class="row">
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($product->product_name): ?>
                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="product-single">
                                            <div class="product-thumb">
                                               
                                                <a href="#">
                                                    <?php if($product->avatars != null): ?>
                                                    <img style="min-height: 150px" src="<?php echo e(asset('storage/assets/product/avatars/'.$product->avatars[0]??'')); ?>" alt="">
                                                    <?php endif; ?>
                                                </a>

                                                <?php if($product->product_sales_price): ?>
                                                    <div class="downsale">
                                                        <span>-</span>$<?php echo e(number_format($product->product_price - $product->product_sales_price)); ?>

                                                    </div>
                                                <?php endif; ?>
                                                <div class="product-quick-view">
                                                    
                                                 <?php if (isset($component)) { $__componentOriginal67db60db2ec16c09df5ad6b20d1009873d3b799a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ProductButtons::class, ['product' => $product]); ?>
<?php $component->withName('product-buttons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['aria-label' => ''.e($product->id).'','aria-labelledby' => ''.e($product->id).'']); ?>
<?php if (isset($__componentOriginal67db60db2ec16c09df5ad6b20d1009873d3b799a)): ?>
<?php $component = $__componentOriginal67db60db2ec16c09df5ad6b20d1009873d3b799a; ?>
<?php unset($__componentOriginal67db60db2ec16c09df5ad6b20d1009873d3b799a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                                                

                                                </div>
                                            </div>
                                            <div class="product-title">
                                                <h4><a href="#"><?php echo e($product->product_name); ?></a></h4>
                                                <small>
                                                    <?php if($product->product_sales_price): ?>
                                                        <div class="product-price-rating">
                                                            <span>$<?php echo e(number_format($product->product_sales_price)); ?></span>
                                                            <del>$<?php echo e(number_format($product->product_price)); ?></del>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="product-price-rating">
                                                            <span>$<?php echo e(number_format($product->product_price)); ?></span>
                                                        </div>
                                                    <?php endif; ?>

                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								

							</div>
						</div>
					</div>
					<div class="row align-items-center mt-30">
						<div class="col-lg-6">
							<?php echo e($products->links()); ?>

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
            [...document.getElementsByClassName('add-to-cart')].map( element => {
                element.onclick = async e => {
                    e.preventDefault();
                    const productId = e.target.getAttribute('data-product-id');
                    const quantity = document.getElementById(`qty_${productId}`).value;

                    const response = await( await fetch(`/api/v1/cart/add/${productId}/${quantity}`, {
                        method: 'GET',
                        headers: {
                            'Accept':'application/json'
                        }
                    })).json();

                    if(response.success){
                        return swal({
                            'title': 'Cart Updated',
                            'text': 'Product Added to cart successfully',
                            'icon': 'success'
                        })
                    }
                    console.log(response);
                }
            })
        </script>
    <?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/front/fast_foods.blade.php ENDPATH**/ ?>