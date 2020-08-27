@extends('layouts.front')
@section('page_title')
    Fast Food Groceries
@endsection
@section('content')

<div class="container text-center mt-5">


    <p class="text-left"><a href="index.html">Home</a> <i class="fa fa-chevron-right"></i> <a style="color:grey;" href="fastfood.html">Fast Food Vendors</a></p>

    <h4 class="text-left">{{strtoupper(\Request::segment(1))}} VENDOR</h4>
    
    <div class="row mt-5">
        @if(!count($fast_foods))
        <div class="alert alert-warning">No Vendor</div>
        @else
        @foreach($fast_foods as $ffg)
        <div class="col-md-3">
            <div class="card" style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">
                <div class="card-up white lighten-1"></div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Avatar -->
                        <div class="avatar mx-auto white">
                            <img src="{{asset('storage/assets/fast_food_grocery/avatar/'.$ffg->avatar)}}" class="rounded-circle" alt="" width="200" height="200">
                        </div>
                        <!-- Content -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="testimonial_heading font-weight-bold">{{$ffg->company_name}}</h3>
                        <p class="testimonial_heading2">{{$ffg->full_name}}</p>
                        <p class="testimonial_heading2">{{$ffg->shop_address}}</p>
                        <a href="{{url('/fast-food-details/'.$ffg->id)}}" class="btn btn-primary border-0 h2">View Profile</a>
                        <a href="{{url('/vendor-food-list/'.$ffg->id)}}" class="btn btn-danger border-0 h2">View Products</a>
                    </div>
                    <br>
                    <!-- Quotation -->
                    <p class="testimonial_text">{{$ffg->service_description}}.</p>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>
</div>


@endsection
