

@extends('dashboard.shopper.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10 mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <a href="delivery-request">
                            <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                                <img src="../../../../public/shopper/img/bike.png" width="120" style="margin: 0 auto;">
                                <h1><b>Delivery Request</b></h1>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="warehouse-package">
                            <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                                <img src="../../../../public/shopper/img/truck.png" width="120" style="margin: 0 auto;">
                                <h1><b>Sent in Goods</b></h1>
                            </div>
                        </a>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-center" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                            <h1 style="padding: 10px;"><b>Track Delivery Merchants</b></h1>
                            <img src="../../../../public/shopper/img/route.png" height="600">
                        </div>
                    </div>
                </div>

            </div>
        @endsection
