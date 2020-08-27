@extends('dashboard.professional-service.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection
@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Update Card Details</b></h1>
        </div>
        <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <div class="col-md-6 p-5 offset-3">
                <form name="accountDetailsForm" id="accountDetailsForm">
                    <div class="form-group text-center">
                        <img src="{{asset('buyer_assets//img/card.png')}}" alt="">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="card_name" style="font-size: 16px;;">Card Holder Name: </label>
                            <input type="text" id="card_name" name="card_name" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <label for="card_number" style="font-size: 16px;;">Card Number: </label>
                            <input type="text" name="card_number" id="card_number" class="form-control" placeholder="0000 0000 0000 0000">
                        </div>

                    </div>
                    <input type="hidden" name="type" value="card">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                        <div class="col-md-6 pl-0">
                            <label for="expires_at" style="font-size: 16px;;">Expires: </label>
                            <input type="text" name="expires_at" id="expires_at" class="form-control" placeholder="02/23">
                        </div>

                        <div class="col-md-6 pl-0">
                            <label for="cvv" style="font-size: 16px;;"> cvv: </label>
                            <input type="password" name="cvv" id="cvv" class="form-control" placeholder="****">
                        </div>
                    </div>

                    <div class="form-group text-center">

                        <button class="btn btn-danger btn-rounded btn-lg">Save</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        FormHandler('accountDetailsForm', {
            requestUrl: '/api/v1/crud/paymentmethods',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!',
                        text: 'Card Added Successfully',
                        icon: 'success',
                    })
                }
                console.log(response);
                return swal({
                    title: 'Error!',
                    text: 'We had error adding the card. Please try again',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })
    </script>
@endpush
