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
                        <form class="contact-form mt-sm-30 col-md-12" method="POST" action="{{ url('fast_food_grocery/register') }}">
                            @csrf
                           
                            <div class="row p-5"
                                style="background-color: #02499B !important; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                <div class="form-group col-md-12">
                                    <h3 class="text-white">Setup A Fast Food & Grocery's Account</h3>
                                </div>


                                <div class="form-group col-md-12 d-none">
                                    <label class="text-white">Account Type</label>
                                    <select class="form-control" name="account_type">
                                        <option value="buyer">Buyer</option>
                                        <option value="seller">Seller</option>
                                        <!-- <option value="grocery">Fast Food & Vendor</option> -->
                                        <option value="grocery">Groceries Seller</option>
                                        <option value="networkingAgent">Networking Agent</option>
                                        <option value="manufacturer">Manufacturer</option>
                                        <option value="professionalService">Professional Service</option>
                                    </select>
                                </div>

                            </div>

                            @error('phone_number')
                            ASDAS
                            @enderror
                            <div id="contactForm">
                               
                                <div class="row text-left">

                                    <div class="col-sm-12 mt-30 form-group">
                                        <label for="full_name">{{ __('Full Name') }}<abbr class="text-danger"
                                                title="required field">*</abbr></label>
                                        <input id="full_name" type="text"
                                            class="form-control @error('full_name') is-invalid @enderror" name="full_name"
                                            value="{{ old('full_name') }}" autocomplete="full_name" autofocus placeholder="Full name">

                                        @error('full_name')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label for="company_name">{{ __('Company Name') }}<abbr class="text-danger"
                                                title="required field">*</abbr></label>
                                        <input id="company_name" type="text"
                                            class="form-control @error('full_name') is-invalid @enderror" name="company_name"
                                            value="{{ old('company_name') }}" autocomplete="company_name" autofocus placeholder="Company name">

                                        @error('company_name')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 mt-30 form-group">
                                        <label for="email">{{ __('Email Address') }}<abbr class="text-danger"
                                                title="required field">*</abbr></label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email" placeholder="Email">

                                        @error('email')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <label for="phone_number">{{ __('Phone Number') }}<abbr class="text-danger"
                                                title="required field">*</abbr></label>
                                        <input id="phone_number" type="text"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            name="phone_number" value="{{ old('phone_number') }}"
                                            autocomplete="phone_number" placeholder="Phone Number">

                                        @error('phone_number')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <label for="delivery_method">{{ __('Delivery Method') }}<abbr class="text-danger"
                                                title="required field">*</abbr></label>
                                        <select id="delivery_method" class="form-control @error('delivery_method') is-invalid @enderror" name="delivery_method" value="{{ old('delivery_method') }}" autocomplete="delivery_method" placeholder="Phone Number">
                                            <option value="Bike">Bike</option>
                                            <option value="Car">Car</option>
                                        </select>
                                        @error('delivery_method')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <label for="delivery_agent">{{ __('Delivery Agent') }}<abbr class="text-danger"
                                                title="required field">*</abbr></label>
                                        <select id="delivery_agent" class="form-control @error('delivery_agent') is-invalid @enderror" name="delivery_agent" value="{{ old('delivery_agent') }}" autocomplete="delivery_agent" placeholder="Phone Number">
                                            <option value="Personal">Personal</option>
                                            <option value="Bloomzon Rider">Bloomzon Rider</option>
                                        </select>
                                        @error('delivery_agent')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <label for="password">{{ __('Password') }}<abbr class="text-danger"
                                                title="required field">*</abbr></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" autocomplete="password" autofocus placeholder="Password">
                                        @error('password')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-12 form-group">
                                        <label for="password_confirmation">{{ __('Confirm Password') }}<abbr
                                                class="text-danger" title="required field">*</abbr></label>
                                        <input id="password_confirmation" type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" value="{{ old('password_confirmation') }}"
                                            autocomplete="password_confirmation" autofocus placeholder="Confirm Password">

                                        @error('password_confirmation')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <ul id="error_list"></ul>
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary btn-lg">Register</button>
                                    </div>

                                    <hr>
                                    <div class="col-sm-12 text-center pt-30">
                                        Have an account yet?
                                        <a href="{{ url('fast_food_grocery/login') }}">Login</a>
                                        <br>
                                        <br>
                                    </div>

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

