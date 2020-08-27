@extends('layouts.front')
@section('page_title')
    Product Details
@endsection
@section('content')


    <div class="product-details-area mt-20">
		<div class="container-fluid">
				<div class="product-details">
					<div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="sidebar">
								<div class="vertical-menu">
									<ul>
										<li><a href="#">Office Electronics</a></li>
										<li><a href="#">Tablet</a></li>
										<li><a href="#">Computer Components</a></li>
										<li><a href="#">Tablet Accessories</a></li>
										<li><a href="#">Computer Peripherals</a></li>
										<li><a href="#">Computer Peripherals</a>
											<ul>
												<li><a href="#">External Storage</a></li>
												<li><a href="#">Networking</a></li>
											</ul>
										</li>
										<li><a href="#">Memory Cards & SSD</a>
											<ul>
												<li><a href="#">Cables & Connector</a></li>
												<li><a href="#">Mini PC</a></li>
											</ul>
										</li>
										<li><a href="#">Demo Board & Accessories</a></li>
										<li><a href="#">Desktops & Servers</a></li>
										<li><a href="#">Computer & Accessories</a>
											<ul>
												<li><a href="#">DIY Gaming PC</a></li>
												<li><a href="#">Computer Cleaners</a></li>
											</ul>
										</li>
										<li><a href="#">Laptops</a></li>
										<li><a href="#">Laptop Accessories</a>
											<ul>
												<li><a href="#">DIY Gaming PC</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="price_filter mt-40">
									<div class="section-title">
										<h3>Filter by price</h3>
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
										<h3>Brands</h3>
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
										<h3>Colors</h3>
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

								<div class="products-list mt-30">
									<div class="section-title mb-30">
										<h3>Latest Items</h3>
									</div>
									<div class="one-carousel dots-none">
										<div>
											<ul class="list-none">
												<li>
													<div class="product-single style-2">
														<div class="row align-items-center m-0">
															<div class="col-lg-4 p-0">
																<div class="product-thumb">
																	<a href="#"><img src="assets/images/products/latest/1.jpg" alt="" ></a>
																</div>
															</div>
															<div class="col-lg-8 p-0">
																<div class="product-title">
																	<h4><a href="#">Vantech VP-153C Camera</a></h4>
																</div>
																<div class="product-price-rating">
																	<span>$195.00</span>
																	<del>$229.99</del>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="product-single style-2">
														<div class="row align-items-center m-0">
															<div class="col-lg-4 p-0">
																<div class="product-thumb">
																	<a href="#"><img src="assets/images/products/latest/2.jpg" alt="" ></a>
																</div>
															</div>
															<div class="col-lg-8 p-0">
																<div class="product-title">
																	<h4><a href="#">Vantech VP-153C Camera</a></h4>
																</div>
																<div class="product-price-rating">
																	<span>$195.00</span>
																	<del>$229.99</del>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="product-single style-2">
														<div class="row align-items-center m-0">
															<div class="col-lg-4 p-0">
																<div class="product-thumb">
																	<a href="#"><img src="assets/images/products/latest/3.jpg" alt="" ></a>
																</div>
															</div>
															<div class="col-lg-8 p-0">
																<div class="product-title">
																	<h4><a href="#">Vantech VP-153C Camera</a></h4>
																</div>
																<div class="product-price-rating">
																	<span>$195.00</span>
																	<del>$229.99</del>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<div>
											<ul class="list-none">
												<li>
													<div class="product-single style-2">
														<div class="row align-items-center m-0">
															<div class="col-lg-4 p-0">
																<div class="product-thumb">
																	<a href="#"><img src="assets/images/products/latest/1.jpg" alt="" ></a>
																</div>
															</div>
															<div class="col-lg-8 p-0">
																<div class="product-title">
																	<h4><a href="#">Vantech VP-153C Camera</a></h4>
																</div>
																<div class="product-price-rating">
																	<span>$195.00</span>
																	<del>$229.99</del>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="product-single style-2">
														<div class="row align-items-center m-0">
															<div class="col-lg-4 p-0">
																<div class="product-thumb">
																	<a href="#"><img src="assets/images/products/latest/2.jpg" alt="" ></a>
																</div>
															</div>
															<div class="col-lg-8 p-0">
																<div class="product-title">
																	<h4><a href="#">Vantech VP-153C Camera</a></h4>
																</div>
																<div class="product-price-rating">
																	<span>$195.00</span>
																	<del>$229.99</del>
																</div>
															</div>
														</div>
													</div>
												</li>
												<li>
													<div class="product-single style-2">
														<div class="row align-items-center m-0">
															<div class="col-lg-4 p-0">
																<div class="product-thumb">
																	<a href="#"><img src="assets/images/products/latest/3.jpg" alt="" ></a>
																</div>
															</div>
															<div class="col-lg-8 p-0">
																<div class="product-title">
																	<h4><a href="#">Vantech VP-153C Camera</a></h4>
																</div>
																<div class="product-price-rating">
																	<span>$195.00</span>
																	<del>$229.99</del>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-8">
							<div class="row">
								<div class="col-lg-6">
									<div class="tab-content">
										<div id="product-1" class="tab-pane fade in show active">
											<div class="product-details-thumb">
												<a href="#"><i class="fa fa-search-plus"></i></a>
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
									<ul class="nav nav-tabs products-nav-tabs horizontal mt-10">
										<li><a class="active" data-toggle="tab" href="#product-1"><img src="assets/images/products/product-details/thumb-1.jpg" alt="" ></a></li>
										<li><a data-toggle="tab" href="#product-2"><img src="assets/images/products/product-details/thumb-2.jpg" alt="" ></a></li>
										<li><a data-toggle="tab" href="#product-3"><img src="assets/images/products/product-details/thumb-3.jpg" alt="" ></a></li>
									</ul>
								</div>
								<div class="col-lg-6 mt-sm-30">
									<div class="row">
										<div class="col-lg-12">
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
												<div class="product-features mt-50">
													<ul class="list-none">
														<li>Satisfaction 100% Guaranteed</li>
														<li>Free shipping on orders over $99</li>
														<li>14 day easy Return</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-40">
								<div class="col-lg-12">
									<ul class="nav nav-tabs product-review-nav">
										<li><a class="active" data-toggle="tab" href="#description">Description</a></li>
										<li><a data-toggle="tab" href="#specifications">Specifications</a></li>
										<li><a data-toggle="tab" href="#reviews">Reviews (02)</a></li>
									</ul>
									<div class="tab-content">
										<div id="description" class="tab-pane fade in show active">
											<div class="product-description">
												<h2>Product information</h2>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
												<div class="site-image mb-25">
													<h3>Wake up on your own private island in an almost <br> untouched part of the world</h3>
													<img src="assets/images/products/product-details/4.jpg" alt="" >
													<a class="venobox video-play" data-gall="gall-video" data-autoplay="true" data-vbtype="video" href="https://youtu.be/ScMzIvxBSi4"><i class="ti-control-play"></i></a>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
												<div class="row align-items-center mt-20">
													<div class="col-lg-6">
														<img src="assets/images/products/product-details/5.jpg" alt="" >
													</div>
													<div class="col-lg-6">
														<h2>Product information</h2>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</div>
												<div class="row align-items-center mt-30">
													<div class="col-lg-6">
														<img src="assets/images/products/product-details/6.jpg" alt="" >
													</div>
													<div class="col-lg-6">
														<h2>An incredible view</h2>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
													</div>
												</div>
												<div class="row align-items-center mt-30">
													<div class="col-lg-6">
														<img src="assets/images/products/product-details/7.jpg" alt="" >
													</div>
													<div class="col-lg-6">
														<h2>Best option for you!</h2>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
													</div>
												</div>
											</div>
										</div>
										<div id="specifications" class="tab-pane fade specifications">
											<table class="table table-bordered">
												<tr>
													<td>Customer Rating</td>
													<td>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<span>(05)</span>
														</div>
													</td>
												</tr>
												<tr>
													<td>Price</td>
													<td><strong class="price">$495.00</strong></td>
												</tr>
												<tr>
													<td>RAM Size</td>
													<td>8 GB</td>
												</tr>
												<tr>
													<td>Screen Size</td>
													<td>13 in</td>
												</tr>
												<tr>
													<td>Display Technology</td>
													<td>LED</td>
												</tr>
												<tr>
													<td>Hard-Drive Size</td>
													<td>128 GB</td>
												</tr>
												<tr>
													<td>Operating System</td>
													<td>Mac OS X</td>
												</tr>
												<tr>
													<td>Wireless Compatibility</td>
													<td>802.11abg, 802.11 A/C, 802.11 a/b/g/n, 802.11A</td>
												</tr>
											</table>
										</div>
										<div id="reviews" class="tab-pane fade">
											<div class="blog-comments product-comments mt-0">
												<ul class="list-none">
													<li>
														<div class="comment-avatar text-center">
															<img src="assets/images/blog/comment/4.jpg" alt="" >
															<div class="product-rating mt-10">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</div>
														</div>
														<div class="comment-desc">
															<span>27 Aug 2019</span>
															<h4>Jenney Kelley</h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
														</div>
													</li>
													<li>
														<div class="comment-avatar text-center">
															<img src="assets/images/blog/comment/5.jpg" alt="" >
															<div class="product-rating mt-10">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</div>
														</div>
														<div class="comment-desc">
															<span>27 Aug 2019</span>
															<h4>Brandon William</h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
														</div>
													</li>
												</ul>
											</div>
											<div class="blog-comment-form product-comment-form mt-05">
												<h4><span>Add Review</span></h4>
												<div class="row mt-30">
													<div class="col-sm-6 single-form">
														<input type="text" placeholder="Name" >
													</div>
													<div class="col-sm-6">
														<input type="text" placeholder="Email" >
													</div>
													<div class="col-sm-12">
														<div class="product-rating style-2">
															<span>Your Rating:</span>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
													</div>
													<div class="col-sm-12">
														<textarea placeholder="Messages"></textarea>
													</div>
													<div class="col-sm-12">
														<button class="btn-common mt-25">Submit</button>
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
		</div>
	</div>



	<div class="best-sellers mt-45">
		<div class="container-fluid fix">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h3>Latest Products</h3>
					</div>
				</div>
			</div>
			<div class="row four-items cv-visible">
				<div class="col-lg-3">
					<div class="product-single">
						<div class="product-title">
							<small><a href="#">Aquaracer</a></small>
							<h4><a href="#">iPATROL RILEY - WiFi Enabled Mobilized Home Monitoring Robot</a></h4>
						</div>
						<div class="product-thumb">
							<a href="#"><img src="assets/images/products/shop/1.jpg" alt="" ></a>
							<div class="downsale"><span>-</span>$35</div>
							<div class="product-quick-view">
								<a href="#">quick view</a>
							</div>
						</div>
						<div class="product-price-rating">
							<div class="pull-left">
								<span>$395.00</span>
							</div>
							<div class="pull-right">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div>
						</div>
						<div class="product-action">
							<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
							<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
							<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="product-single">
						<div class="product-title">
							<small><a href="#">Iphone</a></small>
							<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
						</div>
						<div class="product-thumb">
							<a href="#"><img src="assets/images/products/shop/2.jpg" alt="" ></a>
							<div class="product-quick-view">
								<a href="#">quick view</a>
							</div>
						</div>
						<div class="product-price-rating">
							<div class="pull-left">
								<span>$495.00</span>
							</div>
							<div class="pull-right">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div>
						</div>
						<div class="product-action">
							<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
							<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
							<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="product-single">
						<div class="product-title">
							<small><a href="#">Camera</a></small>
							<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
						</div>
						<div class="product-thumb">
							<a href="#"><img src="assets/images/products/shop/3.jpg" alt="" ></a>
							<div class="product-quick-view">
								<a href="#">quick view</a>
							</div>
						</div>
						<div class="product-price-rating">
							<div class="pull-left">
								<span>$345.00</span>
								<del>429.99</del>
							</div>
						</div>
						<div class="product-action">
							<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
							<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
							<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="product-single">
						<div class="product-title">
							<small><a href="#">Macbook</a></small>
							<h4><a href="#">iNewby 3.3mm Lens 720P HD WiFi Smart</a></h4>
						</div>
						<div class="product-thumb">
							<a href="#"><img src="assets/images/products/shop/4.jpg" alt="" ></a>
							<div class="product-quick-view">
								<a href="#">quick view</a>
							</div>
						</div>
						<div class="product-price-rating">
							<div class="pull-left">
								<span>$495.00</span>
							</div>
							<div class="pull-right">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div>
						</div>
						<div class="product-action">
							<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
							<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
							<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="product-single">
						<div class="product-title">
							<small><a href="#">Aquaracer</a></small>
							<h4><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h4>
						</div>
						<div class="product-thumb">
							<a href="#"><img src="assets/images/products/shop/5.jpg" alt="" ></a>
							<div class="downsale"><span>-</span>$35</div>
							<div class="product-quick-view">
								<a href="#">quick view</a>
							</div>
						</div>
						<div class="product-price-rating">
							<div class="pull-left">
								<span>$395.00</span>
							</div>
							<div class="pull-right">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div>
						</div>
						<div class="product-action">
							<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
							<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
							<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="product-single">
						<div class="product-title">
							<small><a href="#">Iphone</a></small>
							<h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
						</div>
						<div class="product-thumb">
							<a href="#"><img src="assets/images/products/shop/6.jpg" alt="" ></a>
							<div class="product-quick-view">
								<a href="#">quick view</a>
							</div>
						</div>
						<div class="product-price-rating">
							<div class="pull-left">
								<span>$495.00</span>
							</div>
							<div class="pull-right">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div>
						</div>
						<div class="product-action">
							<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
							<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
							<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="product-single">
						<div class="product-title">
							<small><a href="#">Camera</a></small>
							<h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
						</div>
						<div class="product-thumb">
							<a href="#"><img src="assets/images/products/shop/3.jpg" alt="" ></a>
							<div class="product-quick-view">
								<a href="#">quick view</a>
							</div>
						</div>
						<div class="product-price-rating">
							<div class="pull-left">
								<span>$345.00</span>
								<del>429.99</del>
							</div>
						</div>
						<div class="product-action">
							<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
							<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
							<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="product-single">
						<div class="product-title">
							<small><a href="#">Macbook</a></small>
							<h4><a href="#">iNewby 3.3mm Lens 720P HD WiFi Smart</a></h4>
						</div>
						<div class="product-thumb">
							<a href="#"><img src="assets/images/products/shop/4.jpg" alt="" ></a>
							<div class="product-quick-view">
								<a href="#">quick view</a>
							</div>
						</div>
						<div class="product-price-rating">
							<div class="pull-left">
								<span>$495.00</span>
							</div>
							<div class="pull-right">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div>
						</div>
						<div class="product-action">
							<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
							<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
							<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="container-fluid mt-60">
		<div class="brands-area">
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
