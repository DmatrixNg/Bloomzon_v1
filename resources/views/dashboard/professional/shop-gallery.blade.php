

@extends('layouts.dashboard.professional')
@section('page_title')
    professional's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>How User Sees You</b></h1>
                    <a href="{{route('professional.add-shop-gallery')}}" style="border: 1px #fff solid; color: #fff; padding: 10px; border-radius: 20px; height: 40px; margin-top: 10px;">Add To Shop Gallery</a>
                </div>

                <div class="row col-md-12 mr-2 pt-5" style="background-color: #fff">
                    <form class="col-md-6 offset-3" name="updateProfile">
                        <ul class="list-group" style="border: none !important;">
                            <li class="list-group-item" style="border: none !important;">

                                <label>SHOP NAME</label>
                                <input disabled class="form-control" name="company_name" value="{{$professional->company_name}}" style="font-size: 14px; background-color:#fff; color: #000;" />
                                <input type="hidden" name="_method" value="put" />
                            </li>
                            <li class="list-group-item" style="border: none !important;">
                                <label>LOCATION</label>
                                <input disabled name="phone" class="form-control" value="{{$professional->shop_address}}" style="font-size: 14px; background-color:#fff; color: #000;" />
                            </li>
                            <li class="list-group-item" style="border: none !important;">
                                <label>SERVICE</label>
                                <textarea disabled name="factory_description" class="form-control" style="font-size: 14px; background-color:#fff; color: #000;">{{$professional->service_description}}</textarea>
                            </li>
                            <li class="list-group-item" style="border: none !important;">
                                <label>CONTACT</label>
                                <input disabled class="form-control" name="phone" value="{{$professional->phone_number}}" style="font-size: 14px; background-color:#fff; color: #000;" />
                            </li>
                            <div id="error_list"></div>
                            <div class="m-5 text-center">
                            <a href="{{route('professional.edit-profile')}}" class="btn btn-danger btn-pill">EDIT</a>
                            </div>
                        </ul>
                    </form>
                    <div class="col-md-12">
                        <div class="row mt-5 mb-5" style="background-color: #02499B;">
                            <h1 style=" color: #fff; margin: 0px auto;" class="p-3">
                                <strong>Shop Picture</strong>
                            </h1>
                        </div>
                        <div class="row mb-5">
                            @if(count($shop_galleries))
                            @foreach($shop_galleries as $gallery)
                            <div class="col-md-3">
                                <div class="card text-center" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                                    @if(pathinfo(asset('storage/assets/gallery/avatar/'.$gallery->avatar), PATHINFO_EXTENSION) == 'mp4' || pathinfo(asset('storage/assets/gallery/avatar/'.$gallery->avatar), PATHINFO_EXTENSION) == 'avi')
                                        <video width="320" height="240" controls>
                                            <source src="{{asset('storage/assets/gallery/avatar/'.$gallery->avatar)}}" type="video/mp4">
                                            <source src="{{asset('storage/assets/gallery/avatar/'.$gallery->avatar)}}" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    @else
                                        <img src="{{asset('storage/assets/gallery/avatar/'.$gallery->avatar)}}" alt=" " height="200">

                                    @endif
                                    
                                    

                                    
                                <h4>{{$gallery->title}}</h4>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="col-md-3">
                                <div class="alert alert-warning">
                                    Your have added no gallery
                                </div>
                            </div>
                            @endif
                            
                            
                        </div>
                    </div>
                </div>

            </div>
        @endsection
@push('scripts')
    <script>
        FormHandler('updateProfile', {
            requestUrl: '/professional/edit-profile/{{Auth::guard(`professional`)->user()->id}}',
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

