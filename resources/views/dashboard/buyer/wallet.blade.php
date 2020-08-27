<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Vector (8).png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="asset/css/custom-bs4-3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/ui.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/responsive.css">
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
                            <img class="logo" src="asset/img/logo.png" alt="logo">
                        </a>
                        <!-- brand-wrap.// -->
                    </div>
                    <div class="col-md-4 d-flex order-3 text-white">
                        <div class="top-view">
                            <h3>Buyer ID: </h3>
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
                        <li class="active">
                            <a href="index"><i class="fa fa-dashboard"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="profile"><i class="fa fa-user-circle"></i>Profile</a>
                        </li>
                        <li>
                            <a href="purchase-history"><i class="fas fa-clock"></i>Purchase History</a>
                        </li>
                        <li>
                            <a href="notifications"><i class="fa fa-bell"></i>Notifications</a>
                        </li>
                        <li>
                            <a href="favourites"><i class="fa fa-heart"></i>Favourites</a>
                        </li>
                        <li>
                            <a href="bloomzon-products"><i class="fas fa-shopping-cart"></i>Bloomzon Products</a>
                        </li>

                        <li>
                            <a href="payment-history"><i class="fas fa-credit-card"></i>Payment History</a>
                        </li>
                        <li>
                            <a href="messages"><i class="fas fa-envelope"></i>Messages</a>
                        </li>
                        <li>
                            <a href="points"><i class="fa fa-dot-circle"></i>Points</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bullhorn"></i>  Adverts</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="all-ads">All Ads</a>
                                <a class="dropdown-item" href="post-new-ads">Post New Ads</a>
                            </div>
                        </li>
                        <li>
                            <a href="contact"><i class="fa fa-envelope"></i>Contact Admin</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-star-half-alt"></i>  Service Rating</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="dispute">Dispute</a>
                                <a class="dropdown-item" href="feedback">Feedback</a>
                                <a class="dropdown-item" href="review">Reviews</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-upload"></i>  Upgrade</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="upgrade-to-seller">Become a Seller</a>
                            </div>
                        </li>
                        <hr>
                        <li style="margin-top: 80px;">
                            <a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-md-9">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Payment Request</b></h1>
                </div>
                <div class="row col-md-12 mb-3" style="background-color: #2B2950 !important; padding: 20px;">
                    <div class="mb-2 p-4" style="border-radius: 20px; background-color: #5C5B78; width: 100%; color: white;">
                        <div class="col-md-4">
                            <i class="fa fa-user-circle fa-4x text-white pl-3"></i>
                            <p class="text-white">02/04/2020</p>
                        </div>
                        <div class="col-md-6">
                            <p><span style="font-weight: bolder">SELLER ID: </span></p>
                            <p><span style="font-weight: bolder">REQUEST: </span>Chuks</p>
                            <p><span style="font-weight: bolder">AMOUNT: </span></p>
                        </div>
                        <div class="col-md-2">
                            <p><span style="font-weight: bolder">Ose345</span></p>
                            <p><span style="font-weight: bolder">I need to be paid</span></p>
                            <p><span style="font-weight: bolder">N2, 000</span></p>
                        </div>
                    </div>
                    <div class="mb-2 p-4" style="border-radius: 20px; background-color: #5C5B78; width: 100%; color: white;">
                        <div class="col-md-4">
                            <i class="fa fa-user-circle fa-4x text-white pl-3"></i>
                            <p class="text-white">02/04/2020</p>
                        </div>
                        <div class="col-md-6">
                            <p><span style="font-weight: bolder">SELLER ID: </span></p>
                            <p><span style="font-weight: bolder">REQUEST: </span>Chuks</p>
                            <p><span style="font-weight: bolder">AMOUNT: </span></p>
                        </div>
                        <div class="col-md-2">
                            <p><span style="font-weight: bolder">Ose345</span></p>
                            <p><span style="font-weight: bolder">I need to be paid</span></p>
                            <p><span style="font-weight: bolder">N2, 000</span></p>
                        </div>
                    </div>
                    <div class="mb-2 p-4" style="border-radius: 20px; background-color: #5C5B78; width: 100%; color: white;">
                        <div class="col-md-4">
                            <i class="fa fa-user-circle fa-4x text-white pl-3"></i>
                            <p class="text-white">02/04/2020</p>
                        </div>
                        <div class="col-md-6">
                            <p><span style="font-weight: bolder">SELLER ID: </span></p>
                            <p><span style="font-weight: bolder">REQUEST: </span>Chuks</p>
                            <p><span style="font-weight: bolder">AMOUNT: </span></p>
                        </div>
                        <div class="col-md-2">
                            <p><span style="font-weight: bolder">Ose345</span></p>
                            <p><span style="font-weight: bolder">I need to be paid</span></p>
                            <p><span style="font-weight: bolder">N2, 000</span></p>
                        </div>
                    </div>
                    <div class="mb-2 p-4" style="border-radius: 20px; background-color: #5C5B78; width: 100%; color: white;">
                        <div class="col-md-4">
                            <i class="fa fa-user-circle fa-4x text-white pl-3"></i>
                            <p class="text-white">02/04/2020</p>
                        </div>
                        <div class="col-md-6">
                            <p><span style="font-weight: bolder">SELLER ID: </span></p>
                            <p><span style="font-weight: bolder">REQUEST: </span>Chuks</p>
                            <p><span style="font-weight: bolder">AMOUNT: </span></p>
                        </div>
                        <div class="col-md-2">
                            <p><span style="font-weight: bolder">Ose345</span></p>
                            <p><span style="font-weight: bolder">I need to be paid</span></p>
                            <p><span style="font-weight: bolder">N2, 000</span></p>
                        </div>
                    </div>
                    <div class="mb-2 p-4" style="border-radius: 20px; background-color: #5C5B78; width: 100%; color: white;">
                        <div class="col-md-4">
                            <i class="fa fa-user-circle fa-4x text-white pl-3"></i>
                            <p class="text-white">02/04/2020</p>
                        </div>
                        <div class="col-md-6">
                            <p><span style="font-weight: bolder">SELLER ID: </span></p>
                            <p><span style="font-weight: bolder">REQUEST: </span>Chuks</p>
                            <p><span style="font-weight: bolder">AMOUNT: </span></p>
                        </div>
                        <div class="col-md-2">
                            <p><span style="font-weight: bolder">Ose345</span></p>
                            <p><span style="font-weight: bolder">I need to be paid</span></p>
                            <p><span style="font-weight: bolder">N2, 000</span></p>
                        </div>
                    </div>
                    <div class="mb-2 p-4" style="border-radius: 20px; background-color: #5C5B78; width: 100%; color: white;">
                        <div class="col-md-4">
                            <i class="fa fa-user-circle fa-4x text-white pl-3"></i>
                            <p class="text-white">02/04/2020</p>
                        </div>
                        <div class="col-md-6">
                            <p><span style="font-weight: bolder">SELLER ID: </span></p>
                            <p><span style="font-weight: bolder">REQUEST: </span>Chuks</p>
                            <p><span style="font-weight: bolder">AMOUNT: </span></p>
                        </div>
                        <div class="col-md-2">
                            <p><span style="font-weight: bolder">Ose345</span></p>
                            <p><span style="font-weight: bolder">I need to be paid</span></p>
                            <p><span style="font-weight: bolder">N2, 000</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="asset/js/js.js"></script>
</body>

</html>
