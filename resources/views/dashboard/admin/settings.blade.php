

@extends('layouts.dashboard.admin')
@section('page_title')
    Shoppers Associate Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h2><img src="{{asset('assets/dashboard/img/settings.png')}}" height="95" width="90"> Account Settings</h2>
                </div>
            </div>
            <div class="row">
            <div class="col-md-8 offset-2">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
        
                            <a style="color: #02499B;" href="{{url('admin/account-statement')}}">
                                <img src="{{asset('assets/dashboard/img/filesicon.png')}}">
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
        
                            <a style="color: #02499B;" href="{{url('/admin/privacy-policy')}}">
                                <img src="{{asset('assets/dashboard/img/fileicon.png')}}">
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
        
                            <a style="color: #02499B;" href="{{url('/admin/terms')}}">
                                <img src="{{asset('assets/dashboard/img/tcicon.png')}}">
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
                            <a style="color: #02499B;" href="{{url('/admin/right-of-purchase')}}">
                            <img src="{{asset('assets/dashboard/img/bloomright.png')}}">
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
                            <a style="color: #02499B;" href="{{url('/admin/refund')}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
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

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{url('/admin/accountpolicy')}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Account policy </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/retailpolicy' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Retail policy </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/cookies' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Cookies </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/privacy' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Privacy </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/refundpolicy' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Refund Policy </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/datapolicy' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Data Policy </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/shippingreturns' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Shipping Returns </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/qualitycontrol' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Quality Control </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/about' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">About </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/services' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Services </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/investor_relations' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Investor Relations </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/career' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Career </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a style="color: #02499B;" href="{{ url('/admin/advertise_your_products' )}}">
        
                            <img src="{{asset('assets/dashboard/img/refundicon.png')}}">
        
                           <span style="margin-left: 37px;">Advertise your product </span> <i style="color: #02499B; margin-left: 460px;" class="fa fa-chevron-right"></i></a>
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
        </div>  @endsection