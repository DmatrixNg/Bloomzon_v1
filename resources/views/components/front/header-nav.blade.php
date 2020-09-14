
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
							<span><strong>{{ __("NEWS")}}</strong> &lt; <span style="color:yellow">COVID-19:</span> {{ __("CLEAN UP, TRADE NOW")}} &gt;</span>
                        </div>


						<div class="col-lg-2">
							<div class="topbar-right">
								<div class="currency-bar lang-bar pull-right">
									<ul>
										<li><a href="#" class="btn btn-primary pt-0 pb-0" style="background-color: #23374D !important; "><img src="assets/images/icons/gb.png" alt="" />
											@if (app()->getLocale() == 'en')
											{{ __("English")}}
										@elseif (app()->getLocale() == 'fr')
											{{ __("French")}}
										@elseif (app()->getLocale() == 'es')
										{{ __("	Spanish")}}
										@elseif (app()->getLocale() == 'zh_CH')
										{{ __("	Chinese")}}
										@elseif (app()->getLocale() == 'ar')
										{{ __("	Arabic")}}
										@else
										{{ __("	English ")}}
										@endif
										<i class="fa fa-angle-down"></i></a>
											<ul>
												{{-- <select class=""onchange="changeLocation(this.value)" name="">

													<option value="en" @if (\App::getLocale() == "en") selected @endif>{{ __("English")}}</option>
														<option value="fr" @if (\App::getLocale() == "fr") selected @endif>{{ __("French")}}</option>
															<option value="la" @if (\App::getLocale() == "la") selected @endif>{{ __("Latin")}}</option>
												</select> --}}

							                  <li><a href="javascript:changeLocation('en')"> <img src="{{ asset('front_assets/assets/img/us.jpg') }}" width="30" height="20"> {{ __("English")}}</a></li><br>
							                  <li><a href="javascript:changeLocation('fr')"> <img src="{{ asset('front_assets/assets/img/fr.jpg') }}" width="30" height="20"> {{ __("French")}}</a></li><br>
							                  <li><a href="javascript:changeLocation('es')"> <img src="{{ asset('front_assets/assets/img/sp.jpg') }}" width="30" height="20"> {{ __("Spanish")}}</a></li><br>
							                  <li><a href="javascript:changeLocation('zh_CH')"> <img src="{{ asset('front_assets/assets/img/chinese.jpg') }}" width="30" height="20"> {{ __("Chinese")}}</a></li><br>
							                  <li><a href="javascript:changeLocation('ar')"> <img src="{{ asset('front_assets/assets/img/arabic.jpg') }}" width="30" height="20"> {{ __("Arabic")}}</a></li>
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
								<a href="{{ url('/') }}"><img src="{{ asset('front_assets/assets/images/bloomzon_white.png') }}" width="90" height="auto" alt="logo" /></a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mainmenu row">
    							<div class="topbar-right col-md-2">
    								<div class="currency-bar lang-bar pull-right">
    									<ul>
    										<li><a href="#" class="btn pt-0 pb-0 text-light" style="background-color: #aa1607 !important; ">Help <i class="fa fa-angle-down"></i></a>
    											<ul>
    							                  <li><a href="{{route('home','faq')}}"> {{ __("FAQ")}}</a></li>
    							                  <li><a href="{{route('home','accountpolicy')}}">{{ __("Account Policy")}}</a></li>
    							                  <li><a href="{{ route('home','services')}}">{{ __("Services")}}</a></li>
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
                                            <option value="all">{{ __("All")}}</option>

                                                <option value="product">{{ __("Products")}}</option>
                                                <option value="seller">{{ __("Seller")}}</option>
                                                <option value="proservice">{{ __("Professional Service")}}</option>
                                                <option value="fast_food_grocery">{{ __("Fast Food Grocery")}}</option>
                                                <option value="networking_agent">{{ __("Networking Associate")}}</option>
                                                <option value="manufacturer">{{ __("Manufacturer")}}</option>

                                        </select>
                                        <input type="text" name="search_term" placeholder="{{ __("What do you need?")}}" style="height: 45px;" />
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
                            <a type="button" href="{{url(app()->getLocale().'/track-delivery')}}" class="badge btn btn-outline-light text-white mr-2">Track Delivery</button>
                                <a href="{{url(app()->getLocale().'/cart')}}" class="btn btn-success mr-2"> <span class="text-white">My Cart </span><i
                                        class="fa fa-lg fa-shopping-cart text-light">{{count($cart)}}</i></a>
                                @if($isBuyer || $isSeller || $isMan || $isNtw || $isAdmin)
                                    <a href="#" class="text-white mr-2"><i
                                            class="fa fa-lg fa-sign-out text-light"></i></a>

                                        <div class="currency-bar lang-bar">
                                            <ul>
                                                <li> <a href="/home" class="text-white mr-2"><i class="fa fa-lg fa-dashboard text-light"></i>
                                                    {{ __("My Account")}} </a>

                                                    <ul style="width:100%">
                                                        @if($isBuyer)<li>
                                                            <a href="/buyer/dashboard"> {{ __("As Buyer")}}</a>
                                                        </li>
                                                        <li>
                                                            <a href="/manufacturer/logout"> {{ __("Logout")}}</a>
                                                        </li>
                                                        @endif

                                                        @if($isSeller)<li><a href="/seller/dashboard">{{ __("As Seller")}}</a></li>
                                                        <li>
                                                            <a href="/seller/dashboard"> {{ __("Logout")}}</a>
                                                        </li>
                                                        @endif
                                                        @if($isMan)<li><a href="/manufacturer/dashboard">{{ __("As Manufacturer")}}</a></li>
                                                        <li>
                                                            <a href="/manufacturer/dashboard"> {{ __("Logout")}}</a>
                                                        </li>
                                                        @endif
                                                        @if($isNtw)<li><a href="/networking_agent/dashboard">{{ __("As Network Manager")}}</a></li>
                                                        <li>
                                                            <a href="/networking_agent/dashboard"> {{ __("Logout")}}</a>
                                                        </li>
                                                        @endif
                                                        @if($isAdmin)<li><a href="/admin/dashboard">{{ __("Admin")}}</a></li>
                                                        <li>
                                                            <a href="/admin/logout"> {{ __("Logout")}}</a>
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
                                                    class="fa fa-lg fa-registered text-light"></i> {{ __("Register")}} <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul style="width:100%">
                                                    <li><a href="{{route("buyer.register",app()->getLocale())}}"> {{ __("As Buyer")}}</a></li>
                                                    <li><a href="{{route("seller.register",app()->getLocale())}}">{{ __("As Seller")}}</a></li>
                                                    <li><a href="{{route("networking_agent.register",app()->getLocale())}}">{{ __("As Network Agent")}}</a></li>
                                                    <li><a href="{{route("fast_food_grocery.register",app()->getLocale())}}">{{ __("As FastFood & Grocery")}}</a></li>
                                                    <li><a href="{{route("professional.register",app()->getLocale())}}">{{ __("Professional Service")}}</a></li>
                                                    <li><a href="{{route("fast_food_grocery.register",app()->getLocale())}}">{{ __("As Fast Food Grocery")}}</a></li>
                                                    <li><a href="{{route("manufacturer.register",app()->getLocale())}}">{{ __("As Manufacturer")}}</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                        <div class="currency-bar lang-bar">
                                            <ul>
                                                <li><a href="#" class="btn pt-0 pb-0 text-light"
                                                        style="background-color: #aa1607 !important; "><i
                                                            class="fa fa-lg fa-sign-in text-light"></i>{{ __("Login")}} <i
                                                            class="fa fa-angle-down"></i></a>
                                                    <ul style="width:100%">
                                                        <li><a href="{{route("buyer.login",app()->getLocale())}}"> {{ __("As Buyer")}}</a></li>
                                                        <li><a href="{{route("seller.login",app()->getLocale())}}">{{ __("As Seller")}}</a></li>
                                                        <li><a href="{{route("networking_agent.login",app()->getLocale())}}">{{ __("As Network Manager")}}</a></li>
                                                        <li><a href="{{route("professional.login",app()->getLocale())}}">{{ __("Professional Service")}}</a></li>
                                                        <li><a href="{{route("fast_food_grocery.login",app()->getLocale())}}">{{ __("As Fast Food Grocery")}}</a></li>
                                                        <li><a href="{{route("manufacturer.login",app()->getLocale())}}">{{ __("As Manufacturer")}}</a></li>
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
                                            <span>{{ __("All Categories")}}</span>
                                        </a>

                                        <ul class="vm-dropdown" style="display: none; background-color: rgba(0,0,0,0); border: none;">
                                            <div style="width: 100vw !important; min-height: 100%; background-color: rgb(1, 54, 119, .9);" class="row menu-hider">
                                                @foreach($categories as $category)
                                                    <li style="border-right: 1px solid #ccc;" class="col-md-2 p-2 menu-hider">
                                                    <a href="{{ url(app()->getLocale()."/category/".$category->name)}}" style="font-size: 19px; color: white;"></i>{{ $category->name }}</a>
                                                        @if(!empty($category->sub_categories))
                                                            <ul>
                                                                <li>
                                                                    <ul>
                                                                        @foreach($category->sub_categories as $child)
                                                                            @if($child)
                                                                                <li style="font-size: 15px; color: white !important;" style="list-style: circle;"><a href="{{ url(app()->getLocale()."/category/".$category->name."/". $child->name) }}" style="color: white;">{{ $child->name }}</a>
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

                                        <li><a href="{{url(app()->getLocale().'/realestate')}}">{{ __("Real Estate")}}</a></li>
                                        <li><a href="{{route('fashion',app()->getLocale())}}">{{ __("Fashion")}} &amp; {{ __("Tailoring")}}</a></li>
                                        <li><a href="{{url(app()->getLocale().'/bloomzontravels')}}">{{ __("Travel & Hotels")}}</a></li>
                                        <li><a href="{{url(app()->getLocale().'/bloomzon-products')}}">Bloomzon {{ __("Products")}}</a></li>
                                        <li><a href="{{route('fast-foods',app()->getLocale())}}">{{ __("Food")}} &amp; {{ __("Groceries")}}</a></li>
                                    <li><a href="{{ url(app()->getLocale().'/proservice')}}">{{ __("Professional Services")}}</a></li>
                                        <li><a href="{{url(app()->getLocale().'/sellers')}}">{{ __("Seller")}}</a></li>
                                        <li class="m-auto"><a href="{{url(app()->getLocale().'/manufacturers')}}">{{ __("Manufacturers")}}</a></li>
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
							<a href="{{ url(app()->getLocale().'/') }}"><img src="{{ asset('front_assets/assets/images/bloomzon.png') }}" alt="logo" style="width: 60px; height: auto;" /></a>
						</div>
                    </div>

                    <div class="col-6">
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
                            <img src="{{ asset('front_assets/assets/images/top_banner.jpg') }}" height="60" width="100%" class="img img-responsive">
                        @endif
                    </div>

					<div class="col-4">
						<div class="mini-cart text-right">
                            <div class="currency-bar lang-bar" style="width: 20px; display: inline-block !important;">
                                <ul>
                                    <li>
                                        <a href="#" class="btn btn-sm btn-primary" style="background-color: #23374D !important; padding: -1px !important; margin: 0px; ">
                                            @if (app()->getLocale() == 'en')
                                                {{ __("En")}}
                                            @elseif (app()->getLocale() == 'fr')
                                                {{ __("Frn")}}
                                            @elseif (app()->getLocale() == 'es')
                                                {{ __("	Spn")}}
                                            @elseif (app()->getLocale() == 'zh_CH')
                                                {{ __("	Cns")}}
                                            @elseif (app()->getLocale() == 'ar')
                                                {{ __("	Ara")}}
                                            @else
                                                {{ __("	En ")}}
                                            @endif
                                        </a>
                                        <ul>
                                            <li><a href="javascript:changeLocation('en')"> <img src="{{ asset('front_assets/assets/img/us.jpg') }}" width="30" height="20"> {{ __("English")}}</a></li><br>
                                            <li><a href="javascript:changeLocation('fr')"> <img src="{{ asset('front_assets/assets/img/fr.jpg') }}" width="30" height="20"> {{ __("French")}}</a></li><br>
                                            <li><a href="javascript:changeLocation('es')"> <img src="{{ asset('front_assets/assets/img/sp.jpg') }}" width="30" height="20"> {{ __("Spanish")}}</a></li><br>
                                            <li><a href="javascript:changeLocation('zh_CH')"> <img src="{{ asset('front_assets/assets/img/chinese.jpg') }}" width="30" height="20"> {{ __("Chinese")}}</a></li><br>
                                            <li><a href="javascript:changeLocation('ar')"> <img src="{{ asset('front_assets/assets/img/arabic.jpg') }}" width="30" height="20"> {{ __("Arabic")}}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
							<ul style="width: 20px; display: inline-block !important;">
								<li class="d-none"><a href="#"><i class="icon_heart_alt"></i><span>3</span></a></li>
								<li class="minicart-icon"><a href="{{url(app()->getLocale().'/cart')}}"><i class="icon_bag_alt"></i><span>{{count($cart)}}</span></a>
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
                                <a class="dropdown-item" href="{{ url( app()->getLocale().'/all_login') }}">Login</a>
                                <a class="dropdown-item" href="{{ url( app()->getLocale().'/all_register') }}">Register</a>
                            </div>
                        </div>
					</div>
					<div class="col-10 m-0">
						<div class="search-box">
							<select>
								<option value="">{{ __("All Categories")}}</option>
								@foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
							</select>
							<input type="text" placeholder="{{ __("What do you need?")}}" />
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
									@foreach($categories as $category)
                                        <li style="padding: 8px !important;">
                                        <a href="/category/{{ $category->name }}"><i class="fa {{$category->icon}}"></i>{{ $category->name }}</a>
                                            @if(!empty($category->sub_categories))
                                                <ul class="">
                                                    <li class="megamenu-single">

                                                        <span class="mega-menu-title">{{ __("Sub-Category")}}</span>
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
                                                        <span class="mega-menu-title">{{ __("Sub-Category")}}</span>
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
								<li><a href="javascript:void(0);" class="vm-menu"><i class="fa fa-navicon"></i><span>{{ __("All Categories")}}</span></a>
									<ul class="vm-dropdown">
										<li><a href="phones.html"><i class="fa fa-laptop"></i>{{ __("Phones")}} &amp; {{ __("Tablets")}} <b class="caret"></b></a>
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
										<li><a href="electronics.html"><i class="fa fa-desktop"></i>{{ __("Electronics")}} <b class="caret"></b></a>
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
										<li><a href="bloomzon.html"><i class="fa fa-camera"></i>Bloomzon {{ __("Products")}}</a></li>
										<li><a href="wholsalers.html"><i class="fa fa-headphones"></i>{{ __("Wholesalers")}}</a></li>
										<li><a href="homekitchen.html"><i class="fa fa-music"></i>{{ __("Home &amp; Kitchen")}}</a></li>
										<li><a href="baby.html"><i class="fa fa-mobile"></i>{{ __("Baby, Kids &amp; Toys")}}</a></li>
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
	<!--header-area end-->