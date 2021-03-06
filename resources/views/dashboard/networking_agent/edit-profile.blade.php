@extends('layouts.dashboard.networking_agent')
@section('page_title')
   Networking Agent's Dashboard
@endsection

@section('content')
<div class="col-md-10">
    <div class="row" style="padding: 40px;">
        <div class="col-md-8 offset-2 text-center mt-2 mb-5">
            <img src="{{asset('storage/assets/networking_agent/avatar/' . $networking_agent->avatar)}}" height="140" width="140" style="border-radius: 50%">
            <h5 class="text-center text-dark ">{{$networking_agent->full_name}}</h5>

        </div>

        <div class="col-md-8 offset-2">
            <form name="networking_agentProfileUpdate">
                    <ul id="error_list"></ul>

                <div class="form-inline mb-5">
                    <div class="col-md-12 text-left" style="font-size: 18px;">Edit Profile image</div>
                    <input class="col-md-10" type="file" name="avatar" style="border-radius:20px; font-size: 12px; height: 30px; background-color: #535057" class="btn">
                </div>


                <input type="hidden" name="_method" value="put">
            <div class="form-inline mb-5">
                <div class="col-md-12 text-left" style="font-size: 18px;">Name</div>
                <input style="background-color:#1A1A1A; height: 40px;" id="full_name" value="{{$networking_agent->full_name}}" type="text" name="full_name" placeholder="Anabel Olivia" class="col-md-10 text-white">
            </div>

            <div class="form-inline mb-5">
                <div class="text-left col-md-12"  style="font-size: 18px;" for="phone">Phone</div>
                <input style="background-color:#1A1A1A; height:40px;" id="phone" value="{{$networking_agent->phone_number}}" type="text" name="phone_number" placeholder="" class="col-md-10 text-white">
            </div>

            <div class="form-inline mb-5">
                <div class="col-md-12 text-left " style="font-size: 18px;">Email</div>
                <input disabled style="background-color:#1A1A1A; height: 40px;"  id="email" type="email" value="{{$networking_agent->email}}" name="email" placeholder="" class="col-md-10 text-white">
            </div>

            <div class="form-inline mb-5">
                <div class="col-md-12 text-left "  style="font-size: 18px;">Street Address</div>
                <input style="background-color:#1A1A1A; height: 40px;" id="street_address" name="street_address" value="{{$networking_agent->street_address}}" type="text" placeholder="" class="col-md-10 text-white">
            </div>

            <div class="form-group mt-4 mb-4 text-center">
                <button class="btn" style="border: 1px solid white; width: 150px; background-color:#AF2E1D; border-radius: 20px; color: white;">SAVE</button>
            </div>
            </form>
            <div id="error_list"></div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
    <script>
         FormHandler('networking_agentProfileUpdate', {
            requestUrl: '/networking_agent/edit-profile/{{Auth::guard(`networking_agent`)->user()->id}}',
            cb: response => {
                if (response.success) {
                    return swal({
                        title: 'Success!',
                        text: 'Profile updated successfully',
                        icon: 'success',
                    }).then(() => {

                        window.location.reload()
                    })
                }
                if(response != null)ErrorHandler(response.errors);
                return swal({
                    title: 'Error!',
                    text: response.message,
                    icon: 'error',
                    button: 'Try Again'
                });
            }
        })
    </script>

@endpush

