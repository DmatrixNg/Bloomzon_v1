@extends('layouts.dashboard.admin')
@section('page_title')
    Admin's Dashboard
@endsection

@section('content')
<div class="col-md-10">
    <a href="{{route('admin.all-adverts')}}" class="btn btn-primary">Go to All Ads</a>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="" style="color: #02499B; background-color: white; padding: 30px;">
                <div class="col-md-12 pb-4 mb-4" style="border-bottom: #ddd solid 1px;">
                    <h2>Create New Advert</h2>

                </div>

                <form name="postAdvertForm">
                    <input name="user_id" id="user_id" type="hidden" value="{{$admin->id }}" />
                    <input name="ads_by" type="hidden" value="admin" />

                    <div class="form-group">
                        <label for="advert_position " style="font-size: 16px; color: #666; font-weight: 500;">Select
                            Page Section</label><br>
                        <select name="advert_position" id="advert_position" class="form-control">
                            <option value="">--Choose--</option>
                            <option value="Slider">Slider</option>
                            <option value="Header">Header</option>
                            <option value="Body">Body</option>
                            <option value="Footer">Footer</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="duration "
                            style="font-size: 16px; color: #666; font-weight: 500;">Duration</label><br>
                        <select name="duration" id="duration" class="form-control">
                            <option value="">--Choose--</option>
                            <option value="14">14 days</option>
                            <option value="30">30 days</option>
                            <option value="90">3 months</option>
                            <option value="180">6 months</option>
                            <option value="1000">Timeless</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="amount " style="font-size: 16px; color: #666; font-weight: 500;">Amount to
                            spend</label><br>
                        <select name="amount" id="amount" class="form-control">
                            <option value="">--Choose--</option>
                            <option value="5000">&#8358;5,000</option>
                            <option value="15000">&#8358;15,000</option>
                            <option value="25000">&#8358;25,000</option>
                            <option value="35000">&#8358;35,000</option>
                            <option value="45000">&#8358;45,000</option>
                            <option value="45000">&#8358;Paid</option>
                        </select>
                    </div>


                    <input type="hidden" name="status" value="0">

                    <div class="form-group">
                        <label for="advert_link " style="font-size: 16px; color: #666; font-weight: 500;">Advert
                            Link</label><br>
                        <input type="text" name="advert_link" id="advert_link" class="form-control" placeholder="http://bloomzon.com">
                    </div>
                    <br>

                    <br>
                    <div class="form-group">
                        <label for="avatar" style="font-size: 16px; color: #666; font-weight: 500;">Banner</label><br>
                        <input type="file" name="avatar" id="avatar" class="form-control">
                    </div>
                    <br>

                    <br>
                    <div id="error_list"></div>
                    <div class=" form-group text-center ">
                        <button type="button " class="btn btn-danger btn-lg btn-block "
                            style="vertical-align: middle; ">Submit</button>
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
        requestUrl: '/admin/post-ads/',
        requestType: 'POST',
        cb: response => {

            if (response.success) {
                return swal({
                    title: 'Success!!',
                    text: 'Advert created successfully',
                    icon: 'success'
                }).then(()=>{
                    window.location.reload()})
            }
            ErrorHandler(response.errors ?? {})
            return swal({
                title: 'Failed!!',
                text: 'Error occurred creating advert, please try again.',
                icon: 'error'
            })
        }
    })

</script>

@endpush
