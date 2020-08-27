<header class="section-header">

    <section class="header-top" style="background-color: #fff !important; box-shadow: 2px 2px 4px #f2f2f2;">
        <div class="container pr-0 pl-5 mr-4 ml-4" style="max-width: 95% !important; width: 100%;">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <a href="<?php echo e(url('/')); ?>"><img class="logo" src="<?php echo e(asset('assets/dashboard/img/bloomzon.png')); ?>" alt="logo" width="80" height="auto"></a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-md-2 d-flex order-3" style="padding-left: 80px !important;">
                    <div class="top-view" style="border-right: none !important;">
                        <h5 style="color: #02499B;"><b>Kitchen Name:</b></h5>
                        <h5 style="color: #02499B;"><b>Last Login:</b></h5>
                        <h5 style="color: #02499B;"><b>Location:</b></h5>
                    </div>
                </div>
                <div class="col-md-2 d-flex order-3">
                    <div class="top-view" style="border-right: none !important;">
                        <h5 style="color: #02499B;"><b><?php echo e($fast_food_grocery->company_name); ?></b></h5>
                        <h5 style="color: #02499B;"><b><?php echo e(date($fast_food_grocery->created_at)); ?></b></h5>
                        <h5 style="color: #02499B;"><b><?php echo e($fast_food_grocery->shop_address); ?></b></h5>
                    </div>
                </div>
                <!-- col.// -->
                <div class="col-md-6 order-2 order-lg-3">
                    <div class="widgets-wrap d-flex justify-content-end">


                        <!-- widget  dropdown.// -->
                        <div class="widget-header ml-3 text-center">
                            <a href="#">
                                <img src="<?php echo e(asset('storage/assets/fast_food_grocery/avatar/' . $fast_food_grocery->avatar)); ?>" height="140" width="140"
                                <p class="text-center"><?php echo e(auth()->guard('fast_food_grocery')->user()->company_name); ?></p>
                            </a>
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
<?php /**PATH /home/bloomzon/bloomzon/resources/views/components/dashboard/fast-food-grocery-header.blade.php ENDPATH**/ ?>