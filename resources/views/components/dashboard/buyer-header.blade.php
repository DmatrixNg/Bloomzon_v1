<div>
   <header class="section-header">

    <section class="header-top" style="background-color: #fff !important; box-shadow: 2px 2px 4px #f2f2f2;">
        <div class="container pr-0 pl-5 mr-4 ml-4" style="max-width: 95% !important; width: 100%;">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <a href="/" class="">
                        <img class="logo" src="{{asset('assets/dashboard/img/bloomzon.png')}}" width="120" height="auto" alt="logo">
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-md-3 d-flex order-3" style="padding-left: 80px !important;">
                    <div class="top-view" style="border-right: none !important;">
                        <h5 style="color: #02499B;"><b>Buyers ID: {{$buyer->id}}</b></h5>
                    <h5 style="color: #02499B;"><b>Last Login: {{date('Y-M-d H:m',strtotime($buyer->last_login))}}</b></h5>
                    <h5 style="color: #02499B;"><b>Location: {{$buyer->street_address}}</b></h5>
                    </div>
                </div>
                <div class="col-md-3 d-flex order-3">
                    <div class="top-view" style="border-right: none !important;">
                        <h5 style="color: #02499B;"><b></b></h5>
                        <h5 style="color: #02499B;"><b></b></h5>
                        <h5 style="color: #02499B;"><b></b></h5>
                    </div>
                </div>
                <!-- col.// -->
                <div class="col-md-4 order-2 order-lg-3">
                    <div class="widgets-wrap d-flex justify-content-end">


                        <!-- widget  dropdown.// -->
                        <div class="widget-header ml-3 text-center">
                            <a href="#">
                            <img src="{{asset('storage/assets/buyer/avatar/'.$buyer->avatar)}}" class="img img-circle m-auto" width="100" height="100">
                                <p class="text-center"></p>
                            </a>
                        </div>
                    </div>
                    <!-- widgets-wrap.// -->
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- container.// -->
    </section>

</header>

</div>