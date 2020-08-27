<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Vector (8).png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../../public/seller_asset/css/custom-bs4-3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../public/seller_asset/css/ui.css">
    <link rel="stylesheet" href="../../../../public/seller_asset/css/style.css">
    <link rel="stylesheet" href="../../../../public/seller_asset/css/responsive.css">
    <title>Wallet Transaction History</title>
</head>

<body style="background-color: #f2f2f2;">

<header class="section-header">

    <section class="header-top" style="height: 70px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-5 col-5 ">
                    <a href="/" class="brand-wrap">
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-4 col-sm-12 d-flex order-3 p-2 text-white">
                    <h5><strong>Wallet Transaction History</strong></h5>
                </div>
                <!-- col.// -->
                <div class="col-lg-3 col-sm-9 col-10 order-2 order-lg-3">
                    <div class="widgets-wrap d-flex justify-content-end">


                        <!-- widget  dropdown.// -->
                        <div class="widget-header ml-3">

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


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 siddy">
            <div class="">

                <div class="text-center">
                    <img src="../../../../public/seller_asset/img/userface.png" width="105" height="105"><br>
                    <h5><strong>Ben Paul</strong> </h5>
                    <p>Agent ID: Benpaul14</p>

                </div>

                <hr>

                <ul style="list-style: none;" class="sidebar-nav">


                    <li class="">
                        <a href="profile"> <img src="../../../../public/seller_asset/img/icon1.png"> Profile</a>

                    </li>
                    <li>
                        <a href="sales"><img src="../../../../public/seller_asset/img/salesicon.png"> Sales History</a>
                    </li>
                    <li>
                        <a href="notification"><img src="../../../../public/seller_asset/img/icon2.png"> Notifications</a>
                    </li>
                    <li>
                        <a href="messages"><img src="../../../../public/seller_asset/img/icon3.png"> Messages</a>
                    </li>
                    <li>
                        <img src="../../../../public/seller_asset/img/producticon.png"> Products <button type="button" style="background-color: #02499B;" class="btn" data-toggle="collapse" data-target="#sub"><i class="text-white fa fa-caret-down float-right"></i></button>
                        <div id="sub" class="collapse">
                            <a class="dropitem" style="font-size: 12px; padding: 0px;"  href="allproducts">All Product</a>
                            <a class="dropitem" style="font-size: 12px; padding: 0px;"  href="addnewproduct">Add New Product</a>
                        </div>
                    </li>
                    <li>
                        <a href="bloomzonsales"><img src="../../../../public/seller_asset/img/bloomzonicon.png"> Bloomzon Sales</a>
                    </li>
                    <li>
                        <a href="histogram"><img src="../../../../public/seller_asset/img/ordericon.png"> Orders</a>
                    </li>
                    <li>
                        <a href="contact-admin"><img src="../../../../public/seller_asset/img/icon7.png" alt=""> Contact Admin</a>
                    </li>
                    <li>
                        <a href="review"><img src="../../../../public/seller_asset/img/reviewicon.png" alt=""> Review & Feedback</a>
                    </li>
                    <li>
                        <a href="settings"><img src="../../../../public/seller_asset/img/settingsicon.png" alt=""> Settings</a>
                    </li>

                    <li>
                        <a href="wallet"><img src="../../../../public/seller_asset/img/icon6.png" alt=""> Wallet</a>
                    </li>




                    <li>
                        <a href="#">Logout</a>
                    </li>
                </ul>
            </div>


        </div>
        <div class="col-md-8">
            <div class="container">

                <div class="card" style="border-radius: 20px; width: 450px; padding: 20px; margin-left: 350px;">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <i class="fa fa-user-circle fa-4x" style="color: #02499B;"></i>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                            <h4>Name: Mathew</h4>
                            <h4>Balance: N60,000</h4>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-12 card" style="padding: 20px;">
                        <h4 style="color: #02499B;" class="text-center">Billing Details</h4>
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead style="background-color: #02499B; color: white;">
                                        <tr>
                                            <th>Credit/Debit</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Agent</th>
                                            <th>Date</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr>
                                            <td>Credit</td>
                                            <td>N20,000</td>
                                            <td>Bag, Shoe & Clothes</td>
                                            <td>Ose12</td>
                                            <td>15 March 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Credit</td>
                                            <td>N20,000</td>
                                            <td>Bag, Shoe & Clothes</td>
                                            <td>Ose12</td>
                                            <td>15 March 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Credit</td>
                                            <td>N20,000</td>
                                            <td>Bag, Shoe & Clothes</td>
                                            <td>Ose12</td>
                                            <td>15 March 2020</td>
                                        </tr>
                                        <tr>
                                            <td>Credit</td>
                                            <td>N20,000</td>
                                            <td>Bag, Shoe & Clothes</td>
                                            <td>Ose12</td>
                                            <td>15 March 2020</td>
                                        </tr>




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br><br>


                <nav>
                    <ul class="pagination d-flex justify-content-center flex-wrap pagination-rounded-flat pagination-success">
                        <li class="page-item"><a class="page-link" href="#" data-abc="true"><i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#" data-abc="true">1</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-abc="true">2</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-abc="true">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-abc="true">4</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-abc="true"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>




            </div>
        </div>
    </div>
</div>










<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js "></script>
<script src="../../../../public/seller_asset/js/js.js"></script>
</body>

</html>
