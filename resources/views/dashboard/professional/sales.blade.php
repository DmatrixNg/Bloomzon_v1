@extends('layouts.dashboard.professional')
@section('page_title')
    Professional
@endsection

@section('content')
<div class="col-md-10">
    <div class="row align-items-center mt-5 mb-5">
        <div class="col-lg-5 col-sm-5 col-5 ">
            <div class="dropdown col-2">
                <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="">Name</a>
                    <a class="dropdown-item" href="">Date</a>
                    <a class="dropdown-item" href="">Account</a>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-sm-12 d-flex order-3 p-2">
            <h2><strong>My History</strong></h2>
        </div>

        <div class="col-lg-3 col-sm-9 col-10 order-2 order-lg-3">
            <div class="widgets-wrap d-flex justify-content-end">

                <div class="widget-header ml-3">

                    <p type="text"  class="form-control"> Total Sales: {{number_format($total_sales->sum('amount'))}} </p>
                </div>
            </div>

        </div>

    </div>


    <div class="row">
        @if(count($sales))
            @foreach($sales as $sale)
                <div class="col-md-6">
                    <div class="row" style="border: 1px solid #f2f2f2; border-radius: 5px; margin: 10px;">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('storage/assets/product/avatars/'.$sale->product->avatars[0])}}" height="120"  alt="{{$sale->product->product_name}}">
                                </div>
                            </div>


                        </div>
                        <div class="col-md-4 text-center p-4">
                          <p><b>BUYER:</b>  {{$sale->order->orderable->full_name}}</p>
                          <p><b>AMOUNT:</b>  &#8358;{{$sale->product->total}}</p>
                          <p><b>QTY: </b>{{ $sale->product->quantity}}
    
                            </p>

                        </div>
                        <div class="col-md-4 text-right m-auto">
                            <p style="color: grey">{{\Illuminate\Support\Carbon::parse($sale->created_at)->format('d/m/y')}}</p>
                        <a href="{{url('professional/sales/show/'.base64_encode(json_encode($sale)))}}" class="btn" style="background-color: #AF2E1D; border-radius: 5px; width: 130px; color: white;">View Details</a>
                        </div>
                    </div>
                </div>

                @endforeach
            @else
                <div class="col-12">
                    <div class="alert alert-warning">You have no sales record</div>
                </div>
            @endif


    </div>


</div>
@endsection
