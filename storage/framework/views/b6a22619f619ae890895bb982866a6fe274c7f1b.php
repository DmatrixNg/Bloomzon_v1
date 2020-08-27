<?php $__env->startSection('page_title'); ?>
    Seller's Dashboard - Orders
<?php $__env->stopSection(); ?>
        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
                    <h1 class="text-center m-auto pt-3 pb-3 "><b>Orders</b></h1>
                </div>
               
            <?php if(count($orders)): ?>
            <div class="panel panel-white">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="histogram" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead style="background-color: #02499B; color: white;">
                            <tr>
                                <th>Order Id</th>
                                <th>Price</th>
                                <th>Items</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                             <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>Order <?php echo e($order->order_id); ?></td>
                                <td><?php echo e($order->product->total); ?></td>
                               

                                <td>

                                    
                                        <?php echo e($order->product->quantity); ?> <?php echo e($order->product->product_name); ?>,
                                   
                                </td>
                                <td><?php echo e(\Illuminate\Support\Carbon::parse($order->created_at)->format('d-m-y g:i A')); ?></td>
                                <td><span style="padding: 5px; border-radius: 10px;" class="badge-danger"><?php echo e($order->status); ?></span></td>
                                <td><a href="<?php echo e(route('seller.order-details',base64_encode(json_encode($order)))); ?>" style="background-color: #E5E5E5; color: black;" class="btn">Details</a></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br><br><br>
            
            <?php else: ?>
                <h3>You have no orders yet</h3>
            <?php endif; ?>

        </div>
        <?php $__env->stopSection(); ?>

        <?php $__env->startPush('scripts'); ?>
        <script>
            $(document).ready(function(){
                $("#histogram").DataTable();
            })
        </script>
        <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/seller/histogram.blade.php ENDPATH**/ ?>