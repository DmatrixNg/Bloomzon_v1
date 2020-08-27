<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="col-md-12 mt-4 mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row text-center text-white p-3 mr-1" style="border-radius: 5px; background-color: #02499B;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-chart-line fa-4x"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>MY POINTS</h4>
                                    <h3><b><?php echo e($points); ?></b></h3>
                                    <p>Total Available Points</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row text-center text-white pt-3 pb-3 mr-1" style="border-radius: 5px; background-color: firebrick;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-chart-pie fa-4x"></i>
                                </div>
                                <div class="col-md-9">
                                    
                                    <h3><b>Earned Points:</b><?php echo e(count($order_points)*100); ?> </h3>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row text-center  pt-4 pb-4 text-white p-3 mr-1" style="border-radius: 5px; background-color: #02499B;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>Make an order to earn 100 points</h4>
                                    <button class="btn btn-danger"><a href="/shop" target="_blank" class="text-white"> Start Shopping </a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                        <table class="table text-center table-bordered m-0 p-0">


                            <?php if(count($order_points)): ?>
                                <thead style="background-color:  #003B88; color: #fff; font-size: 16px; vertical-align: middle;">
                                <tr style="height: 60px; text-align: center !important;" class="text-center">
                                    <th class="text-center" style="border: solid 3px #ddd;">DAY</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">TOTAL PURCHASE </th>
                                    <th class="text-center" style="border: solid 3px #ddd;">POINTS EARNED</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">AVAILABLE POINTS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $order_points; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr style="height: 60px;">
                                        <td style="border: solid 1px #ddd;"><?php echo e(\Illuminate\Support\Carbon::parse($point->created_at)->format('d/m/y g:i A')); ?></td>
                                        <td style="border: solid 1px #ddd;"><?php echo e(count($point->order->order_details)); ?></td>
                                        <td style="border: solid 1px #ddd;">100</td>
                                        <td style="border: solid 1px #ddd;"><?php echo e($point->order->accumulated_points); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>
                        <div class="row col-md-12 text-center m-auto">
                            <nav aria-label="Page navigation example">
                              <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                              </ul>
                            </nav>
                        </div>
                    <?php else: ?>
                        <h3> You have not earned any points yet. start shopping to earn points </h3>
                    <?php endif; ?>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/buyer/points.blade.php ENDPATH**/ ?>