<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Vector (8).png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../../public/subadmin_asset/css/custom-bs4-3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../public/subadmin_asset/css/ui.css">
    <link rel="stylesheet" href="../../../../public/subadmin_asset/css/style.css">
    <link rel="stylesheet" href="../../../../public/subadmin_asset/css/responsive.css">
    <title>Write Admin</title>
</head>

<body style="background-color: #f2f2f2;">

<header class="section-header">

    <section class="header-top2" style="height: 60px; padding: 10px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-5 col-5 ">
                    <a href="/" class="brand-wrap">
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-4 col-sm-12 d-flex order-3 p-2 text-white align-items-center">
                    <h5><strong><i class="fa fa-user"></i> Write Admin</strong></h5>
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

<br>
<br>


<div class="container">

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input  id="subject" class="form-control" type="text" placeholder="">

                </div>
                <br>
                <div class="form-group">
                    <label for="image">Request type</label>
                    <select  id="image" class="form-control" type="file">
                        <option>Fraud</option>
                        <option>Refund</option>
                        <option>Complaint</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="message"></label>
                    <textarea style="height: 180px;"  id="message" class="form-control" type="text" placeholder="Type Your Message"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-2">
                        <button class="btn bloomzon_btnsm2">Send</button>
                    </div>
                    <div class="col-md-4"></div>

                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>






</div>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js "></script>
<script src="../../../../public/subadmin_asset/js/js.js"></script>
</body>

</html>
