<?php $__env->startSection('page_title'); ?>
    Category - 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <!--products-area start-->
	<div class="shop-area">
		<div class="container">
        
		    <h3>CATEGORIES</h3>
			<div class="row mt-3">
			    <div class="col-md-3">
                    <!-- Filter panel -->
                    <div class="">
                        <div class="mb-5">
                            <h5 class="font-weight-bold text-left">Order by</h5>
        
                            <div class="divider-small mb-3"></div>
        
                            <ul class="list-unstyled link-black">
                                <li class="mb-2">
                                    <a href="" class="active">Default</a>
                                </li>
                                <li class="mb-2">
                                    <a href="" class="">Popularity</a>
                                </li>
                                <li class="mb-2">
                                    <a href="" class="">Rating</a>
                                </li>
                                <li class="mb-2">
                                    <a href="" class="">Price: low to high</a>
                                </li>
                                <li class="mb-2">
                                    <a href="" class="">Price: high to low</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Filter panel -->
        
                        <!-- Filter panel -->
                        <div class="mb-5">
        
                            <h5 class="font-weight-bold mb-3">Location</h5>
        
                            <div class="divider-small mb-3"></div>
        
                            <form class="input-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Search.." name="search" style="border-radius: 3px;">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
        
                            <div class="row justify-content-center">
        
                            </div>
        
                        </div>
                        <!-- Filter panel -->
        
                        <!-- Filter panel -->
                        <div class="mb-5">
        
                            <h5 class="font-weight-bold text-left">Sellers</h5>
        
                            <div class="divider-small mb-3"></div>
        
                            <div class="form-check mb-2">
                                <input type="radio" class="form-check-input" id="material1" name="groupOfMaterial" checked="">
                                <label class="form-check-label" for="material1">All</label>
                            </div>
                            <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check mb-2">
                                <input type="radio" class="form-check-input" id="material7" name="groupOfMaterial">
                                <label class="form-check-label" for="material7"><?php echo e($seller->company_name); ?></label>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- Filter panel -->
        
                        <!-- Filter panel -->
                        <div class="mb-5">
        
                            <h5 class="font-weight-bold text-left">Brands</h5>
        
                            <div class="divider-small mb-3"></div>
        
                            <div class="form-check mb-2">
                                <input type="radio" class="form-check-input" id="materialGroupExample1" name="groupOfMaterialRadios">
                                <label class="form-check-label" for="materialGroupExample1">All</label>
                            </div>
        
                            <div class="form-check mb-2">
                                <input type="radio" class="form-check-input" id="materialGroupExample2" name="groupOfMaterialRadios" checked="">
                                <label class="form-check-label" for="materialGroupExample2">Apple</label>
                            </div>
        
                            <div class="form-check mb-2">
                                <input type="radio" class="form-check-input" id="materialGroupExample3" name="groupOfMaterialRadios">
                                <label class="form-check-label" for="materialGroupExample3">Samsung</label>
                            </div>
        
                            <div class="form-check mb-2">
                                <input type="radio" class="form-check-input" id="materialGroupExample4" name="groupOfMaterialRadios">
                                <label class="form-check-label" for="materialGroupExample4">Techno</label>
                            </div>
        
                            <div class="form-check mb-2">
                                <input type="radio" class="form-check-input" id="materialGroupExample5" name="groupOfMaterialRadios">
                                <label class="form-check-label" for="materialGroupExample5">Itel</label>
                            </div>
        
                            <div class="form-check mb-2">
                                <input type="radio" class="form-check-input" id="materialGroupExample6" name="groupOfMaterialRadios">
                                <label class="form-check-label" for="materialGroupExample6">Infinix</label>
                            </div>
        
                            <div class="form-check mb-2">
                                <input type="radio" class="form-check-input" id="materialGroupExample7" name="groupOfMaterialRadios">
                                <label class="form-check-label" for="materialGroupExample7">Google Pixel</label>
                            </div>
                        </div>
                        <!-- Filter panel -->
        
        
                        <!-- Filter panel -->
                        <div class="mb-5">
        
                            <h5 class="font-weight-bold mb-3">Select Color</h5>
        
                            <div class="divider-small mb-3"></div>
                            <select id="colorselector" class="form-control">
                                <option selected>All</option>
                                <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($color); ?>" data-color="<?php echo e($color); ?>"><?php echo e($color); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="dropdown dropdown-colorselector">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="btn-colorselector" style="background-color: rgb(205, 92, 92);"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-caret">
                                    <li><a class="color-btn" style="background-color: rgb(160, 82, 45);" href="#" data-color="#A0522D" data-value="106" title="sienna"></a></li>
                                    <li><a class="color-btn selected" style="background-color: rgb(205, 92, 92);" href="#" data-color="#CD5C5C" data-value="47" title="indianred"></a></li>
                                    <li><a class="color-btn" style="background-color: rgb(255, 69, 0);" href="#" data-color="#FF4500" data-value="87" title="orangered"></a></li>
                                    <li><a class="color-btn" style="background-color: rgb(220, 20, 60);" href="#" data-color="#DC143C" data-value="15" title="crimson"></a></li>
                                    <li><a class="color-btn" style="background-color: rgb(255, 140, 0);" href="#" data-color="#FF8C00" data-value="24" title="darkorange"></a></li>
                                    <li><a class="color-btn" style="background-color: rgb(199, 21, 133);" href="#" data-color="#C71585" data-value="78" title="mediumvioletred"></a></li>
                                </ul>
                            </div>
        
        
                        </div>
                        <!-- Filter panel -->
        
        
        
        
                        <!-- Filter panel -->
                        <div class="mb-5">
        
                            <h5 class="font-weight-bold mb-3">Price</h5>
        
                            <div class="divider-small mb-3"></div>
        
                            <form class="range-field">
                                <input class="form-control" type="range" min="0" max="319">
                            </form>
        
                            <div class="row justify-content-center">
        
                                <!-- Grid column -->
                                <div class="col-md-6 text-left">
                                    <p class="dark-grey-text"><strong id="resellerEarnings">$0</strong></p>
                                </div>
                                <!-- Grid column -->
        
                                <!-- Grid column -->
                                <div class="col-md-6 text-right">
                                <p class="dark-grey-text"><strong id="clientPrice">$<?php echo e($max_price); ?></strong></p>
                                </div>
                                <!-- Grid column -->
                            </div>
        
                        </div>
                        <!-- Filter panel -->
        
                        <!-- Filter panel -->
                        <div class="link-black">
        
                            <h5 class="font-weight-bold mb-3">Rating</h5>
        
                            <div class="divider-small mb-3"></div>
        
                            <div class="amber-text fa-sm mb-1">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-startext-warning"></i>
                                <i class="fa fa-star"></i>
                                <a href="" class="ml-2 active">4 and more</a>
                            </div>
        
                            <div class="amber-text fa-sm mb-1">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <a href="" class="ml-2">3 - 3,99</a>
                            </div>
        
                            <div class="amber-text fa-sm mb-1">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <a href="" class="ml-2">3.00 and less</a>
                            </div>
        
                        </div>
                        <!-- Filter panel -->
                    </div>
        
                </div>
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
							<div class="site-pagination">
                                
								<ul>
									<li><a href="#" class="active">1</a></li>
									<li>of</li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="product-results pull-right">
								<span>Showing 1–3 of 60 results</span>
								<div class="products-sort ml-35 mr-0">
									<form>
										<label>Show :</label>
										<select>
											<option>12</option>
											<option>8</option>
											<option>4</option>
										</select>
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


<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/front/shop.blade.php ENDPATH**/ ?>