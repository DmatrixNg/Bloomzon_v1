@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection

        @php
        $sellers_arr = [];


        foreach($order->order_details as $order_detail){

            array_push($sellers_arr, $order_detail->product->seller_id->full_name);
        }
        // dd($order->order_details);
        @endphp

        @section('content')
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-10 offset-1">
                        <div class="" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                            <h1 style="padding: 10px; margin: 0px auto;"><b>Order Details</b></h1>
                            <span class="badge badge-danger col-4 p-3 m-3" style="background-color: crimson;"> Seller(s) ID : {{ implode(' , ', $sellers_arr)}}</span>
                            <span class="badge badge-danger col-4 p-3 m-3" style="background-color: crimson;">{{$order->created_at}}</span>
                            <div class="p-3">
                                <ul class="list-group" style="font-size: 18px; color: #000;">
                                    <li class="list-group-item">
                                        <br>
                                        <b>BILLING ADDRESS</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;">{{$order->order_details[0]->order->billing_address}}</span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>AMOUNT (N)</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;">{{$order->total_amount}}</span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>PAYMENT METHOD</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;">{{$order->payment_method === 1 ? 'Card': 'Cash'}}</span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>DELIVERY AGENT</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;">{{$order->delivery_agent_id->name ?? ''}}</span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <b>REVIEW FEEDBACK</b>

                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>STATUS</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;">{{$order->status}}</span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>NO. OF GOODS</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;">{{count($order->order_details)}}</span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>TRANSACTION DATE</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;">{{$order->created_at}}</span>
                                        <br>
                                    </li>
                                </ul>
                            </div>
                            <div class="row col-md-12 text-center m-auto">
                                <button class="btn btn-danger m-auto" data-toggle="modal" data-target="#chater">Chat On This Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
