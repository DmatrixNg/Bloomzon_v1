
        
@extends('dashboard.grocery.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                            <div class="widgets-wrap d-flex justify-content-center">
                                <div class="widget-header ml-3 row col-md-12">
                                    <div class="col-md-4">
                                        <h3 class="text-white mt-1">Wallet: </h3>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="text-white"><b>Available Balance: $</b></span><br>
                                        <span class="text-white"><b>Net Balance: $</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
        @endsection
    