@extends('dashboard.manufacturer.layouts.app')

@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 ml-1 mt-5 mb-5" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
            <div class="col-md-12 text-center ml-0">
                <h2><i class="fas fa-box-open"></i> Trading Policy</h2>
            </div>
        </div>
        <form style="padding: 20px;" action="{{ url('manufacturer/update_profile') }}" method="POST">
            @csrf

            <div class="row mt-4 mb-4">
                <div class="col-md-7 m-auto">
                    <h4 style="color: #02499B; ">Profile</h4>
                    <textarea name="profile" class="form-control" rows="5">{{ auth()->guard('manufacturer')->user()->profile }}</textarea>
                    @error('profile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            <hr>


            <div class="row mt-4 mb-4">
                <div class="col-md-7 m-auto">
                    <h4 style="color: #02499B; ">Terms & Condition</h4>
                    <textarea class="form-control" name="terms_and_conditions" rows="5">{{ auth()->guard('manufacturer')->user()->terms_and_conditions }}</textarea>
                    @error('terms_and_conditions')
                        <small class="text-danger">
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                </div>

            </div>
            <hr>
            <div class="row mt-4 mb-4">
                <div class="col-md-7 m-auto">
                    <h4 style="color: #02499B; ">Policy</h4>
                    <textarea class="form-control" name="policies" rows="5">{{ auth()->guard('manufacturer')->user()->policies }} </textarea>
                    @error('policies')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            <hr>
            
            <div class="row mt-4 mb-4">
                <div class="col-md-7 m-auto">
                    <h4 style="color: #02499B;">Terms of Purchase</h4>
                    <textarea name="terms_of_purchase" class="form-control" rows="5">{{ auth()->guard('manufacturer')->user()->terms_of_purchase }}</textarea>

                    @error('terms_of_purchase')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-md-7 m-auto">
                    <div id="error_list"></div>
                <button type="submit" class="btn" style="color: white; background-color: #AF2E1D; border-radius: 5px;">UPDATE</button>
                </div></div>

        </form>
    </div>
@endsection

