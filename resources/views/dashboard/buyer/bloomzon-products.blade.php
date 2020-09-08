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
                    @if(count($bproducts))
                    @foreach($bproducts as $product)
                        <div class="col-md-3 mb-3 p-3">
                            <div class="p-3">
                                <div class="row bg-white p-5" style="height: 280px;">
                                    <img src="{{asset('storage/assets/product/avatars/'.$product->avatars[0])}}" width="100%">
                                </div>
                                <div style="margin-top: -25px;" class="text-right"> <a href="{{url(app()->getLocale().'/product-details/'.base64_encode($product->id))}}" class="btn btn-danger btn-lg">{{$product->product_name}}</a></div>
                            </div>
                        </div>
                        @endforeach


                @else
                <h3 class="alert alert-warning">No product from bloomzon yet - please check back later</h3>
                @endif
                </div>
                {{$bproducts->links()}}
            </div>
        @endsection
