@extends('layouts.front')
@section('page_title')
    {{ __("Cart")}}
@endsection
@section('content')
    <div class="shopping-cart-steps">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart-steps">
						<ul class="clearfix">
							<li class="active">
								<div class="inner">
									<span class="step">01</span> <span class="inner-step">{{ __("Shopping Cart")}}</span>
								</div>
							</li>
							<li>
								<div class="inner">
									<span class="step">02</span> <span class="inner-step">{{ __("Checkout")}} </span>
								</div>
							</li>
							<li>
								<div class="inner">
									<span class="step">03</span> <span class="inner-step">{{ __("Order Completed")}} </span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="shopping-cart-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="table-responsive">
                        @if($cart_items)
						<table class="cart-table">
							<thead>
								<tr>
									<th>{{ __("Image")}}</th>
									<th>{{ __("Product Name")}}</th>
									<th>{{ __("Color")}}</th>
									<th>{{ __("Price")}}</th>
									<th>{{ __("Quantity")}}</th>
									<th>{{ __("Total")}}</th>
									<th class="text-center"><i class="fa fa-times" aria-hidden="true"></i></th>
								</tr>
							</thead>

                                <tbody>
                                    @foreach($products as $key => $cart_item)

                                        <tr>
                                            <td>
                                                <div class="cart-product-thumb">
                                                    <a href="#"><img src="" alt="" ></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-product-name">
                                                    <h5><a href="{{ url(app()->getLocale().'/product-details')}}"> {{$cart_item->product_name}}</a></h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart-product-name">
                                                    <h5><a href="{{ url(app()->getLocale().'/product-details')}}"> {{@$cart_items[$cart_item->id]['color']}}</a></h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="cart-product-price">${{number_format($cart_item->product_sales_price)}}</span>
                                            </td>
                                            <td>
                                                <div class="cart-quantity-changer">
                                                    <a class="value-decrease qtybutton" data-product-id="{{$cart_item->id}}">-</a>
                                                    <input type="text" id="cartItem{{$cart_item->id}}" value={{$cart_item->quantity}} >
                                                    <a class="value-increase qtybutton" data-product-id="{{$cart_item->id}}" >+</a>
                                                </div>
                                            </td>
                                            <td>
											<span class="cart-product-price">${{number_format($cart_item->total)}} <small class="text-success">{{$cart_item->discounted?'coupon':''}}</small></span>
                                            </td>
                                            <td>
                                                <div class="product-remove">
                                                    <a href="javascript:void(0)">
                                                        <i class="fa fa-times" onclick="removeItem(this)" aria-hidden="true" data-product-id="{{$cart_item->id}}"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>

						</table>
					</div>
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-lg-6">
					<div class="cart-update">
						<a href="{{url(app()->getLocale())}}/shop" class="btn-common">{{ __("CONTINUE SHOPPING")}}</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="cart-update pull-right">
						<a href="javascript:void(0)" id="update-cart" class="btn-common">{{ __("UPDATE CART")}}</a>
					</div>
				</div>
			</div>
			<div class="row mt-40">
				<div class="col-lg-4 d-none">
					<div class="cart-box shpping-tax">
						<h5>{{ __("Estimate Shipping And Tax")}}</h5>
						<div class="cart-box-inner">
							<p>{{ __("Enter your destination to get shipping & tax")}}</p>
							<table class="table">
								<tr>
									<td>
										<label>{{ __("COUNTRY")}} *:</label>
									</td>
									<td>
										<select>
											<option>{{ __("Select options")}}</option>
											<option>{{ __("United States")}}</option>
											<option>{{ __("China")}}</option>
											<option>{{ __("Canada")}}</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<label>{{ __("STATE / PROVINCE")}} *:</label>
									</td>
									<td>
										<select>
											<option>{{ __("Select options")}}</option>
											<option>{{ __("United States")}}</option>
											<option>{{ __("China")}}</option>
											<option>{{ __("Canada")}}</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<label>{{ __("ZIP / POSTAL CODE")}} *:</label>
									</td>
									<td>
										<select>
											<option>{{ __("Select options")}}</option>
											<option>{{ __("United States")}}</option>
											<option>{{ __("China")}}</option>
											<option>{{ __("Canada")}}</option>
										</select>
									</td>
								</tr>
							</table>
							<a href="#" class="btn-common">{{ __("GET A QUOTE")}}</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="cart-box cart-coupon fix">
						<h5>{{ __("Promotional Code")}}</h5>
						<div class="cart-box-inner">
							<p>{{ __("Enter your coupon code if you have one")}}</p>
							<input type="text" id="coupon" name="coupon" value="">
							<p></p>
							<a href="#" onclick="applyCoupon()" class="btn-common">{{ __("Apply")}}</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="cart-box cart-total">
						<h5>{{ __("Cart Total")}}</h5>
						<div class="cart-box-inner">
							<table class="table">
								<tr>
									<td>{{ __("SUB TOTAL")}}:</td>
									<td><span>${{number_format($total)}}</span></td>
								</tr>x
								<tr>
									<td>{{ __("GRAND TOTAL")}}:</td>
									<td><span>${{number_format($total)}}</span></td>
								</tr>
							</table>
							<div class="proceed-checkout">
{{--								<div class="col-lg-12">--}}
{{--									<a href="#">Checkout with multiple address</a>--}}
{{--								</div>--}}
								<div class="col-lg-12">
									<a href="{{url(app()->getLocale())}}/checkout" class="btn-common">{{ __("PROCEED TO CHECK OUT")}}</a>
								</div>
							</div>
						</div>
					</div>
                    @else
                        <h3> {{ __("Your Cart is  empty,")}} <a href="{{url(app()->getLocale())}}/shop">{{ __("start shopping")}}</a></h3>
                    @endif

				</div>

			</div>
		</div>
	</div>

@endsection
@push('scripts')
    <script>

 function removeItem(el) {
			return swal("{{ __("Do you want to remove this from cart?")}}").then((yes)=>{

					if(yes){
						const response = fetch(`/cart/remove/${el.getAttribute('data-product-id')}`,
						{
                    method: 'GET',
                    headers: {
                        'Accept':'application/json'
                    }
				}).then(e=>{
					console.log(e);

                if(e.status == 200){
                    return swal({
                        title: 'Success',
                        text: '{{ __("Product removed from cart successfully")}}',
                        icon: 'success'
                    }).then( () => window.location.reload());
                }
				});	}
				})
		}

		function applyCoupon(){
			var coup = document.getElementById('coupon').value;
			makeRequest('/cart/add-coupon',{code:coup}).then((e)=>{
				if(e.success){
					return swal("{{ __("Your coupon has been added - proceed to checkout")}}").then(e=>{
						window.location.reload()
					})
				}
				return swal("{{ __("Invalid coupon code added")}}")
			})
		}

		// public function increase(id){

		// }




        [...document.getElementsByClassName('value-increase')].map(element => {
            element.onclick = e => {
				const cart_quantity_element = document.getElementById(`cartItem${e.target.getAttribute('data-product-id')}`);
				console.log(cart_quantity_element.value);
                // cart_quantity_element.value = parseInt(cart_quantity_element.value) - parseInt(1)
                fetch(`/cart/increase/${e.target.getAttribute('data-product-id')}/${cart_quantity_element.value}`, {
                    method: 'GET',
                    headers: {
                        'Accept':'application/json'
                    }
                })
            }
        });

            [...document.getElementsByClassName('value-decrease')].map(element => {
            element.onclick = e => {
                const cart_quantity_element = document.getElementById(`cartItem${e.target.getAttribute('data-product-id')}`);
                if(cart_quantity_element.value === 1) return;
                // cart_quantity_element.value =  parseInt(cart_quantity_element.value)  - parseInt(1);
                fetch(`/cart/decrease/${e.target.getAttribute('data-product-id')}/${cart_quantity_element.value}`, {
                    method: 'GET',
                    headers: {
                        'Accept':'application/json'
                    }
                })
            }
        });

        document.getElementById('update-cart').onclick = e => {
            window.location.reload();
        }

    </script>
@endpush
