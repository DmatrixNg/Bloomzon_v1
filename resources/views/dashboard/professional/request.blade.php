@extends('dashboard.professional-service.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

@section('content')
    <div class="col-md-10"  style="background-color: white; padding: 10px;">
        <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
            <h1 class="text-center m-auto pt-3 pb-3 "><b>Order Requests</b></h1>
        </div>
        <div class="row">

            @if(count($orders = $user_metas->Order))
                @foreach($orders as $order)

                    <div class="col-md-6">
                        <div class="row"  style="border: 1px solid #f2f2f2; border-radius: 5px; margin: 10px;">
                            <div class="col-md-3 m-auto">
                                <img src="manufacturer_asset/img/profil.png" width="120" height="120" style="border-radius: 60px;">
                            </div>
                            <div class="col-md-4 text-center m-auto">
                                <p><b>ORDER ID:</b> {{$order->id->order_id}}</p>
                            </div>
                            <div class="col-md-4 text-right m-auto">
                                <a href="order-details?order={{base64_encode(json_encode($order))}}" class="btn btn-danger btn-sm mb-3 mt-3">Order Details</a>
                                <a href="delivery-status" class="btn btn-danger btn-sm mb-3">Delivery Status</a>
                                <a href="attachments" class="btn btn-primary btn-sm mb-3">Attachments</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
@endsection
