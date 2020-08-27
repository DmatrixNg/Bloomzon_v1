@extends('dashboard.super-admin.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row mb-3 " style="background-color: #000 !important; padding: 20px; ">
                    <div class="col-md-6 p-5 offset-3 ">
                        <form>
                            <div class="form-group text-center ">
                                <img src="{{$user->profile_pic_url}}" class="img img-circle " width="120 " height="120 "><br>
                                <h3 class="text-white">{{$user->name}}</h3>
                            </div>
                            <div class="form-group ">
                                <label for="name " style="font-size: 16px; color: #fff; font-weight: 500; ">Name</label><br>
                                <input type="text" disabled class="form-control" id="name" value="{{$user->name}}" style="height: 40px; ">
                            </div>
                            <div class="form-group ">
                                <label for="phone" style="font-size: 16px; color: #fff; font-weight: 500; ">Phone number</label><br>
                                <input type="text" disabled class="form-control " id="phone" value="{{$user->phone}}" style="height: 40px; ">
                            </div>
                            <div class="form-group ">
                                <label for="email" style="font-size: 16px; color: #fff; font-weight: 500; ">Email</label><br>
                                <input type="email" disabled class="form-control " id="email" value="{{$user->email}}"  style="height: 40px; ">
                            </div>
                            <div class="form-group ">
                                <label for="address" style="font-size: 16px; color: #fff; font-weight: 500; ">Address</label><br>
                                <input type="text" disabled class="form-control " id="address" value="{{$user->address}}" style="height: 40px; ">
                            </div>

                            <div class="form-group ">
                                <label for="service_description" style="font-size: 16px; color: #fff; font-weight: 500; ">Service Description</label><br>
                                <textarea class="form-control" disabled id="service_description" value="{{$user->service_description}}" rows="5"></textarea>
                            </div>
{{--                            <div class="form-group text-center">--}}
{{--                                <button class="btn btn-danger btn-lg  ">Save</button>--}}
{{--                            </div>--}}
                        </form>
                    </div>

                </div>
            </div>
        @endsection
