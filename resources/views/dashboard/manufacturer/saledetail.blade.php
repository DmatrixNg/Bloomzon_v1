@extends('dashboard.manufacturer.layout')
@section('page_title')
    Manufacturer's Dashboard
@endsection

        @section('content')
            <div class="col-md-10">
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-2 text-center" style="background-color: #fff !important; padding: 15px !important;"><img src="seller_asset/img/shoe.png" class="img" width="140" height="105"></div>
                    <div class="col-md-2 text-center" style="background-color: #fff !important; padding: 15px !important;"><img src="seller_asset/img/bag.png" class="img" width="140" height="105"></div>
                    <div class="col-md-2 text-center" style="background-color: #fff !important; padding: 15px !important;"><img src="seller_asset/img/logitech.png" class="img" width="140" height="105"></div>
                </div>
                <div class="row row justify-content-center mt-5"><h2 class="text-white">Product Type</h2></div>

                <div class="row">
                    <div class="card col-md-6 offset-3" style="padding: 30px;">

                        @foreach($sale->id->order_details as $order_detail)
                            <div class="row">
                                <div class="col-md-3">
                                    <p>{{$order_detail->product_id->product_name}}</p>
                                </div>
                                <div class="col-md-3">
                                    <p>-</p>
                                </div>
                                <div class="col-md-3">
                                    <p>{{$order_detail->quantity}} piece(s)</p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6 offset-3">
                        <div class="justify-content-center">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    Buyer:
                                </div>
                                <div class="col-md-6">
                                    {{$sale->user_id->name}}
                                </div>
                            </div><hr>
                            <div class="row text-center">
                                <div class="col-md-6">
                                    Billing Address:
                                </div>
                                <div class="col-md-6">
                                    {{$sale->user_id->billing_address}}
                                </div>
                            </div><hr>
                            <div class="row text-center">
                                <div class="col-md-6">
                                    Amount:
                                </div>
                                <div class="col-md-6">
                                    {{$sale->total_amount}}
                                </div>
                            </div><hr>
                            <div class="row text-center">
                                <div class="col-md-6">
                                    Payment Mode:
                                </div>
                                <div class="col-md-6">
                                    {{$sale->payment_method === 1 ? 'Card': 'Cash'}}
                                </div>
                            </div><hr>
                            <div class="row text-center">
                                <div class="col-md-6">
                                    Delivery Agent:
                                </div>
                                <div class="col-md-6">
                                    {{$sale->delivery_agent_id->name}}
                                </div>
                            </div><hr>
                            <div class="row text-center">
                                <div class="col-md-6">
                                    Review/feedback:
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div><hr>
                            <div class="row text-center">
                                <div class="col-md-6">
                                    Rating:
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        @endsection
