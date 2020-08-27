

@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-center" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                            <h1 style="padding: 10px;"><b>Track Delivery Merchants</b></h1>
                            <div class="badge badge-danger col-2 p-3 m-3" style="background-color: crimson;">Agent ID: John219</div>
                            <div class="badge badge-danger col-2 p-3 m-3" style="background-color: crimson;">Distance: 10Km Away</div>
                            <img src="{{asset('assets/dashboard/img/route.png')}}" height="600">
                        </div>
                    </div>
                </div>
            </div>
        @endsection
