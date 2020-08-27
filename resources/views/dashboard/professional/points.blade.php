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
    <title>Buyer's Dashboard</title>
</head>

<body style="background-color: #fff;">

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

        <div class="row mb-5">
            <div class="col-md-3 pb-5">
                <div class="card">
                    <div style="margin-bottom: 20px;">
                        <h2 class="text-center">MENU</h2>
                    </div>
                    <ul style="list-style: none;" class="sidebar-nav">
                        <li>
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
                        <li class="active">
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
                <div class="col-md-12 mt-4 mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row text-center text-white p-3 mr-1" style="border-radius: 5px; background-color: #02499B;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-chart-line fa-4x"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>MY POINTS</h4>
                                    <h3><b>400</b></h3>
                                    <p>Total Available Points</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row text-center text-white pt-3 pb-3 mr-1" style="border-radius: 5px; background-color: firebrick;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-chart-pie fa-4x"></i>
                                </div>
                                <div class="col-md-9">
                                    <h3><b>Earned Points:</b> 1,000</h3>
                                    <h3><b>Earned Points:</b> 600</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row text-center  pt-4 pb-4 text-white p-3 mr-1" style="border-radius: 5px; background-color: #02499B;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>Purchase 10 Products to earn 100 points</h4>
                                    <button class="btn btn-danger">Start Shopping</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card m-0 p-0">
                        <table class="table text-center table-bordered m-0">
                            <thead style="background-color:  #003B88; color: #fff; font-size: 16px; vertical-align: middle;">
                                <tr style="height: 60px; text-align: center !important;" class="text-center">
                                    <th class="text-center" style="border: solid 3px #ddd;">MONTH</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">TOTAL PURCHASE </th>
                                    <th class="text-center" style="border: solid 3px #ddd;">POINTS EARNED</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">AVAILABLE POINTS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="height: 60px;">
                                    <td style="border: solid 3px #ddd;">April</td>
                                    <td style="border: solid 3px #ddd;">40</td>
                                    <td style="border: solid 3px #ddd;">400</td>
                                    <td style="border: solid 3px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 3px #ddd;">April</td>
                                    <td style="border: solid 3px #ddd;">40</td>
                                    <td style="border: solid 3px #ddd;">400</td>
                                    <td style="border: solid 3px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 3px #ddd;">April</td>
                                    <td style="border: solid 3px #ddd;">40</td>
                                    <td style="border: solid 3px #ddd;">400</td>
                                    <td style="border: solid 3px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 3px #ddd;">April</td>
                                    <td style="border: solid 3px #ddd;">40</td>
                                    <td style="border: solid 3px #ddd;">400</td>
                                    <td style="border: solid 3px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 3px #ddd;">April</td>
                                    <td style="border: solid 3px #ddd;">40</td>
                                    <td style="border: solid 3px #ddd;">400</td>
                                    <td style="border: solid 3px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 3px #ddd;">April</td>
                                    <td style="border: solid 3px #ddd;">40</td>
                                    <td style="border: solid 3px #ddd;">400</td>
                                    <td style="border: solid 3px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 3px #ddd;">April</td>
                                    <td style="border: solid 3px #ddd;">40</td>
                                    <td style="border: solid 3px #ddd;">400</td>
                                    <td style="border: solid 3px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 3px #ddd;">April</td>
                                    <td style="border: solid 3px #ddd;">40</td>
                                    <td style="border: solid 3px #ddd;">400</td>
                                    <td style="border: solid 3px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 3px #ddd;">April</td>
                                    <td style="border: solid 3px #ddd;">40</td>
                                    <td style="border: solid 3px #ddd;">400</td>
                                    <td style="border: solid 3px #ddd;">10</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td style="border: solid 3px #ddd;">April</td>
                                    <td style="border: solid 3px #ddd;">40</td>
                                    <td style="border: solid 3px #ddd;">400</td>
                                    <td style="border: solid 3px #ddd;">10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js " integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa " crossorigin="anonymous "></script>
    <script src="../../../../public/prof_asset/js/js.js "></script>
</body>

</html>
