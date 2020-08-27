@extends('dashboard.manufacturer.layouts.app')

    @section('content')
        <div class="col-md-10">
            <div class="row" style="background-color: #AF2E1D; padding: 30px;">
                <div class="col-md-12 text-center text-white">
                   <i class="fa fa-user-circle fa-3x"></i>
                    <h4>{{ auth()->guard('manufacturer')->user()->full_name }}</h4>
                    <p> {{auth()->guard('manufacturer')->user()->phone_number}} </p>
                    <p>{{  auth()->guard('manufacturer')->user()->email  }}</p>
                    <p>{{  auth()->guard('manufacturer')->user()->street_address  }}</p>
                    <h5>sdsd</h5>
                    <br>
                    <a class="btn" href="{{ url('manufacturer/edit-profile') }}" style="background-color: #AF2E1D; border: 1px solid white; padding: 10px; color: white; border-radius: 20px;">EDIT PROFILE</a>

                </div>
            </div>
            
            <form class="row align-items-center" action="{{ url('manufacturer/update_profile') }}" method="POST">
            @csrf
                <div class="col-md-6 text-center form-group p-4 m-auto">
                    <label for="company_profile">Company Profile</label>
                    <textarea class="form-control" id="company_profile" name="profile" rows="5" style="border-radius: 0px !important;">{{ auth()->guard('manufacturer')->user()->profile }}</textarea>
                    @error('profile')
                        <small class="text-danger">
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <div class="p-3 text-center">
                        <a href="#" class="btn btn-sm btn-primary d-none">View</a>
                        <a href="#" class="btn btn-sm btn-danger d-none">Remove</a>
                    </div>
                </div>
                <div class="col-md-6 text-center form-group p-4 m-auto">
                    <label for="terms_conditions">Terms & Conditions</label>
                    <textarea class="form-control" id="terms_conditions" name="terms_and_conditions" rows="5" style="border-radius: 0px !important;">{{ auth()->guard('manufacturer')->user()->terms_and_conditions }}</textarea>
                    @error('terms_and_conditions')
                        <small class="text-danger">
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <div class="p-3 text-center">
                        <a href="#" class="btn btn-sm btn-primary d-none">View</a>
                        <a href="#" class="btn btn-sm btn-danger d-none">Remove</a>
                    </div>
                </div>
                <div class="col-md-6 text-center form-group p-4 m-auto">
                    <label for="terms_of_purchase">Terms of Purchase</label>
                    <textarea name="terms_of_purchase" id="terms_of_purchase" class="form-control" rows="5" style="border-radius: 0px !important;">{{ auth()->guard('manufacturer')->user()->terms_of_purchase }}</textarea>
                    @error('terms_of_purchase')
                        <small class="text-danger">
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <div class="p-3 text-center">
                        <a href="#" class="btn btn-sm btn-primary d-none">View</a>
                        <a href="#" class="btn btn-sm btn-danger d-none">Remove</a>
                    </div>
                </div>
                <div class="col-md-6 text-center form-group p-4 m-auto">
                    <label for="policy">Policy</label>
                    <textarea class="form-control" id="policy" name="policies" rows="5" style="border-radius: 0px !important;">{{ auth()->guard('manufacturer')->user()->policies }}</textarea>
                    @error('policies')
                        <small class="text-danger">
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                    <div class="p-3 text-center">
                        <a href="#" class="btn btn-sm btn-primary d-none">Update</a>
                        <a href="#" class="btn btn-sm btn-danger d-none">Remove</a>
                    </div>
                </div>
                <div class="mt-5">
                    <button class="btn text-center" type="submit" href="#" style="background-color: #AF2E1D; padding: 10px; color: white; width: 250px;">Update</button>
                </div>
            </form>
        </div>
    @endsection

@push('scripts')
    <script>
        FormHandler('manufacturerUpdateForm', {
            requestUrl: '/api/v1/crud/users/{{Auth::user()->id}}',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!!',
                        text:  'Profile Updated successfully',
                        icon: 'success'
                    })
                }
                console.log(response);
                return swal({
                    title: 'Failed!!',
                    text:   'There was an error updating your profile, please try again.',
                    icon:   'error'
                })
            }
        })
    </script>

@endpush
