<?php $__env->startSection('page_title'); ?>
  Purchase History | Buyer's Dashboard
<?php $__env->stopSection(); ?>
<?php


?>
        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">

                <div class="p-0">
                    <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                        <div class="col-md-12 text-center ml-0">
                            <h2>Purchase History</h2>

                        </div>
                    </div>

                <?php if(count($orders)): ?>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php
                            // dd($purchase->order_details->first()->first());
                          ?>
                            <div class="row col-md-12 mb-2 ml-1" style="border-bottom: 1px solid #f2f2f2; padding: 20px;">
                                <div class="col-md-5">

                                    <img src="<?php echo e(asset('storage/assets/product/avatars/'.$purchase->order_details->first()->products->avatars[0] )); ?>" width="80" alt="">



                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <p><span style="font-weight: bolder"></span>Product Details:


                                            <?php echo e($purchase->order_details->first()->product->product_name); ?> (<?php echo e($purchase->order_details->first()->product->quantity); ?> piece(s))

                                        </p>
                                        <p><span style="font-weight: bold">Billing Address:</span> <?php echo e($purchase->billing_address); ?></p>
                                        <p><span style="font-weight: bolder">Purchase Date: <?php echo e($purchase->created_at); ?></span></p>
                                        <p><span style="font-weight: bold" class="badge bg-<?php echo e($purchase->payment_status?'success':'danger'); ?>"> <?php echo e($purchase->payment_status?'Paid':'Pending'); ?></span></p>
                                    </div>

                                </div>
                                <div class="col-md-2">
                                <a href="<?php echo e(url(app()->getLocale().'/track-delivery',$purchase->order_details->first()->order->id)); ?>" style="border-radius: 25px;" type="button" class="btn btn-danger btn-sm mb-2">Track Order</a>
                                    <a href="<?php echo e(url('buyer/view-order-details/'.$purchase->order_details->first()->order->id)); ?>" style="border-radius: 25px;" type="button" class="btn btn-danger btn-sm mb-2">View Order Details</a>
                                <a href="<?php echo e(route('buyer.delivery-status',$purchase->order_details->first()->order->id)); ?>" style="border-radius: 25px;" type="button" class="btn btn-info btn-sm">Delivery Status</a>
                                </div>

                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="row col-md-6 text-center m-auto">

                                    <?php echo e($orders->links()); ?>


                            </div>
                        <?php else: ?>
                        <div class="text-center">
                        <h4>There are no record of purchases made</h4>
                        </div>
                <?php endif; ?>


                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/new/Bloomzon_v1/resources/views/dashboard/buyer/purchase-history.blade.php ENDPATH**/ ?>