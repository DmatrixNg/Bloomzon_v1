<div>
    <header class="header-area">
        <div class="desktop-header">
            <!--header-top-->
            <div class="header-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2 text-right">
                            <img src="<?php echo e(asset('assets/frontend/images/download.png')); ?>" height="30" width="auto"
                                class="img img-responsive">
                        </div>

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
                        <div class="col-lg-2">
                            <div class="topbar-right">
                                <div id="google_translate_element"></div>
                                <!--<div class="currency-bar lang-bar pull-right">-->
                                <!--    <ul>-->
                                <!--        <li><a href="#" class="btn btn-primary pt-0 pb-0"-->
                                <!--                style="background-color: #23374D !important"><img-->
                                <!--                    src="assets/images/icons/gb.png" alt="" />English <i-->
                                <!--                    class="fa fa-angle-down"></i></a>-->
                                <!--            <ul>-->
                                <!--                <li><a href="#"> <img src="assets/img/us.jpg" width="30" height="20">-->
                                <!--                        English</a></li><br>-->
                                <!--                <li><a href="#"> <img src="assets/img/fr.jpg" width="30" height="20">-->
                                <!--                        French</a></li><br>-->
                                <!--                <li><a href="#"> <img src="assets/img/sp.jpg" width="30" height="20">-->
                                <!--                        Spanish</a></li><br>-->
                                <!--                <li><a href="#"> <img src="assets/img/chinese.jpg" width="30"-->
                                <!--                            height="20"> Chinese</a></li><br>-->
                                <!--                <li><a href="#"> <img src="assets/img/arabic.jpg" width="30"-->
                                <!--                            height="20"> Arabic</a></li>-->
                                <!--            </ul>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</div>-->
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
                                    <a href="/"><img src="<?php echo e(asset('assets/frontend/images/bloomzon_white.png')); ?>"
                                            width="90" height="auto" alt="logo" /></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mainmenu row">
                                    <div class="currency-bar lang-bar pull-right">
                                        <ul>
                                            <li><a href="#" class="btn pt-0 pb-0 text-light"
                                                    style="background-color: #aa1607 !important: ">Help <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="#"> FAQ</a></li>
                                                    <li><a href="#">Account Policy</a></li>
                                                    <li><a href="#">Services</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                   <div class="search-box col-md-10">
                                        <form action="/search" method="GET">
                                    
                                        <select class="form-control"
                                            name="category"
                                            style="width: 80px; height: 45px !important; border-top-right-radius: 0px; border-bottom-right-radius:  0px;">
                                            <option value="all">All</option>
                                            
                                                <option value="product">Products</option>
                                                <option value="seller">Seller</option>
                                                <option value="proservice">Professional Service</option>
                                                <option value="fast_food_grocery">Fast Food Grocery</option>
                                                <option value="networking_agent">Networking Associate</option>
                                                <option value="manufacturer">Manufacturer</option>
                                            
                                        </select>
                                        <input type="text" name="search_term" placeholder="What do you need?" style="height: 45px;" />
                                        <button
                                            style="height: 45px; background-color: #ccc; border-top-right-radius: 5px; border-bottom-right-radius:  5px; color: #333; width: 60px;"><i
                                                class="fa fa-search"></i></button>
                                            </form>
                                            </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="register-login">
                                <a type="button" href="<?php echo e(url('/track-delivery')); ?>" class="badge btn btn-outline-light text-white mr-2">Track Delivery</button>
                                    <a href="<?php echo e(url('/cart')); ?>" class="btn btn-success mr-2"> <span class="text-white">My Cart </span><i
                                            class="fa fa-lg fa-shopping-cart text-light"><?php echo e(count($cart)); ?></i></a>
                                    <?php if($isBuyer || $isSeller || $isMan || $isNtw || $isAdmin): ?>
                                        <a href="#" class="text-white mr-2"><i
                                                class="fa fa-lg fa-sign-out text-light"></i> Logout</a>
                                       
                                            <div class="currency-bar lang-bar">
                                                <ul>
                                                    <li> <a href="/home" class="text-white mr-2"><i class="fa fa-lg fa-dashboard text-light"></i>
                                                        My Account </a>
                                                        
                                                        <ul style="width:100%">
                                                            <?php if($isBuyer): ?><li>
                                                                <a href="/buyer/dashboard"> As Buyer</a>
                                                            </li>
                                                            <li>
                                                                <a href="/manufacturer/logout"> Logout</a>
                                                            </li>
                                                            <?php endif; ?>

                                                            <?php if($isSeller): ?><li><a href="/seller/dashboard">As Seller</a></li>
                                                            <li>
                                                                <a href="/seller/dashboard"> Logout</a>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if($isMan): ?><li><a href="/manufacturer/dashboard">As Manufacturer</a></li>
                                                            <li>
                                                                <a href="/manufacturer/dashboard"> Logout</a>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if($isNtw): ?><li><a href="/networking_agent/dashboard">As Network Manager</a></li>
                                                            <li>
                                                                <a href="/networking_agent/dashboard"> Logout</a>
                                                            </li>
                                                            <?php endif; ?>
                                                            <?php if($isAdmin): ?><li><a href="/admin/dashboard">Admin</a></li>
                                                            <li>
                                                                <a href="/admin/logout"> Logout</a>
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
                                                        style="background-color: #aa1607 !important: "><i
                                                        class="fa fa-lg fa-registered text-light"></i> Register <i
                                                            class="fa fa-angle-down"></i></a>
                                                    <ul style="width:100%">
                                                        <li><a href="/buyer/register"> As Buyer</a></li>
                                                        <li><a href="/seller/register">As Seller</a></li>
                                                        <li><a href="/networking_agent/register">As Network Agent</a></li>
                                                        <li><a href="/fast_food_grocery/register">As FastFood & Grocery</a></li>
                                                        <li><a href="/professional/register">Professional Service</a></li>
                                                        <li><a href="/fast_food_grocery/register">As Fast Food Grocery</a></li>
                                                        <li><a href="/manufacturer/register">As Manufacturer</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                            <div class="currency-bar lang-bar">
                                                <ul>
                                                    <li><a href="#" class="btn pt-0 pb-0 text-light"
                                                            style="background-color: #aa1607 !important: "><i
                                                                class="fa fa-lg fa-sign-in text-light"></i>Login <i
                                                                class="fa fa-angle-down"></i></a>
                                                        <ul style="width:100%">
                                                            <li><a href="/buyer/login"> As Buyer</a></li>
                                                            <li><a href="/seller/login">As Seller</a></li>
                                                            <li><a href="/networking_agent/login">As Network Manager</a></li>
                                                            <li><a href="/professional/login">Professional Service</a></li>
                                                            <li><a href="/fast_food_grocery/login">As Fast Food Grocery</a></li>
                                                            <li><a href="/manufacturer/login">As Manufacturer</a></li>
                                                            
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
                                                    <span>All Categories</span>
                                                </a>

                                                <ul class="vm-dropdown"
                                                    style="display: none; width: 50% !important; left: 25% !important; text-align: left;">
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li style="padding: 8px !important;">
                                                        <a href="/category/<?php echo e($category->name); ?>"><i class="fa <?php echo e($category->icon); ?>"></i><?php echo e($category->name); ?></a>
                                                            <?php if(!empty($category->sub_categories)): ?>
                                                                <ul class="mega-menu">
                                                                    <li class="megamenu-single">
                                                                        <span class="mega-menu-title">Sub-Category</span>
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
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 pl-0 pr-0">
                                        <div class="mainmenu text-white">  
                                            <nav>
                                                <ul>
                                                    <li><a href="<?php echo e(url('/realestate')); ?>">Real Estate</a></li>
                                                    <li><a href="<?php echo e(route('fashion')); ?>">Fashion Designer &amp; Tailoring</a></li>
                                                    <li><a href="<?php echo e(url('bloomzontravels')); ?>">Bloomzon Travel & Hotels</a></li>
                                                    <li><a href="#">Bloomzon Products</a></li>
                                                    <li><a href="<?php echo e(route('fast-foods')); ?>">Food &amp; Groceries</a></li>
                                                <li><a href="<?php echo e(url('/proservice')); ?>">Professional Services</a></li>
                                                    <li><a href="<?php echo e(url('/sellers')); ?>">Seller</a></li>
                                                    <li class="m-auto"><a href="#">Manufacturers</a></li>
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
                            <div class="col-sm-4 col-6">
                                <div class="logo">
                                    <a href="index"><img src="assets/images/logo.png" alt="logo" /></a>
                                </div>
                            </div>
                            <div class="col-sm-8 col-6">
                                <div class="mini-cart text-right">
                                    <ul>
                                        <li><a href="#"><i class="icon_heart_alt"></i><span>1</span></a></li>
                                        <li class="minicart-icon"><a href="#"><i class="icon_bag_alt"></i><span>2</span></a>
                                            <div class="cart-dropdown">
                                                <ul>
                                                    <li>
                                                        <div class="mini-cart-thumb">
                                                            <a href="#"><img src="assets/images/products/cart/thumb-1.jpg"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="mini-cart-heading">
                                                            <span>$460.00 x 1</span>
                                                            <h5><a href="#">Kabino Bedside Table</a></h5>
                                                        </div>
                                                        <div class="mini-cart-remove">
                                                            <button><i class="ti-close"></i></button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="mini-cart-thumb">
                                                            <a href="#"><img src="assets/images/products/cart/thumb-2.jpg"
                                                                    alt="" /></a>
                                                        </div>
                                                        <div class="mini-cart-heading">
                                                            <span>$460.00 x 1</span>
                                                            <h5><a href="#">Kabino Bedside Table</a></h5>
                                                        </div>
                                                        <div class="mini-cart-remove">
                                                            <button><i class="ti-close"></i></button>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="minicart-total fix">
                                                    <span class="pull-left">total:</span>
                                                    <span class="pull-right">$460.00</span>
                                                </div>
                                                <div class="mini-cart-checkout">
                                                    <a href="shopping-cart" class="btn-common view-cart">VIEW CARD</a>
                                                    <a href="checkout" class="btn-common checkout mt-10">CHECK OUT</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--search-box-->
                        <div class="row align-items-center">
                            <div class="col-sm-12">
                                <div class="search-box mt-sm-15">
                                    <select>
                                        <option>All Categories</option>
                                        <option>Phones &amp; Tablets</option>
                                        <option>Electronics</option>
                                        <option>Bloomzon Products</option>
                                        <option>Wholesalers</option>
                                        <option>Home &amp; Kitchen</option>
                                        <option>Baby, Kids &amp; Toys</option>
                                    </select>
                                    <input type="text" placeholder="What do you need?" />
                                    <button>Search</button>
                                </div>
                            </div>
                        </div>
                        <!--site-menu-->
                        <div class="row mt-sm-10">
                            <div class="col-lg-12">
                                <a href="#my-menu" class="mmenu-icon pull-left"><i class="fa fa-bars"></i></a>

                                <div class="mainmenu">
                                    <nav id="my-menu">
                                        <ul>
                                            <li><a href="realestate">Real Estate</a></li>
                                            <li><a href="fashion_designer_tailoring">Fashion Designing &amp; Tailoring</a>
                                            </li>
                                            <li><a href="bloomzontrip">Bloomzon Trip</a></li>
                                            <li><a href="bloomzon">Bloomzon Products</a></li>
                                            <li><a href="groceries">Food &amp; Groceries</a></li>
                                            <li><a href="proservice">Professional Services</a></li>
                                            <li><a href="delivery">Delivery Agent</a></li>
                                            <li><a href="manufacturers">Manufacturer</a></li>
                                        </ul>
                                    </nav>
                                </div>

                                <!--category-->
                                <div class="collapse-menu mt-0 pull-right">
                                    <ul>
                                        <li><a href="javascript:void(0);" class="vm-menu"><i
                                                    class="fa fa-navicon"></i><span>All Departments</span></a>
                                            <ul class="vm-dropdown">
                                                <li><a href="#"><i class="fa fa-laptop"></i>Phones &amp; Tablets <b
                                                            class="caret"></b></a>
                                                    <ul class="mega-menu">
                                                        <li class="megamenu-single">
                                                            <ul>
                                                                <li><a href="phones">Iphone</a></li>
                                                                <li><a href="phones">Samsung</a></li>
                                                                <li><a href="phones">Techno</a></li>
                                                                <li><a href="phones">Infinix</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><i class="fa fa-desktop"></i>Electronics <b
                                                            class="caret"></b></a>
                                                    <ul class="mega-menu">
                                                        <li class="megamenu-single">
                                                            <ul>
                                                                <li><a href="#">Fridge</a></li>
                                                                <li><a href="#">Gas Cooker</a></li>
                                                                <li><a href="#">Television</a></li>
                                                                <li><a href="#">Speakers</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><i class="fa fa-camera"></i>Bloomzon Products</a></li>
                                                <li><a href="#"><i class="fa fa-headphones"></i>Wholesalers</a></li>
                                                <li><a href="#"><i class="fa fa-music"></i>Home &amp; Kitchew</a></li>
                                                <li><a href="#"><i class="fa fa-mobile"></i>Baby, Kids &amp; Toys</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </header>
    </div>
<?php /**PATH /Users/DMatrix/work/sqt/bloom/resources/views/components/front/header-nav.blade.php ENDPATH**/ ?>