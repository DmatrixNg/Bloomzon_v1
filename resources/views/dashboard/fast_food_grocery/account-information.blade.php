

@extends('layouts.dashboard.fast_food_grocery')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

@section('content')
<div class="col-md-10">
        <div class="row mb-3 " style="background-color: #000 !important; padding: 20px; ">
            <div class="col-md-8 p-5 offset-2 " style="height: 800px;">
                <form>
                    <div class="form-group text-center ">
                        <img src="{{asset('storage/assets/fast_food_grocery/avatar/'.$fast_food_grocery->avatar)}}" height="140" width="140" style="border-radius: 50%">
                        <br>
                        <h3 class="text-white">{{$fast_food_grocery->name}}</h3>
                    </div>
                    <h4 class="text-white text-center mt-5">{{$fast_food_grocery->full_name}}</h4>
                    <h4 class="text-white text-center mt-5">{{$fast_food_grocery->phone_number}}</h4>
                    <h4 class="text-white text-center mt-5">{{$fast_food_grocery->email}}</h4>
                    <h4 class="text-white text-center mt-5">{{$fast_food_grocery->last_login}}</h4>
                    <div class="text-center mt-5">
                        <a href="edit-profile" class="btn btn-danger btn-lg">Edit Profile</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
