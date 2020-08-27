

@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Live Tracking</b></h1>
                </div>
                <div class="row col-md-12 text-center" style="background-color: #2B2950 !important; padding-top: 140px; padding-right:20px; padding-bottom: 140px; padding-left: 20px;">
                    <div class="card col-md-6 offset-3 text-center p-5" style="background-color: #5C5B78;">
                        <div style="border-bottom: 1px solid #ccc;">
                            <i class="fa fa-user-circle fa-4x" style="font-size: 120px; color: #fff;"></i>
                            <h4 class="text-white">Rider: Paul219</h4>
                        </div>
                        <div style="border-bottom: 1px solid #ccc; color: #fff;">
                            <h4>Shopper ID: 37474748</h4>
                            <h4>Package Date: 03/03/2020</h4>
                        </div>
                        <div>
                            <h4 class="text-white">Current Location:Lagos</h4>
                            <h4 style="color:#2B2950;">Rider Distance: 100Km Away</h4>
                        </div>
                    </div>
                    <div class="col-md-6 offset-3 text-center mt-5">
                        <a href="track-order" class="btn" style="width: 180px; height: 40px; color: #fff; border: 1px solid #fff; border-radius: 20px; margin: 0px auto;">LIVE TRACKING</a>
                    </div>
                </div>
            </div>
        @endsection
