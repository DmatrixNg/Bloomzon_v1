@extends('dashboard.manufacturer.layouts.app')
@section('content')

<div class="col-md-10" style="background-color: #6610f2;">
    <div class="row row justify-content-center mt-5"><h1 class="text-white">Transaction Details</h1></div>

    <div class="row">
        <div class="col-md-6 offset-3" style="padding: 30px;">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="text-white">Service Description</h3>
                </div>
                <div class="col-md-8 card pt-4 pb-4">
                    <p>{{ $request_details->service_description }}</p>
                </div>
            </div>
            
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 offset-3">
            <div class="text-white justify-content-center">
                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                        Consultant:
                    </div>
                    <div class="col-md-6 text-right">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$request_details->admin->full_name}}</div>
                    </div>
                </div>
                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                        Supply Request:
                    </div>
                    <div class="col-md-6">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{ $request_details->supply_request }}</div>
                    </div>
                </div>
                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                        Payment Method:
                    </div>
                    <div class="col-md-6">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{ $request_details->payment_method }}</div>
                    </div>
                </div>
                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                        Amount:
                    </div>
                    <div class="col-md-6">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">${{ $request_details->amount }}</div>
                    </div>
                </div>
                <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-6 text-left">
                        Date:
                    </div>
                    <div class="col-md-6">
                        <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{ $request_details->created_at }}</div>
                    </div>
                </div>
                
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection
