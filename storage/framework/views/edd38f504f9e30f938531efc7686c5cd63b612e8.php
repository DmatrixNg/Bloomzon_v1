
   
<header class="section-header">

    <section class="header-top2 m-0 p-0">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-sm-2 col-2 text-white text-center" style="background-color: #ffffff; border-bottom: solid 1px #f2f2f2;">
                <a href="/"> <img class="logo" src="<?php echo e(asset('assets/dashboard/img/bloomzon.png')); ?>" alt="logo" width="80" height="auto"></a>
                </div>
                <div class="col-lg-7 p-2 text-white">
                </div>
                <!-- col.// -->
                <div class="col-lg-3 text-white text-left">
                    <div class="widgets-wrap d-flex justify-content-start">
                        <div class="widget-header ml-3 text-white">
                          <?php if($seller->wallet): ?>
                                <p><b>Available: <?php echo e(number_format($seller->wallet->available_balance)); ?></b></p>
                                <p><b>Net Balance: <?php echo e(number_format($seller->wallet->net_balance)); ?></b></p>
                              <?php else: ?>
                                <p><b>Available: 0</b></p>
                                <p><b>Net Balance: 0</b></p>
                              <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- container.// -->
    </section>

</header><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/components/dashboard/seller-header.blade.php ENDPATH**/ ?>