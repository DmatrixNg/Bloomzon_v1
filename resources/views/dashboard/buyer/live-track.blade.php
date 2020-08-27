@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection
@php
    $delivered_purchase_count = $transit_purchase_count = 0;
    foreach ($user_metas->Purchase as $purchases)
        {
            if($purchases->status === 'delivered'){
                ++$delivered_purchase_count;
            }
             if($purchases->status === 'in_transit'){
                ++$transit_purchase_count;
            }
        }

@endphp

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Live Tracking</b></h1>
                </div>
                <div class="row col-md-12" style="background-color: #2B2950 !important; padding-top: 80px;">

                    <div class="col-md-3 text-center m-auto">
                        <div class="p-5 m-5 m-auto" style="border-radius: 50%; width: 200px; height: 200px; background-color: #5C5B78; color: white; vertical-align: middle;">
                            <div class="pt-5 m-auto">
                                <h1>{{$delivered_purchase_count}}</h1>
                            </div>
                        </div>
                        <h3 class="text-white">Total Goods Delivered</h3>
                    </div>

                    <div class="col-md-3 text-center m-auto">
                        <a href="wallet-transaction-history">
                            <div class="p-5 m-5 m-auto" style="border-radius: 50%; width: 200px; height: 200px; background-color: #5C5B78; color: white; vertical-align: middle;">
                                <div class="pt-5 m-auto">
                                    <h1>{{$transit_purchase_count}}</h1>
                                </div>
                            </div>
                            <h3 class="text-white">Total Goods on Transit</h3>
                        </a>
                    </div>

                </div>
                <div class="row col-md-12 mt-0" style="background-color: #2B2950 !important; padding-top: 60px; padding-right: 20px; padding-left: 20px; padding-bottom: 200px;">

                    <div class="col-md-6 offset-3 mb-2 text-center">
                        <label for="" class="text-white">Transaction ID</label>
                        <input type="text" id="order_id" class="form-control">
                        <small class="pull-right" style="color: #f2f2f2">Track your product</small>
                    </div>
                    <div class="col-md-6 offset-3 text-center">
                        <a href="live-tracking-realtime" id="live_track" class="btn" style="width: 120px; height: 40px; color: #fff; border: 1px solid #fff; border-radius: 20px; margin: 0px auto;">START</a>
                    </div>

                </div>
            </div>
        @endsection

@push('scripts')
    <script>
        document.getElementById('live_track').onclick = function(e){
            e.preventDefault();
            window.location.href=`/live-tracking-realtime?order_id=${document.getElementById('order_id').value}`
        }
    </script>
@endpush
