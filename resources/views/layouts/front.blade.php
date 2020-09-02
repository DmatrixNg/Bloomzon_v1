<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bloomzon - @yield('page_title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ Session::token() }}">
    <link rel="manifest" href="site">
    <link rel="apple-touch-icon" href="icon">
    <!-- Place favicon.ico in the root directory -->


    <!-- bootstrap v4.0.0 -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- fontawesome-icons css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
    <!-- themify-icons css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/themify-icons.css')}}">
    <!-- elegant css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/elegant.css')}}">
    <!-- elegant css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery.mmenu.css')}}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui.min.css')}}">
    <!-- venobox css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/venobox.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}">
    <!-- slick-theme css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick-theme.css')}}">
    <!-- cssanimation css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/cssanimation.min.css')}}" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}" />
    <!-- helper css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/helper.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">

    <!-- for chat -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <link href="{{ asset('css/chat.css') }}" rel="stylesheet" id="bootstrap-css">
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- end for chat -->


<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <style type="text/css">
        .single-product-cat{
            padding: 0px !important;
            height: 220px !important;
        }
        .single-product-cat img{
            max-height: 220px !important
        }
    </style>
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--header-area start-->
<x-header-nav />

<!--header-area end-->

@yield('content')

<!--footer-area start-->
<x-footer-nav />
<!--footer-area end-->


<!-- modernizr js -->
<script src="{{asset('assets/frontend/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<!-- jquery-3.3.1 version -->
{{-- <script src="{{asset('assets/frontend/js/vendor/jquery-3.2.1.min.js')}}"></script> --}}
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- bootstra.min js -->
<script src="{{asset('assets/frontend/js/bootstap.min.js')}}"></script>
<!-- mmenu js -->
<script src="{{asset('assets/frontend/js/jquery.mmenu.js')}} "></script>
<!-- easing js -->
{{-- <script src="{{asset('assets/frontend/js/jquery.easing.min.js')}}"></script> --}}



{{-- <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js "></script>
<!---letteranimation-js-->
<script src="{{asset('assets/frontend/js/letteranimation.min.js')}}"></script>
<!-- jquery-ui js -->
<script src="{{asset('assets/frontend/js/jquery-ui.min.js')}}"></script>
<!-- jquery.countdown js -->
<script src="{{asset('assets/frontend/js/jquery.countdown.min.js')}}"></script>
<!-- venobox js -->
<script src="{{asset('assets/frontend/js/venobox.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('assets/frontend/js/plugins.js')}}"></script>
<!---slick-js-->
<script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/frontend/js/main.js')}}"></script>

{{-- Axios --}}
<script src="{{asset('js/axios.min.js')}}"></script>
<!-- form js -->
<script src="{{asset('js/form.js')}}"></script>
@stack('product-buttons')
<!-- sweet alert -->
<script src="{{asset('assets/frontend/js/sweetalert.js')}}"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}

<div class="mm-wrapper__blocker mm-slideout"><a href="#mm-0">
        <span class="mm-sronly">Close menu</span></a></div>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;"><i class="fa fa-angle-up"></i></a>

<!-- Modal -->
<div class="modal fade" id="quick-view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tab-content">
                            <div id="product-1" class="tab-pane fade in show active">
                                <div class="product-details-thumb">
                                    <img src="assets/images/products/product-details/1.jpg" alt="" />
                                </div>
                            </div>
                            <div id="product-2" class="tab-pane fade">
                                <div class="product-details-thumb">
                                    <img src="assets/images/products/product-details/2.jpg" alt="" />
                                </div>
                            </div>
                            <div id="product-3" class="tab-pane fade">
                                <div class="product-details-thumb">
                                    <img src="assets/images/products/product-details/3.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs products-nav-tabs horizontal quick-view mt-10">
                            <li><a class="active" data-toggle="tab" href="#product-1"><img src="assets/images/products/product-details/thumb-1.jpg" alt="" /></a></li>
                            <li><a data-toggle="tab" href="#product-2"><img src="assets/images/products/product-details/thumb-2.jpg" alt="" /></a></li>
                            <li><a data-toggle="tab" href="#product-3"><img src="assets/images/products/product-details/thumb-3.jpg" alt="" /></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="product-details-desc">
                                    <h2>Apple The New MacBook Retina 2016 MLHA2 12 inches</h2>
                                    <ul>
                                        <li>1.6 GHz dual-core Intel Core i5 (Turbo Boost up to 2.7 GHz) with 3 MB shared L3 cache 8 GB of 1600 MHz LPDDR3 RAM; 128 GB PCIe-based flash storage</li>
                                        <li>13.3-Inch (diagonal) LED-backlit Glossy Widescreen Display, 1440 x 900 resolution Intel HD Graphics 6000</li>
                                        <li>OS X El Capitan, Up to 12 Hours of Battery Life Macbook Air does not have a Retina display on any model.</li>
                                    </ul>
                                    <div class="product-meta">
                                        <ul class="list-none">
                                            <li>SKU: 00012 <span>|</span></li>
                                            <li>Categories:
                                                <a href="#">Tech</a>
                                                <a href="#">Macbook</a>
                                                <a href="#">Laptop</a>
                                                <span>|</span>
                                            </li>
                                            <li>Tags:
                                                <a href="#">Tech,</a>
                                                <a href="#">Apple</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="social-icons style-5">
                                        <span>Share Link:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-rss"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product-action stuck text-left">
                                    <div class="free-delivery">
                                        <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                    </div>
                                    <div class="product-price-rating">
                                        <div>
                                            <del>629.99</del>
                                        </div>
                                        <span>$495.00</span>
                                        <div class="pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="product-colors mt-20">
                                        <label>Select Color:</label>
                                        <ul class="list-none">
                                            <li>Red</li>
                                            <li>Black</li>
                                            <li>Blue</li>
                                        </ul>

                                    </div>
                                    <div class="product-quantity mt-15">
                                        <label>Quantity:</label>
                                        <input type="number" value="1" />
                                    </div>
                                    <div class="add-to-get mt-50">
                                        <a href="#" class="add-to-cart">Add to Cart</a>
                                        <a href="#" class="add-to-cart compare">+ ADD to Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('page_js')
@stack('scripts')

</body>

</html>
