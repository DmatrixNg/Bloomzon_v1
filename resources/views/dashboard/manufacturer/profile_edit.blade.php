@extends('dashboard.manufacturer.layouts.app')

@section('content')
    <div class="col-md-10">
        <div class="row" style="padding: 40px;">
            <div class="col-md-8 offset-2 text-center mt-2 mb-5">
                <img src="" height="120" class="rounded">
                <h5 class="text-center "></h5>
            </div>
            <div class="col-md-8 offset-2">
                <form method="post" action="{{ url('manufacturer/update-profile') }}">
                @csrf
                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left" style="font-size: 18px;">Edit Profile image</div>
                        <input class="col-md-10" type="file" name="avatar" style="border-radius:20px; font-size: 12px; height: 30px; background-color: #535057" class="btn">

                        @error('avatar')
                            <small class="text-danger">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror

                    </div>

                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left" style="font-size: 18px;">Full Name</div>
                        <input style="background-color:#1A1A1A; height: 40px;" id="name" value="{{ auth()->guard('manufacturer')->user()->full_name }}" type="text" name="full_name" placeholder="" class="col-md-10 text-white">

                        @error('full_name')
                            <small class="text-danger">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>

                    <div class="form-inline mb-5">
                        <div class="text-left col-md-12"  style="font-size: 18px;" for="phone">Phone</div>
                        <input style="background-color:#1A1A1A; height:40px;" id="phone" value="{{ auth()->guard('manufacturer')->user()->phone_number }}" type="text" name="phone_number" placeholder="" class="col-md-10 text-white">

                        @error('phone_number')
                            <small class="text-danger">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>

                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left " style="font-size: 18px;">Email</div>
                        <input style="background-color:#1A1A1A; height: 40px;"  id="email" type="email" value="{{ auth()->guard('manufacturer')->user()->email }}" name="email" placeholder="" class="col-md-10 text-white">

                        @error('email')
                            <small class="text-danger">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>

                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left" style="font-size: 18px;">Street Address</div>
                        <input style="background-color:#1A1A1A; height: 40px;" id="street_address" value="{{ auth()->guard('manufacturer')->user()->street_address }}" type="text" name="street_address" placeholder="" class="col-md-10 text-white">

                        @error('street_address')
                            <small class="text-danger">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>

                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left "  style="font-size: 18px;">Billing Address</div>
                        <input style="background-color:#1A1A1A; height: 40px;" id="billing_address" value="{{ auth()->guard('manufacturer')->user()->billing_address }}" type="text" name="billing_address" placeholder="" class="col-md-10 text-white">

                        @error('billing_address')
                            <small class="text-danger">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>

                    <div class="form-group mt-4 mb-4 text-center">
                        <button  class="btn" style="border: 1px solid white; width: 150px; background-color:#AF2E1D; border-radius: 20px; color: white;">SAVE</button>
                    </div>

                </form>

            </div>
        </div>

    </div>
@endsection
