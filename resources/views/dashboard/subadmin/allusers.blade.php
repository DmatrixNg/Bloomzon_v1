@extends('layouts.dashboard.subadmin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection
@php
$users = \App\User::all();
@endphp
        @section('content')
        <div class="col-md-10" style="padding: 20px;">
            <div class="row">
                    <div class="col-md-3 mb-4 text-left">
                        <h2>List of All Users</h2>
                    </div>
                    <div class="col-md-7"></div>
                    <div class="col-md-2 text-right">
                            <select class="form-control" style="height: 45px; border-radius: 0px;">
                                <option selected="">Sort</option>
                                <option>New</option>
                                <option>Old</option>
                            </select>
                    </div>
                </div>
            <div class="panel panel-white">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead style="background-color: #FFE2E2;">
                            <tr>
                                <th>Names</th>
                                <th>Account Type</th>
                                <th>No. Of Transaction</th>
                                <th>Sales</th>
                                <th>Phone No.</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach($users as $user)
                                @php
                                   $user_transactions = \App\User::transactions($user->id);
                                @endphp
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{ ucfirst($user->account_type) }}</td>
                                    <td>{{ count($user_transactions['sales']) + count($user_transactions['purchases'])}}</td>
                                    <td>{{ count($user_transactions['sales']) }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>
                                        <div class="dropdown col-2">
                                            <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Active
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                <a class="dropdown-item" href="">Active</a>
                                                <a class="dropdown-item" href="">Inactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endsection
