

@extends('layouts.dashboard.seller')
@section('page_title')
    Seller Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row col-md-12 ml-1 mt-5 mb-5" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                <div class="col-md-12 text-center ml-0">
                    <h2><i class="fas fa-bullhorn"></i> Create New Promotional Code</h2>
                </div>
            </div>

            <div class="row">
                <form class="col-md-8 offset-2" name="createCouponForm">
                    <div class="text-center align-items-center">
                        <div class="row mt-5 mb-5">
                            <div class="col-md-6">
                                <label for="name">Name</label>
                            </div>
                            <div class="col-md-6">
                                <input name="name" id="name" class="form-control" type="text" style="background-color: #F2F2F2;" placeholder="">
                            </div>
                        </div>

                        <div class="row mt-5 mb-5">
                            <div class="col-md-6">
                                <label for="code">code</label>
                            </div>
                            <div class="col-md-6">
                            <input name="code" id="code" value="CP{{rand(0,999999)}}" class="form-control" type="text" style="background-color: #F2F2F2;" placeholder="">
                            </div>
                        </div>

                        <div class="row mt-5 mb-5">
                            <div class="col-md-6">
                                <label for="description">Description</label>
                            </div>
                            <div class="col-md-6">
                                <input name="description" id="description" class="form-control" type="text" style="background-color: #F2F2F2;" placeholder="">
                            </div>
                        </div>

                        <div class="row mt-5 mb-5">
                            <div class="col-md-6">
                                <label for="component">Enter Component</label>
                            </div>
                            <div class="col-md-6">
                                <input name="component" id="component" class="form-control" type="text" style="background-color: #F2F2F2;" placeholder="shipping, checkout, order above 5000">
                            </div>
                        </div>

                        <input type="hidden" name="user_id" value="{{$seller->id}}" />
                        <input type="hidden" name="user_type" value="seller" />

                        <div class="row mt-5 mb-5">
                            <div class="col-md-6">
                                <label for="discount_amount">Discount Amount</label>
                            </div>
                            <div class="col-md-6">
                                <input name="discount" id="discount" class="form-control" type="text" style="background-color: #F2F2F2;" placeholder="shipping, checkout, order above 5000">
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button class="btn" style="border: 1px solid white; width: 200px; background-color:#02499B; border-radius: 20px; color: white;">CREATE</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endsection


@push('scripts')
    <script>
        FormHandler('createCouponForm', {
            requestUrl: '/seller/store-coupon',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!!',
                        text:  'Coupon Created successfully',
                        icon: 'success'
                    }).then( () => {
                        window.location.href = '/seller/all-coupons'
                    })
                }
                console.log(response);
                return swal({
                    title: 'Failed!!',
                    text:   'There was an error creating the coupon, please try again.',
                    icon:   'error'
                })
            }
        })
    </script>

@endpush
