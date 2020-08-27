@extends('dashboard.manufacturer.layout')
@section('page_title')
    Manufacturer's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row" style="background-color: #AF2E1D; padding: 30px;">
                <div class="col-md-12 text-center text-white">
                   <i class="fa fa-user-circle fa-3x"></i>
                    <h4>{{$user_metas->User[0]->name}}</h4>
                    <p>{{$user_metas->User[0]->phone}}</p>
                    <p>{{$user_metas->User[0]->email}}</p>
                    <p>{{$user_metas->User[0]->address}}</p>
                    <h5>{{$user_metas->User[0]->service_description}}</h5>
                    <br>
                    <a class="btn" href="editprofile" style="background-color: #AF2E1D; border: 1px solid white; padding: 10px; color: white; border-radius: 20px;">EDIT PROFILE</a>

                </div>
            </div>
            <form class="row align-items-center" name="manufacturerUpdateForm" i="manufacturerUpdateForm">
                    <div class="col-md-6 text-center form-group p-4 m-auto">
                        <label for="company_profile">Company Profile</label>
                        <textarea class="form-control" id="company_profile" name="company_profile" rows="5" style="border-radius: 0px !important;">{{$user_metas->User[0]->company_profile}}</textarea>
{{--                        <div class="p-3 text-center">--}}
{{--                            <a href="#" class="btn btn-sm btn-primary">View</a>--}}
{{--                            <a href="#" class="btn btn-sm btn-danger">Remove</a>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-md-6 text-center form-group p-4 m-auto">
                        <label for="terms_conditions">Terms & Conditions</label>
                        <textarea class="form-control" id="terms_conditions" name="terms_conditions" rows="5" style="border-radius: 0px !important;">{{$user_metas->User[0]->terms_conditions}}</textarea>
{{--                        <div class="p-3 text-center">--}}
{{--                            <a href="#" class="btn btn-sm btn-primary">View</a>--}}
{{--                            <a href="#" class="btn btn-sm btn-danger">Remove</a>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-md-6 text-center form-group p-4 m-auto">
                        <label for="terms_of_purchase">Terms of Purchase</label>
                        <textarea name="terms_of_purchase" id="terms_of_purchase" class="form-control" rows="5" style="border-radius: 0px !important;">{{$user_metas->User[0]->terms_conditions}}</textarea>
{{--                        <div class="p-3 text-center">--}}
{{--                            <a href="#" class="btn btn-sm btn-primary">View</a>--}}
{{--                            <a href="#" class="btn btn-sm btn-danger">Remove</a>--}}
{{--                        </div>--}}
                    </div>
                <input type="hidden" name="_method" value="put">
                    <div class="col-md-6 text-center form-group p-4 m-auto">
                        <label for="policy">Policy</label>
                        <textarea class="form-control" id="policy" name="policy" rows="5" style="border-radius: 0px !important;">{{$user_metas->User[0]->terms_of_purchase}}</textarea>
{{--                        <div class="p-3 text-center">--}}
{{--                            <a href="#" class="btn btn-sm btn-primary">Update</a>--}}
{{--                            <a href="#" class="btn btn-sm btn-danger">Remove</a>--}}
{{--                        </div>--}}
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
