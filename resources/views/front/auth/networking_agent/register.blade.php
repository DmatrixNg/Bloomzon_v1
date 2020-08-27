@extends('layouts.front')
@section('page_title')
    Create Account
@endsection
@section('content')
    <div class="about-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-3 text-center">

                    <div class="product-single p-0 row">
                        <form method="post" action="{{ url('networking_agent/register') }}" class="contact-form mt-sm-30 col-md-12">
                        @csrf

                            <div class="row p-5"
                                style="background-color: #02499B !important; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                <div class="form-group col-md-12">
                                    <h3 class="text-white">Setup An Account</h3>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="text-white">Account Type</label>
                                    <h3 class="text-white">Networking Agent</h3>
                                </div>
                            </div>
                            <div id="contactForm">
                                <div class="row text-left">

                                    <div class="col-sm-12 form-group">
                                        <label for="email">{{ __('Email Address') }}<abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                                        
                                        @error('email')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <label for="full_name">{{ __('Full Name') }}<abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" autocomplete="full_name" autofocus placeholder="Full Name">
                                        
                                        @error('full_name')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="phone_number">{{ __('Phone Number') }}<abbr class="text-danger" title="required field">*</abbr></label>

                                        <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" autocomplete="phone_number" autofocus placeholder="Phone Number">

                                        @error('phone_number')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="password">{{ __('Password') }}<abbr class="text-danger" title="required field">*</abbr></label>

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="password" autofocus placeholder="Password">

                                        @error('password')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                     <div class="col-sm-12 form-group">
                                        <label for="password_confirmation">{{ __('Confirm Password') }}<abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="password_confirmation" autofocus placeholder="Confirm Password">
                                    </div>
                                    
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary">Create Account</button>
                                    </div>

                                    <hr>
                                    <div class="col-sm-12 text-center pt-30">Have an account yet? <a href="{{ url('networking_agent/login') }}">Login</a>
                                    </div>
                                    <div id="error_list"></div>
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