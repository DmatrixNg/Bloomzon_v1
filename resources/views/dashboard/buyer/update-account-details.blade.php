@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection

@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 text-center"
            style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Update Card Details</b></h1>
        </div>
        <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <div class="col-md-6 p-5 offset-3">
                <form name="accountDetailsForm" method="post" action="{{ route('pay') }}" id="accountDetailsForm">
                    <div class="form-group text-center">
                        <img src="{{ asset('assets/dashboard/img/card.png') }}" alt="">
                        <h1>Saved cards</h1>

                        @if (auth()->guard('buyer')->user()->cards)

                          @foreach (auth()->guard('buyer')->user()->cards as $card)
                            <strong> Card type: </strong>{{$card->card_type}} <br>
                            <strong> Last4: </strong>{{$card->last4}} <br>
                            <strong> Expires: </strong> {{$card->exp_month}}/{{ substr($card->exp_year,-2)}} <br>
                            <br>
                          @endforeach
                        @endif
                    </div>
                    {{-- <input type="hidden" name="_method" value="put"> --}}
                    {{-- <div class="form-group">
                        <div class="form-group">
                            <label for="acc_name" style="font-size: 16px;;">Card Holder Name: </label>
                        <input type="text" value="{{$buyer->account_name}}" id="account_name" name="account_name" class="form-control" placeholder="">
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <div class="">
                            <label for="card_number" style="font-size: 16px;;">Card Number: </label>
                            <input type="text" value="" name="card_number" id="card_number" class="form-control"
                                placeholder="0000 0000 0000 0000">
                        </div>

                    </div>
                    {{-- <div class="form-group">
                        <div class="col-md-6 pl-0">
                            <label for="exampleFormControlInput1" style="font-size: 16px;;">Bank: </label>
                            <select name="bank_name" class="form-control " onchange="checkBank(this)" id="bank">
                                <option selected>Choose</option>
                                <option value="access">Access Bank</option>
                                          <option value="citibank">Citibank</option>
                                          <option value="diamond">Diamond Bank</option>
                                          <option value="ecobank">Ecobank</option>
                                          <option value="fidelity">Fidelity Bank</option>
                                          <option value="firstbank">First Bank</option>
                                          <option value="fcmb">First City Monument Bank (FCMB)</option>
                                          <option value="gtb">Guaranty Trust Bank (GTB)</option>
                                          <option value="heritage">Heritage Bank</option>
                                          <option value="keystone">Keystone Bank</option>
                                          <option value="polaris">Polaris Bank</option>
                                          <option value="providus">Providus Bank</option>
                                          <option value="stanbic">Stanbic IBTC Bank</option>
                                          <option value="standard">Standard Chartered Bank</option>
                                          <option value="sterling">Sterling Bank</option>
                                          <option value="suntrust">Suntrust Bank</option>
                                          <option value="union">Union Bank</option>
                                          <option value="uba">United Bank for Africa (UBA)</option>
                                          <option value="unity">Unity Bank</option>
                                          <option value="wema">Wema Bank</option>
                                          <option value="zenith">Zenith Bank</option>
                                          <option value="other_bank">Other Bank</option>
                                </select>


                           <input class="d-none" placeholder="Enter bank name" name="other_bank" name="other_bank" id="other_bank" />
                         </div>
                        <div class="col-md-6 pr-0">
                            <label for="exampleFormControlInput1" style="font-size: 16px;;">Selected Bank: </label>
                        <input type="text" value="{{$buyer->bank_name}}" disabled class="form-control" placeholder="No bank selected">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" style="font-size: 16px;;">Account Number: </label>
                    <input type="text" class="form-control" name="account_number" value="{{$buyer->acc_no}}" placeholder="0000000000">
                    </div> --}}

                    <div class="form-group">
                        <div class="col-md-6 pl-0">
                            <label for="expires_at" style="font-size: 16px;;">Expires: </label>
                        <input type="text"  value="{{$buyer->card_expires}}" name="card_expires" id="card_expires" class="form-control" maxlength="5" placeholder="02/23">
                        </div>

                        <div class="col-md-6 pl-0">
                            <label for="cvv" style="font-size: 16px;;"> cvv: </label>
                        <input type="password" value="{{$buyer->cvv}}" maxlength="3" name="cvv" id="cvv" class="form-control" placeholder="****">
                        </div>
                    </div>
                    <input type="hidden" name="email" value="{{ request()->user()->email }}"> {{-- required --}}
                                <input type="hidden" name="amount" value="{{0.20 * 100}}"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="currency" value="USD">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['action' => 'addCard']) }}">
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                {{ csrf_field() }}
                    <div class="form-group text-center">
                        <ul id="error_list"></ul>
                        <button class="btn btn-danger btn-rounded btn-lg">{{ __("Save")}}</button>

                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection

@push('scripts')
    {{-- <script>
        function checkBank(el){
            if(el.value =='other_bank'){
                return document.getElementById('other_bank').className = "form-control"
            }
            return  document.getElementById('other_bank').className = "form-control d-none"
        }

        FormHandler('accountDetailsForm', {
            requestUrl:'{{ route('pay') }}',
        cb: function(response){
            if(response.success){
                return swal({
                    title: 'Success!',
                    text: 'Card Details Saved successfully!',
                    icon: 'success',
                    button: 'Ok'
                }).then( () => window.location.reload() )
            }
            ErrorHandler(response.errors ?? {})
            return swal({
                title: 'Error!',
                text: 'We had error updating your profile',
                icon: 'error',
                button: 'Try Again'
            })
        }
      });

    </script> --}}
@endpush
