

@extends('dashboard.grocery.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row text-center card pr-0" style="text-align: center !important; color:white; background-color: #fff;">
                    <div class="col-md-12" style="background-color: #02499B !important; padding-top: 40px; padding-bottom: 40px; border-bottom-left-radius: 75%; border-bottom-right-radius: 75%;">
                        <i class="fa fa-user-circle fa-4x"></i>
                        <div class="pt-5" style="color: #fff  !important; font-size: 19px;">
                            <b> Your Package: </b><span><b>BASIC</b></span>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3 p-5">
                        <a href="edit-profile" class="btn btn-danger btn-lg">Upgrade to PREMIUM</a>
                    </div>
                </div>
            </div>
        @endsection
