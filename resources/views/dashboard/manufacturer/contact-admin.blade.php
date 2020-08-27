@extends('dashboard.manufacturer.layout')
@section('page_title')
    Manufacturer's Dashboard - Issues
@endsection

@section('content')
    <div class="col-md-10">

        <div class="row align-items-center pt-5 pb-5">
            <div class="col-lg-5 col-sm-5 col-5 ">
                <div class="dropdown col-2">
                    <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="">Name</a>
                        <a class="dropdown-item" href="">Date</a>
                        <a class="dropdown-item" href="">Account</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-12 d-flex order-3 p-2 text-white">
                <h5><strong><i class="fa fa-user"></i> Cases</strong></h5>
            </div>

            <div class="col-lg-3 col-sm-9 col-10 order-2 order-lg-3">
                <div class="widgets-wrap d-flex justify-content-end">



                    <div class="widget-header ml-3">
                        <a href="writeadmin" class="btn" style="border-radius:20px; border: 1px solid #AF2E1D; width: 170px; color: #AF2E1D;">Open New Case</a>

                    </div>
                </div>

            </div>

        </div>
        <div class="" style="padding: 10px;">

            @if(count($issues = $user_metas->Issue))
                @foreach($issues as $issue)
                    <a href="message-chat">
                        <div class="container mt-4" style="border-bottom: solid #f2f2f2 1px;">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="seller_asset/img/profil.png" style="border-radius: 30px;" width="60" height="60">
                                </div>
                                <div class="col-md-7">
                                    <button class="btn" style="background-color: #02499B; border-radius: 20px; width: 130px; color: white;">Admin</button>
                                </div>
                                <div class="col-md-2">
                                    <p style="color: grey">{{\Carbon\Carbon::parse($issue->created_at)->format('g:i A')}}</p>
                                </div>
                                <div class="col-md-2">
                                    <p style="color: grey">{{\Carbon\Carbon::parse($issue->created_at)->format('d/m/Y')}}</p>
                                </div>
                                <div class="col-md-10 offset-1"><p> {{$issue->message}} </p></div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @else
                <h3> You have not created any support issue</h3>
            @endif

        </div>

    </div>
@endsection
