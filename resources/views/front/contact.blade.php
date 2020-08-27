@extends('layouts.front')
@section('page_title')
   Contact
@endsection
@section('content')

    <div class="google-map-area mt-80">
		<div id="googleMap" style="width:100%;height:620px;"></div>
	</div>



	<div class="office-address-area mt-40">
		<div class="container br-bottom pb-45">
			<div class="row">
				<div class="col-md-4">
					<div class="office-address">
						<h3>France</h3>
						<p>40 Baria Sreet 133/2 NewYork City, US</p>
						<p>Email: info.contact@gmail.com</p>
						<p>Phone: 123-456-7890</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="office-address">
						<h3>United States</h3>
						<p>40 Baria Sreet 133/2 NewYork City, US</p>
						<p>Email: info.contact@gmail.com</p>
						<p>Phone: 123-456-7890</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="office-address">
						<h3>Viet Nam</h3>
						<p>40 Baria Sreet 133/2 NewYork City, US</p>
						<p>Email: info.contact@gmail.com</p>
						<p>Phone: 123-456-7890</p>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="contact-area mt-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="customer-supporter">
						<h1>How can we help you?</h1>
						<div class="single-supporter mt-35">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/contact/1.jpg" alt="" >
								</div>
								<div class="col-md-6">
									<div class="supporter-desc mt-sm-20">
										<h3>Azure Wilson</h3>
										<p>Customer Realations</p>
										<p>963.806.0919</p>
										<p>AzureWilson@consulting.com</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single-supporter mt-65">
							<div class="row">
								<div class="col-md-6">
									<img src="assets/images/contact/2.jpg" alt="" >
								</div>
								<div class="col-md-6">
									<div class="supporter-desc mt-sm-20">
										<h3>Keith Wilson</h3>
										<p>Customer Support</p>
										<p>963.806.0919</p>
										<p>KeithWilson@consulting.com</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact-form mt-sm-30">
						<form id="contactForm" data-toggle="validator" method="POST" action="http://lionsbite.co.uk/html/hakduck-preview/assets/php/contact.php">
							<div class="row">
								<div class="col-sm-12">
									<input type="text" placeholder="Name" id="name" required data-error="NEW ERROR MESSAGE" >
								</div>
								<div class="col-sm-12 mt-30">
									<input type="text" placeholder="Email" id="email" >
								</div>
								<div class="col-sm-12 mt-30">
									<input type="text" placeholder="Subject" id="subject" >
								</div>
								<div class="col-sm-12 mt-30">
									<textarea placeholder="Message" id="message"></textarea>
								</div>
								<div class="col-sm-12 mt-40">
									<button class="btn-common" id="form-submit">Send message</button>
								</div>
								<div class="col-sm-8 text-left pt-30">
									<div id="msgSubmit" class="hidden"></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="container mt-10">
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
