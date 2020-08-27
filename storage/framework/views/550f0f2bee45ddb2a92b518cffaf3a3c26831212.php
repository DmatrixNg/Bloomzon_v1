
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Vector (8).png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin_assets/css/custom-bs4-3.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('admin_assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin_assets/css/ui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin_assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin_assets/css/responsive.css')); ?>">
    <title>Sub Admin Dashboard</title>
  
    <style>
        /* Fixed sidenav, full height */
        .sidenav1 {
          height: 100%;
          width: auto;
          color: #02499B;
          line-height: 40px;
          padding: 10px;
        }
        
        /* Style the sidenav links and the dropdown button */
        .sidenav1 a, .dropdown-btn {
          padding: 6px;
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
        .sidenav1 a:hover, .dropdown-btn:hover {
          color: #fff;
          background-color: #02499B;
          /*border-radius: 5px;*/
        }
        
        /* Main content */
        .main1 {
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
        .dropdown-container1 {
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
        @media  screen and (max-height: 450px) {
          .sidenav1 {padding-top: 15px;}
          .sidenav1 a {font-size: 16px;}
        }
    </style>
</head>

<body style="background-color: #fff;">
   
 <?php if (isset($component)) { $__componentOriginal2316595cb6a987fcb73636b85c99a02c8b85c2be = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubadminHeader::class, []); ?>
<?php $component->withName('subadmin-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal2316595cb6a987fcb73636b85c99a02c8b85c2be)): ?>
<?php $component = $__componentOriginal2316595cb6a987fcb73636b85c99a02c8b85c2be; ?>
<?php unset($__componentOriginal2316595cb6a987fcb73636b85c99a02c8b85c2be); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

<div class="">

    <div class="row">
       
      <?php if (isset($component)) { $__componentOriginalda562f50a5c7b59ceccc46b0a30db2aaeaec22c4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SubadminSideNav::class, []); ?>
<?php $component->withName('subadmin-side-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalda562f50a5c7b59ceccc46b0a30db2aaeaec22c4)): ?>
<?php $component = $__componentOriginalda562f50a5c7b59ceccc46b0a30db2aaeaec22c4; ?>
<?php unset($__componentOriginalda562f50a5c7b59ceccc46b0a30db2aaeaec22c4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
     
       <?php echo $__env->yieldContent('content'); ?>

    </div>
</div>
<?php echo $__env->yieldContent('page_js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa " crossorigin="anonymous "></script>
    
    
    <script src="<?php echo e(asset('assets/dashboard/js/js.js')); ?> "></script>
    <script src="<?php echo e(asset('js/form.js')); ?> "></script>
<script src="<?php echo e(asset('js/axios.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/dashboard/js/sweetalert.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

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

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/layouts/dashboard/admin.blade.php ENDPATH**/ ?>