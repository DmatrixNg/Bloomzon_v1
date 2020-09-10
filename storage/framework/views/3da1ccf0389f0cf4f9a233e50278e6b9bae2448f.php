
    <!--header-area start-->
	<header class="header-area">
		<div class="desktop-header">
			<!--header-top-->
			<div class="header-top">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-2 text-right">
							<img src="<?php echo e(asset('assets/frontend/images/download.png')); ?>" height="30" width="auto" class="img img-responsive">
                        </div>

                        <?php if(count($adverts)): ?>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="carousel-item <?php if($loop->iteration === 1): ?> active <?php endif; ?>">
                                            <a href="<?php echo e($advert->advert_link); ?>?referrer=bloomzon" target="_blank">
                                                <img class="d-block w-100" src="<?php echo e(asset('storage/assets/advert/avatar/' . $advert->avatar)); ?>" alt="First slide" height="60" width="100%">
                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-lg-4">
                                <img src="<?php echo e(asset('front_assets/assets/images/top_banner.jpg')); ?>" height="60" width="100%" class="img img-responsive">
                            </div>
                        <?php endif; ?>

						<div class="col-lg-4 text-center">
							<span><strong><?php echo e(__("NEWS")); ?></strong> &lt; <span style="color:yellow">COVID-19:</span> <?php echo e(__("CLEAN UP, TRADE NOW")); ?> &gt;</span>
                        </div>


						<div class="col-lg-2">
							<div class="topbar-right">
								<div class="currency-bar lang-bar pull-right">
									<ul>
										<li><a href="#" class="btn btn-primary pt-0 pb-0" style="background-color: #23374D !important; "><img src="assets/images/icons/gb.png" alt="" />
											<?php if(app()->getLocale() == 'en'): ?>
											<?php echo e(__("English")); ?>

										<?php elseif(app()->getLocale() == 'fr'): ?>
											<?php echo e(__("French")); ?>

										<?php elseif(app()->getLocale() == 'es'): ?>
										<?php echo e(__("	Spanish")); ?>

										<?php elseif(app()->getLocale() == 'zh_CH'): ?>
										<?php echo e(__("	Chinese")); ?>

										<?php elseif(app()->getLocale() == 'ar'): ?>
										<?php echo e(__("	Arabic")); ?>

										<?php else: ?>
										<?php echo e(__("	English ")); ?>

										<?php endif; ?>
										<i class="fa fa-angle-down"></i></a>
											<ul>
												

							                  <li><a href="javascript:changeLocation('en')"> <img src="<?php echo e(asset('front_assets/assets/img/us.jpg')); ?>" width="30" height="20"> <?php echo e(__("English")); ?></a></li><br>
							                  <li><a href="javascript:changeLocation('fr')"> <img src="<?php echo e(asset('front_assets/assets/img/fr.jpg')); ?>" width="30" height="20"> <?php echo e(__("French")); ?></a></li><br>
							                  <li><a href="javascript:changeLocation('es')"> <img src="<?php echo e(asset('front_assets/assets/img/sp.jpg')); ?>" width="30" height="20"> <?php echo e(__("Spanish")); ?></a></li><br>
							                  <li><a href="javascript:changeLocation('zh_CH')"> <img src="<?php echo e(asset('front_assets/assets/img/chinese.jpg')); ?>" width="30" height="20"> <?php echo e(__("Chinese")); ?></a></li><br>
							                  <li><a href="javascript:changeLocation('ar')"> <img src="<?php echo e(asset('front_assets/assets/img/arabic.jpg')); ?>" width="30" height="20"> <?php echo e(__("Arabic")); ?></a></li>
							                </ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!--header-bottom-->

			<div class="sticker header-bottom" style="background-color: #aa1607 !important; color: #fff;">
				<div class="container-fluid mr-5 ml-5 pr-5 pl-5">
					<div class="row align-items-center">
						<div class="col-lg-2">
							<div class="logo">
								<a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('front_assets/assets/images/bloomzon_white.png')); ?>" width="90" height="auto" alt="logo" /></a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mainmenu row">
    							<div class="topbar-right col-md-2">
    								<div class="currency-bar lang-bar pull-right">
    									<ul>
    										<li><a href="#" class="btn pt-0 pb-0 text-light" style="background-color: #aa1607 !important; ">Help <i class="fa fa-angle-down"></i></a>
    											<ul>
    							                  <li><a href="<?php echo e(route('home','faq')); ?>"> <?php echo e(__("FAQ")); ?></a></li>
    							                  <li><a href="<?php echo e(route('home','accountpolicy')); ?>"><?php echo e(__("Account Policy")); ?></a></li>
    							                  <li><a href="<?php echo e(route('home','services')); ?>"><?php echo e(__("Services")); ?></a></li>
    							                </ul>
    										</li>
    									</ul>
    								</div>
    							</div>

								<div class="search-box col-md-10">
                                    <form action="/search" method="GET">

                                        <select class="form-control"
                                            name="category"
                                            style="width: 80px; height: 45px !important; border-top-right-radius: 0px; border-bottom-right-radius:  0px;">
                                            <option value="all"><?php echo e(__("All")); ?></option>

                                                <option value="product"><?php echo e(__("Products")); ?></option>
                                                <option value="seller"><?php echo e(__("Seller")); ?></option>
                                                <option value="proservice"><?php echo e(__("Professional Service")); ?></option>
                                                <option value="fast_food_grocery"><?php echo e(__("Fast Food Grocery")); ?></option>
                                                <option value="networking_agent"><?php echo e(__("Networking Associate")); ?></option>
                                                <option value="manufacturer"><?php echo e(__("Manufacturer")); ?></option>

                                        </select>
                                        <input type="text" name="search_term" placeholder="<?php echo e(__("What do you need?")); ?>" style="height: 45px;" />
                                        <button
                                            style="height: 45px; background-color: #ccc; border-top-right-radius: 5px; border-bottom-right-radius:  5px; color: #333; width: 60px;"><i
                                                class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
							</div>
                        </div>

						<div class="col-lg-4">
                            <div class="register-login">
                            <a type="button" href="<?php echo e(url(app()->getLocale().'/track-delivery')); ?>" class="badge btn btn-outline-light text-white mr-2">Track Delivery</button>
                                <a href="<?php echo e(url(app()->getLocale().'/cart')); ?>" class="btn btn-success mr-2"> <span class="text-white">My Cart </span><i
                                        class="fa fa-lg fa-shopping-cart text-light"><?php echo e(count($cart)); ?></i></a>
                                <?php if($isBuyer || $isSeller || $isMan || $isNtw || $isAdmin): ?>
                                    <a href="#" class="text-white mr-2"><i
                                            class="fa fa-lg fa-sign-out text-light"></i></a>

                                        <div class="currency-bar lang-bar">
                                            <ul>
                                                <li> <a href="/home" class="text-white mr-2"><i class="fa fa-lg fa-dashboard text-light"></i>
                                                    <?php echo e(__("My Account")); ?> </a>

                                                    <ul style="width:100%">
                                                        <?php if($isBuyer): ?><li>
                                                            <a href="/buyer/dashboard"> <?php echo e(__("As Buyer")); ?></a>
                                                        </li>
                                                        <li>
                                                            <a href="/manufacturer/logout"> <?php echo e(__("Logout")); ?></a>
                                                        </li>
                                                        <?php endif; ?>

                                                        <?php if($isSeller): ?><li><a href="/seller/dashboard"><?php echo e(__("As Seller")); ?></a></li>
                                                        <li>
                                                            <a href="/seller/dashboard"> <?php echo e(__("Logout")); ?></a>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if($isMan): ?><li><a href="/manufacturer/dashboard"><?php echo e(__("As Manufacturer")); ?></a></li>
                                                        <li>
                                                            <a href="/manufacturer/dashboard"> <?php echo e(__("Logout")); ?></a>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if($isNtw): ?><li><a href="/networking_agent/dashboard"><?php echo e(__("As Network Manager")); ?></a></li>
                                                        <li>
                                                            <a href="/networking_agent/dashboard"> <?php echo e(__("Logout")); ?></a>
                                                        </li>
                                                        <?php endif; ?>
                                                        <?php if($isAdmin): ?><li><a href="/admin/dashboard"><?php echo e(__("Admin")); ?></a></li>
                                                        <li>
                                                            <a href="/admin/logout"> <?php echo e(__("Logout")); ?></a>
                                                        </li>
                                                        <?php endif; ?>


                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                <?php else: ?>
                                <div class="row">
                                    <div class="currency-bar lang-bar">
                                        <ul>
                                            <li><a href="#" class="btn pt-0 pb-0 text-light"
                                                    style="background-color: #aa1607 !important; "><i
                                                    class="fa fa-lg fa-registered text-light"></i> <?php echo e(__("Register")); ?> <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul style="width:100%">
                                                    <li><a href="<?php echo e(route("buyer.register",app()->getLocale())); ?>"> <?php echo e(__("As Buyer")); ?></a></li>
                                                    <li><a href="<?php echo e(route("seller.register",app()->getLocale())); ?>"><?php echo e(__("As Seller")); ?></a></li>
                                                    <li><a href="<?php echo e(route("networking_agent.register",app()->getLocale())); ?>"><?php echo e(__("As Network Agent")); ?></a></li>
                                                    <li><a href="<?php echo e(route("fast_food_grocery.register",app()->getLocale())); ?>"><?php echo e(__("As FastFood & Grocery")); ?></a></li>
                                                    <li><a href="<?php echo e(route("professional.register",app()->getLocale())); ?>"><?php echo e(__("Professional Service")); ?></a></li>
                                                    <li><a href="<?php echo e(route("fast_food_grocery.register",app()->getLocale())); ?>"><?php echo e(__("As Fast Food Grocery")); ?></a></li>
                                                    <li><a href="<?php echo e(route("manufacturer.register",app()->getLocale())); ?>"><?php echo e(__("As Manufacturer")); ?></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                        <div class="currency-bar lang-bar">
                                            <ul>
                                                <li><a href="#" class="btn pt-0 pb-0 text-light"
                                                        style="background-color: #aa1607 !important; "><i
                                                            class="fa fa-lg fa-sign-in text-light"></i><?php echo e(__("Login")); ?> <i
                                                            class="fa fa-angle-down"></i></a>
                                                    <ul style="width:100%">
                                                        <li><a href="<?php echo e(route("buyer.login",app()->getLocale())); ?>"> <?php echo e(__("As Buyer")); ?></a></li>
                                                        <li><a href="<?php echo e(route("seller.login",app()->getLocale())); ?>"><?php echo e(__("As Seller")); ?></a></li>
                                                        <li><a href="<?php echo e(route("networking_agent.login",app()->getLocale())); ?>"><?php echo e(__("As Network Manager")); ?></a></li>
                                                        <li><a href="<?php echo e(route("professional.login",app()->getLocale())); ?>"><?php echo e(__("Professional Service")); ?></a></li>
                                                        <li><a href="<?php echo e(route("fast_food_grocery.login",app()->getLocale())); ?>"><?php echo e(__("As Fast Food Grocery")); ?></a></li>
                                                        <li><a href="<?php echo e(route("manufacturer.login",app()->getLocale())); ?>"><?php echo e(__("As Manufacturer")); ?></a></li>
                                                        
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
					</div>
				</div>
			</div>
            <!--products-search-->

			<div class="products-search" style="background-color: #013677 !important; color: #fff; height: 61px;">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-xl-2 col-lg-2 text-center ml-0 mr-0 pl-0 pr-0">
                            <div class="collapse-menu mt-2">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" class="vm-menu">
                                            <i class="fa fa-navicon"></i>
                                            <span><?php echo e(__("All Categories")); ?></span>
                                        </a>

                                        <ul class="vm-dropdown" style="display: none; background-color: rgba(0,0,0,0); border: none;">
                                            <div style="width: 100vw !important; min-height: 100%; background-color: rgb(1, 54, 119, .9);" class="row menu-hider">
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li style="border-right: 1px solid #ccc;" class="col-md-2 p-2 menu-hider">
                                                    <a href="<?php echo e(url(app()->getLocale()."/category/".$category->name)); ?>" style="font-size: 19px; color: white;"></i><?php echo e($category->name); ?></a>
                                                        <?php if(!empty($category->sub_categories)): ?>
                                                            <ul>
                                                                <li>
                                                                    <ul>
                                                                        <?php $__currentLoopData = $category->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($child): ?>
                                                                                <li style="font-size: 15px; color: white !important;" style="list-style: circle;"><a href="<?php echo e(url(app()->getLocale()."/category/".$category->name."/". $child->name)); ?>" style="color: white;"><?php echo e($child->name); ?></a>
                                                                                </li>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 pl-0 pr-0">
                            <div class="mainmenu text-white">
                                <nav>
                                    <ul>

                                        <li><a href="<?php echo e(url(app()->getLocale().'/realestate')); ?>"><?php echo e(__("Real Estate")); ?></a></li>
                                        <li><a href="<?php echo e(route('fashion',app()->getLocale())); ?>"><?php echo e(__("Fashion Designer")); ?> &amp; <?php echo e(__("Tailoring")); ?></a></li>
                                        <li><a href="<?php echo e(url(app()->getLocale().'/bloomzontravels')); ?>"><?php echo e(__("Bloomzon Travel & Hotels")); ?></a></li>
                                        <li><a href="#">Bloomzon <?php echo e(__("Products")); ?></a></li>
                                        <li><a href="<?php echo e(route('fast-foods',app()->getLocale())); ?>"><?php echo e(__("Food")); ?> &amp; <?php echo e(__("Groceries")); ?></a></li>
                                    <li><a href="<?php echo e(url(app()->getLocale().'/proservice')); ?>"><?php echo e(__("Professional Services")); ?></a></li>
                                        <li><a href="<?php echo e(url(app()->getLocale().'/sellers')); ?>"><?php echo e(__("Seller")); ?></a></li>
                                        <li class="m-auto"><a href="<?php echo e(url(app()->getLocale().'/manufacturers')); ?>"><?php echo e(__("Manufacturers")); ?></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


		<!--mobile-header-->
		<div class="sticker mobile-header">
			<div class="container-fluid">
				<!--logo and cart-->
				<div class="row align-items-center">

					<div class="col-2">
						<div class="logo">
							<a href="<?php echo e(url(app()->getLocale().'/')); ?>"><img src="<?php echo e(asset('front_assets/assets/images/bloomzon.png')); ?>" alt="logo" style="width: 60px; height: auto;" /></a>
						</div>
                    </div>

                    <div class="col-6">
                        <?php if(count($adverts)): ?>
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="carousel-item <?php if($loop->iteration === 1): ?> active <?php endif; ?>">
                                            <a href="<?php echo e($advert->advert_link); ?>?referrer=bloomzon" target="_blank">
                                                <img class="d-block w-100" src="<?php echo e(asset('storage/assets/advert/avatar/' . $advert->avatar)); ?>" alt="First slide" height="60" width="100%">
                                            </a>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <img src="<?php echo e(asset('front_assets/assets/images/top_banner.jpg')); ?>" height="60" width="100%" class="img img-responsive">
                        <?php endif; ?>
                    </div>

					<div class="col-4">
						<div class="mini-cart text-right">
                            <div class="currency-bar lang-bar" style="width: 20px; display: inline-block !important;">
                                <ul>
                                    <li>
                                        <a href="#" class="btn btn-sm btn-primary" style="background-color: #23374D !important; padding: -1px !important; margin: 0px; ">
                                            <?php if(app()->getLocale() == 'en'): ?>
                                                <?php echo e(__("En")); ?>

                                            <?php elseif(app()->getLocale() == 'fr'): ?>
                                                <?php echo e(__("Frn")); ?>

                                            <?php elseif(app()->getLocale() == 'es'): ?>
                                                <?php echo e(__("	Spn")); ?>

                                            <?php elseif(app()->getLocale() == 'zh_CH'): ?>
                                                <?php echo e(__("	Cns")); ?>

                                            <?php elseif(app()->getLocale() == 'ar'): ?>
                                                <?php echo e(__("	Ara")); ?>

                                            <?php else: ?>
                                                <?php echo e(__("	En ")); ?>

                                            <?php endif; ?>
                                        </a>
                                        <ul>
                                            <li><a href="javascript:changeLocation('en')"> <img src="<?php echo e(asset('front_assets/assets/img/us.jpg')); ?>" width="30" height="20"> <?php echo e(__("English")); ?></a></li><br>
                                            <li><a href="javascript:changeLocation('fr')"> <img src="<?php echo e(asset('front_assets/assets/img/fr.jpg')); ?>" width="30" height="20"> <?php echo e(__("French")); ?></a></li><br>
                                            <li><a href="javascript:changeLocation('es')"> <img src="<?php echo e(asset('front_assets/assets/img/sp.jpg')); ?>" width="30" height="20"> <?php echo e(__("Spanish")); ?></a></li><br>
                                            <li><a href="javascript:changeLocation('zh_CH')"> <img src="<?php echo e(asset('front_assets/assets/img/chinese.jpg')); ?>" width="30" height="20"> <?php echo e(__("Chinese")); ?></a></li><br>
                                            <li><a href="javascript:changeLocation('ar')"> <img src="<?php echo e(asset('front_assets/assets/img/arabic.jpg')); ?>" width="30" height="20"> <?php echo e(__("Arabic")); ?></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
							<ul style="width: 20px; display: inline-block !important;">
								<li class="d-none"><a href="#"><i class="icon_heart_alt"></i><span>3</span></a></li>
								<li class="minicart-icon"><a href="<?php echo e(url(app()->getLocale().'/cart')); ?>"><i class="icon_bag_alt"></i><span><?php echo e(count($cart)); ?></span></a>
								</li>
                            </ul>
                            
                        </div>
                        
					</div>
				</div>
				<!--search-box-->
				<div class="row align-items-center">
                    <div class="col-2">

                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?php echo e(url(app()->getLocale().'/all_login')); ?>">Login</a>
                                <a class="dropdown-item" href="<?php echo e(url(app()->getLocale().'/all_register')); ?>">Register</a>
                            </div>
                        </div>
					</div>
					<div class="col-10 m-0">
						<div class="search-box">
							<select>
								<option value=""><?php echo e(__("All Categories")); ?></option>
								<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<input type="text" placeholder="<?php echo e(__("What do you need?")); ?>" />
                            <button><i class="fa fa-search"></i></button>
                            
                        </div>
                    </div>
                    
				</div>
				<!--site-menu-->
				<div class="row mt-sm-10">
					<div class="col-lg-12">
                        <a href="#my-menu" class="mmenu-icon pull-left"><i class="fa fa-bars"></i></a>

                        <div class="mainmenu d-none">
							<nav id="">
								<ul>
									<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li style="padding: 8px !important;">
                                        <a href="/category/<?php echo e($category->name); ?>"><i class="fa <?php echo e($category->icon); ?>"></i><?php echo e($category->name); ?></a>
                                            <?php if(!empty($category->sub_categories)): ?>
                                                <ul class="">
                                                    <li class="megamenu-single">

                                                        <span class="mega-menu-title"><?php echo e(__("Sub-Category")); ?></span>
                                                        <ul>
                                                            <?php $__currentLoopData = $category->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($child): ?>
                                                                    <li><a href="/category/<?php echo e($category->name); ?>/<?php echo e($child->name); ?>"><?php echo e($child->name); ?></a>
                                                                    </li>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</nav>
						</div>

						<div class="mainmenu d-none">
							<nav id="my-menu">
								<ul>
									<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li style="padding: 8px !important;">
                                        <a href="/category/<?php echo e($category->name); ?>"><i class="fa <?php echo e($category->icon); ?>"></i><?php echo e($category->name); ?></a>
                                            <?php if(!empty($category->sub_categories)): ?>
                                                <ul class="mega-menu">
                                                    <li class="megamenu-single">
                                                        <span class="mega-menu-title"><?php echo e(__("Sub-Category")); ?></span>
                                                <ul>
                                                    <?php $__currentLoopData = $category->sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($child): ?>
                                                            <li><a href="/category/<?php echo e($category->name); ?>/<?php echo e($child->name); ?>"><?php echo e($child->name); ?></a>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                                </li>
                                            </ul>
                                        <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</nav>
						</div>

						<!--category-->
						<div class="collapse-menu mt-0 pull-right">
							<ul>
								<li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span><?php echo e(__("All Categories")); ?></span></a>
									<ul class="vm-dropdown">
										<li><a href="phones.html"><i class="fa fa-laptop"></i><?php echo e(__("Phones")); ?> &amp; <?php echo e(__("Tablets")); ?> <b class="caret"></b></a>
											<ul class="mega-menu">
												<li class="megamenu-single">
													<ul>
														<li><a href="phones.html">Iphone</a></li>
														<li><a href="phones.html">Samsung</a></li>
														<li><a href="phones.html">Techno</a></li>
														<li><a href="phones.html">Infinix</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="electronics.html"><i class="fa fa-desktop"></i><?php echo e(__("Electronics")); ?> <b class="caret"></b></a>
											<ul class="mega-menu">
												<li class="megamenu-single">
													<ul>
														<li><a href="electronics.html">Fridge</a></li>
														<li><a href="electronics.html">Gas Cooker</a></li>
														<li><a href="electronics.html">Television</a></li>
														<li><a href="electronics.html">Speakers</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="bloomzon.html"><i class="fa fa-camera"></i>Bloomzon <?php echo e(__("Products")); ?></a></li>
										<li><a href="wholsalers.html"><i class="fa fa-headphones"></i><?php echo e(__("Wholesalers")); ?></a></li>
										<li><a href="homekitchen.html"><i class="fa fa-music"></i><?php echo e(__("Home &amp; Kitchen")); ?></a></li>
										<li><a href="baby.html"><i class="fa fa-mobile"></i><?php echo e(__("Baby, Kids &amp; Toys")); ?></a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	</header>
	<!--header-area end--><?php /**PATH /Users/DMatrix/work/new/Bloomzon_v1/resources/views/components/front/header-nav.blade.php ENDPATH**/ ?>