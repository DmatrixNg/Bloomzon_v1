@extends('layouts.front')

@section('page_title', 'Login')

@section('content')
	<div class="about-area mt-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-3 text-center">
					<img class="img-100p" src="assets/images/bloomzon.png" width="120" height="auto" alt="" >
					<h3>Welcome to Bloomzoon</h3>
					<div class="product-single">
						<div class="contact-form mt-sm-30">
							<h4>Manufacturer's Login Form</h4>
							<form method="post" action="{{ url('manufacturer/login') }}">
                                @csrf
								<div class="row">
									<div class="col-sm-12 mt-30">
										<label for="email">{{ __('Email Address') }}<abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                                        @error('email')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>

									<div class="col-sm-12 mt-30">
										<label for="password">{{ __('Password') }}<abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
									</div>

									
									<div class="col-sm-12 mt-5">
										<div class="row">
											<div class="col-md-2 offset-3"><input {{ old('remember') ? 'checked' : '' }} id="remember" name="remember" type="checkbox" class="pull-left" ></div>
											<div class="col-md-4 text-left pt-2"><label style="color: #999; ">{{ __('Remember password') }}</label></div>
										</div>
									</div>
							

									<div class="col-sm-12">
										<button class="btn btn-primary btn-lg" id="form-submit">Login</button>
									</div>

									<hr>
									<div class="col-sm-12 text-center pt-30">Don't have an account yet? <a href="{{ url('manufacturer/register') }}">Create account</a></div>
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
