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
                                    <i class="fa fa-male fa-4x" style="color: #0149a0;"></i>
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
                                <i class="fa fa-male fa-4x" style="color: #0149a0;"></i>
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
                                    <i class="fa fa-male fa-4x" style="color: #0149a0;"></i>
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
                   <a href="/" style="background-color: #BA220E; color:white; width: 150px; border-radius: 20px; padding:10px;">SITE</a>
               </div>
           </div>
       </div>
        @endsection
