<?php $__env->startSection('page_title'); ?>
    Order Details | Seller Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
        
            <h1 class="text-center m-auto pt-3 pb-3 " style="color: #02499B;"><b>Orders Details</b></h1>
        </div>
        <a class="btn btn-sm btn-success" href="<?php echo e(route('seller.histogram')); ?>">Go back</a>
        <div class="row col-md-12 mt-5 mb-5">
            <div class="col-md-3 text-right offset-2">
                <img class="img" src="<?php echo e(asset('storage/assets/buyer/avatar/' . $order->buyer_id->avatar)); ?>" width="80"
                    height="80" style="border-radius: 40px;">
            </div>
            <div class="col-md-5 text-left">
                <h4>BUYER ID:<?php echo e($order->buyer_id->id); ?></h4>
                <h4>LOCATION: <?php echo e($order->buyer_id->street_address); ?></h4>
                <h4>BILLING ADDRESS: <?php echo e($order->buyer_id->billing_address); ?></h4>

            </div>
        </div>
        <div class="row col-md-12 mt-5 mb-5">
            <div class="col-md-12" style="padding: 20px;">
                <h4 style="color: #02499B;" class="text-center">Order Details</h4>
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="text-success" id="state"></div>
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead style="background-color: #02499B; color: white;">
                                    <tr>
                                        <th>Product Id</th>
                                        <th>Address</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
                                        <th>Method</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($order_detail->product->id); ?></td>
                                            <td><?php echo e($order->buyer_id->billing_address); ?></td>
                                            <td><?php echo e($order_detail->quantity); ?></td>
                                            <td><?php echo e($order_detail->product->product_price); ?></td>
                                            <td><?php echo e($order_detail->order->payment_method); ?></td>
                                            <td>
                                            <select class="btn" id="statusChange" onchange="changeStatus(this)" order="<?php echo e($order_detail->id); ?>">
                                                    <option >Change status</option>
                                                    <option value="moved_to_warehouse">Moved to warehouse</option>
                                                    <option value="out_of_stock">Out of stock</option>
                                                    <option value="packaged">Packaged</option>
                                                    <option value="size_not_available">Size not available</option>
                                                    <option value="delivered">Delivered</option>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            

            <br><br><br>


            
        </div>




    </div>
    <script>
      
        async function changeStatus(el){
            var r = document.getElementById('state');
            console.log(r)
            var id = el.getAttribute('order');
            r.innerHTML = 'Changing Order Status';
   await makeRequest('/seller/change-order-status', {id:id,status:el.value}).then((e)=>{
       r.innerHTML = e.message;
       setTimeout(function(){
           r.innerHTML = '';
       },3000)
   });
        }  
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/seller/order-detail.blade.php ENDPATH**/ ?>