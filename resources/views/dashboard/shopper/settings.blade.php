@extends('layouts.dashboard.shopper')
@section('page_title')
    Settings
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="card p-0">
                <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-12 text-center ml-0">
                        <h2>Settings</h2>
                    </div>

                </div>
                <div class="row mb-3" style="padding: 20px; padding-bottom: 380px;">
                    <div class="col-md-8 offset-2 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                        <a href="{{url('/shopper/edit-profile')}}">
                            <div class="col-md-3">
                                <img src="{{asset('storage/assets/shopper/avatar/'.$shopper->avatar)}}" class="img img-circle" width="60" height="60">
                            </div>
                            <div class="col-md-6">
                                <span class="" style="color: #02499B  !important; font-size: 19px;">
                               <b> Edit Profile Details</b>
                            </span>
                                <p style="font-size: 15px;">View and edit your information</p>
                            </div>
                            <div class="col-md-3 text-right">
                                <i class="fa fa-angle-right fa-4x"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 offset-2 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                        <a href="account-details">
                            <div class="col-md-3">
                                <i style="color: #02499B  !important;" class="fas fa-money-check-alt  fa-4x pl-3"></i>
                            </div>
                            <div class="col-md-6">
                                <span class="" style="color: #02499B  !important; font-size: 19px;">
                                   <b> Account Details</b>
                                </span>
                                <p style="font-size: 15px;">View and edit your details to receive payment</p>
                            </div>
                            <div class="col-md-3 text-right">
                                <i class="fa fa-angle-right fa-4x"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 offset-2 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                        <a href="contact-admin">
                            <div class="col-md-3">
                                <i style="color: #02499B  !important;" class="fas fa-headset fa-4x pl-3"></i>
                            </div>
                            <div class="col-md-6">
                                <span class="" style="color: #02499B  !important; font-size: 19px;">
                                   <b>Contact Admin</b>
                                </span>
                            </div>
                            <div class="col-md-3 text-right">
                                <i class="fa fa-angle-right fa-4x"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 offset-2 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                        <div class="col-md-3">
                            <i style="color: #02499B  !important;" class="fas fa-sign-out-alt fa-4x pl-3"></i>
                        </div>
                        <div class="col-md-6">
                            <span class="" style="color: #02499B  !important; font-size: 19px;">
                               <b> <a href="logout">Sign Out</a></b>
                            </span>
                        </div>
                        <div class="col-md-3 text-right">
                            <i class="fa fa-angle-right fa-4x"></i>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endsection
