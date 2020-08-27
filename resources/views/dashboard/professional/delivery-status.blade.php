

@extends('dashboard.professional-service.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Your Delivery Status</b></h1>
                </div>
                <div class="row col-md-12" style="background-color: #2B2950 !important; padding-top: 100px; padding-right: 20px; padding-left: 20px; padding-bottom: 20px;">

                    <div class="col-md-3 text-center m-auto">
                        <div class="p-5 m-5 m-auto" style="border-radius: 50%; width: 200px; height: 200px; background-color: #5C5B78; color: white; vertical-align: middle;">
                            <div class="pt-5 m-auto">
                                <h1>9</h1>
                            </div>
                        </div>
                        <h3 class="text-white">Total Delivered Product</h3>
                    </div>

                    <div class="col-md-3 text-center m-auto">
                        <a href="#">
                            <div class="p-5 m-5 m-auto" style="border-radius: 50%; width: 200px; height: 200px; background-color: #5C5B78; color: white; vertical-align: middle;">
                                <div class="pt-5 m-auto">
                                    <h1>2</h1>
                                </div>
                            </div>
                            <h3 class="text-white">Product in Transit</h3>
                        </a>
                    </div>

                </div>
                <div class="row col-md-12 mt-0" style="background-color: #2B2950 !important; padding-top: 20px; padding-right: 20px; padding-left-20px; padding-bottom: 190px;">

                    <div class="col-md-6 mb-2">
                        <div class="p-4" style="background-color: white !important; padding: 20px; width: 100%; height: 100%;">
                            <div class="col-md-3 pl-0">
                                <div class="col-md-2"> <img src="../../../../public/prof_asset/img/shoe.png" class="img" width="40">
                                    <img src="../../../../public/prof_asset/img/baggy.png" class="img" width="40"> </div>
                                <div class="col-md-2 ml-3"> <img src="../../../../public/prof_asset/img/logitech.png" class="img" width="40"> </div>
                            </div>
                            <div class="col-md-5">
                                <p><span>Billing Address:</span> </p>
                                <p><span>Amount:</span> </p>
                                <p><span>Delivery Agent:</span></p>
                            </div>
                            <div class="col-md-4 pt-4" style="margin: 0 auto !important;">
                                <select name="" id="" class="form-control">
                                <option value="">Edit Status</option>
                                <option value="">Packaged</option>
                                <option value="">Received</option>
                                <option value="">On Transit</option>
                                <option value="">Warehouse</option>
                            </select>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="p-4" style="background-color: white !important; padding: 20px; width: 100%; height: 100%;">
                            <div class="col-md-3 pl-0">
                                <div class="col-md-2"> <img src="../../../../public/prof_asset/img/shoe.png" class="img" width="40">
                                    <img src="../../../../public/prof_asset/img/baggy.png" class="img" width="40"> </div>
                                <div class="col-md-2 ml-3"> <img src="../../../../public/prof_asset/img/logitech.png" class="img" width="40"> </div>
                            </div>
                            <div class="col-md-5">
                                <p><span>Billing Address:</span> </p>
                                <p><span>Amount:</span> </p>
                                <p><span>Delivery Agent:</span></p>
                            </div>
                            <div class="col-md-4 pt-4" style="margin: 0 auto !important;">
                                <select name="" id="" class="form-control">
                                <option value="">Edit Status</option>
                                <option value="">Packaged</option>
                                <option value="">Received</option>
                                <option value="">On Transit</option>
                                <option value="">Warehouse</option>
                            </select>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        @endsection
