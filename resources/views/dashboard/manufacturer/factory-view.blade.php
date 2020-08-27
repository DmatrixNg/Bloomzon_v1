

@extends('dashboard.manufacturer.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Add Factory View</b></h1>
                </div>
                <div class="row mb-5 mt-5">
                    <div class="col-md-3">
                        <div class="card text-center" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                            <img src="{{$user_metas->User[0]->factory_image_url}}" alt=" " height="200">
                        </div>
                    </div>

                </div>
                <div class="row mb-3 mt-5" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-8 p-5 offset-2">
                        <form name="updateProfile">
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group mt-5">
                                <label for="factory_image_url" style="font-size: 16px;;">Choose Image: </label>
                                <input type="file" name="factory_image_url" class="form-control" id="factory_image_url" placeholder="" style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group mt-5">
                                <label for="factory_description" style="font-size: 16px;;">Description: </label>
                                <textarea  id="factory_description" name="factory_description" class="form-control" rows="5">{{$user_metas->User[0]->factory_description}}</textarea>
                            </div>
                            <div class="form-group pull-right mt-5">
                                <button class="btn btn-danger ">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        @endsection

@push('scripts')
    <script>
        FormHandler('updateProfile', {
            requestUrl:'/api/v1/crud/users/{{Auth::user()->id}}',
            cb: response => {

                if(response.success){
                    return swal({
                        title: 'Success!',
                        text: 'Account Profile Updated successfully!',
                        icon: 'success',
                        button: 'Ok'
                    }).then( () => window.location.reload() )
                }


                return swal({
                    title: 'Error!',
                    text: 'We had error updating your profile',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })
    </script>
@endpush
