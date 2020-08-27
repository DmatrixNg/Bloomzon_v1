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
                        <form class="contact-form mt-sm-30 col-md-12" name="registerForm">

                            <div class="row p-5"
                                style="background-color: #02499B !important; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                                <div class="form-group col-md-12">
                                    <h3 class="text-white">Setup An Account</h3>
                                </div>

                                <div class="form-group col-md-12">
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
                            <div id="contactForm">
                                <div class="row text-left">
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Email Address</label>
                                        <input type="text" id="email" name="email">
                                        <small style="color: #999;">(Enter a unique Email address) </small>
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Full Name</label>
                                        <input type="text" id="name" name="name">
                                        <small style="color: #999;">(Enter your first and last name) </small>
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Phone</label>
                                        <input type="text" id="phone" name="phone">
                                        <small style="color: #999;">(Enter contact phone) </small>
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Password</label>
                                        <input type="password" id="email" name="password">
                                        <small style="color: #999;">(Create Unique Password, Minimum of 8
                                            characters)</small>
                                    </div>
                                    <div class="col-sm-12 mt-30 form-group">
                                        <label>Select operation currency</label>
                                        <select class="form-control" name="operating_currency">
                                            <option value="naira">Naira</option>
                                            <option value="dollars">Dollar</option>
                                            <option value="pounds">Pounds</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button class="btn btn-primary" id="form-submit">Create Account</button>
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

@push('scripts')
    <script>
        FormHandler('registerForm', {
            requestUrl: '/api/v1/crud/users',
            requestType: 'POST',
            cb: response => {
                if (response.success) {
                    return swal({
                        title: 'Success!',
                        text: 'Account created successfully!, check email for further details',
                        icon: 'success',
                        button: 'Proceed to Login'
                    }).then(() => window.location.href = '/login')
                }
                return swal({
                    title: 'Error!',
                    text: 'We had error creating your account.Please try again',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })

    </script>
@endpush
