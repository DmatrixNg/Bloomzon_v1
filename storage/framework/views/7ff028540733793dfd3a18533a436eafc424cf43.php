<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Your Delivery Status</b></h1>
                </div>
                <div class="row col-md-12" style="background-color: #2B2950 !important; padding-left: 20px; padding-right: 20px; padding-bottom: 20px; padding-top: 100px;">

                    <div class="col-md-3 text-center m-auto">
                        <div class="p-5 m-5 m-auto" style="border-radius: 50%; width: 200px; height: 200px; background-color: #5C5B78; color: white; vertical-align: middle; border: 8px solid #AF2E1D;">
                            <div class="pt-5 m-auto">
                                <h1><?php echo e(count($delivered_count)); ?></h1>
                            </div>
                        </div>
                        <h3 class="text-white">Total Delivered Product</h3>
                    </div>

                    <div class="col-md-3 text-center m-auto">
                        <a href="wallet-transaction-history">
                            <div class="p-5 m-5 m-auto" style="border-radius: 50%; width: 200px; height: 200px; background-color: #5C5B78; color: white; vertical-align: middle; border: 8px solid #AF2E1D;">
                                <div class="pt-5 m-auto">
                                    <h1><?php echo e(count($transit)); ?></h1>
                                </div>
                            </div>
                            <h3 class="text-white">Product in Transit</h3>
                        </a>
                    </div>

                </div>
                <div class="row col-md-12 mt-0" style="background-color: #2B2950 !important; padding: 20px;">

                    <div class="col-md-6 mb-2">
                        <?php $__currentLoopData = $all_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($order->status === 'delivered'): ?>
                                <div class="p-4" style="background-color: white !important; padding: 20px; width: 100%; height: 100%;">
                                    <div class="col-md-3 pl-0">
                                        <div class="col-md-2">
                                            <?php $__currentLoopData = $order->product->avatars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <img alt="<?php echo e($image); ?>" src="<?php echo e(asset('storage/assets/product/avatars/'.$image)); ?>" class="img" width="40">
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                    <span class="badge bg-success"><?php echo e($order->shopper_status); ?></span>
                                        <p><span>Billing Address: <?php echo e($order->buyer_id->billing_address); ?></span> </p>
                                        <p><span>Amount: <?php echo e(number_format($order->product->product_sales_price)); ?> </span> </p>
                                        <p><span>Delivery Agent: <?php echo e($order->delivery_agent_id); ?> </span></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    
                    <div class="col-md-12" style="margin-bottom: 200px;"></div>

                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/buyer/delivery-status.blade.php ENDPATH**/ ?>