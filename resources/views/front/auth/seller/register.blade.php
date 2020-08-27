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
                        <form action="{{ url('seller/register') }}" method="post" class="contact-form mt-sm-30 col-md-12" >
                        @csrf

                            <div class="row p-5"
                                style="background-color: #02499B !important; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                <div class="form-group col-md-12">
                                    <h3 class="text-white">Setup An Account</h3>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="text-white">Account Type</label>
                                    <h3 class="text-white">Seller</h3>
                                </div>
                            </div>
                            <div id="contactForm">
                                <div class="row text-left">
                                    <div class="col-sm-12 mt-30 form-group">
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
                                        <label for="company_name">{{ __('Company Name') }}<abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" autocomplete="company_name" autofocus placeholder="Company Name">
                                        
                                        @error('company_name')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label for="phone_number">{{ __('Phone Number') }}<abbr class="text-danger" title="required field">*</abbr></label>
                                        <input type="text" id="phone" name="phone_number">
                                        <small style="color: #999;">(Enter contact phone) </small>
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label for="password">{{ __('Password') }}<abbr class="text-danger" title="required field">*</abbr></label>
                                        <input type="password" id="password" name="password">
                                        <small style="color: #999;">(Create Unique Password, Minimum of 8
                                            characters)</small>
                                    </div>
                                     <div class="col-sm-12 form-group">
                                        <label for="password_confirmation">{{ __('Confirm Password') }}<abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="password_confirmation" type="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" autocomplete="password_confirmation" autofocus placeholder="Confirm Password">
                                        
                                        @error('password_confirmation')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-sm-12 text-center">
                                        <button class="btn btn-primary" id="form-submit">Create Account</button>
                                    </div>

                                    <hr>
                                    <div class="col-sm-12 text-center pt-30">Have an account yet? <a href="{{ url('seller/login') }}">Login</a>
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

