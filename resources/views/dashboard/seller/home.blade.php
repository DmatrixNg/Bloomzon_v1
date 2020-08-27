@extends('layouts.dashboard.seller')
@section('page_title')
    Seller's Dashboard
    @endsection
@section('content')
    <div class="col-md-10">
        <br>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4 p-5">
                    <a href="#">
                        <div class="card align-items-center" style="padding: 20px; border-radius: 20px; height: 150px;">
                            <img src="{{asset('assets/dashboard/img/dashicon.png')}}" alt="">
                            <h4 style="color: #BA220E;">{{ count($sales)}}</h4>
                            <h5 style="color: #02499B;">Total Sales</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 p-5">
                    <a href="#">
                        <div class="card align-items-center" style="padding: 20px; border-radius: 20px; height: 150px;">
                            <img src="{{asset('assets/dashboard/img/dashicon2.png')}}" alt="">
                            <h4 style="color: #BA220E;">{{count($orders)}}</h4>
                            <h5 style="color: #02499B;"><a href="#"> Total Orders </a> </h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 p-5">
                    <a href="#">
                        <div class="card align-items-center" style="padding: 20px; border-radius: 20px; height: 150px;">
                            <img src="{{asset('assets/dashboard/img/dashicon3.png')}}" alt="">
                            <h4 style="color: #BA220E;">{{count($withdrawals)}}</h4>
                            <h5 style="color: #02499B;">Widthdrawals</h5>

                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 p-5">
                    <a href="#">
                        <div class="card align-items-center" style="padding: 20px; border-radius: 20px; height: 150px;">
                            <img src="{{asset('assets/dashboard/img/dashicon4.png')}}" alt="">
                            <h4 style="color: #BA220E;">{{$withdrawals->sum('amount')}} </h4>
                            <h5 style="color: #02499B;">Total Profit</h5>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 p-5">
                    <a href="#">
                        <div class="card align-items-center" style="padding: 20px; border-radius: 20px; height: 150px;">
                            <img src="{{asset('assets/dashboard/img/dashicon5.png')}}" alt="">
                            <h4 style="color: #BA220E;">{{count($orders->where('status','moved_to_warehouse'))}} </h4>
                            <h5 style="color: #02499B;">Shoppers</h5>

                        </div>
                    </a>
                </div>
                <div class="col-md-4 p-5">
                    <a href="#">
                        <div class="card align-items-center" style="padding: 20px; border-radius: 20px; height: 150px;">
                            <a href="/manufacturer/login">
                            <img src="{{asset('assets/dashboard/img/dashicon6.png')}}" alt="">
                            <h5 style="color: #02499B;"> Upgrade account  </h5>
                            </a>

                        </div>
                    </a>
                </div>


            </div>

        </div>
        <br>
    </div>
@endsection
