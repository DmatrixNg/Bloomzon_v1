

@extends('dashboard.manufacturer.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="" style="color: #02499B; background-color: white; padding: 30px;">
                            <div class="col-md-12 pb-4 mb-4" style="border-bottom: #ddd solid 1px;">
                                <h2>Create New Advert</h2>
                            </div>
                            <form name="postAdvertForm">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1 " style="font-size: 16px; color: #666; font-weight: 500;">Select Page Section</label><br>
                                    <select name="advert_position" id="advert_position"  class="form-control">
                                        <option value="">--Choose--</option>
                                        <option value="Header">Header</option>
                                        <option value="Body">Body</option>
                                        <option value="Footer">Footer</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <label for="duration " style="font-size: 16px; color: #666; font-weight: 500;">Duration</label><br>
                                    <select name="duration" id="duration" class="form-control">
                                        <option value="">--Choose--</option>
                                        <option value="14">14 days</option>
                                        <option value="30">30 days</option>
                                        <option value="90">3 months</option>
                                        <option value="180">6 months</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="amount " style="font-size: 16px; color: #666; font-weight: 500;">Amount to spend</label><br>
                                    <select name="amount" id="amount" class="form-control">
                                        <option value="">--Choose--</option>
                                        <option value="5000">&#8358;5,000</option>
                                        <option value="15000">&#8358;15,000</option>
                                        <option value="25000">&#8358;25,000</option>
                                        <option value="35000">&#8358;35,000</option>
                                        <option value="45000">&#8358;45,000</option>
                                    </select>
                                </div>

                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <input type="hidden" name="status" value=0>

                                <div class="form-group">
                                    <label for="advert_link " style="font-size: 16px; color: #666; font-weight: 500;">Advert Link</label><br>
                                    <input type="text" name="advert_link" id="advert_link" class="form-control">
                                </div>
                                <br>

                                <br>
                                <div class="form-group">
                                    <label for="advert_image_url1 " style="font-size: 16px; color: #666; font-weight: 500;">Image 1</label><br>
                                    <input type="file" name="advert_image_url1" id="advert_image_url1" class="form-control">
                                </div>
                                <br>
                                <div class=" form-group">
                                    <label for="advert_image_url2 " style="font-size: 16px; color: #666; font-weight: 500; ">Image 2</label><br>
                                    <input type="file" name="advert_image_url2" id="advert_image_url2" class=" form-control ">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1 " style="font-size: 16px; color: #666; font-weight: 500; ">Image 3</label><br>
                                    <input type="file" name="advert_image_url3" id="advert_image_url3" class="form-control ">
                                </div>
                                <br>
                                <div class=" form-group text-center ">
                                    <button type="button " class="btn btn-danger btn-lg btn-block " style="vertical-align: middle; ">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <br>
            </div>
        @endsection

@push('scripts')
    <script>
        FormHandler('postAdvertForm', {
            requestUrl: '/api/v1/crud/adverts',
            requestType: 'POST',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!!',
                        text:'Advert created successfully',
                        icon: 'success'
                    })
                }
                console.log(response);
                return swal({
                    title: 'Failed!!',
                    text:'Error occurred creating advert, please try again.',
                    icon: 'error'
                })
            }
        })
    </script>

@endpush
