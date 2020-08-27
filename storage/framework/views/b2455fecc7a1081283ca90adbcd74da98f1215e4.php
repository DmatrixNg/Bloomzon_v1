<?php $__env->startSection('page_title'); ?>
    Shopper's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="p-0">
                <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-12 text-center ml-0">
                        <h1 style="color: #02499B;"><b>Delivery Request Details</b></h1>
                    </div>

                </div>
                <div class="col-md-12 mt-0" style="background-color: #fff;">
                    <div class="row pt-4">
                        <div class="col-md-4 mt-5 ml-4">
                            
                            <h4><span style="font-weight: bolder">Seller Details:</span> <?php echo e($order->seller_id->full_name); ?>,  </h4><br>
                            
                            <h5><span style="font-weight: bolder">No of Product:</span> <?php echo e($order->product->quantity); ?></h5><br>
                            <h5><span style="font-weight: bolder">Billing Address:</span> <?php echo e($order->buyer_id->billing_address); ?></h5><br>
                            <hr />
                            <h5><span style="font-weight: bolder">Buyer:</span> <?php echo e($order->buyer_id->full_name); ?></h5><br>
                            <h5><span style="font-weight: bolder">Contact No.:</span> <?php echo e($order->buyer_id->phone_number); ?></h5>
                            <p><span style="font-weight: bolder">State: </span> <span class="ml-5"><?php echo e($order->buyer_id->state); ?></span></p><br><br>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <h4><span style="font-weight: bolder">Product(s):</span>
                                <?php $__currentLoopData = $order->product->avatars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e(asset('storage/assets/product/avatars/'.$ord)); ?>" width="80" height="80">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </h4>
                        </div>


                    </div><br><br><hr>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            
                        </div>

                        <div class="col-md-4">
                           <div class="form-group">
                            <label> Current Status:</label>
                            <p class="badge bg-warning"><?php echo e($order->shopper_status); ?></p>
                            
                           </div>
                           <?php if($order->shopper_status != 'in_stock'): ?>
                            <div  class="form-group">
                                <label>Status:</label>
                                <select id="order_status" class="form-control" onchange="checkStock(this)">
                                    <option value=""> Select Order Status </option>
                                    <option value="in_stock">In stock</option>
                                    <option value="yet_to_arrive">Yet to arrive</option>
                                </select>
                            </div>
                            <?php endif; ?>
                            <br><br>
                        </div>
                    </div><br>

                    <div class="row text-center">
                        <div class="col-md-12 text-center">
                            <a href="<?php echo e(route('shopper.store-in-warehouse',$order->id)); ?>" hidden id="proceed_btn" style="border-radius: 25px; width: 140px;" type="button" class="btn btn-danger mr-5">Proceed</a>
                            
                    </div><br>
                </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
   <script>
       function checkStock(el){
        return swal({
            text:"Do you want to change this order status?",
            buttons:true
        }).then((change)=>{
            var res = makeRequest('/shopper/change-order-status',{
                    shopper_status:el.value,
                    id:`<?php echo e($order->id); ?>`
                });
            if(el.value == 'in_stock'){
                console.log(res);
            document.getElementById('proceed_btn').removeAttribute('hidden');

           }else{

               document.getElementById('proceed_btn').setAttribute('hidden',true)

           }
        })
       }
   </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.shopper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/shopper/delivery-details.blade.php ENDPATH**/ ?>