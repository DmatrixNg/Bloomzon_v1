
        
@extends('dashboard.professional-service.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row text-center pr-0" style="text-align: center !important; color:white; background-color: #fff;">
                    <div class="col-md-12" style="background-color: #02499B !important; padding-top: 40px; padding-bottom: 40px; border-bottom-left-radius: 75%; border-bottom-right-radius: 75%;">
                        <div style="color: #fff  !important; font-size: 19px; padding-top: 60px; padding-bottom: 60px;">
                            <h2><b> Verify Account</b></h2>
                        </div>
                    </div>
                    <div class="row col-md-6 col-md-offset-3 mt-5">
                        <div class="col-md-6 col-md-offset-3 form-group m-auto">
                            <input type="text" class="form-control col-md-3">
                            <input type="text" class="form-control col-md-3">
                            <input type="text" class="form-control col-md-3">
                            <input type="text" class="form-control col-md-3">
                        </div>
                        <div class="col-md-12 text-center mt-5"><h4 style="color: #02499B;">Enter the one time password(OTP) sent to your mail</h4></div>
                        <h5 class="col-md-12 mt-5" style="color: #999999;"><b>Click <span style="color: crimson;">HERE</span> to send again</b></h5>
                        <div class="col-md-12 text-center mt-5"><a href="#" class="btn btn-danger btn-lg mt-5">Continue</a></div>
                    </div>

                </div>
            </div>
        @endsection
    