<header class="section-header">

    <section class="header-top" style="background-color: #fff !important; box-shadow: 2px 2px 4px #f2f2f2;">
        <div class="container pr-0 pl-5 mr-4 ml-4" style="max-width: 95% !important; width: 100%;">
            <div class="row align-items-center">
                <div class="col-md-2">
                    <a href="/" class="">
                        <a href="<?php echo e(url('/')); ?>"><img class="logo" src="<?php echo e(asset('assets/dashboard/img/bloomzon.png')); ?>" alt="logo" width="80" height="auto"></a>
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-md-2 d-flex order-3" style="padding-left: 80px !important;">
                    <div class="top-view" style="border-right: none !important;">
                        <h5 style="color: #02499B;"><b>Company Name:</b></h5>
                        <h5 style="color: #02499B;"><b>Profession:</b></h5>
                        <h5 style="color: #02499B;"><b>Location:</b></h5>
                    </div>
                </div>
                <div class="col-md-2 d-flex order-3">
                    <div class="top-view" style="border-right: none !important;">
                        <h5 style="color: #02499B;"><b><?php echo e($professional->company_name); ?></b></h5>
                        <h5 style="color: #02499B;"><b><?php echo e($professional->profession); ?></b></h5>
                        <h5 style="color: #02499B;"><b><?php echo e($professional->shop_address); ?></b></h5>
                    </div>
                </div>
                <div class="col-md-4 d-flex order-3">
                    <div class="row">
                        <div class="col-md-12 m-0 p-0"><h3 class="mt-1" style="color: #02499B;">Wallet: </h3></div>
                        <div class="col-md-6 m-0 p-0"><h5 class="m-0 p-2" style="color: #02499B;"><b>Available Balance:</b></h5></div>
                        <div class="col-md-6 m-0 p-0"><h5 class="m-0 p-2" style="color: #02499B;"><b>$<?php echo e($professional->wallet); ?></b></h5></div>
                        <div class="col-md-6 m-0 p-0"><h5 class="m-0 p-2" style="color: #02499B;"><b>Net Balance</b></h5></div>
                        <div class="col-md-6 m-0 p-0"><h5 class="m-0 p-2" style="color: #02499B;"><b>$<?php echo e($professional->wallet - $networth->sum('amount')); ?></b></h5></div>
                    </div>
                </div>
                <!-- col.// -->
                <div class="col-md-2 order-2 order-lg-3">
                    <div class="widgets-wrap d-flex justify-content-end">
                        <!-- widget  dropdown.// -->
                        <div class="widget-header ml-3 text-center">
                            <a href="#">
                                <img class="img" src="<?php echo e(asset('storage/assets/professional/avatar/'.$professional->avatar)); ?>" width="80" height="80" style="border-radius: 40px" >
                                <p class="text-center"><?php echo e($professional->full_name); ?></p>
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
<?php /**PATH /home/bloomzon/bloomzon/resources/views/components/dashboard/professional-header.blade.php ENDPATH**/ ?>