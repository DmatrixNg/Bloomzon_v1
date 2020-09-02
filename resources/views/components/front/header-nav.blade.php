<div>
    <!--header-area start-->
	<header class="header-area">
		<div class="desktop-header">
			<!--header-top-->
			<div class="header-top">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-2 text-right">
							<img src="{{ asset('assets/frontend/images/download.png') }}" height="30" width="auto" class="img img-responsive">
                        </div>
                        
                        @if(count($adverts))
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($adverts as $advert)
                                        <div class="carousel-item @if ($loop->iteration === 1) active @endif">
                                            <a href="{{ $advert->advert_link }}?referrer=bloomzon" target="_blank">
                                                <img class="d-block w-100" src="{{ asset('storage/assets/advert/avatar/' . $advert->avatar) }}" alt="First slide" height="60" width="100%">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="col-lg-4">
                                <img src="{{ asset('front_assets/assets/images/top_banner.jpg') }}" height="60" width="100%" class="img img-responsive">
                            </div>
                        @endif

						<div class="col-lg-4 text-center">
							<span><strong>NEWS</strong> &lt; <span style="color:yellow">COVID-19:</span> CLEAN UP, TRADE NOW &gt;</span>
                        </div>
                        
                        
						<div class="col-lg-2">
							<div class="topbar-right">
								<div class="currency-bar lang-bar pull-right">
									<ul>
										<li><a href="#" class="btn btn-primary pt-0 pb-0" style="background-color: #23374D !important: "><img src="assets/images/icons/gb.png" alt="" />English <i class="fa fa-angle-down"></i></a>
											<ul>
							                  <li><a href="#"> <img src="{{ asset('front_assets/assets/img/us.jpg') }}" width="30" height="20"> English</a></li><br>
							                  <li><a href="#"> <img src="{{ asset('front_assets/assets/img/fr.jpg') }}" width="30" height="20"> French</a></li><br>
							                  <li><a href="#"> <img src="{{ asset('front_assets/assets/img/sp.jpg') }}" width="30" height="20"> Spanish</a></li><br>
							                  <li><a href="#"> <img src="{{ asset('front_assets/assets/img/chinese.jpg') }}" width="30" height="20"> Chinese</a></li><br>
							                  <li><a href="#"> <img src="{{ asset('front_assets/assets/img/arabic.jpg') }}" width="30" height="20"> Arabic</a></li>
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
								<a href="index.html"><img src="{{ asset('front_assets/assets/images/bloomzon_white.png') }}" width="90" height="auto" alt="logo" /></a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mainmenu row"> 
    							<div class="topbar-right col-md-2">
    								<div class="currency-bar lang-bar pull-right">
    									<ul>
    										<li><a href="#" class="btn pt-0 pb-0 text-light" style="background-color: #aa1607 !important; ">Help <i class="fa fa-angle-down"></i></a>
    											<ul>
    							                  <li><a href="faq.html"> FAQ</a></li>
    							                  <li><a href="accountpolicy.html">Account Policy</a></li>
    							                  <li><a href="services.html">Services</a></li>
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
                                                class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
							</div>
                        </div>

						<div class="col-lg-4">
                            <div class="register-login">
                            <a type="button" href="{{url('/track-delivery')}}" class="badge btn btn-outline-light text-white mr-2">Track Delivery</button>
                                <a href="{{url('/cart')}}" class="btn btn-success mr-2"> <span class="text-white">My Cart </span><i
                                        class="fa fa-lg fa-shopping-cart text-light">{{count($cart)}}</i></a>
                                @if($isBuyer || $isSeller || $isMan || $isNtw || $isAdmin)
                                    <a href="#" class="text-white mr-2"><i
                                            class="fa fa-lg fa-sign-out text-light"></i></a>
                                    
                                        <div class="currency-bar lang-bar">
                                            <ul>
                                                <li> <a href="/home" class="text-white mr-2"><i class="fa fa-lg fa-dashboard text-light"></i>
                                                    My Account </a>
                                                    
                                                    <ul style="width:100%">
                                                        @if($isBuyer)<li>
                                                            <a href="/buyer/dashboard"> As Buyer</a>
                                                        </li>
                                                        <li>
                                                            <a href="/manufacturer/logout"> Logout</a>
                                                        </li>
                                                        @endif

                                                        @if($isSeller)<li><a href="/seller/dashboard">As Seller</a></li>
                                                        <li>
                                                            <a href="/seller/dashboard"> Logout</a>
                                                        </li>
                                                        @endif
                                                        @if($isMan)<li><a href="/manufacturer/dashboard">As Manufacturer</a></li>
                                                        <li>
                                                            <a href="/manufacturer/dashboard"> Logout</a>
                                                        </li>
                                                        @endif
                                                        @if($isNtw)<li><a href="/networking_agent/dashboard">As Network Manager</a></li>
                                                        <li>
                                                            <a href="/networking_agent/dashboard"> Logout</a>
                                                        </li>
                                                        @endif
                                                        @if($isAdmin)<li><a href="/admin/dashboard">Admin</a></li>
                                                        <li>
                                                            <a href="/admin/logout"> Logout</a>
                                                        </li>
                                                        @endif

                                                        
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                @else
                                <div class="row">
                                    <div class="currency-bar lang-bar">
                                        <ul>
                                            <li><a href="#" class="btn pt-0 pb-0 text-light"
                                                    style="background-color: #aa1607 !important; "><i
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
                                                        style="background-color: #aa1607 !important; "><i
                                                            class="fa fa-lg fa-sign-in text-light"></i>Login <i
                                                            class="fa fa-angle-down"></i></a>
                                                    <ul style="width:100%">
                                                        <li><a href="/buyer/login"> As Buyer</a></li>
                                                        <li><a href="/seller/login">As Seller</a></li>
                                                        <li><a href="/networking_agent/login">As Network Manager</a></li>
                                                        <li><a href="/professional/login">Professional Service</a></li>
                                                        <li><a href="/fast_food_grocery/login">As Fast Food Grocery</a></li>
                                                        <li><a href="/manufacturer/login">As Manufacturer</a></li>
                                                        {{-- <li><a href="/admin/login">As Admin</a></li> --}}
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                </div>
                                @endif
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
                                            <span>All Categories</span>
                                        </a>

                                        <ul class="vm-dropdown" style="display: none; background-color: rgba(0,0,0,0); border: none;">
                                            <div class="row" style="width: 100vw !important; min-height: 100%; background-color: rgb(1, 54, 119, .9);">
                                                @foreach($categories as $category)
                                                    <li style="border-right: 1px solid #ccc;" class="col-md-2 p-2">
                                                    <a href="/category/{{ $category->name }}" style="font-size: 19px; color: white;"></i>{{ $category->name }} zzz</a>
                                                        @if(!empty($category->sub_categories))
                                                            <ul>
                                                                <li>
                                                                    <ul>
                                                                        @foreach($category->sub_categories as $child)
                                                                            @if($child)
                                                                                <li style="font-size: 15px; color: white !important;" style="list-style: circle;"><a href="/category/{{$category->name}}/{{ $child->name }}" style="color: white;">{{ $child->name }}</a>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
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
                                        <li><a href="{{url('/realestate')}}">Real Estate</a></li>
                                        <li><a href="{{route('fashion')}}">Fashion Designer &amp; Tailoring</a></li>
                                        <li><a href="{{url('bloomzontravels')}}">Bloomzon Travel & Hotels</a></li>
                                        <li><a href="#">Bloomzon Products</a></li>
                                        <li><a href="{{route('fast-foods')}}">Food &amp; Groceries</a></li>
                                    <li><a href="{{url('/proservice')}}">Professional Services</a></li>
                                        <li><a href="{{url('/sellers')}}">Seller</a></li>
                                        <li class="m-auto"><a href="{{url('/manufacturers')}}">Manufacturers</a></li>
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
							<a href="{{ url('/') }}"><img src="{{ asset('front_assets/assets/images/bloomzon.png') }}" width="60" height="auto" alt="logo" /></a>
						</div>
					</div>
					<div class="col-sm-8 col-6">
						<div class="mini-cart text-right">
							<ul>
								<li class="d-none"><a href="#"><i class="icon_heart_alt"></i><span>3</span></a></li>
								<li class="minicart-icon"><a href="{{url('/cart')}}"><i class="icon_bag_alt"></i><span>{{count($cart)}}</span></a>
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
								<option value="">All Categories</option>
								@foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
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
							<nav id="">
								<ul>
									@foreach($categories as $category)
                                        <li style="padding: 8px !important;">
                                        <a href="/category/{{ $category->name }}"><i class="fa {{$category->icon}}"></i>{{ $category->name }}</a>
                                            @if(!empty($category->sub_categories))
                                                <ul class="">
                                                    <li class="megamenu-single">
                                                        <span class="mega-menu-title">Sub-Category</span>
                                                <ul>
                                                    @foreach($category->sub_categories as $child)
                                                        @if($child)
                                                            <li><a href="/category/{{$category->name}}/{{ $child->name }}">{{ $child->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                </li>
                                            </ul>
                                        @endif
                                        </li>
                                    @endforeach
								</ul>
							</nav>
						</div>

						<div class="mainmenu d-none">
							<nav id="my-menu">
								<ul>
									@foreach($categories as $category)
                                        <li style="padding: 8px !important;">
                                        <a href="/category/{{ $category->name }}"><i class="fa {{$category->icon}}"></i>{{ $category->name }}</a>
                                            @if(!empty($category->sub_categories))
                                                <ul class="mega-menu">
                                                    <li class="megamenu-single">
                                                        <span class="mega-menu-title">Sub-Category</span>
                                                <ul>
                                                    @foreach($category->sub_categories as $child)
                                                        @if($child)
                                                            <li><a href="/category/{{$category->name}}/{{ $child->name }}">{{ $child->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                </li>
                                            </ul>
                                        @endif
                                        </li>
                                    @endforeach
								</ul>
							</nav>
						</div>
						
						<!--category-->
						<div class="collapse-menu mt-0 pull-right">
							<ul>
								<li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>All Categories</span></a>
									<ul class="vm-dropdown">
										<li><a href="phones.html"><i class="fa fa-laptop"></i>Phones &amp; Tablets <b class="caret"></b></a>
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
										<li><a href="electronics.html"><i class="fa fa-desktop"></i>Electronics <b class="caret"></b></a>
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
										<li><a href="bloomzon.html"><i class="fa fa-camera"></i>Bloomzon Products</a></li>
										<li><a href="wholsalers.html"><i class="fa fa-headphones"></i>Wholesalers</a></li>
										<li><a href="homekitchen.html"><i class="fa fa-music"></i>Home &amp; Kitchen</a></li>
										<li><a href="baby.html"><i class="fa fa-mobile"></i>Baby, Kids &amp; Toys</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--header-area end-->
    
</div>
