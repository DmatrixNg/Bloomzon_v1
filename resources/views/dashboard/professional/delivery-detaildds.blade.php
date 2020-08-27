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
    <title>Shopper Dashboard</title>
</head>

<body style="background-color: #f2f2f2;">

    <header class="section-header">

        <section class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-2 col-2 ">
                        <a href="/" class="brand-wrap">
                            <!--                        <img class="logo" src="buyer_assets/img/logo.png" alt="logo" >-->
                        </a>
                        <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg-6 p-2 text-white text-center">
                        <div class="top-view">
                            <h3 class="">Delivery Details</h3><br>
                            <br>
                        </div>
                    </div>
                    <!-- col.// -->
                    <div class="col-lg-3 col-sm-9 col-10">
                        <div class="widgets-wrap d-flex justify-content-end">

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
    <div class="container" style="background-color: white; padding: 20px; ">

      <div class="row">
        <div class="col-md-3 pb-5">
            <div class="card">
                <div style="margin-bottom: 20px;">
                    <h2 class="text-center">MENU</h2>
                </div>
                <ul style="list-style: none;" class="sidebar-nav">
                    <li class=""> <a href="index"><i class="text-white fa fa-dashboard"></i>Dashboard</a> </li>
                    <li class="active"> <a href="delivery-request"><i class="fa fa-comment-alt"></i>Delivery Request</a> </li>
                    <li> <a href="warehouse-package"><i class="fas fa-warehouse"></i> Warehouse</a> </li>
                    <li> <a href="delivery-merchant"><i class="fa fa-user"></i>Delivery Merchant Status</a> </li>
                    <li> <a href="routing"><i class="fas fa-route"></i>Control/Routing Check</a> </li>
                    <li> <a href="wallet"><i class="fas fa-wallet"></i>Wallet</a> </li>
                    <li> <a href="contact-admin"><i class="fas fa-users-cog"></i>Contact Admin</a> </li>
                    <li> <a href="review"><i class="fa fa-thumbs-up"></i>Customer Feedback</a> </li>
                    <li> <a href="settings"><i class="fa fa-cog"></i>Settings</a> </li>
                    <li> <a href="messages"><i class="fa fa-envelope"></i>Messages</a> </li>
                    <li> <a href="notifications"><i class="fa fa-bell"></i>Notification</a> </li>
                    <hr>
                    <li style="margin-top: 80px;"> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">

                  <div class="row" style="">
                      <div class="col-md-4">
                          <p><span style="font-weight: bolder">Seller Details:</span>Ose 221</p>
                          <p><span style="font-weight: bolder">No of Product:</span>4</p>
                          <p><span style="font-weight: bolder">Billing Address:</span>FCT, Abuja</p>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <p><span style="font-weight: bolder">Product:</span><img src="../../../../public/prof_asset/img/baggy.png" width="50" height="50"><img src="../../../../public/prof_asset/img/shoe.png" width="50" height="50"></p>
                          <p><span style="font-weight: bolder">Buyer</span>Ose254</p>
                          <p><span style="font-weight: bolder">Contact No.</span>08104309144</p>
                      </div>


                  </div><br>

                  <div class="row" style="">
                      <div class="col-md-4">
                      </div>

                      <div class="col-md-4">
                          <p><span style="font-weight: bolder">State</span>Edo State</p>
                          <div class="form-group">
                              <label>Status</label>
                              <select class="form-control">
                             <option></option>
                             <option></option>
                          </select>
                          </div>
                          <div class="form-group">
                              <label>Assign To Order</label>
                              <select class="form-control">
                              <option>Ready for Pick Up</option>
                              <option></option>
                          </select>
                          </div>
                      </div>

                      <div class="col-md-4"></div>


                  </div><br>

                  <div class="row" style="">
                      <div class="col-md-4">
                          <button style="border-radius: 25px; width: 140px;" type="button" class="btn btn-danger">Proceed</button>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-2">
                          <button style="border-radius: 25px; width: 140px;" type="button" class="btn btn-info">Save</button>
                      </div>


                  </div><br>
        </div>

      </div>


    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js "></script>
    <script src="../../../../public/prof_asset/js/js.js"></script>
</body>

</html>
