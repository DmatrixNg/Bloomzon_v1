@extends('layouts.front')
@section('page_title')
    Fast Food Groceries
@endsection
@section('content')

<div class="container text-center mt-5">


    <p class="text-left"><a href="index.html">Home</a> <i class="fa fa-chevron-right"></i> <a style="color:grey;" href="fastfood.html">Food Menues</a></p>
    
    <div class="row mt-5">
        @if(!count($food_menus))
        <div class="alert alert-warning">No Vendor</div>
        @else
        @foreach($food_menus as $food_menu)
        <div class="col-md-3">
            <div class="card" style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 350px;">
                <div class="card-up white lighten-1"></div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Avatar -->
                        <div class="avatar mx-auto white">
                            <img src="{{ asset('storage/assets/fast_food_grocery/catalogue/' . $food_menu->avatar) }}" class="rounded-circle" alt="" width="200" height="200">
                        </div>
                        <!-- Content -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <p class="testimonial_heading2">{{ $food_menu->name }}</p>
                        
                        <a href="{{ url(app()->getLocale().'/category/'.$food_menu->name) }}?fast_food_grocery" class="btn btn-danger border-0 h2">View Product</a>
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
