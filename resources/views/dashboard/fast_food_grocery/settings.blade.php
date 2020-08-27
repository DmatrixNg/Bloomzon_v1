
@extends('layouts.dashboard.fast_food_grocery')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

@section('content')
<div class="col-md-10">
        <div class="row text-center" style="background-color: #2B2950 !important; padding: 10px; text-align: center !important; color:white">
            <div class="col-md-12">
                <h1 class="text-center m-auto pt-3 pb-3"><b>Update Your Account</b></h1>
            </div>
        </div>
        <form method="POST" action="{{ url('/fast_food_grocery/store_settings') }}" class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            @csrf
        <input type="hidden" value="{{Auth::guard('fast_food_grocery')->user()->id}}" name="id" />
            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> Shop Location </b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <textarea name="shop_location" rows="5" class="form-control">{{ auth()->guard()->user()->delivery_terms }}</textarea>
                    @error('shop_location')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> Delivery Policy </b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <textarea name="delivery_terms" rows="5" class="form-control">{{ auth()->guard()->user()->delivery_terms }}</textarea>
                    @error('delivery_terms')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> Terms & Conditions </b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <textarea name="terms_and_conditions" rows="5" class="form-control">{{ auth()->guard()->user()->terms_and_conditions }}</textarea>
                    @error('terms_and_conditions')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> Type of Service</b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <textarea name="terms_of_purchase" rows="5" class="form-control">{{ auth()->guard()->user()->terms_of_purchase }}</textarea>
                    @error('terms_of_purchase')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> {{ __('Delivery Method') }}</b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <select id="delivery_method" class="form-control @error('delivery_method') is-invalid @enderror" name="delivery_method" autocomplete="delivery_method" placeholder="Phone Number">
                        <option value="Bike">Bike</option>
                        <option value="Car">Car</option>
                    </select>
                    @error('delivery_method')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b>{{ __('Delivery Agent') }}</b>
                    </span>
                </div>
                <div class="col-md-6 text-center">
                    <select id="delivery_agent" class="form-control @error('delivery_agent') is-invalid @enderror" name="delivery_agent" value="{{ old('delivery_agent') }}" autocomplete="delivery_agent" placeholder="Phone Number">
                        <option value="Personal">Personal</option>
                        <option value="Bloomzon Rider">Bloomzon Rider</option>
                    </select>
                    @error('delivery_agent')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 mt-3 p-5" style="border-bottom: 2px solid #cccccc;">
                <div class="col-md-4 p-5">
                    <span class="m-auto" style="color: #02499B  !important; font-size: 19px;">
                        <b> Means of Identification</b>
                    </span>
                </div>

                <div class="col-md-6 text-center">
                    <input type="file" name="means_of_identification" class="form-control ">
                    @error('means_of_identification')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-12 p-5 text-center">
                <button type="submit" class="btn btn-danger btn-lg">Save Update</button>
            </div>

        </form>
    </div>
@endsection
