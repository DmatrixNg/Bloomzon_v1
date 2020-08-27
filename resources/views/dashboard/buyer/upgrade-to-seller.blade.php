@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection
@php
$plans = \App\SubscriptionPackage::all();
$plans_map = [];
@endphp
        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Want to Become a Seller?</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-8 p-5 offset-2">
                        <form name="upgradeToSellerForm">
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Select Package: </label>
                                <select name="subscription_id" id="subscription_id" class="form-control" style="height: 40px; border-radius: 0;">
                                    @foreach($plans as $plan)
                                        @php($plans_map[$plan->id] = $plan->price)
                                        <option value="{{$plan->id}}">{{$plan->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="card_number" style="font-size: 16px;;">Card Number: </label>
                                <input type="text" name="card_number"  maxlength="16" class="form-control" id="card_number" placeholder="Card No.: 0000 0000 0000 0000 0000" style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="expires_at" style="font-size: 16px;;">Expires: </label>
                                    <input type="text" maxlength="5" name="expires_at" class="form-control" id="expires_at" placeholder="MM/YY" style="height: 40px; border-radius: 0;">
                                </div>
                                <div class="col-md-6">
                                    <label for="cvv" style="font-size: 16px;;">CVV: </label>
                                    <input type="text" class="form-control" name="cvv"  maxlength="4" id="cvv" placeholder="123" style="height: 40px; border-radius: 0;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Amount: </label>
                                <input type="text" class="form-control" disabled value="{{count($plans) > 0?$plans[0]->name:null}}" id="amount" name="amount" placeholder="" style="height: 40px; border-radius: 0;">
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-danger btn-lg">Pay</button><br>
                                <small>(This is a one time payment)</small>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        @endsection

@push('scripts')
    <script>

        let submittedData = {};
        const upgradeToSellerForm = document.forms['upgradeToSellerForm'];
        upgradeToSellerForm.addEventListener('submit', e => {
            e.preventDefault();
            [...upgradeToSellerForm.elements].forEach( el => {
               el.name  ? submittedData[el.name] = el.value : '';
            });
            payWithPayStack({
                email: `{{Auth::user()->email}}`,
                firstname: `{{Auth::user()->name}}`,
                amount: `{{count($plans_map)>0?$plans_map[1] * 100:0*100}}` ,
                callback: response => {
                    if(response.status === 'success'){
                        // send a post request to create a subscription for the user and log the payment
                        axios.all([
                            axios.post('/api/v1/crud/subscriptions', {user_id:`{{Auth::user()->id}}`, package_id: `${submittedData.subscription_id}`}),
                            axios.post('/api/v1/crud/payments', {user_id:`{{Auth::user()->id}}`, order_id: `${submittedData.subscription_id}`, response: JSON.stringify(response)})
                        ]).then( axios.spread( (sub_response, payment_response)=> {
                            if(sub_response.data.success === payment_response.data.success){
                                return swal({
                                    title:'Successful!!!',
                                    text: 'Upgrade Successful',
                                    icon: 'success'
                                })
                            }

                            return swal({
                                title:'Error',
                                text: 'Upgrade not Successful, please try again',
                                icon: 'error'
                            })

                        }))
                    }
                }
            });
        })

    </script>

@endpush
