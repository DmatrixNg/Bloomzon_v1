

@extends('layouts.dashboard.admin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10 mt-4 mb-4">
                <div class="card p-0">
                <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-12 text-center ml-0">
                        <h2>Reply Review &amp; Feedback</h2>
                    </div>

                </div>
                <div class="row col-md-12 p-3 " style="padding: 20px;">
                    <div class="col-md-6 p-3 ml-5" >
                        <div class="row ">

                            <div class="col-md-6 text-left "><img src="../../../../public/super-asset/img/profil.png" class="img img-circle" width="50" height="50"> <b>Ose123</b></div>
                            <div class="col-md-6 text-right ">12/05/2020 11:23AM</div>
                        </div>
                        <p>Your request has been treated, the seller has been contacted, your goods is currently on transit. We apologise for the inconvenience.</p>
                    </div>
                </div>
                <div class="row col-md-12" style="margin-bottom: 600px !important;">
                    <div class="col-md-6 offset-6" >
                        <div class="row ">
                            <div class="col-md-6 text-left "><img src="../../../../public/super-asset/img/profil.png" class="img img-circle" width="50" height="50"> <b>Shopper123</b></div>
                            <div class="col-md-6 text-right ">12/05/2020 11:23AM</div>
                        </div>
                        <p>Thank you for your feedback.</p>
                    </div>
                </div>
                <div class="row col-md-12 text-center ml-1" style="padding: 10px; text-align: center !important; color:white; border-top: solid #ccc 1px; ">
                    <div class="form-inline  col-md-12 m-auto">
                        <input type="text " class="form-control col-10" style="height: 40px; border-radius: 0px;">
                        <button class="btn btn-secondary btn-sm col-2" style="height: 40px; border-radius: 0px;">Reply</button>
                    </div>
                </div>
                </div>
            </div>
        @endsection
