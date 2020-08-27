@extends('layouts.dashboard.seller')
@section('page_title')
    Seller's Dashboard | Account upgrade
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row text-center align-items-center mt-5 mb-5">
                <div class="col-md-12 p-2"><img src="{{asset($user_metas->User[0]->profile_pic_url)}}" height="200" width="200"  style="border-radius: 50%"></div>
                <div class="col-md-12 p-2"><p style="color: #02499B;">Your Package</p></div>
                <div class="col-md-12 p-2"><button class="btn" style="background-color: #F2F2F2; border-radius: 10px;">{{$user_metas->Subscription[0]->name ?? 'Not subscribed to a package'}}</button></div>
                <div class="col-md-12 text-center mt-4">
                        <a href="accountupgrade2" class="btn" style="border: 1px solid white; width: 200px; background-color:#AF2E1D; border-radius: 20px; color: white;">Upgrade</a>
                </div>
            </div>
        </div>
        @endsection
