<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Vector (8).png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../../public/prof_asset/css/custom-bs4-3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../public/prof_asset/css/ui.css">
    <link rel="stylesheet" href="../../../../public/prof_asset/css/style.css">
    <link rel="stylesheet" href="../../../../public/prof_asset/css/responsive.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Shopper's Dashboard</title>
</head>

<body style="background-color: #f2f2f2;">

    <header class="section-header">

        <section class="header-top" style="background-color: #02499B !important;">
            <div class="container pr-0 pl-5 mr-4 ml-4" style="max-width: 95% !important; width: 100%;">
                <div class="row align-items-center">
                    <div class="col-md-2 ">
                        <a href="/" class="brand-wrap">
                            <img class="logo" src="../../../../public/prof_asset/img/logo.png" alt="logo">
                        </a>
                        <!-- brand-wrap.// -->
                    </div>
                    <div class="col-md-4 d-flex order-3 text-white">
                        <div class="top-view">
                            <h3>Shopper ID: </h3>
                        </div>
                    </div>
                    <!-- col.// -->
                    <div class="col-md-6 order-2 order-lg-3">
                        <div class="widgets-wrap d-flex justify-content-end">


                            <!-- widget  dropdown.// -->
                            <div class="widget-header ml-3">
                                <a href="#"><i class="text-white fa fa-user-circle fa-2x"></i></a>
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
            <div class="col-md-3 pb-5">
                <div class="card">
                    <div style="margin-bottom: 20px;">
                        <h2 class="text-center">MENU</h2>
                    </div>
                    <ul style="list-style: none;" class="sidebar-nav">
                        <li>
                            <a href="index"><i class="fa fa-dashboard"></i>Dashboard</a>
                        </li>
                        <li class="">
                            <a href="delivery-request"><i class="fa fa-comment-alt"></i>Delivery Request</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-warehouse"></i> Warehouse</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="warehouse-package">Package Goods</a>
                            </div>
                        </li>
                        <li>
                            <a href="delivery-merchant"><i class="fa fa-user"></i>Delivery Merchant Status</a>
                        </li>
                        <li class="active">
                            <a href="routing"><i class="fas fa-route"></i>Control/Routing Check</a>
                        </li>

                        <li>
                            <a href="wallet"><i class="fas fa-wallet"></i>Wallet</a>
                        </li>
                        <li>
                            <a href="contact-admin"><i class="fas fa-users-cog"></i>Contact Admin</a>
                        </li>

                        <li>
                            <a href="review"><i class="fa fa-thumbs-up"></i>Customer Feedback</a>
                        </li>

                        <li>
                            <a href="settings"><i class="fa fa-cog"></i>Settings</a>
                        </li>
                        <li>
                            <a href="messages"><i class="fa fa-envelope"></i>Messages</a>
                        </li>

                        <li>
                            <a href="notifications"><i class="fa fa-bell"></i>Notification</a>
                        </li>
                        <hr>
                        <li style="margin-top: 80px;">
                            <a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-center" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                            <h1 style="padding: 10px;"><b>Control/Routing Check</b></h1>
                            <img src="../../../../public/prof_asset/img/route.png" height="400">
                        </div>
                    </div>
                </div>
                <!-- <div class="row" style="padding: 15px;">
                    <div class="col-md-12 card" style="padding: 15px; text-align: right;">
                        <p>Copyright 2020 - Bloomzon </p>
                    </div>
                </div> -->
            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../../../../public/prof_asset/js/js.js"></script>
</body>

</html>
