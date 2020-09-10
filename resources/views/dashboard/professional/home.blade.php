@extends('layouts.dashboard.professional')
@section('page_title')
    Professional's Dashboard - Add New Product
@endsection

@section('content')
<div class="col-md-10">
    <div class="row">
        <div class="col-md-4">
            <a href="wallet">
                <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                    <h2><i class="fas fa-cash-register"></i> Total Withdrawal</h2>
                    <h1><b>{{count($withdrawals)}}</b></h1>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="orders">
                <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                    <h2><i class="fas fa-shopping-cart"></i> Total Request</h2>
                    <h1><b>{{count($orders)}}</b></h1>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="card text-center pr-0" style="color: #02499B; background-color: white;">
              @if ($shop_galleries->first()->avatar)
                <img src="{{ asset('storage/assets/gallery/avatar/'.$shop_galleries->first()->avatar)}}" width="200">
              @else
                <img src="{{ asset('assets/frontend/img/medium-fb-ad.png')}}">
              @endif
            </div>
        </div>
    </div>
    <br>
    <div class="row mt-5 mb-5" style="background-color: #02499B;">
        <h1 style=" color: #fff; margin: 0px auto;" class="p-3">
            <strong>PRODUCTS</strong>
        </h1>
    </div>
    <div class="row col-md-12 mb-5">
        <div class="col-md-3 d-none">
            <div class="card text-center p-3 " style="color: #02499B; background-color: white; padding-right: 0px !important; z-index: -1; ">
                <img src="asset/img/bag.png" alt=" ">
            </div>
            <div class="p-1 text-center " style="width: 50%; background-color: #b92c28; position: absolute; bottom: 0; right: 0; margin-bottom: -30px; ">
                <h4 class="text-white ">Bag</h4>
            </div>
        </div>
        @if(count($products))
            @foreach($products as $product)

                <div class="row col-md-6 mr-2 mb-3">
                    <div
                        style="background-color: white !important; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border-radius: 0px !important; border: 1px solid #f2f2f2;">
                        <div class="col-md-4 m-auto">

                            <img src="{{ asset('storage/assets/product/avatars/' .  $product->avatars[0]) }}" height="120" width="170"
                                style="border-radius: 50%">
                        </div>
                        <div class="col-md-8 text-center">
                            <h3>{{ substr($product->product_description, 0, 100) . '...' }}</h3>
                            <a href="{{ route('professional.edit-product', $product->id) }}" style="border-radius: 25px;"
                                type="button" class="btn btn-danger btn-sm mb-2">Edit</a>
                            <a href="#" onclick="deleteProd(this,{{ $product->id }})" style="border-radius: 25px;" type="button"
                                class="btn btn-danger btn-sm mb-2">Remove</a>
                        </div>
                    </div>
                </div>
            @endforeach

        @else
            <div class="row col-md-6 mr-2">
                <div class="col-12 alert alert-warning">
                    <h4>You have no Products</h4>
                </div>
            </div>
        @endif
    </div>
    <br>
    <div class="row col-md-12 mt-5 mb-5" style="background-color: #02499B;">
        <h1 style=" color: #fff; margin: 0px auto;" class="p-3">
            <strong>GALLERY</strong>
        </h1>
    </div>
    <div class="row col-md-12 mb-5 ">
        @if(count($shop_galleries))
            @foreach($shop_galleries->take(3) as $gallery)
            <div class="col-md-3">
                <div class="card text-center" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                    <img src="{{asset('storage/assets/gallery/avatar/'.$gallery->avatar)}}" alt=" " height="200">
                <h4>{{$gallery->title}}</h4>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-md-3">
                <div class="alert alert-warning">
                    Your have added no gallery
                </div>
            </div>
        @endif
        <div class="col-md-3">
            <a href="/professional/logout">
            <div class="card text-center p-5" style="color: #02499B; background-color: white; padding-right: 0px !important; z-index: -1; ">
                <i class="fas fa-sign-out-alt fa-4x" style="font-size: 100px"></i>
                <h3>Logout</h3>
            </div>
            </a>
        </div>
    </div>
</div>
@endsection
