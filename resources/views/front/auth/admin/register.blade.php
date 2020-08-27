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
                        <form action="{{url('admin/register')}}" method="post" class="contact-form mt-sm-30 col-md-12" >
                        @csrf

                            <div class="row p-5"
                                style="background-color: #02499B !important; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                <div class="form-group col-md-12">
                                    <h3 class="text-white">Setup An Account</h3>
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="text-white">Account Type</label>
                                    {{-- <select class="form-control" name="account_type">
                                        <option value="buyer">Buyer</option>
                                        <option value="seller">Seller</option>
                                        <!-- <option value="grocery">Fast Food & Vendor</option> -->
                                        <option value="grocery">Groceries Seller</option>
                                        <option value="networkingAgent">Networking Agent</option>
                                        <option value="manufacturer">Manufacturer</option>
                                        <option value="professionalService">Professional Service</option>
                                    </select> --}}
                                </div>
                            </div>
                            <div id="contactForm">
                                <div class="row text-left">
                                    <div class="col-sm-12 form-group">
                                        <label for="email">{{ __('Email') }}<abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">
                                        
                                        @error('email')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="name">{{ __('Full Name') }}<abbr class="text-danger" title="required field">*</abbr></label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Full Name">
                                        
                                        @error('name')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Password</label>
                                        <input type="password" id="email" name="password">
                                        <small style="color: #999;">(Create Unique Password, Minimum of 8
                                            characters)</small>
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Password</label>
                                        <input type="confirm_password" id="confirm_password" name="confirm_password">
                                        <small style="color: #999;">Enter Code here again to confirm</small>
                                    </div>
                                    {{-- <div class="col-sm-12 mt-30 form-group">
                                        <label>Select operation currency</label>
                                        <select class="form-control" name="operating_currency">
                                            <option value="naira">Naira</option>
                                            <option value="dollars">Dollar</option>
                                            <option value="pounds">Pounds</option>
                                        </select>
                                    </div> --}}
                                    <div class="col-sm-12 text-center">
                                        <button class="btn btn-primary">Create Account</button>
                                    </div>

                                    <hr>
                                    <div class="col-sm-12 text-center pt-30">Have an account yet? <a href="login">Login</a>
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

