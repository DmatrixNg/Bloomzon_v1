@extends('dashboard.manufacturer.layouts.app')
@section('page_title')
    Seller's Dashboard - Payment Account Details
@endsection
@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 text-center"
            style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Update Account Details</b></h1>
        </div>
        <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <div class="col-md-6 p-5 offset-3">
                <form action="{{ url('manufacturer/update_account_details') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="acc_name" style="font-size: 16px;;">Account Name: </label>
                            <input type="text" value="{{ auth()->guard('manufacturer')->user()->account_name }}" id="account_name" name="account_name"
                                class="form-control" placeholder="">
                            @error('account_name')
                                <small class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" style="font-size: 16px;;">Bank: </label>
                            <select name="bank" class="form-control " onchange="checkBank(this)" id="bank">
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
                                <option value="other_bank" class="d-none">Other Banks</option>
                            </select>
                            <input class="d-none" placeholder="Enter bank name" name="" id="other_bank" />
                            @error('bank')
                                <small class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" style="font-size: 16px;;">Selected Bank: </label>
                            <input type="text" value=" {{ auth()->guard('manufacturer')->user()->bank }}" disabled class="form-control"
                                placeholder="No bank selected">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" style="font-size: 16px;;">Account Number: </label>
                        <input type="text" class="form-control" name="account_number" value=" {{ auth()->guard('manufacturer')->user()->account_number }} "
                            placeholder="0000000000">
                            @error('account_number')
                                <small class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                    </div>



                    <div class="form-group text-center">
                        <div id="error_list"></div>
                        <button class="btn btn-danger btn-rounded btn-lg">Save</button>

                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection

@section('page_js')
    <script>
        function checkBank(el) {
            if (el.value == 'other_bank') {
                return document.getElementById('other_bank').className = "form-control"
            }
            return document.getElementById('other_bank').className = "form-control d-none"
        }

    </script>
@endsection
