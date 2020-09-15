<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Vector (8).png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Rubik&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/custom-bs4-3.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/responsive.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Buyer's Dashboard | @yield('page_title')</title>

    <style>
        /* Fixed sidenav, full height */
        .sidenav {
            height: 100%;
            width: auto;
            color: #02499B;
            line-height: 40px;
            padding: 10px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a, .dropdown-btn {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 16px;
            color: #02499B;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
            border-bottom: solid 1px #f2f2f2;
        }

        /* On mouse-over */
        .sidenav a:hover, .dropdown-btn:hover {
            color: #fff;
            background-color: #02499B;
            /*border-radius: 5px;*/
        }

        /* Main content */
        .main {
            margin-left: 200px; /* Same as the width of the sidenav */
            font-size: 20px; /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: #02499B;
            color: white;
            border-radius: 5px;
        }

        a .active {
            background-color: #02499B;
            color: white;
            border-radius: 5px;
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
            display: none;
            background-color: #f2f2f2;
            padding-left: 8px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 8px;
            padding-top: 20px;
        }

        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 16px;}
        }
    </style>
</head>

<body style="background-color: #fff;">

<x-buyer-header />
<br>
 <div class="container-fluid">
        <div class="row">
        <x-buyer-side-nav/>
        @yield('content')
    </div>

</div>

<!-- jquery-3.3.1 version -->
<script src="{{asset('assets/frontend/js/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- modernizr js -->
    <script src="{{ asset('assets/frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{asset('assets/dashboard/js/js.js')}}"></script>
<script src="{{asset('js/form.js')}}"></script>
{{-- Axios --}}
<script src="{{asset('js/axios.min.js')}}"></script>
<script src="{{asset('assets/dashboard/js/sweetalert.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
{{-- <script src="https://www.paypal.com/sdk/js?client-id=SB_CLIENT_ID"> // Required. Replace SB_CLIENT_ID with your sandbox client ID. </script> --}}

<script src="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f6090114704467e89ef10dc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


  



<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>

@stack('scripts')
</body>
</html>

