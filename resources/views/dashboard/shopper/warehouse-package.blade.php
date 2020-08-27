@extends('layouts.dashboard.shopper')
@section('page_title')
    Shopper Dashboard
@endsection
    
        @section('content')
        <div class="col-md-10">
                <div class="card p-0">
                <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-8 text-left ml-0">
                        <h2>Shopper's Packaged Goods</h2>
                    </div>
{{--                    <div class="col-md-4 m-auto"><a href="new-package" class="btn btn-danger text-right">New Package</a></div>--}}
                </div>
                
                @foreach($packaged_goods as $packaged_good)
                        <div class="row col-md-12 mb-2 ml-1" style="border-bottom: 1px solid #f2f2f2; padding: 20px;">
                            <div class="col-md-5">
                              
                                <img src="{{asset('storage/assets/product/avatars/'.$packaged_good->order_details->product->avatars[0])}}" width="80">
                              

                            </div>
                            <div class="col-md-5">
                                <p><span style="font-weight: bolder">Buyer: {{$packaged_good->order_details->buyer_id->full_name}}</span></p>
                                <p><span style="font-weight: bolder">Billing Address:  {{$packaged_good->order_details->buyer_id->billing_address}}</span></p>
                                <p><span style="font-weight: bolder"> {{\Carbon\Carbon::parse($packaged_good->created_at)->format('Y/m/d')}}</span></p>
                            </div>

                            <div class="col-md-2">
                                <a href="{{route('shopper.delivery-details',$packaged_good->order_details->id)}}" style="border-radius: 35px; width: 120px;" type="button" class="btn btn-danger">Details</a><br>
                                <a href="{{route('shopper.scan-code',$packaged_good->order_details->id)}}" style="border-radius: 35px; width: 120px;" type="button" class="btn btn-success">Scan code</a><br>
                                <a href="delivery-merchant" style="border-radius: 35px; width: 120px;" type="button" class="btn btn-info">Status</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        @endsection
