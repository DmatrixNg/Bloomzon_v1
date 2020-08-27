<?php $__env->startSection('page_title'); ?>
    Shopper Dashboard
<?php $__env->stopSection(); ?>
    
        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="card p-0">
                <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-8 text-left ml-0">
                        <h2>Shopper's Packaged Goods</h2>
                    </div>

                </div>
                
                <?php $__currentLoopData = $packaged_goods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $packaged_good): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row col-md-12 mb-2 ml-1" style="border-bottom: 1px solid #f2f2f2; padding: 20px;">
                            <div class="col-md-5">
                              
                                <img src="<?php echo e(asset('storage/assets/product/avatars/'.$packaged_good->order_details->product->avatars[0])); ?>" width="80">
                              

                            </div>
                            <div class="col-md-5">
                                <p><span style="font-weight: bolder">Buyer: <?php echo e($packaged_good->order_details->buyer_id->full_name); ?></span></p>
                                <p><span style="font-weight: bolder">Billing Address:  <?php echo e($packaged_good->order_details->buyer_id->billing_address); ?></span></p>
                                <p><span style="font-weight: bolder"> <?php echo e(\Carbon\Carbon::parse($packaged_good->created_at)->format('Y/m/d')); ?></span></p>
                            </div>

                            <div class="col-md-2">
                                <a href="<?php echo e(route('shopper.delivery-details',$packaged_good->order_details->id)); ?>" style="border-radius: 35px; width: 120px;" type="button" class="btn btn-danger">Details</a><br>
                                <a href="<?php echo e(route('shopper.scan-code',$packaged_good->order_details->id)); ?>" style="border-radius: 35px; width: 120px;" type="button" class="btn btn-success">Scan code</a><br>
                                <a href="delivery-merchant" style="border-radius: 35px; width: 120px;" type="button" class="btn btn-info">Status</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.shopper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/shopper/warehouse-package.blade.php ENDPATH**/ ?>