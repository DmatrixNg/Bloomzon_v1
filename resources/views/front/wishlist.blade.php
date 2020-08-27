@extends('layouts.front')
@section('page_title')
   Wishlist
@endsection
@section('content')

    <div class="shopping-cart-area mt-95">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="cart-table">
							<thead>
								<tr>
									<th>Image</th>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
									<th class="text-center"><i class="fa fa-times" aria-hidden="true"></i></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="cart-product-thumb">
											<a href="#"><img src="assets/images/products/cart/1.jpg" alt="" ></a>
										</div>
									</td>
									<td>
										<div class="cart-product-name">
											<h5><a href="#">Apple The New MacBook Retina</a></h5>
										</div>
									</td>
									<td>
										<span class="cart-product-price">$460.00</span>
									</td>
									<td>
										<div class="cart-quantity-changer">
											<a class="value-decrease qtybutton">-</a>
											<input type="text" value="1" >
											<a class="value-increase qtybutton">+</a>
										</div>
									</td>
									<td>
										<span class="cart-product-price">$460.00</span>
									</td>
									<td>
										<div class="product-remove">
											<a href="#">
												<i class="fa fa-times" aria-hidden="true"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="cart-product-thumb">
											<a href="#"><img src="assets/images/products/cart/2.jpg" alt="" ></a>
										</div>
									</td>
									<td>
										<div class="cart-product-name">
											<h5><a href="product-details">Vantech VP-153C Camera</a></h5>
										</div>
									</td>
									<td>
										<span class="cart-product-price">$280.00</span>
									</td>
									<td>
										<div class="cart-quantity-changer">
											<a class="value-decrease qtybutton">-</a>
											<input type="text" value="1" >
											<a class="value-increase qtybutton">+</a>
										</div>
									</td>
									<td>
										<span class="cart-product-price">$280.00</span>
									</td>
									<td>
										<div class="product-remove">
											<a href="#">
												<i class="fa fa-times" aria-hidden="true"></i>
											</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="cart-product-thumb">
											<a href="#"><img src="assets/images/products/cart/3.jpg" alt="" ></a>
										</div>
									</td>
									<td>
										<div class="cart-product-name">
											<h5><a href="product-details">Blue Yeti USB Microphone </a></h5>
										</div>
									</td>
									<td>
										<span class="cart-product-price">$590.00</span>
									</td>
									<td>
										<div class="cart-quantity-changer">
											<a class="value-decrease qtybutton">-</a>
											<input type="text" value="1" >
											<a class="value-increase qtybutton">+</a>
										</div>
									</td>
									<td>
										<span class="cart-product-price">$590.00</span>
									</td>
									<td>
										<div class="product-remove">
											<a href="#">
												<i class="fa fa-times" aria-hidden="true"></i>
											</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row mt-30">
				<div class="col-lg-12">
					<div class="cart-update">
						<a href="#" class="btn-common">CONTINUE SHOPPING</a>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="container mt-15">
		<div class="brands-area br-none">
			<div class="row">
				<div class="col-lg-12">
					<div class="brand-items">
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/1.jpg" alt="" >
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/2.jpg" alt="" >
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/3.jpg" alt="" >
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/4.jpg" alt="" >
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/5.jpg" alt="" >
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/6.jpg" alt="" >
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/7.jpg" alt="" >
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/8.jpg" alt="" >
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    @endsection
