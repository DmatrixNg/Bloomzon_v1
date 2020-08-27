<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Vector (8).png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../../public/super-asset/css/custom-bs4-3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../public/super-asset/css/ui.css">
    <link rel="stylesheet" href="../../../../public/super-asset/css/style.css">
    <link rel="stylesheet" href="../../../../public/super-asset/css/responsive.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Super-Admin Dashboard</title>
</head>

<body style="background-image: url(../../../../public/super-asset/img/495.jpg);">

    <header class="section-header">

        <section class="header-top" style="background-color: #02499B !important;">
            <div class="container pr-0 pl-5 mr-4 ml-4" style="max-width: 95% !important; width: 100%;">
                <div class="row align-items-center">
                    <div class="col-md-2 ">
                        <a href="/" class="brand-wrap">
                            <img class="logo" src="../../../../public/super-asset/img/logo.png" alt="logo">
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
                        <li class="active">
                            <a href="system_control"><i class="fa fa-cog"></i>System Control</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i>  SUB-ADMIN</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="all_subadmin">All Sub - Admin</a>
                                <a class="dropdown-item" href="create_subadmin">Create Sub - Admin</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle"></i> SYSTEM USERS</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="all_sellers">All Sellers</a>
                                <a class="dropdown-item" href="all_buyers">Buyers</a>
                                <a class="dropdown-item" href="networking_associate">Networking Associates</a>
                                <a class="dropdown-item" href="shoppers_associates">Shoppers Associates</a>
                                <a class="dropdown-item" href="delivery_merchants">Delivery Merchants</a>
                                <a class="dropdown-item" href="professional_service">Professional Service</a>
                                <a class="dropdown-item" href="sub_admin">Sub Admin</a>
                                <a class="dropdown-item" href="groceries_fastfood">Groceries &amp; Fast Food Vendors</a>
                                <a class="dropdown-item" href="manufacturers">Manufacturers</a>
                            </div>
                        </li>
                        <li>
                            <a href="account_sales_statements"><i class="fas fa-clipboard-list"></i> Account Sales Statements</a>
                        </li>
                        <li class="">
                            <a href="site_analysis"><i class="fas fa-route"></i>Site Analysis</a>
                        </li>

                        <li>
                            <a href="messages"><i class="fas fa-envelope-square"></i> Messages</a>
                        </li>
                        <hr>
                        <li style="margin-top: 80px;">
                            <a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 offset-1 mt-4 mb-4">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Admin</h2>
                    </div>
                    <div class="col-md-3 mt-4 text-right">
                        <button class="btn btn-secondary">Show all</button>
                    </div>
                </div>
                <div class="card mb-3 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-left: 5px solid #02499B;">
                    <div class="row p-3 ml-3 mr-5">
                        <div class="col-md-4 text-left">
                            <h4>Admin</h4>
                            <i class="fa fa-user-circle fa-4x"></i>
                        </div>
                        <div class="col-md-8 m-auto">
                            <h4 style="color: #666;">Your request has been treated.</h4>
                            <p style="font-size: 16px; color: #999;">13/04/2020</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-left: 5px solid #AF2E1D;">
                    <div class="row p-3 ml-3 mr-5">
                        <div class="col-md-4 text-left">
                            <h4>Admin</h4>
                            <i class="fa fa-user-circle fa-4x"></i>
                        </div>
                        <div class="col-md-8 m-auto">
                            <h4 style="color: #666;">Your request has been treated.</h4>
                            <p style="font-size: 16px; color: #999;">13/04/2020</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-left: 5px solid #02499B;">
                    <div class="row p-3 ml-3 mr-5">
                        <div class="col-md-4 text-left">
                            <h4>Admin</h4>
                            <i class="fa fa-user-circle fa-4x"></i>
                        </div>
                        <div class="col-md-8 m-auto">
                            <h4 style="color: #666;">Your request has been treated.</h4>
                            <p style="font-size: 16px; color: #999;">13/04/2020</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-left: 5px solid #AF2E1D;">
                    <div class="row p-3 ml-3 mr-5">
                        <div class="col-md-4 text-left">
                            <h4>Admin</h4>
                            <i class="fa fa-user-circle fa-4x"></i>
                        </div>
                        <div class="col-md-8 m-auto">
                            <h4 style="color: #666;">Your request has been treated.</h4>
                            <p style="font-size: 16px; color: #999;">13/04/2020</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-left: 5px solid #02499B;">
                    <div class="row p-3 ml-3 mr-5">
                        <div class="col-md-4 text-left">
                            <h4>Admin</h4>
                            <i class="fa fa-user-circle fa-4x"></i>
                        </div>
                        <div class="col-md-8 m-auto">
                            <h4 style="color: #666;">Your request has been treated.</h4>
                            <p style="font-size: 16px; color: #999;">13/04/2020</p>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-left: 5px solid #AF2E1D;">
                    <div class="row p-3 ml-3 mr-5">
                        <div class="col-md-4 text-left">
                            <h4>Admin</h4>
                            <i class="fa fa-user-circle fa-4x"></i>
                        </div>
                        <div class="col-md-8 m-auto">
                            <h4 style="color: #666;">Your request has been treated.</h4>
                            <p style="font-size: 16px; color: #999;">13/04/2020</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js " integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa " crossorigin="anonymous "></script>
    <script src="../../../../public/super-asset/js/js.js "></script>
</body>

</html>
