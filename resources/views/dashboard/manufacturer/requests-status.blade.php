@extends('dashboard.manufacturer.layouts.app')
@section('content')
<div class="col-md-10" style="background-color: #6610f2;">
    <div class="row row justify-content-center mt-5"><h1 class="text-white">Delivery Status</h1></div>
    
    <div class="row mt-5">
        <div class="col-md-6 offset-3 text-center pt-4 pb-4 text-white" style="background-color: #6278ae; border-radius: 15px;">
            <h3>Transaction ID: <span>{{ $request_details->id }}</span></h3>
            <h3>Manufacturer ID: <span>{{ $request_details->manufacturer->id }}</span></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-2" style="padding: 30px;">
            
            <div class="row" style="background-color: #fff;">
                @foreach($request_details->product->avatars as $avatar)
                    <div class="col-md-4 p-4 text-center">
                        <img src="{{ asset('storage/assets/product/avatars/' . $avatar) }}" height="150" width="150">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6 offset-3">
            <div class="text-white justify-content-center">
                <div class="row p-5">
                    <div class="col-md-8 offset-2 text-center">
                        <form action="{{ url('manufacturer/request-update/' . $request_details->id) }}" method="post">
                            @csrf
                            <select class="form-control">
                                
                                <option value="on_transite" @if($request_details->delivery_status == 'on_transite' ? 'selected' : '') @endif>On Transit</option>

                                <option value="delivered" @if($request_details->delivery_status == 'delivered' ? 'selected' : '') @endif>Delivered to Client</option>

                                <option value="awaiting_balance" @if($request_details->delivery_status = 'awaiting_balance' ? 'selected' : '') @endif>Await Balance Payment</option>

                                <option value="clossed" @if($request_details->delivery_status == 'clossed' ? 'selected' : '') @endif>Closed</option>

                                <option value="processing" @if( $request_details->delivery_status != 'processing' ? 'selected' : '') @endif>Processing</option>
                            </select>
                            <br>
                            <input type="submit" value="Update Status" class="btn btn-primary"/>
                        <form>
                    </div>
                </div>
                
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection
