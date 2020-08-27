@extends('layouts.dashboard.seller')
@section('page_title')
    Seller's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row col-md-12 ml-1 mt-5 mb-5" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                <div class="col-md-8 text-left ml-0">
                    <h2><i class="fas fa-bullhorn">
                        </i> Promotional Code</h2>
                </div>
                <div class="col-md-4 m-auto"><a href="{{route('seller.create-coupon')}}" class="btn btn-danger text-right">Create New Code</a></div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2" style="padding: 30px;">
                    @if(count($coupons))
                    @foreach($coupons as $coupon)
                        <div class="text-center align-items-center mt-4 mb-4" style="border-radius: 50px; padding: 30px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="#{{$coupon->id}}">Coupon Code</label>
                                    <input type="text" disabled id="#{{$coupon->id}}" value="{{$coupon->code}}" style="background-color: #F2F2F2; height: 50px;" class="form-control">
                                </div>
                                <div class="col-md-6 coupons">
                                    <h4>Description</h4>
                                    <p> {{$coupon->description}} </p>
                                    @if($coupon->status === 0)
                                        <p>Status: Deactivated</p>
                                        <button class="btn"  onclick="changeStatus(this,{{$coupon->id}})" style="color: white; background-color: #1daf1d; border-radius: 20px;">Activate</button>
                                    @else
                                        <p>Status: Active</p>
                                        <button class="btn" onclick="changeStatus(this,{{$coupon->id}})" style="color: white; background-color: #AF2E1D; border-radius: 20px;">Deactivate</button>
                                     @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    <hr>
                        @else
                        <div class="alert alert-warning">
                            <h3>No Coupon added</h3>
                        </div>
                        @endif
                </div>
            </div>

        </div>
        @endsection

@push('scripts')
    <script>
       function changeStatus(el,id){
        makeRequest('/seller/change-coupon-status/'+id).then((e)=>{
            if(e.success)return swal('Status changed').then( window.location.reload());
            return swal("unable to change status")
        })
       }
    </script>

@endpush
