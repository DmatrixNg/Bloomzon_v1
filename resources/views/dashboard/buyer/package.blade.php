@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection

@section('content')
<div class="col-md-10">
    <div class="row col-md-12 ml-1 mt-5 mb-5" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
        <div class="col-md-12 text-center ml-0">
            <h2><i class="fas fa-box-open"></i> Your Packagess</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="padding: 30px;">
            <div class="text-center align-items-center card" style="padding: 30px;">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Package</h4>
                    </div>
                    <div class="col-md-6">
                        <button class="btn" style="color: white; background-color: #02499B; border-radius: 5px;">Premium</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-4">
                    <label for="renewal">Renewal Plan</label>
                </div>
                <div class="col-md-8">
                    <select id="renewal" class="form-control">
                        <option>Basic</option>
                        <option>Premium</option>
                    </select>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <label for="withdraw">Withdrawal Plan</label>
                </div>
                <div class="col-md-8">
                    <div id="paypal-button-container"></div>
                </div>
            </div>
            <br><br>
            <a href="#" class="btn" style="margin-left:80px; border: 1px solid white; width: 200px; background-color:#AF2E1D; border-radius: 20px; color: white;">SAVE</a>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection
