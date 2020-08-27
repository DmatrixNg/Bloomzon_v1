

@extends('dashboard.professional-service.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12" style="background-color: #fff !important; padding: 10px;">
                    <div class="mb-5" style="background-color: #02499B; width: 100%; padding: 10px 20px;">
                        <div class="col-md-12 text-center text-white">
                            <h1>
                                Wallet Transaction History
                            </h1>
                        </div>
                    </div>
                    <div class="row col-md-5 m-auto text-center" style="background-color: #fff; padding: 10px 0px; -moz-box-shadow: 0 0 3px #ccc; -webkit-box-shadow: 0 0 3px #ccc; box-shadow: 0 0 3px #ccc;">
                        <div class="col-md-4 text-right p-3">
                            <img src="../../../../public/prof_asset/img/profil.png" class="img img-circle m-auto" width="80" height="80">
                        </div>
                        <div class="col-md-8 text-left">
                            <h3 style=" color: #02499B; ">NAME: Mathew</h3>
                            <h3 style="color: #02499B; ">Balance: N60,000</h3>
                        </div>
                    </div>
                    <div class="row col-md-12 mt-5 mb-5 pb-5">

                        <div class="col-md-4">
                            <div class="row m-2" style="background-color: white !important; padding: 20px; border: 1px solid #dddddd;">
                                <div class="col-md-4 m-auto p-2">
                                    <p><span style="font-weight: bolder"><em>Credit</em></span></p>
                                    <p>Soup, Semovita</p>
                                </div>
                                <div class="col-md-4 m-auto p-2 text-center">
                                    <p><span style="font-weight: bolder">N20,000</span></p>
                                    <p>Ose345</p>
                                </div>
                                <div class="col-md-4 text-center p-4 text-white m-0 m-auto" style="background-color: #02499B;">
                                    <p>15 March
                                        <br>2020</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="row m-2" style="background-color: white !important; padding: 20px; border: 1px solid #dddddd; ">
                                <div class="col-md-4 m-auto p-2 ">
                                    <p><span style="font-weight: bolder "><em>Debit</em></span></p>
                                    <p>Withdrawal from Wallet</p>
                                </div>
                                <div class="col-md-4 m-auto p-2 text-center ">
                                    <p><span style="font-weight: bolder ">N20,000</span></p>
                                    <p>Ose345</p>
                                </div>
                                <div class="col-md-4 text-center p-4 text-white m-0 m-auto " style="background-color: #02499B; ">
                                    <p>15 March
                                        <br>2020</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="row m-2" style="background-color: white !important; padding: 20px; border: 1px solid #dddddd;">
                                <div class="col-md-4 m-auto p-2 ">
                                    <p><span style="font-weight: bolder "><em>Credit</em></span></p>
                                    <p>Food from buyer</p>
                                </div>
                                <div class="col-md-4 m-auto p-2 text-center ">
                                    <p><span style="font-weight: bolder ">N20,000</span></p>
                                    <p>Ose345</p>
                                </div>
                                <div class="col-md-4 text-center p-4 text-white m-0 m-auto " style="background-color: #02499B; ">
                                    <p>15 March
                                        <br>2020</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endsection
