@extends('layouts.dashboard.shopper')
@section('page_title')
    Shopper's & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="card p-0">
                <div class="row col-md-12 ml-1" style="background-color: #AF2E1D !important; padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-8 text-left ml-0">
                        <h2 class="text-white">Request Details</h2>
                    </div>

                </div>
                <div class="row col-md-12 pt-5 ml-1" style="background-color: #2B2950 !important;">
                    <div class="col-md-8 offset-2 p-5" style="background-color: #5C5B78; border-radius: 0px;">
                        <div class="row p-3 text-white text-center text-bold-600">
                            <div class="col-md-6" style="font-size: 17px;">Seller ID:</div>
                            <div class="col-md-6" style="font-size: 17px;">{{$request->user_id->id}}</div>
                        </div>
                        <div class="row p-3 text-white text-center text-bold-600">
                            <div class="col-md-6" style="font-size: 17px;">Request:</div>
                            <div class="col-md-6" style="font-size: 17px;">{{$request->narration}}</div>
                        </div>
                        <div class="row p-3 text-white text-center text-bold-600">
                            <div class="col-md-6" style="font-size: 17px;">Amount:</div>
                            <div class="col-md-6" style="font-size: 17px;">{{number_format($request->amount)}}</div>
                        </div>
                        <div class="row p-3 text-white text-center text-bold-600">
                            <div class="col-md-6" style="font-size: 17px;">Wallet Bal:</div>
                            <div class="col-md-6" style="font-size: 17px;">{{number_format($request->user_id->wallet)}}</div>
                        </div>
                        <div class="row p-3 text-white text-center text-bold-600">
                            <div class="col-md-6" style="font-size: 17px;">Payment Status:</div>
                            <div class="col-md-6 badge @if($request->status == 0) bg-danger @else bg-success @endif" style="font-size: 17px;">{{$request->status == 1 ?'Paid':'Pending'}}</div>
                        </div>
                    </div>
                </div>
                <div class="row col-md-12 pt-5 pb-5 ml-1" style="background-color: #2B2950 !important;  padding-bottom: 180px !important;">
                    <div class="col-md-8 offset-2 pt-5 text-center text-dark">
                        <h2 class="text-white" style="font-size: 20px">Account Details</h2>
                        <div class="row mt-5 text-dark text-center text-bold-600 mb-5">
                            <div class="col-md-3 text-white" style="font-size: 17px;">Account no:</div>
                            <div class="col-md-6 text-left">
                                <input type="text" disabled class="form-control" value="{{$request->user_id->account_number}}">
                            </div>
                        </div>
                        <div class="row mt-2 text-dark text-center text-bold-600 mb-5">
                            <div class="col-md-3 text-white" style="font-size: 17px;">Amount:</div>
                            <div class="col-md-6 text-left">
                                <input type="text" disabled class="form-control" value="{{$request->amount}}">
                            </div>
                        </div>
                        <div class="row mt-2 text-dark text-center text-bold-600">
                            <div class="col-md-3 text-white" style="font-size: 17px;">Naration:</div>
                            <div class="col-md-6 text-left">
                                <textarea type="text" disabled class="form-control" rows="5">{{$request->narration}}</textarea>
                            </div>
                        </div>
                        <div class="row text-center mt-5">
                            <button class="btn btn-danger btn-lg m-auto" onclick="payout()">Proceed to pay</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endsection

        @push('scripts')
        <script>
           var data = {
                pay:true,
                req_id: '{{$request->id}}',
            }
            function payout(){
                
                makeRequest('/shopper/payout',data).then((e)=>{
                    if(e.success){
                        return swal("You have succesfully paid out seller").then((e)=>{
                            window.location.reload();
                        })
                    }return swal("Unable to payout")
                });
            }


        </script>
        @endpush