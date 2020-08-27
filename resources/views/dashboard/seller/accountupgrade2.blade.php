@extends('layouts.dashboard.seller')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection
@php
    $plans = \App\SubscriptionPackage::all();
    $plans_map = [];
@endphp
        @section('content')
        <div class="col-md-10">
            <div class="row col-md-12 ml-1 mt-5" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                <div class="col-md-12 text-center ml-0">
                    <h2>Upgrade Account To Manufacturer</h2>
                </div>

            </div>
           <div class="row">
               <div class="col-md-8 offset-2 pt-5 pb-5">
                   <form name="upgradeForm">
                       <div class="form-group">
                           <label for="subject">Upload CAC Doc:</label>
                           <input id="subject" required class="form-control" name="uploaded_doc_url" type="file" placeholder="">
                           <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                       </div>

                       <div class="form-group">
                           <label for="subject">Upload Manufacturer Agreement Form:</label>
                           <input id="subject" required class="form-control" name="uploaded_doc_url" type="file" placeholder="">
                           <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                       </div>

                       <p class="text-gray text-right">(Already have a form)</p>

                       <div class="form-group text-right">
                               <a class="btn" href="http://www.africau.edu/images/default/sample.pdf" target="_blank" style="width: 90px; border-radius: 20px; background-color: #F2F2F2;">Print file</a>
                       </div>

                       <br>
                       <div class="form-group">
                           <label for="message"></label>
                           <textarea name="message" rows="2" cols="2" required style="height: 180px;"  id="message" class="form-control" type="text" placeholder="Type Your Message"></textarea>
                       </div>

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
                           <input type="text" class="form-control" disabled value="{{$plans[0]->name}}" id="amount" name="amount" placeholder="" style="height: 40px; border-radius: 0;">
                       </div>

                       <div class="form-group text-center">
                           <button class="btn btn-danger btn-lg">Pay</button><br>
                           <small>(This is a one time payment)</small>
                       </div>

                       <br>
                       <div class="row">
                           <div class="col-md-4"></div>
                           <div class="col-md-4">
                               <button  class="btn" style="border: 1px solid white; width: 200px; background-color:#AF2E1D; border-radius: 20px; color: white;">Upgrade</button>
                           </div>
                           <div class="col-md-4"></div>
                       </div>
                   </form>
               </div>
           </div>
        </div>
        @endsection


@push('scripts')
    <script>
        FormHandler('upgradeForm', {
            requestUrl: '/api/v1/crud/upgradeRequests',
            cb: response => {
                if (response.success) {
                    return swal({
                        title: 'Success!',
                        text: 'Upgrade Request has been sent successfully, Response will be sent shortly',
                        icon: 'success',
                        button: 'Okay'
                    })
                }

                return swal({
                    title: 'Error!',
                    text: 'We had error sending your upgrade request. Please Try Again',
                    icon: 'error',
                    button: 'Try Again'
                });
            }
        });
    </script>
@endpush
