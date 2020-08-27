

@extends('layouts.dashboard.subadmin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h2><img src="../../../../public/subadmin_asset/img/settings.png" height="95" width="90"> Account Settings</h2>
                </div>
            </div>
            <div class="row">
            <div class="col-md-8 offset-2">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">

                            <a style="color: #02499B;" href="accountstatement">
                                <img src="../../../../public/subadmin_asset/img/filesicon.png">
                                <span style="margin-left: 55px;">Account Statement</span> <i style="color: #02499B; margin-left: 392px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">

                            <a style="color: #02499B;" href="privacypolicy">
                                <img src="../../../../public/subadmin_asset/img/fileicon.png">
                                <span style="margin-left: 60px;">Bloomzon Policy</span><i style="color: #02499B; margin-left: 435px;" class="fa fa-chevron-right"></i>
                        </a>

                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">

                            <a style="color: #02499B;" href="terms">
                                <img src="../../../../public/subadmin_asset/img/tcicon.png">
                                <span style="margin-left: 37px">Bloomzon T & C</span> <i style="color: #02499B; margin-left: 435px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="rightofpruchase">
                            <img src="../../../../public/subadmin_asset/img/bloomright.png">
                            <span style="margin-left: 60px;">Bloomzon Right of Purchase</span> <i style="color: #02499B; margin-left: 300px;" class="fa fa-chevron-right"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="refundpolicy">

                            <img src="../../../../public/subadmin_asset/img/refundicon.png">

                           <span style="margin-left: 37px;">Refund T & C </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
        @endsection
