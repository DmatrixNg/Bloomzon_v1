
<?php $__env->startSection('page_title'); ?>
    Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="mm-page mm-slideout" id="mm-0">
        <div class="slider-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="main-slider slick-initialized mt-30 mt-sm-0 slick-slider slick-dotted">
                            <div id="sliderCar" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <?php ($count = 0); ?>

                                    <?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($advert->advert_position == 'Slider'): ?>
                                            <div class="carousel-item <?php if($count == 0): ?> active <?php endif; ?>">
                                                <div class="banner-sm hover-effect">
                                            <img style="max-height: 350px" class="d-block w-100" src="<?php echo e(asset('storage/assets/advert/avatar/'.$advert->avatar)); ?>" alt="<?php echo e($advert->advert_link); ?>">
                                            <?php ($count++); ?>
                                            </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </div>
                                <a class="carousel-control-prev" href="#sliderCar" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only"><?php echo e(__("Previous")); ?></span>
                                </a>
                                <a class="carousel-control-next" href="#sliderCar" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only"><?php echo e(__("Next")); ?></span>
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="col-xl-4 hider-cs menu-hider">
                        <div class="row mt-30">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php ($count = 0); ?>
                                    <?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($advert->advert_position === 'Body'): ?>
                              <div class="carousel-item  <?php if($count == 0): ?> active <?php endif; ?>">
                                <div class="banner-sm hover-effect">
                                    <a href="<?php echo e($advert->advert_link); ?>?referrer=bloomzon" target="_blank">
                                        <img src="<?php echo e(asset('storage/assets/advert/avatar/'.$advert->avatar)); ?>" class="d-block w-100" alt="<?php echo e($advert->advert_link); ?>" height="341">
                                    </a>
                                </div>
                              </div>
                              <?php ($count++); ?>
                              <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-50 hider-cs menu-hider" style="background-color: #eeeeee !important">
            <div class="brands-area">
                <div class="row">
                    <div class="col-lg-2">
                        <h2><?php echo e(__("Brands")); ?></h2>
                    </div>
                    <div class="col-lg-10">
                        <div class="brand-items slick-initialized slick-slider">
                            <div class="slick-list draggable">
                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span style="width: 172px;margin-left: 10px">
                                        <a href="#">
                                            <img class="brand-static" src="<?php echo e(asset('storage/assets/brand/'.$brand->avatar)); ?>" height="50"
                                                alt="">
                                        </a>
                                    </span>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="products-area mt-47 mt-sm-37">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 fix">
                        <!--product-categories-->
                        <div class="row">
                            <div class="col-md-6" style="border-right: 1px solid #eee;">
                                <div class="product best-sellers">
                                    <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                                        <div class="col-lg-12">
                                            <div class="section-title text-left">
                                                <h3><?php echo e(__("MOST POPULAR")); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cv-visible product-container">
                                      <div class="content-1 p-1 row">

                                        <?php $__currentLoopData = $products->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <?php if($product->product_name): ?>
                                            <div class="product-card-short">
                                              
                                              <div class="product-thumb">

                                                <a href="<?php echo e(url(app()->getLocale().'/product-details/' . base64_encode($product->id))); ?>">
                                                  <?php if($product->avatars != null): ?>
                                                    <img src="<?php echo e(asset('storage/assets/product/avatars/'.$product->avatars[0]??'')); ?>" alt="">
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
                                                <div class="product-body text-truncate">
                                                  <h4><a href="<?php echo e(url(app()->getLocale().'/product-details/' . base64_encode($product->id))); ?>" class="text-truncate" title="<?php echo e($product->product_name); ?>"><?php echo e($product->product_name); ?></a></h4>
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
                                            <?php endif; ?>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </div>

                                    </div>
                                    <div class="text-center pt-2"><a href="<?php echo e(url(app()->getLocale().'/shop')); ?>" class="btn btn-danger text-white"><?php echo e(__("View All")); ?></a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-categories mt-sm-40">
                                    <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                                        <div class="col-lg-12">
                                            <div class="section-title text-right">
                                                <h3><?php echo e(__("WHOLESALERS/MANUFACTURERS")); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-categories-carousel mt-30 slick-initialized slick-slider">
                                        <div class="slick-list draggable">
                                            <div class="slick-track"
                                                style="opacity: 1; width: 420px; transform: translate3d(0px, 0px, 0px);">
                                                <?php $__currentLoopData = $manufacturers->take(9); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <div class="col-lg-4 p-1 slick-slide slick-current slick-active"
                                                        data-slick-index="0" aria-hidden="false" tabindex="0"
                                                        style="width: 140px;">
                                                        <div class="single-product-cat">
                                                            <a href="<?php echo e(url(app()->getLocale().'/manufacturer-details/'.$manufacturer->id)); ?>" tabindex="0">
                                                                <img src="<?php echo e(asset('storage/manufacturer/' . $manufacturer->avatar)); ?>" alt="" height="180">
                                                            </a>
                                                            <h4><a href="<?php echo e(url(app()->getLocale().'/manufacturer-details/'.$manufacturer->id)); ?>"
                                                                    tabindex="0"><?php echo e($manufacturer->company_name); ?></a>
                                                            </h4>
                                                        </div>
                                                    </div>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="text-center pt-4"><a
                                            href="/manufacturers?manufacturers=<?php echo e(base64_encode(json_encode($manufacturers))); ?>"
                                            class="btn btn-danger text-white"><?php echo e(__("View All")); ?></a></div>
                                </div>
                            </div>
                        </div>
                        <!--products-tab-->
                        <div class="products-tab mt-35">
                            <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                                <div class="col-lg-12">
                                    <div class="section-title text-left">
                                        <h3><?php echo e(__("GROCERIES")); ?>

                                            <a href="<?php echo e(app()->getLocale() . '/groceries'); ?>"
                                                class="text-white pull-right"> <?php echo e(__("SEE ALL")); ?></a>
                                        </h3>

                                    </div>

                                </div>
                            </div>
                            <div class="row cv-visible">

                                    <?php $__currentLoopData = $groceries->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grocery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-6 col-md-3" style="height: 200;">
                                            <div class="product-single p-0"
                                                style="height: 120px; background-image: url('assets/img/g1.jpeg'); background-size: 350px; background-position: center;">
                                                <div style="height: 240px;" class="product-thumb">
                                                    <img src="<?php echo e(asset('storage/assets/product/avatars/'.$grocery->avatars[0]??'')); ?>" alt="">
                                                </div>
                                                <div class="product-title text-white pull-right"
                                                    style="background-color: #bd1a09; padding: 10px; bottom: 0; right: 0; position: absolute; margin-bottom: -20px; ">
                                                    <h4><a href="<?php echo e(url(app()->getLocale().'/product-details/' . base64_encode($grocery->id))); ?>"
                                                        class="text-white">
                                                        <?php echo e($grocery->product_name); ?></a>

                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






                            </div>
                            <br/>
                            <div class="text-center pt-4"><a
                                            href="<?php echo e(app()->getLocale() . '/groceries'); ?>"
                                            class="btn btn-danger text-white"><?php echo e(__("View All")); ?></a></div>
                        </div>
                        <div class="products-tab mt-35">
                            <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                                <div class="col-lg-12">
                                    <div class="section-title text-left">
                                        <h3><?php echo e(__("FOOD MENUS")); ?>

                                            <a href="<?php echo e(app()->getLocale() . '/food-menus'); ?>"
                                                class="text-white pull-right"> <?php echo e(__("SEE ALL")); ?></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row cv-visible">
                                <?php $__currentLoopData = $food_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-6 col-md-3">
                                        <div class="product-single p-0">
                                            <div  style="height: 240px;" class="product-thumb">
                                                <img src="<?php echo e(asset('storage/assets/fast_food_grocery/catalogue/' . $food_menu->avatar)); ?>" style="height: 200px;">
                                            </div>
                                            <div class="product-title text-white pull-right"
                                                style="background-color: #bd1a09; padding: 10px; bottom: 0; right: 0; position: absolute; margin-bottom: -20px; ">
                                                <h4><a href="<?php echo e(url(app()->getLocale().'/category/'.$food_menu->name)); ?>?fast_food_grocery" style="color: #fff !important;">
                                                    <?php echo e($food_menu->name); ?></a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <section class="row mt-40 hider-cs" style="background-color: #000;" id="#bloomzon_tv">
                <div class="col-md-12">
                    <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                        <div class="col-lg-12">
                            <div class="section-title text-left">
                                <h3><?php echo e(__("BLOOMZON TV")); ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="container mx-auto" style="width:40%; height:auto">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                src="https://www.youtube.com/embed/7HgGiCK33ow" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--products-tab start-->
        <div class="products-tab-area mt-45 mt-sm-40">
            <div class="container-fluid">
                <div class="row mt-40">
                    <div class="col-md-12" style="border-right: 1px solid #eee;">
                        <div class="best-sellers">
                            <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                                <div class="col-lg-12">
                                    <div class="section-title text-left">
                                        <h3><?php echo e(__("VENDORS")); ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row cv-visible">
                                <div class="col-4 col-md-3 col-lg-2">
                                    <a href="<?php echo e(route('fast-foods',app()->getLocale())); ?>" class="text-white">
                                    <div class="product-single p-0 svh" style="background-image: url('<?php echo e(asset("assets/frontend/img/food1.jpg")); ?>'); height: 220px; border-radius: 15px; background-size: cover; width: 100%;  background-repeat: no-repeat; background-position: center;">
                                        <div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                                            <h4 class="text-white"><?php echo e(__("Fast Food Vendors")); ?></h4>
                                        </div>
                                    </div></a>
                                </div>
                                <div class="col-4 col-md-3 col-lg-2">
                                    <a href="<?php echo e(route('groceries',app()->getLocale())); ?>" class="text-white">
                                    <div class="product-single p-0 svh" style="background-image: url('<?php echo e(asset("assets/frontend/img/g2.jpg")); ?>'); height: 220px; border-radius: 15px; background-size: cover; background-position: center;">
                                        <div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                                            <h4 class="text-white"><?php echo e(__("Groceries")); ?></h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-4 col-md-3 col-lg-2">
                                    <a href="<?php echo e(route('agents',app()->getLocale())); ?>" class="text-white">
                                    <div class="product-single p-0 svh" style="background-image: url('<?php echo e(asset("assets/frontend/img/b3.jpg")); ?>'); height: 220px; border-radius: 15px; background-size: cover; background-position: center;">
                                        <div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                                            <h4 class="text-white"><?php echo e(__("Networking Associates")); ?></h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-4 col-md-3 col-lg-2">
                                    <a href="<?php echo e(route('manufacturers',app()->getLocale())); ?>" class="text-white">
                                    <div class="product-single p-0 svh" style="background-image: url('<?php echo e(asset("assets/frontend/img/b1.jpeg")); ?>'); height: 220px; border-radius: 15px; background-size: cover; background-position: center;">
                                        <div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                                            <h4 class="text-white"><?php echo e(__("Manufacturers")); ?></h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-4 col-md-3 col-lg-2">
                                    <a href="<?php echo e(route('proservice',app()->getLocale())); ?>" class="text-white">
                                    <div class="product-single p-0 svh" style="background-image: url('<?php echo e(asset("assets/frontend/img/p1.jpg")); ?>'); height: 220px; border-radius: 15px; background-size: cover; background-position: center;">
                                        <div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                                            <h4 class="text-white"><?php echo e(__("Professional Services")); ?></h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <div class="col-4 col-md-3 col-lg-2">
                                    <a href="<?php echo e(route('sellers',app()->getLocale())); ?>" class="text-white">
                                    <div class="product-single p-0 svh" style="background-image: url('<?php echo e(asset("assets/frontend/img/p2.jpg")); ?>'); height: 220px; border-radius: 15px; background-size: cover; background-position: center;">
                                        <div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                                            <h4 class="text-white"><?php echo e(__("Sellers")); ?></h4>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <!--<div class="text-center pt-2"><a href="vendors.html" class="btn btn-danger">MORE</a></div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--products-tab end-->



        <div class="container-fluid mt-50">
            <div class="row mt-40">
              
                <?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($advert->advert_position === 'Footer'): ?>
                        <div class="col-xl-4 col-lg-6">
                            <a href="<?php echo e($advert->advert_link); ?>">
                            <div class="banner-sm hover-effect">
                                    <img src="<?php echo e(asset('storage/assets/advert/avatar/'.$advert->avatar)); ?>" height="270" width="100%" alt="">

                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <div class="container-fluid">
            <!--banner-section-->
            <div class="row mt-40">
                <div class="col-md-12" style="border-right: 1px solid #eee;">
                    <div class="product best-sellers">
                        <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                            <div class="col-lg-12">
                                <div class="section-title text-left">
                                    <h3><?php echo e(__("MARKET BOKU")); ?>

                                        <a href="<?php echo e(url(app()->getLocale().'/shop')); ?>" class="text-white pull-right"> SEE ALL</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="cv-visible product-container">
                            <div class="content-1 p-1 row">

                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($product->product_name): ?>
                                    <div class="product-card-full">
                                        
                                            <div class="product-thumb">
                                                <a href="<?php echo e(url(app()->getLocale().'/product-details/' . base64_encode($product->id))); ?>">
                                                    <?php if($product->avatars != null): ?>
                                                    <img src="<?php echo e(asset('storage/assets/product/avatars/'.$product->avatars[0] ?? '')); ?>" alt="">
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
                                            <div class="product-body text-truncate">
                                                <h4><a href="<?php echo e(url(app()->getLocale().'/product-details/'.base64_encode($product->id))); ?>" class="text-truncate"><?php echo e($product->product_name); ?></a></h4>
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
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        </div>
                        <div class="text-center pt-2"><a href="<?php echo e(url(app()->getLocale().'/shop')); ?>" class="btn btn-danger text-white"><?php echo e(__("View All")); ?></a></div>
                    </div>
                </div>
            </div>
            <!--banner-section-->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/front/index.blade.php ENDPATH**/ ?>