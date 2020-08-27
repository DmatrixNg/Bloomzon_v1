@extends('layouts.dashboard.subadmin')
@section('page_title')
    Sub Admin Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h2>Create New User</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card shadow">
                        <div class="card-body">
                    <form name="subAdminCreateNewUserForm">
                        <div class="form-group text-center">
                            <img src="subadmin_asset/img/brand_lg.png" alt="" height="105" width="105">
                        </div>
                        <div class="form-group">
                            <label for="name" style="color: #02499B;"><strong>Upload Brand Picture</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" name="featured_img_url" id="profile_pic_url" class="form-control" type="file" placeholder="Input Brand Image">
                        </div>
                        <div class="form-group">
                            <label for="name" style="color: #02499B;"><strong>Brand Name</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" id="brand_name" name="brand_name" class="form-control" type="text" placeholder="Input brand name">
                        </div>
                        <div class="form-group mb-5 mt-5">
                            <label for="category" style="color: #02499B;"><strong>Brand Description</strong></label>
                            <textarea style="border: 2px solid #02499B ;color: #02499B;" name="brand_description" id="brand_description" class="form-control" type="text" placeholder="Short description of brand"></textarea>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <button class="btn bloomzon_btn m-auto">CREATE</button>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

@push('scripts')
    <script>
        FormHandler('subAdminCreateNewUserForm', {
            requestUrl:'/api/v1/crud/brands',
            requestType: 'POST',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!',
                        text: 'Brand created successfully!',
                        icon: 'success',
                        button: 'Ok'
                    })
                }
                console.log(response);
                return swal({
                    title: 'Error!',
                    text: 'Error occurred creating brand',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })
    </script>
@endpush
