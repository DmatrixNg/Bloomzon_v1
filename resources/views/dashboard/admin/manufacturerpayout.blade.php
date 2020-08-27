
        
@extends('layouts.dashboard.admin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h2>Manufacturer Payout</h2>
                </div>
            </div>
            <div class="panel panel-white">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead style="background-color: #E2EFFF;">
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Wallet Balance</th>
                                <th>Amount Request</th>
                                <th>Narration</th>
                                <th>Action</th>
                                <th>User Balance</th>
                            </tr>
                            </thead>

                            <tbody>
                                @if(count($requests))
                                    @foreach($requests as $req)
                            <tr>
                            <td>{{$loop->index}}</td>
                                <td>{{$request->seller_id->full_name}}</td>
                                <td>{{$request->seller_id->wallet}}</td>
                                <td>{{$request->amount}}</td>
                                <td>{{$request->narration}}</td>
                                <td><button style="background-color: white; border: 1px solid black; border-radius: 20px;">Pay</button></td>
                                <td>N800</td>
                            </tr>
                                    @endforeach
                                    @else
                                    <h4 class="alert alert-warning">
                                        No withdrawal request from the manufacturers
                                    </h4>
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          
        </div>
        @endsection
    