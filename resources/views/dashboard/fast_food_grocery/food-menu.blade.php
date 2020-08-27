@extends('layouts.dashboard.fast_food_grocery')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12" style="background-color: #fff !important; padding: 10px; text-align: center !important;">
                    <div style="background-color: #02499B; width: 100%; padding: 10px 20px;">
                        <div class="col-md-9 text-left text-white">
                            <h1>
                                Food Menu
                            </h1>
                        </div>
                        <div class="col-md-3 pt-4">
                            <a href="{{route('fast_food_grocery.add-food-menu')}}" class="btn btn-danger btn-lg">Add to Catalogue</a>
                        </div>
                    </div>

                    @foreach($food_cat as $key => $menus)
                        <div class="row col-md-12">

                            <div class="col-md-12 mb-3">
                                <h3 style="color: #02499B;">{{$menus->name}}</h3>
                            </div>
                            <div class="row col-md-12 mt-5 pb-5 m-auto" style="border-bottom: 1px #dddddd solid;">
                               @foreach ($food_menus as $menu)  
                               @if($menu->category_id->id == $menus->id)
                               <div class="col-md-4 text-center">
                                <img src="{{asset('storage/assets/product/avatars/'.$menu->avatars[0])}}" width="220" alt="">
                                <h3> Price: ${{$menu->product_sales_price}}</h3>
                                <p> Description: ({{$menu->product_description}})</p>
                            </div>
                            @endif
                               @endforeach
                                    


                            </div>
                        </div>
                        @endforeach

                </div>
            </div>
        @endsection
