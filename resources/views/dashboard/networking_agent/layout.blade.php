<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Vector (8).png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('agent_asset/css/custom-bs4-3.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('agent_asset/css/ui.css')}}">
    <link rel="stylesheet" href="{{asset('agent_asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('agent_asset/css/responsive.css')}}">
    <title>Agent Dashboard</title>
    <style>
        /* Fixed sidenav, full height */
        .sidenav1 {
            height: 100%;
            width: auto;
            color: #02499B;
            line-height: 40px;
            padding: 10px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav1 a, .dropdown-btn {
            padding: 6px;
            text-decoration: none;
            font-size: 16px;
            color: #02499B;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
            border-bottom: solid 1px #f2f2f2;
        }

        /* On mouse-over */
        .sidenav1 a:hover, .dropdown-btn:hover {
            color: #fff;
            background-color: #02499B;
            /*border-radius: 5px;*/
        }

        /* Main content */
        .main1 {
            margin-left: 200px; /* Same as the width of the sidenav */
            font-size: 20px; /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: #02499B;
            color: white;
            border-radius: 5px;
        }

        a .active {
            background-color: #02499B;
            color: white;
            border-radius: 5px;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container1 {
            display: none;
            background-color: #f2f2f2;
            padding-left: 8px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 8px;
            padding-top: 20px;
        }

        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {
            .sidenav1 {padding-top: 15px;}
            .sidenav1 a {font-size: 16px;}
        }
    </style>
</head>

<body style="background-color: #fff;">

<header class="section-header">

    <section class="header-top2 m-0 p-0">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-sm-2 col-2 text-white text-center" style="background-color: #ffffff; border-bottom: solid 1px #f2f2f2;">
                    <img class="logo" src="{{asset('agent_asset/img/bloomzon.png')}}" alt="logo" width="80" height="auto">
                </div>
                <div class="col-lg-7 p-2 text-white">
                </div>
                <!-- col.// -->
                <div class="col-lg-3 text-white text-left">
                    <div class="widgets-wrap d-flex justify-content-start">
                        <div class="widget-header ml-3 text-white">
                            @if(count($user_metas->Wallet))
                                <p><b>Available: {{number_format($user_metas->Wallet[0]->available_balance)}}</b></p>
                                <p><b>Net Balance: {{number_format($user_metas->Wallet[0]->net_balance)}}</b></p>
                            @else
                                <p><b>Available: 0</b></p>
                                <p><b>Net Balance: 0</b></p>
                            @endif

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


<div class="container-fluid">

    <div class="row">
        <div class="col-md-2">
            <div class="mt-3 mb-3">
                <div class="text-center mt-5 mb-5">
                    <img src="{{asset($user_metas->User[0]->profile_pic_url)}}" alt="" height="105" class="rounded-circle" width="105"><br><br>
                    <span><strong>{{$user_metas->User[0]->name}}</strong> </span><br>
                    <span><strong>Agent ID: </strong> {{$user_metas->User[0]->id}}</span>
                </div>
                <hr>
                <div class="sidenav1">
                    <a  href="home"><i class="fa fa-tachometer-alt mr-3"></i>Dashboard</a>
                    <a href="profile"><i class="fa fa-user-cog mr-3"></i> Profile Settings</a>
                    <a href="notification"><i class="fa fa-bell mr-3"></i> Notifications</a>
                    <a href="messages"><i class="fa fa-envelope mr-3"></i> Messages</a>
                    <a href="createseller"><i class="fa fa-user mr-3"></i> Create Seller Account</a>
                    <a href="histogram"><i class="fa fa-users mr-3"></i> All Sellers Pre-chart</a>
                    <a href="wallet"><i class="fa fa-wallet mr-3"></i> Wallet</a>
                    <a href="contact-admin"><i class="fa fa-headset mr-3"></i> Contact Admin</a>
                    <a href="verification"><i class="fa fa-user-check mr-3"></i> Verification</a>
                    <a href="logout"><i class="fa fa-sign-out-alt mr-3"></i> Logout</a>
                </div>
            </div>
        </div>

@yield('content')
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('agent_asset/js/js.js')}}"></script>
<script src="{{asset('assets/js/lib/form.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
@stack('scripts')
</body>

</html>
