@extends('layouts.front')
@section('page_title')
    Category -
@endsection
@section('content')

  <!--products-area start-->
	<div class="shop-area">
		<div class="container">
        <p class="text-left"><a href="{{url('/')}}">Home</a> <i class="fa fa-chevron-right"></i> <a style="color:grey;" href="categories.html">{{$page_title}}</a></p>
		    <h3>{{$page_title}} </h3>
			<div class="row mt-3">
				<div class="col-md-9">
					<div class="tab-content">
						<div id="grid-products" class="tab-pane active">
							<div class="row">
                                @foreach($products as $product)
                                @if($product->product_name)
                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="product-single">
                                            <div class="product-thumb">

                                                <a href="#">
                                                    @if($product->avatars != null)
                                                    <img style="min-height: 150px" src="{{asset('storage/assets/product/avatars/'.$product->avatars[0]??'') }}" alt="">
                                                    @endif
                                                </a>

                                                @if($product->product_sales_price)
                                                    <div class="downsale">
                                                        <span>-</span>${{ number_format($product->product_price - $product->product_sales_price) }}
                                                    </div>
                                                @endif
                                                <div class="product-quick-view">
                                                    {{-- <div class="row">
                                                        <div class="col-md-4 p-0"><a
                                                        href="{{url('product-details/'.base64_encode($product->id))}}"
                                                                class="btn btn-success"><i
                                                                    class="fa fa-eye"></i></a></div>
                                                        <div class="col-md-4 p-0"><a href="javascript:void(0);"
                                                                    class="btn btn-success"><i
                                                                    class="fa fa-shopping-cart"></i></a></div>
                                                        <div class="col-md-4 p-0"><a href="javascript:void(0);"
                                                              onclick="addFavorite(1,3)"  class="btn btn-success"><i class="ti-heart"></i></a>
                                                        </div>
                                                    </div> --}}
                                                <x-product-buttons aria-label="{{$product->id}}" aria-labelledby="{{$product->id}}" :product="$product"/>


                                                </div>
                                            </div>
                                            <div class="product-title">
                                                <h4><a href="#">{{ $product->product_name }}</a></h4>
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
						</div>
					</div>
					<div class="row align-items-center mt-30">
						<div class="col-lg-6">
							{{$products->links()}}
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
		</div>
	</div>
	<!--products-area end-->

@endsection

    @push('scripts')
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
    @endpush
