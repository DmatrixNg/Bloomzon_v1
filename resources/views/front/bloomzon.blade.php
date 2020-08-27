@extends('layouts.front')
@section('page_title')
    Bloomzon
@endsection
@section('content')


    <div class="shop-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-2 col-lg-3">
					<div class="sidebar">
						<div class="vertical-menu">
							<ul>
								<li><a href="#">Phones &amp; Tablets</a>
									<ul>
										<li><a href="phones">Iphone</a></li>
										<li><a href="phones">Samsung</a></li>
										<li><a href="phones">Techno</a></li>
										<li><a href="phones">Infinix</a></li>
									</ul>
								</li>
								<li><a href="#">Electronics</a>
									<ul>
										<li><a href="electronics">Fridge</a></li>
										<li><a href="electronics">Gas Cooker</a></li>
										<li><a href="electronics">Television</a></li>
										<li><a href="electronics">Speekers</a></li>
									</ul>
								</li>
								<li><a href="#">Bloomzon Products</a></li>
								<li><a href="#">Wholesalers</a></li>
								<li><a href="#">Laptops</a></li>
								<li><a href="#">Home &amp; Kitchen</a></li>
								<li><a href="#">Baby, Kids &amp; Toys</a></li>
							</ul>
						</div>
						<div class="price_filter mt-40">
							<div class="section-title">
								<h3 class="text-dark">Filter by price</h3>
							</div>
							<div class="price_slider_amount">
								<div class="row align-items-center">
									<div class="col-lg-6">
										<input type="text" id="amount" name="price"  placeholder="Add Your Price" >
									</div>
									<div class="col-lg-6">
										<button>Filter</button>
									</div>
								</div>
							</div>
							<div id="slider-range"></div>
						</div>
						<div class="list-filter mt-43">
							<div class="section-title">
								<h3 class="text-dark">Brands</h3>
							</div>
							<ul class="list-none mt-25">
								<li>
									<input type="checkbox" id="acer" >
									<label for="acer">Acer</label>
								</li>
								<li>
									<input type="checkbox" id="apple" >
									<label for="apple">Apple</label>
								</li>
								<li>
									<input type="checkbox" id="asus" >
									<label for="asus">Asus</label>
								</li>
								<li>
									<input type="checkbox" id="gionee" >
									<label for="gionee">Gionee</label>
								</li>
								<li>
									<input type="checkbox" id="htc" >
									<label for="htc">HTC</label>
								</li>
								<li><a href="#">+ Show more</a></li>
							</ul>
						</div>
						<div class="list-filter mt-43">
							<div class="section-title">
								<h3 class="text-dark">Sellers</h3>
							</div>
							<ul class="list-none mt-25">
								<li>
									<input type="checkbox" id="black" >
									<label for="black">Black</label>
								</li>
								<li>
									<input type="checkbox" id="pink" >
									<label for="pink">Pink</label>
								</li>
								<li>
									<input type="checkbox" id="white" >
									<label for="white">White</label>
								</li>
								<li>
									<input type="checkbox" id="blue" >
									<label for="blue">Blue</label>
								</li>
								<li>
									<input type="checkbox" id="orange" >
									<label for="orange">Orange</label>
								</li>
								<li><a href="#">+ Show more</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-10 col-lg-9">
					<div class="row align-items-center">
						<div class="col-lg-7 col-md-6">
							<div class="section-title">
								<h3 class="text-dark">Bloomzon Products</h3>
							</div>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="site-pagination pull-right">
								<ul>
									<li><a href="#" class="active">1</a></li>
									<li>of</li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
								</ul>
							</div>
							<div class="product-view-system pull-right" role="tablist">
								<ul class="nav nav-tabs">
									<li><a class="active" data-toggle="tab" href="#grid-products"><img src="assets/images/icons/icon-grid.png" alt="" ></a></li>
									<li><a data-toggle="tab" href="#list-products"><img src="assets/images/icons/icon-list.png" alt="" ></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tab-content">
						<div id="grid-products" class="tab-pane active">
							<div class="row">

								<div class="col-xl-3 col-md-4 col-sm-6">
									<div class="product-single">
										<div class="product-thumb">
											<a href="#"><img src="assets/images/products/shop/2.jpg" alt="" ></a>
											<div class="downsale"><span>-</span>$25</div>
											<div class="product-quick-view">
												<div class="row">
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-eye"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-shopping-cart"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="ti-heart"></i></a></div></div>

											</div>
										</div>
										<div class="product-title">
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											<small>
												<div class="product-price-rating">
													<span>$195.00</span>
													<del>$229.99</del>
												</div>
											</small>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-4 col-sm-6">
									<div class="product-single">
										<div class="product-thumb">
											<a href="#"><img src="assets/images/products/shop/2.jpg" alt="" ></a>
											<div class="downsale"><span>-</span>$25</div>
											<div class="product-quick-view">
												<div class="row">
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-eye"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-shopping-cart"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="ti-heart"></i></a></div></div>

											</div>
										</div>
										<div class="product-title">
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											<small>
												<div class="product-price-rating">
													<span>$195.00</span>
													<del>$229.99</del>
												</div>
											</small>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-4 col-sm-6">
									<div class="product-single">
										<div class="product-thumb">
											<a href="#"><img src="assets/images/products/shop/2.jpg" alt="" ></a>
											<div class="downsale"><span>-</span>$25</div>
											<div class="product-quick-view">
												<div class="row">
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-eye"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-shopping-cart"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="ti-heart"></i></a></div></div>

											</div>
										</div>
										<div class="product-title">
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											<small>
												<div class="product-price-rating">
													<span>$195.00</span>
													<del>$229.99</del>
												</div>
											</small>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-4 col-sm-6">
									<div class="product-single">
										<div class="product-thumb">
											<a href="#"><img src="assets/images/products/shop/2.jpg" alt="" ></a>
											<div class="downsale"><span>-</span>$25</div>
											<div class="product-quick-view">
												<div class="row">
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-eye"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-shopping-cart"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="ti-heart"></i></a></div></div>

											</div>
										</div>
										<div class="product-title">
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											<small>
												<div class="product-price-rating">
													<span>$195.00</span>
													<del>$229.99</del>
												</div>
											</small>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-4 col-sm-6">
									<div class="product-single">
										<div class="product-thumb">
											<a href="#"><img src="assets/images/products/shop/2.jpg" alt="" ></a>
											<div class="downsale"><span>-</span>$25</div>
											<div class="product-quick-view">
												<div class="row">
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-eye"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-shopping-cart"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="ti-heart"></i></a></div></div>

											</div>
										</div>
										<div class="product-title">
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											<small>
												<div class="product-price-rating">
													<span>$195.00</span>
													<del>$229.99</del>
												</div>
											</small>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-4 col-sm-6">
									<div class="product-single">
										<div class="product-thumb">
											<a href="#"><img src="assets/images/products/shop/2.jpg" alt="" ></a>
											<div class="downsale"><span>-</span>$25</div>
											<div class="product-quick-view">
												<div class="row">
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-eye"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-shopping-cart"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="ti-heart"></i></a></div></div>

											</div>
										</div>
										<div class="product-title">
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											<small>
												<div class="product-price-rating">
													<span>$195.00</span>
													<del>$229.99</del>
												</div>
											</small>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-4 col-sm-6">
									<div class="product-single">
										<div class="product-thumb">
											<a href="#"><img src="assets/images/products/shop/2.jpg" alt="" ></a>
											<div class="downsale"><span>-</span>$25</div>
											<div class="product-quick-view">
												<div class="row">
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-eye"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-shopping-cart"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="ti-heart"></i></a></div></div>

											</div>
										</div>
										<div class="product-title">
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											<small>
												<div class="product-price-rating">
													<span>$195.00</span>
													<del>$229.99</del>
												</div>
											</small>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-md-4 col-sm-6">
									<div class="product-single">
										<div class="product-thumb">
											<a href="#"><img src="assets/images/products/shop/2.jpg" alt="" ></a>
											<div class="downsale"><span>-</span>$25</div>
											<div class="product-quick-view">
												<div class="row">
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-eye"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-shopping-cart"></i></a></div>
													<div class="col-md-4 p-0"><a href="javascript:void(0);" class="btn btn-success"><i class="ti-heart"></i></a></div></div>

											</div>
										</div>
										<div class="product-title">
											<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
											<small>
												<div class="product-price-rating">
													<span>$195.00</span>
													<del>$229.99</del>
												</div>
											</small>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="row align-items-center mt-30">
						<div class="col-lg-6">
							<div class="site-pagination">
								<ul>
									<li><a href="#" class="active">1</a></li>
									<li>of</li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="modal fade" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="tab-content">
								<div id="product-1" class="tab-pane fade in show active">
									<div class="product-details-thumb">
										<img src="assets/images/products/product-details/1.jpg" alt="" >
									</div>
								</div>
								<div id="product-2" class="tab-pane fade">
									<div class="product-details-thumb">
										<img src="assets/images/products/product-details/2.jpg" alt="" >
									</div>
								</div>
								<div id="product-3" class="tab-pane fade">
									<div class="product-details-thumb">
										<img src="assets/images/products/product-details/3.jpg" alt="" >
									</div>
								</div>
							</div>
							<ul class="nav nav-tabs products-nav-tabs horizontal quick-view mt-10">
								<li><a class="active" data-toggle="tab" href="#product-1"><img src="assets/images/products/product-details/thumb-1.jpg" alt="" ></a></li>
								<li><a data-toggle="tab" href="#product-2"><img src="assets/images/products/product-details/thumb-2.jpg" alt="" ></a></li>
								<li><a data-toggle="tab" href="#product-3"><img src="assets/images/products/product-details/thumb-3.jpg" alt="" ></a></li>
							</ul>
						</div>
						<div class="col-lg-8">
							<div class="row">
								<div class="col-lg-8">
									<div class="product-details-desc">
										<h2>Apple The New MacBook Retina 2016 MLHA2 12 inches</h2>
										<ul>
											<li>1.6 GHz dual-core Intel Core i5 (Turbo Boost up to 2.7 GHz) with 3 MB shared L3 cache 8 GB of 1600 MHz LPDDR3 RAM; 128 GB PCIe-based flash storage</li>
											<li>13.3-Inch (diagonal) LED-backlit Glossy Widescreen Display, 1440 x 900 resolution Intel HD Graphics 6000</li>
											<li>OS X El Capitan, Up to 12 Hours of Battery Life Macbook Air does not have a Retina display on any model.</li>
										</ul>
										<div class="product-meta">
											<ul class="list-none">
												<li>SKU: 00012 <span>|</span></li>
												<li>Categories:
													<a href="#">Tech</a>
													<a href="#">Macbook</a>
													<a href="#">Laptop</a>
													<span>|</span>
												</li>
												<li>Tags:
													<a href="#">Tech,</a>
													<a href="#">Apple</a>
												</li>
											</ul>
										</div>
										<div class="social-icons style-5">
											<span>Share Link:</span>
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-google-plus"></i></a>
											<a href="#"><i class="fa fa-rss"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="product-action stuck text-left">
										<div class="free-delivery">
											<a href="#"><i class="ti-truck"></i> Free Delivery</a>
										</div>
										<div class="product-price-rating">
											<div>
												<del>629.99</del>
											</div>
											<span>$495.00</span>
											<div class="pull-right">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<div class="product-colors mt-20">
											<label>Select Color:</label>
											<ul class="list-none">
												<li>Red</li>
												<li>Black</li>
												<li>Blue</li>
											</ul>

										</div>
										<div class="product-quantity mt-15">
											<label>Quatity:</label>
											<input type="number" value="1" >
										</div>
										<div class="add-to-get mt-50">
											<a href="#" class="add-to-cart">Add to Cart</a>
											<a href="#" class="add-to-cart compare">+ ADD to Compare</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
