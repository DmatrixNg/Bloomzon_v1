@extends('layouts.dashboard.buyer')
@section('page_title')
  Purchase History | Buyer's Dashboard
@endsection
<?php


?>
        @section('content')
        <div class="col-md-10">

                <div class="p-0">
                    <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                        <div class="col-md-12 text-center ml-0">
                            <h2>Purchase History</h2>

                        </div>
                    </div>

                @if(count($orders))
                        @foreach($orders as $purchase)
                          @php
                            // dd($purchase->order_details->first()->first());
                          @endphp
                            <div class="row col-md-12 mb-2 ml-1" style="border-bottom: 1px solid #f2f2f2; padding: 20px;">
                                <div class="col-md-5">

                                    <img src="{{asset('storage/assets/product/avatars/'.$purchase->order_details->first()->products->avatars[0] )}}" width="80" alt="">



                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <p><span style="font-weight: bolder"></span>Product Details:


                                            {{$purchase->order_details->first()->product->product_name}} ({{$purchase->order_details->first()->product->quantity}} piece(s))

                                        </p>
                                        <p><span style="font-weight: bold">Billing Address:</span> {{$purchase->billing_address}}</p>
                                        <p><span style="font-weight: bolder">Purchase Date: {{$purchase->created_at}}</span></p>
                                        <p><span style="font-weight: bold" class="badge bg-{{$purchase->payment_status?'success':'danger'}}"> {{$purchase->payment_status?'Paid':'Pending'}}</span></p>
                                    </div>

                                </div>
                                <div class="col-md-2">
                                <a href="{{url(app()->getLocale().'/track-delivery',$purchase->order_details->first()->order->id)}}" style="border-radius: 25px;" type="button" class="btn btn-danger btn-sm mb-2">Track Order</a>
                                    <a href="{{url('buyer/view-order-details/'.$purchase->order_details->first()->order->id)}}" style="border-radius: 25px;" type="button" class="btn btn-danger btn-sm mb-2">View Order Details</a>
                                <a href="{{route('buyer.delivery-status',$purchase->order_details->first()->order->id)}}" style="border-radius: 25px;" type="button" class="btn btn-info btn-sm">Delivery Status</a>
                                </div>

                            </div>
                            @endforeach
                            <div class="row col-md-6 text-center m-auto">

                                    {{$orders->links()}}

                            </div>
                        @else
                        <div class="text-center">
                        <h4>There are no record of purchases made</h4>
                        </div>
                @endif


                </div>
            </div>
        @endsection
