@extends('dashboard.manufacturer.layout')
@section('page_title')
    Manufacturer's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center mb-5" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Your Products</b></h1>
                    <a href="add-product" style="border: 1px #fff solid; color: #fff; padding: 10px; border-radius: 20px; height: 40px; margin-top: 10px;">Add Product</a>
                </div>

                <div class="row">

                    @if(count($products = $user_metas->Product))
                        @foreach($products as $product)
                            <div class="col-md-6 p-4">
                                <div class="row" style="background-color: white !important; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border-radius: 0px !important; border: 1px solid #f2f2f2;">
                                    <div class="col-md-4 m-auto">
                                        <img src="{{asset($product->featured_img_url)}}" height="60" width="auto">
                                    </div>

                                    <div class="col-md-8 text-center">
                                        <h3>{{substr($product->product_description, 0, 100).'...'}}</h3>
                                        <a href="view-product?product={{base64_encode(json_encode($product))}}" style="border-radius: 25px;" type="button" class="btn btn-danger btn-sm mb-2">Edit</a>
                                        <a href="#" data-product-id="{{$product->id}}" style="border-radius: 25px;" type="button" class="btn btn-danger btn-sm mb-2">Remove</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                        <h3> You have no products yet</h3>
                        @endif

                </div>

            </div>
        @endsection
