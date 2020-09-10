@extends('layouts.dashboard.networking_agent')
@section('page_title')
    Networking Agent Dashboard
@endsection


@section('content')
    <div class="col-md-10">
        <div class="mt-5" style="background-color: white; padding: 30px;">
            <div class="container">
                <div class="row mb-5" style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-2">
                        <h5 class="p-3">Stage 1</h5>
                    </div>
                    @if(count($stage1))
                        @foreach($stage1 as $seller)
                            <div class="col-md-1">
                                <i class="fa fa-male fa-4x" style="color: #0149a0;"></i> <br>
                                {{ $seller->seller->products->count() == 0 ? 'Inactive' : 'Active' }}
                            </div>
                        @endforeach
                    @else
                    <div class="alert alert-warning">You do not have any seller</div>
                    @endif
                    <div class="col-md-12 p-5">
                        <p class="text-gray">(You need {{7 - count($stage1)}} users to complete this state)</p>
                    </div>
                </div>
                <div class="row mb-5"  style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-2">
                        <h5>Stage 2</h5>
                    </div>
                    @if(count($stage2))
                    @foreach($stage2 as $seller)
                        <div class="col-md-1">
                            <i class="fa fa-male fa-4x" style="color: #0149a0;"></i><br>
                            {{ $seller->seller->products->count() ? 'Inactive' : 'Active' }}
                        </div>
                    @endforeach
                @else
                <div class="alert alert-warning">You do not have any seller for this stage</div>
                @endif
                <div class="col-md-12 p-5">
                    <p class="text-gray">(You need {{14 - count($stage2)}} users to complete this state)</p>
                </div>
                </div>
                <div class="row mb-5"   style="border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-2">
                        <h5>Stage 3</h5>
                    </div>
                    @if(count($stage3))
                        @foreach($stage1 as $seller)
                            <div class="col-md-1">
                                <i class="fa fa-male fa-4x" style="color: #0149a0;"></i><br>
                                {{ $seller->seller->products->count() ? 'Inactive' : 'Active' }}
                            </div>
                        @endforeach
                    @else
                    <div class="alert alert-warning">You do not have any seller for this stage</div>
                    @endif
                    <div class="col-md-12 p-5">
                        <p class="text-gray">(You need {{28 - count($stage3)}} users to complete this state)</p>
                    </div>

                </div>
            </div>
        </div>
        <br><br>

        <div class="container">
            <div class="float-left">
                <a href="{{url('/')}}" style="background-color: #BA220E; color:white; width: 150px; border-radius: 20px; padding:10px;">SITE</a>
            </div>
        </div>
    </div>
@endsection








@section('OldContent')
    <div class="col-md-10">
        <div class="col-md-12 text-center mt-5 mb-5"
            style="padding: 10px; text-align: center !important; border-bottom: 1px solid #f2f2f2;">
            <h1 class="text-center m-auto pt-3 pb-3 "><b>Your Histogram History</b></h1>
        </div>
        <div class="row mt-5 mb-5" style="border-bottom: #f2f2f2 solid 1px;">
            <div class="col-md-12">
                <h5 class="p-3">STAGE 1</h5>
            </div>

            @if(count($stage1))
                @foreach($stage1 as $stage)

                    <div class="col-md-2">
                        <img style="margin-left: 25px;" class="text-center" height="50" width="50"
                            src="{{ asset('storage/assets/seller/avatar/' . $stage->seller->avatar) }}"><br>
                        <button class="btn"
                            style="font-size: 10px; background: #AF2E1D; color: white; border-radius: 30px;">{{$stage->seller->full_name}}</button>
                        <p class="text-center"><strong>Active</strong></p>
                        <hr style="background-color: #1DAF3F; height: 5px; margin-top: -10px;">

                    </div>

                @endforeach
                <p style="color: #02499B;">(Needs {{ 7 - count($stage1)}} sellers to
                    complete this stage)</p>
            @else
                <div class="alert alert-warning">You have added no seller</div>
            @endif
        </div>
        <div class="row mt-5 mb-5" style="border-bottom: #f2f2f2 solid 1px;">
            <div class="col-md-12">
                <h5 class="p-3">STAGE 2</h5>
            </div>

            @if(count($stage2))
                @foreach($stage2 as $stage)

                    <div class="col-md-2">
                        <img style="margin-left: 25px;" class="text-center"
                            src="{{ asset('storage/assets/seller/avatar/' . $stage->seller->avatar) }}"><br>
                        <button class="btn"
                            style="font-size: 10px; background: #AF2E1D; color: white; border-radius: 30px;">{{$stage->seller->full_name}}</button>
                        <p class="text-center"><strong>Active</strong></p>
                        <hr style="background-color: #1DAF3F; height: 5px; margin-top: -10px;">

                    </div>

                @endforeach
               <br> <p style="color: #02499B;">(Needs {{ 7 - count($stage1)}} sellers to
                    complete this stage)</p>
            @else
                <div class="alert alert-warning">You have added no seller</div>
            @endif
        </div>
        <div class="row mt-5 mb-5" style="border-bottom: #f2f2f2 solid 1px;">
            <div class="col-md-12">
                <h5 class="p-3">STAGE 3</h5>
            </div>

            @if(count($stage3))
                @foreach($stage3 as $stage)

                    <div class="col-md-2">
                        <img style="margin-left: 25px;" class="text-center" width="20" height="20"
                            src="{{ asset('storage/assets/seller/avatar/' . $stage->seller->avatar) }}"><br>
                        <button class="btn"
                            style="font-size: 10px; background: #AF2E1D; color: white; border-radius: 30px;">{{$stage->seller->full_name}}</button>
                        <p class="text-center"><strong>Active</strong></p>
                        <hr style="background-color: #1DAF3F; height: 5px; margin-top: -10px;">

                    </div>

                @endforeach
                <br> <p style="color: #02499B;">(Needs {{ 7 - count($stage1)}} sellers to
                    complete this stage)</p>
            @else
                <div class="alert alert-warning">You have added no seller</div>
            @endif
        </div>

        <div class="col-md-4">
            <a href="{{route('networking_agent.create-seller')}}" class="btn" style="background: #02499B; color: white; border-radius: 30px;"> Add Seller</a>


        </div>
    </div>
@endsection
