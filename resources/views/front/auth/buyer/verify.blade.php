@extends('layouts.front')
@section('page_title')
    Verify
@endsection
@section('content')
	<div class="about-area mt-50">
		<div class="container">
      <div class="row">
        <div class="col-lg-6 offset-3 text-center">
          <img class="img-100p" src="assets/images/bloomzon.png" width="120" height="auto" alt="" >
          <div class="product-single">
						<div class="contact-form mt-sm-30">
							<h4>{{ __('Verify Your Email Address') }}</div>
              </h4>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('buyer.verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                  </div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      @endsection
