

@extends('layouts.dashboard.subadmin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row m-5">
                <div class="col-md-6">
                    <div class="card align-items-center dashboard_box">
                        <img src="../../../../public/subadmin_asset/img/messageicon.png" width="200" height="180" alt="">
                    </div>
                    <a href="messages" class="btn dashboard_btn text-white">Messages</a>
                </div>
                <div class="col-md-6">
                    <div class="card align-items-center dashboard_box">
                        <img src="../../../../public/subadmin_asset/img/usersicon.png" width="200" height="160" alt="">

                    </div>
                    <a href="allusers" class="btn dashboard_btn text-white">User Management</a>
                </div>


            </div>

            <div class="row m-5">
                <div class="col-md-6 justify-content-center">
                    <div class="card align-items-center dashboard_box">
                        <img src="../../../../public/subadmin_asset/img/settings.png" width="180" height="180" alt="">

                    </div>
                    <a href="settings" class="btn dashboard_btn">Settings</a>
                </div>
                <div class="col-md-6 justify-content-center">
                    <div class="card align-items-center dashboard_box">
                        <img src="../../../../public/subadmin_asset/img/payouticon.png" width="180" height="180" alt="">

                    </div>
                    <a href="manufacturerpayout" class="btn dashboard_btn">Payout Request</a>
                </div>


            </div>
        </div>
        @endsection
