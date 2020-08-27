

@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Bloomzon Products</h1>
                    </div>
                </div>
                <div class="row">

                    @foreach($bproducts as $product)
                        <div class="col-md-2 p-3 mb-4">
                            <div class="card p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border-radius: 0px !important;">
                                <div class="badge pull-right" style="top: 0; right: 0; position: absolute; background-color: green;">NEW</div>
                                <div class="row p-2">
                                    <div class="col-md-12 text-center p-4">
                                        <img src="{{asset('buyer_assets/img/logitech.png')}}" class="img m-auto" height="120" width="auto">
                                        <h4>{{$product->product_name}}</h4>
                                        <p><b>&#8358;{{$product->product_price}}</b></p>
                                    </div>
                                    <div class="col-md-12 text-center mt-2">
                                        <button type="button" class="btn btn-danger btn-sm m-auto">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                </div>
            </div>
        @endsection
