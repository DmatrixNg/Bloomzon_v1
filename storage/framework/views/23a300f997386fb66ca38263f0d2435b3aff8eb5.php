<?php $__env->startSection('page_title'); ?>
    Shop
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!--products-area start-->
    <div class="shop-area">
        <div class="container">
            
            <h3>Search Result</h3>
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="tab-content">
                        <div id="grid-products" class="tab-pane active">
                            <div class="row">
                                <?php if(count($products)): ?>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="product-single">
                                                <div class="product-thumb">

                                                    <a href="#">
                                                        <?php if($product->avatars != null): ?>
                                                            <img style="min-height: 150px"
                                                                src="<?php echo e(asset('storage/assets/product/avatars/' . $product->avatars[0] ?? '')); ?>"
                                                                alt="">
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
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>



                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mt-30">
                        <div class="col-lg-6">
                            
                        </div>
                        
                    </div>
                </div>
            </div>


            <?php if(count($sellers)): ?>
                <h4 class="text-left">SELLERS</h4>

                <div class="row mt-5 mb-5">
                    <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <div class="card"
                                style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">
                                <div class="card-up white lighten-1"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Avatar -->
                                        <div class="avatar mx-auto white">
                                            <img src="<?php echo e(asset('storage/assets/seller/avatar/' . $seller->avatar)); ?>"
                                                class="rounded-circle" alt="" width="200" height="200">
                                        </div>
                                        <!-- Content -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3 class="testimonial_heading font-weight-bold"><?php echo e($seller->company_name); ?></h3>
                                        <p class="testimonial_heading2"><?php echo e($seller->full_name); ?></p>
                                        <p class="testimonial_heading2"><?php echo e($seller->shop_address); ?></p>
                                        <a href="<?php echo e(url('/seller-product-list/' . $seller->id)); ?>"
                                            class="btn btn-danger border-0 h2">View Products</a>
                                        <a href="<?php echo e(url('/seller-details/' . $seller->id)); ?>"
                                            class="btn btn-primary border-0 h2">View Store</a>
                                    </div>
                                    <br>
                                    <!-- Quotation -->
                                    <p class="testimonial_text"><?php echo e($seller->service_description); ?>.</p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($_GET['category']) && $_GET['category'] == 'seller'): ?>
                        <div class="alert alert-warning">
                            No Seller Found
                        </div>
                        <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if(!count($ffgs)): ?>
            
            <?php if(isset($_GET['category']) && $_GET['category'] == 'fast_food_grocery'): ?>
            <div class="alert alert-warning">No Result</div>
            <?php endif; ?>
            <?php else: ?>
            <h4 class="text-left">Fast Food Groceries</h4>

            <div class="row mt-5 mb-5">
                    <?php $__currentLoopData = $ffgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ffg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <div class="card"
                                style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">
                                <div class="card-up white lighten-1"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Avatar -->
                                        <div class="avatar mx-auto white">
                                            <img src="<?php echo e(asset('storage/assets/fast_food_grocery/avatar/' . $ffg->avatar)); ?>"
                                                class="rounded-circle" alt="" width="200" height="200">
                                        </div>
                                        <!-- Content -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3 class="testimonial_heading font-weight-bold"><?php echo e($ffg->company_name); ?></h3>
                                        <p class="testimonial_heading2"><?php echo e($ffg->full_name); ?></p>
                                        <p class="testimonial_heading2"><?php echo e($ffg->shop_address); ?></p>
                                        <a href="<?php echo e(url('/fast-food-details/' . $ffg->id)); ?>"
                                            class="btn btn-primary border-0 h2">View Profile</a>
                                        <a href="<?php echo e(url('/vendor-food-list/' . $ffg->id)); ?>"
                                            class="btn btn-danger border-0 h2">View Products</a>
                                    </div>
                                    <br>
                                    <!-- Quotation -->
                                    <p class="testimonial_text"><?php echo e($ffg->service_description); ?>.</p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
                <?php endif; ?>

                <?php if(!count($profs)): ?>
                <?php if(isset($_GET['category']) && $_GET['category'] == 'proservice'): ?>
                <div class="alert alert-warning">No Vendor</div>
                <?php endif; ?>
                <?php else: ?>
                <h4 class="text-left">Professional Service</h4>
                            <div class="row mt-5 mb-5">
                    <?php $__currentLoopData = $profs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proservice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <div class="card"
                                style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">
                                <div class="card-up white lighten-1"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Avatar -->
                                        <div class="avatar mx-auto white">
                                            <img src="<?php echo e(asset('storage/assets/professional/avatar/' . $proservice->avatar)); ?>"
                                                class="rounded-circle" alt="" width="200" height="200">
                                        </div>
                                        <!-- Content -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3 class="testimonial_heading font-weight-bold"><?php echo e($proservice->company_name); ?>

                                        </h3>
                                        <p class="testimonial_heading2"><?php echo e($proservice->full_name); ?></p>
                                        <p class="testimonial_heading2"><?php echo e($proservice->shop_address); ?></p>
                                        <a href="<?php echo e(url('/proservice-details/' . $proservice->id)); ?>"
                                            class="btn btn-outline-primary">View Services</a>

                                    </div>
                                    <br>
                                    <!-- Quotation -->
                                    <p class="testimonial_text"><?php echo e($proservice->service_description); ?>.</p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
                <?php endif; ?>

                <?php if(count($networking_agents)): ?>
                <h4 class="text-left">Networking Associates</h4>
            <div class="row mt-5 mb-5">

                    <?php $__currentLoopData = $networking_agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <div class="card"
                                style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">

                                <div class="card-up white lighten-1"></div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Avatar -->
                                        <div class="avatar mx-auto white">
                                            <img src="<?php echo e(asset('storage/assets/networking_agent/avatar/' . $agent->avatar)); ?>"
                                                class="rounded-circle" alt="" width="200" height="200">
                                        </div>

                                        <!-- Content -->

                                    </div>

                                </div>

                                <div class="card-body">

                                    <div class="text-center">
                                        <h3 class="testimonial_heading font-weight-bold"><?php echo e(ucwords($agent->full_name)); ?>

                                        </h3>
                                        <p class="testimonial_heading2"><?php echo e($agent->street_address); ?></p>
                                        <a href="<?php echo e(url('/networkingagent-details/' . $agent->id)); ?>"
                                            class="btn btn-outline-primary">View Services</a>

                                    </div>
                                    <br>
                                    <!-- Quotation -->
                                    
                                </div>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php if(isset($_GET['category']) && $_GET['category'] == 'networking_agent'): ?>
                        <div class="alert alert-warning">
                            No Associate on the system
                        </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>



        </div>
    </div>
    <!--products-area end-->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        [...document.getElementsByClassName('add-to-cart')].map(element => {
            element.onclick = async e => {
                e.preventDefault();
                const productId = e.target.getAttribute('data-product-id');
                const quantity = document.getElementById(`qty_${productId}`).value;

                const response = await (await fetch(`/api/v1/cart/add/${productId}/${quantity}`, {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json'
                    }
                })).json();

                if (response.success) {
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

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/front/search-result.blade.php ENDPATH**/ ?>