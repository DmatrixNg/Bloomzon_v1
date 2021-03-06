@extends('layouts.front')
@section('page_title')
    Fast Food Groceries
@endsection
@section('content')

<div class="container text-center mt-5">


    <p class="text-left"><a href="index.html">Home</a> <i class="fa fa-chevron-right"></i> <a style="color:grey;" href="fastfood.html">All Fast Food & Groceries</a></p>
    
    <div class="row mt-5">
        @if(!count($groceries))
        <div class="alert alert-warning">No Vendor</div>
        @else
        @foreach($groceries as $grocery)
        <div class="col-md-3">
            <div class="card" style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 350px;">
                <div class="card-up white lighten-1"></div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Avatar -->
                        <div class="avatar mx-auto white">
                            <img src="{{asset('storage/assets/product/avatars/'.$grocery->avatars[0]??'') }}" class="rounded-circle" alt="" width="200" height="200">
                        </div>
                        <!-- Content -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <p class="testimonial_heading2">{{ $grocery->product_name }}</p>
                        
                        <a href="{{ url(app()->getLocale().'/product-details/' . base64_encode($grocery->id)) }}" class="btn btn-danger border-0 h2">View Product</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>
</div>


@endsection
