@extends('layouts.dashboard.shopper')
@section('page_title')
    Shopper Dashboard
@endsection

        @section('content')
        <div class="col-md-10 mb-5">
                <div class="card p-0">
                    <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                        <div class="col-md-12 text-center ml-0">
                            <h1 style="color: #02499B;"><b>Delivery Request</b></h1>
                        </div>

                    </div>
                    @php($orders)
                    <div class="row pl-5 pr-5 pt-5 pb-2">
                      @foreach($orders as $order)
                            <div class="col-md-4 p-3 mb-4">
                                <div class="card p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border-radius: 0px !important;">
                                    <div class="badge pull-right text-white" style="top: 0; right: 0; position: absolute; background-color: green;">{{$order->status}}</div>
                                    
                                    <div class="row p-2">
                                        <div class="col-md-3"> 
                                            <img src="{{asset('storage/assets/product/avatars/'.$order->product->avatars[0])}}" class="img" width="90" alt="">
                                            <p><span style="font-weight: bolder">Order ID:</span><span class="pl-5">{{$order->order_id}}</span></p>
                                        </div>
                                        <div class="col-md-7 mt-4">
                                            <p><span style="font-weight: bolder">Seller:</span><span class="pl-5">{{$order->seller_id->full_name }}</span></p>
                                            
                                            <p><span style="font-weight: bolder">Buyer:</span><span class="pl-5">{{$order->buyer_id->full_name}}</span></p>
                                            <p><span style="font-weight: bolder">Billing Address:</span><br><span>{{$order->buyer_id->billing_address}}</span></p>
                                            <p><span style="font-weight: bolder">STATE:</span><span class="pl-5">{{$order->buyer_id->state}}</span></p>
                                            <p><span style="font-weight: bolder"></span><span><div class="badge text-white bg-warning" >{{$order->shopper_status}}</div></span></p>
                                            
                                        </div>
                                        <div class="col-md-12 text-center mt-2">
                                            <a href="{{route('shopper.delivery-details',$order->id)}}" type="button" class="btn btn-danger m-auto">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          @endforeach

                    </div>
                    <div class="row text-center p-4">
                       {{$orders->links()}}
                    </div>

                </div>
            </div>
        @endsection
