@extends('layouts.front')
@section('page_title')
    Confirm
@endsection
@section('content')
	<div class="about-area mt-50">
		<div class="container">
      <div class="row">
        <div class="col-lg-6 offset-3 text-center">
          <img class="img-100p" src="assets/images/bloomzon.png" width="120" height="auto" alt="" >
          <div class="product-single">
						<div class="contact-form mt-sm-30">
							<h4>{{ __('Please confirm your password before continuing.') }}
              </h4>

                    <form method="POST" action="{{ route('buyer.password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                  </div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      @endsection
