@extends('layouts.front')
@section('page_title')
    Login
@endsection
@section('content')
	<div class="about-area mt-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-3 text-center">
					<img class="img-100p" src="assets/images/bloomzon.png" width="120" height="auto" alt="" >
					<h3>Welcome to Bloomzon</h3>
					<div class="product-single">
						<div class="contact-form mt-sm-30">
							<h4>Login</h4>
							<form id="contactForm" action="{{ url('admin/login') }}" method="POST" >
                                @csrf
								<div class="row">
									<div class="col-sm-12 mt-30">
										<input type="text" placeholder="Email" name="email" id="email" >
									</div>
									<div class="col-sm-12 mt-30">
										<input type="password" name="password" placeholder="Password" id="subject" >
										<small style="color: #999;">At least 8 characters and 1 digit </small>
									</div>
									<div class="col-sm-12 mt-30">
										<div class="row">
											<div class="col-md-2 offset-3"><input type="checkbox" placeholder="Password" id="subject" class="pull-left" ></div>
											<div class="col-md-4 text-left pt-2"><label style="color: #999; ">Remember Me</label></div>
										</div>
									</div>
									<div class="col-sm-12">
										<button class="btn btn-primary btn-lg" id="form-submit">Login</button>
									</div>
									<hr>
									<div class="col-sm-12 text-center pt-30">Don't have an account yet? <a href="register">Create account</a></div>
									<div class="col-sm-12 text-center pt-30">Forgot your Login Email or password? Recover account</div>
									<div class="col-sm-12 text-center">By clicking Sign up you agree to our terms of service</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@php
$redirect = strpos(url()->previous(),'product-details') == true?url()->previous():'/home';
@endphp

@push('scripts')
    <script>
		
        FormHandler('loginForm', {
            requestUrl: '/auth/login/web',
            cb: response => {
                if (response.success) {
                    return swal({
                        title: 'Success!',
                        text: 'You\'ve logged in successfully',
                        icon: 'success',
                        button: 'Proceed to dashboard'
                    }).then(() => {
                        window.location.href = '<?= $redirect ?>'
                    })
                }

                return swal({
                    title: 'Error!',
                    text: 'We had error logging you in. Please Try Again',
                    icon: 'error',
                    button: 'Try Again'
                });
            }
        });
    </script>
    @endpush
