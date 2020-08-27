
<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
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
                            <div class="row col-md-12 mb-2 ml-1" style="border-bottom: 1px solid #f2f2f2; padding: 20px;">
                                <div class="col-md-5">
                                    <?php $__currentLoopData = $purchase->order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(asset('storage/assets/product/avatars/'.$ord->product->avatars[0])); ?>" width="80" alt="">
                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <p><span style="font-weight: bolder"></span>Product Details: <?php $__currentLoopData = $purchase->order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <?php echo e($p->product->product_name); ?> (<?php echo e($p->product->quantity); ?> piece(s))<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
                                        <p><span style="font-weight: bolder">Billing Address: <?php echo e($purchase->order_details[0]->buyer_id->billing_address); ?></span></p>
                                        <p><span style="font-weight: bolder">Purchase Date: <?php echo e($orders[0]->created_at); ?></span></p>
                                    </div>
                                 
                                </div>
                                <div class="col-md-2">
                                <a href="<?php echo e(url('buyer/track-order')); ?>" style="border-radius: 25px;" type="button" class="btn btn-danger btn-sm mb-2">Track Order</a>
                                    <a href="<?php echo e(asset('buyer/view-order-details/'.base64_encode(json_encode($purchase)))); ?>" style="border-radius: 25px;" type="button" class="btn btn-danger btn-sm mb-2">View Order Details</a>
                                    <a href="delivery-status" style="border-radius: 25px;" type="button" class="btn btn-info btn-sm">Delivery Status</a>
                                </div>

                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <div class="text-center">
                        <h4>There are no record of purchases made</h4>
                        </div>
                <?php endif; ?>


                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/buyer/purchase-history.blade.php ENDPATH**/ ?>