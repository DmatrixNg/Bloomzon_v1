@extends('dashboard.manufacturer.layouts.app')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection
        @section('content')
        <div class="col-md-10">
            <br>
            <div class="container" style="background-color: #02499B; height: 100px; padding: 30px;">
                <div class="card align-items-center" style="background-color: white; height: 50px; color: #02499B; padding: 10px;">
                    <h4>My Account Information</h4>
                </div>
            </div>
            <div class="col-md-6 offset-3 pt-5" style="background-color: white;">
              <a href="{{ url('/manufacturer/view-profile') }}">
                  <div class="row">
                      <div class="col-md-3">
                          <img src="{{ asset('storage/manufacturer/' . auth()->guard('manufacturer')->user()->avatar) }}" class="img" style="border-radius: 50px" width="70" height="70" >
                      </div>
                      <div class="col-md-7">
                          <h5 style="color: #02499B;">Edit Profile Details</h5>
                          <p style="color: #02499B;">View and edit your information</p>
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md-1">
                          <i style="color: #02499B;" class="fa fa-chevron-right"></i>
                      </div>

                  </div>
              </a>
                <br>
                <hr>
                <br>
                <a href="{{ url('manufacturer/edit_account_details') }}">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('manufacturer_assets/img/creditcardicon.png') }}">
                        </div>
                        <div class="col-md-7">
                            <h5 style="color: #02499B;">Account Details</h5>
                            <p style="color: #02499B;">View and edit your details to receive payment</p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1">
                            <i style="color: #02499B;" class="fa fa-chevron-right"></i>
                        </div>

                    </div>
                </a>
                <br>
                <hr>
                <br>
                <a href="{{ url('/manufacturer/subscription') }}">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('manufacturer_assets/img/faqicon.png') }}">
                        </div>
                        <div class="col-md-7">
                            <h5 style="color: #02499B;">User Account Type</h5>
                            <p style="color: #02499B;">(View your account type and upgrade)</p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1">
                            <i style="color: #02499B;" class="fa fa-chevron-right"></i>
                        </div>

                    </div>
                </a>
                <br>
                <hr>
                <br>
                <a href="{{ url('manufacturer/logout') }}">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('manufacturer_assets/img/signouticon.png') }}">
                        </div>
                        <div class="col-md-7">
                            <h5 style="color: #02499B;"><a href="logout">Sign Out</a></h5>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1">
                            <i style="color: #02499B;" class="fa fa-chevron-right"></i>
                        </div>

                    </div>
                </a>

            </div>

        </div>
        @endsection
