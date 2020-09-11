
@extends('layouts.dashboard.admin')

@section('content')

<div class="col-md-10" style="background-color: #6610f2;">
    <div class="row row justify-content-center mt-5"><h1 class="text-white">Shopper Details</h1></div>

    <div class="row mt-5">
        <div class="col-md-6 offset-3">
            <div class="text-white justify-content-center">

                <img width="200px" src="{{ asset('storage/assets/shopper/avatar/'. $shopper->avatar) }}" />
                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                        Company Name:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$shopper->company_name}}</div>
                    </div>
                </div>

                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                    profession:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$shopper->company_name}}</div>
                    </div>
                </div>

                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                        Full Name:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$shopper->full_name}}</div>
                    </div>
                </div>

                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                        Company Name:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$shopper->company_name}}</div>
                    </div>
                </div>

                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                        Email:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$shopper->email}}</div>
                    </div>
                </div>

                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                    wallet:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$shopper->wallet}}</div>
                    </div>
                </div>

                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                    Address:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$shopper->street_address}}</div>
                    </div>
                </div>



            </div>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection
