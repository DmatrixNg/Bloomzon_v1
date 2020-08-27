<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Vector (8).png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="prof_asset/css/custom-bs4-3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="prof_asset/css/ui.css">
    <link rel="stylesheet" href="prof_asset/css/style.css">
    <link rel="stylesheet" href="prof_asset/css/responsive.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Professional Service Dashboard</title>

    <style>
        /* Fixed sidenav, full height */
        .sidenav {
            height: 100%;
            width: auto;
            color: #02499B;
            line-height: 40px;
            padding: 10px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
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
        .sidenav a:hover, .dropdown-btn:hover {
            color: #fff;
            background-color: #02499B;
            /*border-radius: 5px;*/
        }

        /* Main content */
        .main {
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
        .dropdown-container {
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
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 16px;}
        }
    </style>
</head>

<body style="background-color: #fff;">
<header class="section-header">

    <section class="header-top" style="background-color: #fff !important; box-shadow: 2px 2px 4px #f2f2f2;">
        <div class="container pr-0 pl-5 mr-4 ml-4" style="max-width: 95% !important; width: 100%;">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <a href="/" class="">
                        <img class="logo" src="prof_asset/img/bloomzon.png" width="120" height="auto" alt="logo">
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-md-2 d-flex order-3" style="padding-left: 80px !important;">
                    <div class="top-view" style="border-right: none !important;">
                        <h5 style="color: #02499B;"><b>Firm Name:</b></h5>
                        <h5 style="color: #02499B;"><b>Profession:</b></h5>
                        <h5 style="color: #02499B;"><b>Location:</b></h5>
                    </div>
                </div>
                <div class="col-md-2 d-flex order-3">
                    <div class="top-view" style="border-right: none !important;">
                        <h5 style="color: #02499B;"><b>{{$user_metas->User[0]->name}} </b></h5>
                        <h5 style="color: #02499B;"><b>{{$user_metas->User[0]->company_name}}</b></h5>
                        <h5 style="color: #02499B;"><b>{{$user_metas->User[0]->address}}</b></h5>
                    </div>
                </div>
                <div class="col-md-4 d-flex order-3">
                    <div class="row">
                        <div class="col-md-12 m-0 p-0"><h3 class="mt-1" style="color: #02499B;">Wallet: </h3></div>
                        <div class="col-md-6 m-0 p-0"><h5 class="m-0 p-2" style="color: #02499B;"><b>Available Balance:</b></h5></div>
                        <div class="col-md-6 m-0 p-0"><h5 class="m-0 p-2" style="color: #02499B;"><b>{{$user_metas->Wallet ? $user_metas->Wallet[0]->available_balance : 0 }}</b></h5></div>
                        <div class="col-md-6 m-0 p-0"><h5 class="m-0 p-2" style="color: #02499B;"><b>Net Balance</b></h5></div>
                        <div class="col-md-6 m-0 p-0"><h5 class="m-0 p-2" style="color: #02499B;"><b>{{$user_metas->Wallet ? $user_metas->Wallet[0]->net_balance : 0 }}</b></h5></div>
                    </div>
                </div>
                <!-- col.// -->
                <div class="col-md-2 order-2 order-lg-3">
                    <div class="widgets-wrap d-flex justify-content-end">
                        <!-- widget  dropdown.// -->
                        <div class="widget-header ml-3 text-center">
                            <a href="#">
                                <img src="{{asset($user_metas->User[0]->profile_pic_url)}}" class="img img-circle m-auto" width="80" height="80">
                                <p class="text-center">{{$user_metas->User[0]->name}}</p>
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
<br>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-2 pb-5">
            <div class="card p-0">
                <div class="sidenav p-0">
                    <h2 class="text-center p-3">MENU</h2>
                    <a href="home"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a href="profile"><i class="fas fa-user-lock"></i> Profile Settings</a>
                    <a href="notifications"><i class="fa fa-bell"></i> Notification</a>
                    <a href="products"><i class="fas fa-shopping-cart"></i> Products</a>
                    <a href="messages"><i class="fas fa-envelope"></i> Messages</a>
                    <a href="shop-gallery"><i class="fas fa-images"></i> Shop Gallery</a>
                    <a href="request"><i class="fas fa-comments"></i> Requests</a>
                    <a href="sales-history"><i class="fa fa-file"></i> Sales History</a>
                    <a href="wallet"><i class="fas fa-wallet"></i> Wallet</a>
                    <a href="contact-admin"><i class="fas fa-headset"></i> Contact Admin</a>
                    <a href="feedback-review"><i class="fa fa-star"></i> Feedback & Review</a>
                    <button class="dropdown-btn"><i class="fas fa-bullhorn"></i> Adverts
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a class="dropdown-item" href="all-ads"> All Ads</a>
                        <a class="dropdown-item" href="post-new-ads"> Post New Ads</a>
                    </div>

                    <a href="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </div>

        @yield('content')

    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="assets/js/js.js"></script>
<script src="assets/js/sweetalert.js"></script>
<script src="assets/js/lib/form.js"></script>
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
