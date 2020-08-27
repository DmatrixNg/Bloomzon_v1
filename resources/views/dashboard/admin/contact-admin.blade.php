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
    <title>Shopper's Dashboard</title>
</head>

<body style="background-color: #f2f2f2;">

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
                        <li>
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
                        <li>
                            <a href="site_analysis"><i class="fas fa-route"></i>Site Analysis</a>
                        </li>

                        <li class="active">
                            <a href="messages"><i class="fas fa-envelope-square"></i> Messages</a>
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
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Write Admin</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-6 card p-5 offset-3">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Subject: </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Subject: " style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Request Type: </label>
                                <select name="" id="" class="form-control" style="height: 40px; border-radius: 0;">
                                    <option value="Delivery">Delivery</option>
                                    <option value="Service">Service</option>
                                    <option value="Fund">Fund</option>
                                    <option value="Request">Request</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Email address</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control" style="border-radius: 0;" placeholder="Type your message: "></textarea>
                            </div>

                            <div class="form-group pull-right">
                                <a href="account-details" class="btn btn-primary">Send</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../../../../public/super-asset/js/js.js"></script>
</body>

</html>
