@extends('layouts.front')
@section('page_title')
    Home
@endsection
@section('content')
    <div class="mm-page mm-slideout" id="mm-0">
        <div class="slider-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="main-slider mt-30 mt-sm-0 slick-initialized slick-slider slick-dotted">
                            <div id="sliderCar" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    @php($count = 0)

                                    @foreach($adverts as $key => $advert)
                                        @if($advert->advert_position == 'Slider')
                                            <div class="carousel-item @if($count == 0) active @endif">
                                                <div class="banner-sm hover-effect">
                                            <img style="max-height: 350px" class="d-block w-100" src="{{asset('storage/assets/advert/avatar/'.$advert->avatar) }}" alt="{{$advert->advert_link}}">
                                            @php($count++)    
                                            </div>
                                            </div>
                                        @endif
                                    @endforeach
                                 

                                </div>
                                <a class="carousel-control-prev" href="#sliderCar" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">{{ __("Previous")}}</span>
                                </a>
                                <a class="carousel-control-next" href="#sliderCar" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">{{ __("Next")}}</span>
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row mt-30">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @php($count = 0)
                                    @foreach($adverts as $advert)
                                @if($advert->advert_position === 'Body')
                              <div class="carousel-item  @if($count == 0) active @endif">
                                <div class="banner-sm hover-effect">
                                    <a href="{{ $advert->advert_link }}?referrer=bloomzon" target="_blank">
                                            <img src="{{asset('storage/assets/advert/avatar/'.$advert->avatar) }}" class="d-block w-100" alt="{{$advert->advert_link}}" height="341">
                                        </a>
                              </div>
                              </div>
                              @php($count++)
                              @endif
                              @endforeach
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-50" style="background-color: #eeeeee !important">
            <div class="brands-area">
                <div class="row">
                    <div class="col-lg-2">
                        <h2>{{ __("Brands")}}</h2>
                    </div>
                    <div class="col-lg-10">
                        <div class="brand-items slick-initialized slick-slider">
                            <div class="slick-list draggable">
                                @foreach($brands as $brand)
                                    <span style="width: 172px;margin-left: 10px">
                                        <a href="#">
                                            <img class="brand-static" src="{{asset('storage/assets/brand/'.$brand->avatar) }}" height="50"
                                                alt="">
                                        </a>
                                    </span>

                                @endforeach

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
                                <div class="best-sellers">
                                    <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                                        <div class="col-lg-12">
                                            <div class="section-title text-left">
                                                <h3>{{ __("MOST POPULAR")}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row cv-visible">

                                        @foreach($products as $product)
                                            @if($product->product_name)
                                                <div class="col-lg-3">
                                                    <div class="product-single">
                                                        <div class="product-thumb">

                                                            <a href="#">
                                                                @if($product->avatars != null)
                                                                <img src="{{asset('storage/assets/product/avatars/'.$product->avatars[0]??'') }}" alt="" style="height: 100px;">
                                                                @endif
                                                            </a>

                                                            @if($product->product_sales_price)
                                                                <div class="downsale">
                                                                    <span>-</span>${{ number_format($product->product_price - $product->product_sales_price) }}
                                                                </div>
                                                            @endif
                                                            <div class="product-quick-view">
                                                                
                                                            <x-product-buttons aria-label="{{$product->id}}" aria-labelledby="{{$product->id}}" :product="$product"/>


                                                            </div>
                                                        </div>
                                                        <div class="product-title text-truncate">
                                                            <h4><a href="#" class="text-truncate" title="{{ $product->product_name }}">{{ $product->product_name }}</a></h4>
                                                            <small>
                                                                @if($product->product_sales_price)
                                                                    <div class="product-price-rating">
                                                                        <span>${{ number_format($product->product_sales_price) }}</span>
                                                                        <del>${{ number_format($product->product_price) }}</del>
                                                                    </div>
                                                                @else
                                                                    <div class="product-price-rating">
                                                                        <span>${{ number_format($product->product_price) }}</span>
                                                                    </div>
                                                                @endif

                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                    <div class="text-center pt-2"><a href="{{url('/shop')}}" class="btn btn-danger text-white">{{ __("View All")}}</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-categories mt-sm-40">
                                    <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                                        <div class="col-lg-12">
                                            <div class="section-title text-right">
                                                <h3>{{ __("WHOLESALERS/MANUFACTURERS")}}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row product-categories-carousel mt-30 slick-initialized slick-slider">
                                        <div class="slick-list draggable">
                                            <div class="slick-track"
                                                style="opacity: 1; width: 420px; transform: translate3d(0px, 0px, 0px);">
                                                @foreach($manufacturers as $manufacturer)

                                                    <div class="col-lg-4 p-1 slick-slide slick-current slick-active"
                                                        data-slick-index="0" aria-hidden="false" tabindex="0"
                                                        style="width: 140px;">
                                                        <div class="single-product-cat">
                                                            <a href="{{ url('/manufacturer-details/'.$manufacturer->id) }}" tabindex="0">
                                                                <img src="{{ asset('storage/manufacturer/' . $manufacturer->avatar) }}" alt="" height="180">
                                                            </a>
                                                            <h4><a href="{{ url('/manufacturer-details/'.$manufacturer->id) }}"
                                                                    tabindex="0">{{ $manufacturer->company_name }}</a>
                                                            </h4>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            </div>
                                        </div>


                                    </div>
                                    <div class="text-center pt-4"><a
                                            href="/manufacturers?manufacturers={{ base64_encode(json_encode($manufacturers)) }}"
                                            class="btn btn-danger text-white">{{ __("View All")}}</a></div>
                                </div>
                            </div>
                        </div>
                        <!--products-tab-->
                        <div class="products-tab mt-35">
                            <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                                <div class="col-lg-12">
                                    <div class="section-title text-left">
                                        <h3>{{ __("GROCERIES")}}
                                            <a href="/groceries?groceries={{ base64_encode(json_encode($groceries)) }}"
                                                class="text-white pull-right"> {{ __("SEE ALL")}}</a>
                                        </h3>

                                    </div>

                                </div>
                            </div>
                            <div class="row cv-visible">



                                @foreach($groceries as $grocery)
                                    <div class="col-lg-2">
                                        <div class="product-single p-0"
                                            style="height: 230px; background-image: url('assets/img/g1.jpeg'); background-size: 350px; background-position: center;">
                                            <div class="product-thumb">
                                                <img src="{{asset('storage/assets/product/avatars/'.$grocery->avatars[0]??'') }}" alt="">
                                            </div>
                                            <div class="product-title text-white pull-right"
                                                style="background-color: #bd1a09; padding: 10px; bottom: 0; right: 0; position: absolute; margin-bottom: -20px; ">
                                                <h4><a href="{{ url('product-details/' . base64_encode($grocery->id)) }}"
                                                    class="text-white">
                                                    {{ $grocery->product_name }}</a>

                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach




                            </div>
                        </div>
                        <div class="products-tab mt-35">
                            <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                                <div class="col-lg-12">
                                    <div class="section-title text-left">
                                        <h3>{{ __("FOOD MENUS")}}
                                            <a href="/food-menus?food_menus={{ base64_encode(json_encode($food_menus)) }}"
                                                class="text-white pull-right"> {{ __("SEE ALL")}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row cv-visible">
                                @foreach($food_menus as $food_menu)
                                    <div class="col-md-3">
                                        <div class="product-single p-0">
                                            <div class="product-thumb">
                                                <img src="{{ asset('storage/assets/fast_food_grocery/catalogue/' . $food_menu->avatar) }}" style="height: 200px;">
                                            </div>
                                            <div class="product-title text-white pull-right"
                                                style="background-color: #bd1a09; padding: 10px; bottom: 0; right: 0; position: absolute; margin-bottom: -20px; ">
                                                <h4><a href="/category/{{ $food_menu->name }}?fast_food_grocery" style="color: #fff !important;">
                                                    {{ $food_menu->name }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--banner-section-->
                        <div class="row mt-40">
                            <div class="col-md-12" style="border-right: 1px solid #eee;">
                                <div class="best-sellers">
                                    <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                                        <div class="col-lg-12">
                                            <div class="section-title text-left">
                                                <h3>{{ __("MARKET BOKU")}}
                                                    <a href="{{url('/shop')}}" class="text-white pull-right"> SEE ALL</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row cv-visible">

                                        @foreach($products as $product)
                                            @if($product->product_name)
                                                <div class="col-lg-2">
                                                    <div class="product-single">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                @if($product->avatars != null)
                                                                <img src="{{asset('storage/assets/product/avatars/'.$product->avatars[0] ?? '') }}" alt="">
                                                                @endif
                                                            </a>
                                                            @if($product->product_sales_price)
                                                                <div class="downsale">
                                                                    <span>-</span>${{ number_format($product->product_price - $product->product_sales_price) }}
                                                                </div>
                                                            @endif
                                                            <div class="product-quick-view">
                                                                <x-product-buttons aria-label="{{$product->id}}" aria-labelledby="{{$product->id}}" :product="$product"/>
                                                            </div>
                                                        </div>
                                                        <div class="product-title">
                                                            <h4><a href="{{url('product-details/'.base64_encode($product->id))}}">{{ $product->product_name }}</a></h4>
                                                            <small>
                                                                @if($product->product_sales_price)
                                                                    <div class="product-price-rating">
                                                                        <span>${{ number_format($product->product_sales_price) }}</span>
                                                                        <del>${{ number_format($product->product_price) }}</del>
                                                                    </div>
                                                                @else
                                                                    <div class="product-price-rating">
                                                                        <span>${{ number_format($product->product_price) }}</span>
                                                                    </div>
                                                                @endif
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                    <div class="text-center pt-2"><a href="/shop" class="btn btn-danger text-white">View
                                            {{ __("All") }}</a></div>
                                </div>
                            </div>
                        </div>
                        <!--banner-section-->
                        <section class="row mt-40" style="background-color: #000;" id="#bloomzon_tv">
                            <div class="col-md-12">
                                <div class="row" style="background-color: #0149a0 !important; color: #fff;">
                                    <div class="col-lg-12">
                                        <div class="section-title text-left">
                                            <h3>{{ __("BLOOMZON TV")}}</h3>
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
                </div>
            </div>
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
									<h3>{{ __("VENDORS")}}</h3>
								</div>
							</div>
						</div>
						<div class="row cv-visible">
							<div class="col-lg-2">
                                <a href="{{route('fast-foods',app()->getLocale())}}" class="text-white">
								<div class="product-single p-0" style="background-image: url('{{asset("assets/frontend/img/food1.jpg")}}'); height: 220px; border-radius: 15px; background-size: cover; width: 100%;  background-repeat: no-repeat; background-position: center;">
									<div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
										<h4 class="text-white">{{ __("Fast Food Vendors")}}</h4>
									</div>
								</div></a>
							</div>
							<div class="col-lg-2">
                                <a href="{{route('groceries',app()->getLocale())}}" class="text-white">
								<div class="product-single p-0" style="background-image: url('{{asset("assets/frontend/img/g2.jpg")}}'); height: 220px; border-radius: 15px; background-size: cover; background-position: center;">
									<div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
										<h4 class="text-white">{{ __("Groceries")}}</h4>
									</div>
                                </div>
                            </a>
							</div>
							<div class="col-lg-2">
                                <a href="{{route('agents',app()->getLocale())}}" class="text-white">
								<div class="product-single p-0" style="background-image: url('{{asset("assets/frontend/img/b3.jpg")}}'); height: 220px; border-radius: 15px; background-size: cover; background-position: center;">
									<div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
										<h4 class="text-white">{{ __("Networking Associates")}}</h4>
									</div>
                                </div>
                            </a>
							</div>
							<div class="col-lg-2">
                                <a href="{{route('manufacturers',app()->getLocale())}}" class="text-white">
								<div class="product-single p-0" style="background-image: url('{{asset("assets/frontend/img/b1.jpeg")}}'); height: 220px; border-radius: 15px; background-size: cover; background-position: center;">
									<div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
										<h4 class="text-white">{{ __("Manufacturers")}}</h4>
									</div>
                                </div>
                            </a>
							</div>
							<div class="col-lg-2">
                                <a href="{{route('proservice',app()->getLocale())}}" class="text-white">
								<div class="product-single p-0" style="background-image: url('{{asset("assets/frontend/img/p1.jpg")}}'); height: 220px; border-radius: 15px; background-size: cover; background-position: center;">
									<div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
										<h4 class="text-white">{{ __("Professional Services")}}</h4>
									</div>
                                </div>
                            </a>
							</div>
							<div class="col-lg-2">
                                <a href="{{route('sellers',app()->getLocale())}}" class="text-white">
								<div class="product-single p-0" style="background-image: url('{{asset("assets/frontend/img/p2.jpg")}}'); height: 220px; border-radius: 15px; background-size: cover; background-position: center;">
									<div class="product-title pt-2" style=" width: 100%; background-color: #23374D; opacity: 0.8; position: absolute; bottom: 0; text-align: center; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
										<h4 class="text-white">{{ __("Sellers")}}</h4>
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
                @foreach($adverts as $advert)
                    @if($advert->advert_position === 'Footer')
                        <div class="col-xl-4 col-lg-6">
                            <a href="{{ $advert->advert_link }}">
                            <div class="banner-sm hover-effect">
                                    <img src="{{asset('storage/assets/advert/avatar/'.$advert->avatar) }}" height="270" width="100%" alt="">

                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection
