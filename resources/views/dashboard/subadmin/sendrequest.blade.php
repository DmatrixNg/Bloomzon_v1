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
    <title>Create Category</title>
</head>

<body style="background-color: #f2f2f2;">

<header class="section-header">

    <section class="header-top" style="height: 60px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-5 col-5 ">
                    <a href="/" class="brand-wrap">
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-4 col-sm-12 d-flex order-3 p-2 text-white">
                    <h4><strong>Send Request Page</strong></h4>
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

<div class="container">

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 card" style="padding: 50px; height: 570px;">

            <form>
                <div class="form-group">
                    <label for="manu" style="color: #02499B;"><strong>Manufacturers</strong></label>
                    <input style="border: 2px solid #02499B ;color: #02499B; background-color: #F5F5F5;" id="manu" class="form-control" type="text" placeholder="">
                </div>

                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="subcat" style="color: #02499B;"><strong>Add Documents</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" id="subcat" class="form-control-file" type="file">

                        </div>

                        <div class="col-md-6">
                            <label for="amount" style="color: #02499B;"><strong>Amount</strong></label>
                            <select style="border: 2px solid #02499B ;color: #02499B;" id="amount" class="form-control" type="text">
                                <option>N</option>
                                <option>$</option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="desc" style="color: #02499B;"><strong>Description</strong></label>
                    <textarea style="border: 2px solid #02499B ;color: #02499B; background-color: #F5F5F5;" id="desc" class="form-control" type="text" placeholder=""></textarea>
                </div>

                <div class="form-group">
                    <label for="action" style="color: #02499B;"><strong>Action</strong></label>
                    <select style="border: 2px solid #02499B ;color: #02499B;" id="action" class="form-control" type="text">
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>


                <br><br>
                <br>




                <button class="btn bloomzon_btn">SEND</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>






</div>









<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js "></script>
<script src="../../../../public/subadmin_asset/js/js.js"></script>
</body>

</html>
