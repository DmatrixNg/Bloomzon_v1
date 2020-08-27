@extends('layouts.front')
@section('page_title')
    Professional Service
@endsection
@section('content')

<div class="container text-center mt-5">


    <p class="text-left"><a href="index.html">Home</a> <i class="fa fa-chevron-right"></i> <a style="color:grey;" href="fastfood.html">Fast Food Vendors</a></p>

    <h4 class="text-left">{{strtoupper(\Request::segment(1))}} VENDOR</h4>
    
    <div class="row mt-5">
        @if(!count($proservices))
        <div class="alert alert-warning">No Vendor</div>
        @else
        @foreach($proservices as $proservice)
        <div class="col-md-3">
            <div class="card" style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">
                <div class="card-up white lighten-1"></div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Avatar -->
                        <div class="avatar mx-auto white">
                            <img src="{{asset('storage/assets/professional/avatar/'.$proservice->avatar)}}" class="rounded-circle" alt="" width="200" height="200">
                        </div>
                        <!-- Content -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h3 class="testimonial_heading font-weight-bold">{{$proservice->company_name}}</h3>
                        <p class="testimonial_heading2">{{$proservice->full_name}}</p>
                        <p class="testimonial_heading2">{{$proservice->shop_address}}</p>
                        <a href="{{url('/proservice-details/'.$proservice->id)}}" class="btn btn-outline-primary">View Services</a>
                       
                    </div>
                    <br>
                    <!-- Quotation -->
                    <p class="testimonial_text">{{$proservice->service_description}}.</p>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>
</div>


@endsection
