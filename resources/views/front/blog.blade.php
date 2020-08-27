@extends('layouts.front')
@section('page_title')
    Blog
@endsection
@section('content')

    <div class="shop-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3">
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
				<div class="col-lg-9">
					<div class="single-blog">
						<div class="row">
							<div class="col-lg-6">
								<div class="blog-thumb">
									<a href="blog-detai"><img src="assets/images/blog/1.jpg" alt=""></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="blog-desc">
									<a href="#" class="catlink">New</a>
									<h2><a href="blog-detai">The Personality Trait That Makes People Happier</a></h2>
									<div class="blog-meta">
										<ul class="list-none">
											<li><a href="#">May 19, 2017</a></li>
											<li><span>|</span></li>
											<li><a href="#">3 Comments</a></li>
										</ul>
									</div>
									<p>Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam</p>
									<a href="#" class="btn-common">Read More <i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-blog mt-30">
						<div class="row">
							<div class="col-lg-6">
								<div class="blog-thumb">
									<a href="blog-detai"><img src="assets/images/blog/2.jpg" alt=""></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="blog-desc">
									<a href="#" class="catlink">Tech</a>
									<h2><a href="blog-detai">The 2 Ways A Psychopath’s Brain Is Really Unusual</a></h2>
									<div class="blog-meta">
										<ul class="list-none">
											<li><a href="#">May 19, 2017</a></li>
											<li><span>|</span></li>
											<li><a href="#">3 Comments</a></li>
										</ul>
									</div>
									<p>Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam</p>
									<a href="#" class="btn-common">Read More <i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-blog mt-30">
						<div class="row">
							<div class="col-lg-6">
								<div class="blog-thumb">
									<a href="blog-detai"><img src="assets/images/blog/3.jpg" alt=""></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="blog-desc">
									<a href="#" class="catlink">New</a>
									<h2><a href="blog-detai">The Personality Trait That Makes People Happier</a></h2>
									<div class="blog-meta">
										<ul class="list-none">
											<li><a href="#">May 19, 2017</a></li>
											<li><span>|</span></li>
											<li><a href="#">3 Comments</a></li>
										</ul>
									</div>
									<p>Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam</p>
									<a href="#" class="btn-common">Read More <i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-blog mt-30">
						<div class="row">
							<div class="col-lg-6">
								<div class="blog-thumb">
									<a href="blog-detai"><img src="assets/images/blog/4.jpg" alt=""></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="blog-desc">
									<a href="#" class="catlink">Hot News</a>
									<h2><a href="blog-detai">The Female Body Shape Men Find Most Attractive</a></h2>
									<div class="blog-meta">
										<ul class="list-none">
											<li><a href="#">May 19, 2017</a></li>
											<li><span>|</span></li>
											<li><a href="#">3 Comments</a></li>
										</ul>
									</div>
									<p>Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam</p>
									<a href="#" class="btn-common">Read More <i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="single-blog mt-30">
						<div class="row">
							<div class="col-lg-6">
								<div class="blog-thumb">
									<a href="blog-detai"><img src="assets/images/blog/5.jpg" alt=""></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="blog-desc">
									<a href="#" class="catlink">Hot News</a>
									<h2><a href="blog-detai">How To Get a Narcissist to Feel Empathy</a></h2>
									<div class="blog-meta">
										<ul class="list-none">
											<li><a href="#">May 19, 2017</a></li>
											<li><span>|</span></li>
											<li><a href="#">3 Comments</a></li>
										</ul>
									</div>
									<p>Tiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam</p>
									<a href="#" class="btn-common">Read More <i class="fa fa-angle-double-right"></i></a>
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

@endsection
