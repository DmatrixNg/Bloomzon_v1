<header class="section-header">
    
    <section class="header-top2 m-0 p-0">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-sm-2 col-2 text-white text-center" style="background-color: #ffffff; border-bottom: solid 1px #f2f2f2;">
                <a href="{{url('/')}}"><img class="logo" src="{{asset('assets/dashboard/img/bloomzon.png')}}" alt="logo" width="80" height="auto"></a>
                </div>
                <div class="col-lg-7 p-2 text-white">
                </div>
                <!-- col.// -->
                <div class="col-lg-3 text-white text-left">
                    <div class="widgets-wrap d-flex justify-content-start">
                        <div class="widget-header ml-3 text-white">
                            <p><b>Available: ${{$networking_agent->wallet}}</b></p>
                            <p><b>Net Balance: ${{$net_balance->sum('amount')}}</b></p>
                        </div>
                    </div>
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- container.// -->
    </section>

</header>