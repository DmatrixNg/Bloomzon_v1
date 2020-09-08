@extends('layouts.front')
@section('page_title')
    Shop
@endsection
@section('content')

    <!--products-area start-->
    <div class="shop-area">
        <div class="container">
            {{-- <p class="text-left"><a href="index.html">Home</a> <i
                    class="fa fa-chevron-right"></i> <a style="color:grey;" href="categories.html">{{ $page_title }}</a></p>
            --}}
            <h3>Search Result</h3>
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="tab-content">
                        <div id="grid-products" class="tab-pane active">
                            <div class="row">
                                @if (count($products))
                                    @foreach ($products as $product)
                                        <div class="col-xl-3 col-md-4 col-sm-6">
                                            <div class="product-single">
                                                <div class="product-thumb">

                                                    <a href="#">
                                                        @if ($product->avatars != null)
                                                            <img style="min-height: 150px"
                                                                src="{{ asset('storage/assets/product/avatars/' . $product->avatars[0] ?? '') }}"
                                                                alt="">
                                                        @endif
                                                    </a>

                                                    @if ($product->product_sales_price)
                                                        <div class="downsale">
                                                            <span>-</span>${{ number_format($product->product_price - $product->product_sales_price) }}
                                                        </div>
                                                    @endif
                                                    <div class="product-quick-view">
                                                        {{-- <div class="row">
                                                            <div class="col-md-4 p-0"><a
                                                                    href="{{ url(app()->getLocale().'/product-details/' . base64_encode($product->id)) }}"
                                                                    class="btn btn-success"><i class="fa fa-eye"></i></a>
                                                            </div>
                                                            <div class="col-md-4 p-0"><a href="javascript:void(0);"
                                                                    class="btn btn-success"><i
                                                                        class="fa fa-shopping-cart"></i></a></div>
                                                            <div class="col-md-4 p-0"><a href="javascript:void(0);"
                                                                    onclick="addFavorite(1,3)" class="btn btn-success"><i
                                                                        class="ti-heart"></i></a>
                                                            </div>
                                                        </div> --}}
                                                        <x-product-buttons aria-label="{{ $product->id }}"
                                                            aria-labelledby="{{ $product->id }}" :product="$product" />


                                                    </div>
                                                </div>
                                                <div class="product-title">
                                                    <h4><a href="#">{{ $product->product_name }}</a></h4>
                                                    <small>
                                                        @if ($product->product_sales_price)
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
                                    @endforeach
                                @endif



                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mt-30">
                        <div class="col-lg-6">
                            {{-- {{ $products->links() }} --}}
                        </div>
                        {{-- <div class="col-lg-6">
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
                        </div> --}}
                    </div>
                </div>
            </div>


            @if (count($sellers))
                <h4 class="text-left">SELLERS</h4>

                <div class="row mt-5 mb-5">
                    @foreach ($sellers as $seller)
                        <div class="col-md-3">
                            <div class="card"
                                style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">
                                <div class="card-up white lighten-1"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Avatar -->
                                        <div class="avatar mx-auto white">
                                            <img src="{{ asset('storage/assets/seller/avatar/' . $seller->avatar) }}"
                                                class="rounded-circle" alt="" width="200" height="200">
                                        </div>
                                        <!-- Content -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3 class="testimonial_heading font-weight-bold">{{ $seller->company_name }}</h3>
                                        <p class="testimonial_heading2">{{ $seller->full_name }}</p>
                                        <p class="testimonial_heading2">{{ $seller->shop_address }}</p>
                                        <a href="{{ url('/seller-product-list/' . $seller->id) }}"
                                            class="btn btn-danger border-0 h2">View Products</a>
                                        <a href="{{ url('/seller-details/' . $seller->id) }}"
                                            class="btn btn-primary border-0 h2">View Store</a>
                                    </div>
                                    <br>
                                    <!-- Quotation -->
                                    <p class="testimonial_text">{{ $seller->service_description }}.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if (isset($_GET['category']) && $_GET['category'] == 'seller')
                        <div class="alert alert-warning">
                            No Seller Found
                        </div>
                        @endif
                </div>
            @endif

            @if (!count($ffgs))
            
            @if (isset($_GET['category']) && $_GET['category'] == 'fast_food_grocery')
            <div class="alert alert-warning">No Result</div>
            @endif
            @else
            <h4 class="text-left">Fast Food Groceries</h4>

            <div class="row mt-5 mb-5">
                    @foreach ($ffgs as $ffg)
                        <div class="col-md-3">
                            <div class="card"
                                style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">
                                <div class="card-up white lighten-1"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Avatar -->
                                        <div class="avatar mx-auto white">
                                            <img src="{{ asset('storage/assets/fast_food_grocery/avatar/' . $ffg->avatar) }}"
                                                class="rounded-circle" alt="" width="200" height="200">
                                        </div>
                                        <!-- Content -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3 class="testimonial_heading font-weight-bold">{{ $ffg->company_name }}</h3>
                                        <p class="testimonial_heading2">{{ $ffg->full_name }}</p>
                                        <p class="testimonial_heading2">{{ $ffg->shop_address }}</p>
                                        <a href="{{ url('/fast-food-details/' . $ffg->id) }}"
                                            class="btn btn-primary border-0 h2">View Profile</a>
                                        <a href="{{ url('/vendor-food-list/' . $ffg->id) }}"
                                            class="btn btn-danger border-0 h2">View Products</a>
                                    </div>
                                    <br>
                                    <!-- Quotation -->
                                    <p class="testimonial_text">{{ $ffg->service_description }}.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                @endif

                @if (!count($profs))
                @if (isset($_GET['category']) && $_GET['category'] == 'proservice')
                <div class="alert alert-warning">No Result Found</div>
                @endif
                @else
                <h4 class="text-left">Professional Service</h4>
                            <div class="row mt-5 mb-5">
                    @foreach ($profs as $proservice)
                        <div class="col-md-3">
                            <div class="card"
                                style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">
                                <div class="card-up white lighten-1"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Avatar -->
                                        <div class="avatar mx-auto white">
                                            <img src="{{ asset('storage/assets/professional/avatar/' . $proservice->avatar) }}"
                                                class="rounded-circle" alt="" width="200" height="200">
                                        </div>
                                        <!-- Content -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <h3 class="testimonial_heading font-weight-bold">{{ $proservice->company_name }}
                                        </h3>
                                        <p class="testimonial_heading2">{{ $proservice->full_name }}</p>
                                        <p class="testimonial_heading2">{{ $proservice->shop_address }}</p>
                                        <a href="{{ url('/proservice-details/' . $proservice->id) }}"
                                            class="btn btn-outline-primary">View Services</a>

                                    </div>
                                    <br>
                                    <!-- Quotation -->
                                    <p class="testimonial_text">{{ $proservice->service_description }}.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                @endif

                @if (count($networking_agents))
                <h4 class="text-left">Networking Associates</h4>
            <div class="row mt-5 mb-5">

                    @foreach ($networking_agents as $agent)
                        <div class="col-md-3">
                            <div class="card"
                                style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">

                                <div class="card-up white lighten-1"></div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Avatar -->
                                        <div class="avatar mx-auto white">
                                            <img src="{{ asset('storage/assets/networking_agent/avatar/' . $agent->avatar) }}"
                                                class="rounded-circle" alt="" width="200" height="200">
                                        </div>

                                        <!-- Content -->

                                    </div>

                                </div>

                                <div class="card-body">

                                    <div class="text-center">
                                        <h3 class="testimonial_heading font-weight-bold">{{ ucwords($agent->full_name) }}
                                        </h3>
                                        <p class="testimonial_heading2">{{ $agent->street_address }}</p>
                                        <a href="{{ url('/networkingagent-details/' . $agent->id) }}"
                                            class="btn btn-outline-primary">View Services</a>

                                    </div>
                                    <br>
                                    <!-- Quotation -->
                                    {{-- <p class="testimonial_text">Sells different all day
                                        groceries and provisions for all classes.</p> --}}
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    @if (isset($_GET['category']) && $_GET['category'] == 'networking_agent')
                        <div class="alert alert-warning">
                            No Result Found
                        </div>
                    @endif
                </div>
                @endif



        </div>
    </div>
    <!--products-area end-->

@endsection

@push('scripts')
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
@endpush
