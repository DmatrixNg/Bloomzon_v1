
        
@extends('layouts.dashboard.seller')
@section('page_title')
    Seller Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="panel-group text-center mt-5 mb-5" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading p-5">
                        <a style="color: #02499B;" href="{{url('/manufacturer/login')}}">
                             <h2 class="panel-title"><i class="fas fa-upload"></i> Account Upgrade</h2>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading p-5">
                        <a style="color: #02499B;" href="{{route('seller.all-coupons')}}">
                             <h2 class="panel-title"><i class="fas fa-bullhorn"></i> Promotion Code</h2>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading p-5">
                        <a style="color: #02499B;" href="{{url('seller/subscription')}}">
                             <h2 class="panel-title"><i class="fas fa-box-open"></i> Package Update</h2>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading p-5">
                        <a style="color: #02499B;" href="{{url('seller/policy')}}">
                             <h2 class="panel-title"><i class="fas fa-handshake"></i> Trading Policies</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endsection
    