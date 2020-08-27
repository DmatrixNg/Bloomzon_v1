

@extends('dashboard.manufacturer.layout')
@section('page_title')
    Manufacturer's Dashboard - Sales History
@endsection
@section('content')
    <div class="col-md-10">
        <div class="row align-items-center mt-5 mb-5">
            <div class="col-lg-5 col-sm-5 col-5 ">
                <div class="dropdown col-2">
{{--                    <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        Sort--}}
{{--                    </a>--}}
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="">Name</a>
                        <a class="dropdown-item" href="">Date</a>
                        <a class="dropdown-item" href="">Account</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-12 d-flex order-3 p-2">
                <h2><strong>Sales History</strong></h2>
            </div>

            <div class="col-lg-3 col-sm-9 col-10 order-2 order-lg-3">
                <div class="widgets-wrap d-flex justify-content-end">

                    <div class="widget-header ml-3">
                        @php
                            $total_sales = 0;
                            foreach ($user_metas->Sale as $sale){
                                $total_sales+= $sale->total_amount;
                            }
                        @endphp
                        <p type="text"  class="form-control"> Total Sales: N{{$total_sales}} </p>
                    </div>
                </div>

            </div>

        </div>


        <div class="row">
            @if(count($sales = $user_metas->Sale))
                @foreach($sales as $sale)
                    <div class="col-md-6">
                        <div class="row" style="border: 1px solid #f2f2f2; border-radius: 5px; margin: 10px;">
                            <div class="col-md-3">
                                <img src="seller_asset/img/shoe.png">
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="seller_asset/img/baggy.png">

                                    </div>
                                    <div class="col-md-6">
                                        <img src="seller_asset/img/baggy.png">
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-4 text-center p-4">
                                <p><b>BUYER:</b>  {{$sale->seller_id->name}}</p>
                                <p><b>AMOUNT:</b>  &#8358;{{$sale->total_amount}}</p>
                                <p><b>QTY:</b>
                                    @php
                                        $quantity = 0;
                                        foreach ($sale->order_id->id->order_details as $order_detail){
                                            $quantity+= $order_detail->quantity;
                                        }
                                    @endphp
                                    {{$quantity}}
                                </p>

                            </div>
                            <div class="col-md-4 text-right m-auto">
                                <p style="color: grey">{{\Illuminate\Support\Carbon::parse($sale->created_at)->format('d/m/y')}}</p>
                                <a href="saledetail?sale={{base64_encode(json_encode($sale->order_id))}}" class="btn" style="background-color: #AF2E1D; border-radius: 5px; width: 130px; color: white;">View Details</a>
                            </div>
                        </div>
                    </div>

                @endforeach
            @else
            @endif


        </div>

    </div>
    @endsection
