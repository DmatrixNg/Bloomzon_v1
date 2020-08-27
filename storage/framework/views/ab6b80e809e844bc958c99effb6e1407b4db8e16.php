<?php $__env->startSection('page_title'); ?>
    Shopper Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="card text-center " style="color: #02499B; background-color: #5C5B78; padding: 60px; ">
                            <h1 class="text-white"><b>Update Delivery Status</b></h1>
                        </div>
                    </div>
                </div>
               

                <div class="row" style="height: 250px;">
                    <div class="col-12">
                    <table id="merchants" class="table display" style="width:100%">
                    <thead class="bg-primary">
                        <tr>
                            <th>Seller ID</th>
                            <th>Goods</th>
                            <th>Billing Address</th>
                            <th>Qty</th>
                            <th>Buyer ID</th>
                            <th>Buyer Address</th>
                            <th>Order ID</th>
                            <th>Phone Number</th>
                            <th>Delivery Agent</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $packaged_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->order_details->seller_id->id); ?></td>
                            <td><?php echo e($product->order_details->product->product_name); ?></td>
                            <td><?php echo e($product->order_id->billing_address); ?></td>
                            <td><?php echo e($product->order_details->product->quantity); ?></td>
                            <td><?php echo e($product->order_details->buyer_id->id); ?></td>
                            <td><?php echo e($product->order_details->buyer_id->street_adress); ?></td>
                            <td><?php echo e($product->order_details->order_id); ?></td>
                            <td><?php echo e($product->order_details->buyer_id->phone_number); ?></td>
                            <td><?php echo e($product->order_details->delivery_agent); ?></td>
                            <td>
                                <select name="delivery_status" id="delivery_status" onchange="changeStatus(this,<?php echo e($product->id); ?>)" class="form-control form-group" style=" color: white; background-color: #2B2950;">
                                <option <?php if($product->delivery_status == 'delivery_action'): ?> selected <?php endif; ?> value="delivery_action" >Delivery Action</option>
                                <option <?php if($product->delivery_status == 'processing'): ?> selected <?php endif; ?>  value="processing">Processing</option>
                                <option <?php if($product->delivery_status == 'on_transit'): ?> selected <?php endif; ?> value="on_transit">On Transit</option>
                                <option <?php if($product->delivery_status == 'delivered_to_client'): ?> selected <?php endif; ?> value="delivered_to_client">Delivered to Client</option>
                                <option <?php if($product->delivery_status == 'await_balance_payment'): ?> selected <?php endif; ?> value="await_balance_payment">Await Balance Payment</option>
                                <option <?php if($product->delivery_status == 'closed'): ?> selected <?php endif; ?> value="closed">Closed</option>
                            </select>
                        </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table> 
                </div>
                </div>

            </div>
        <?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready( function () {
    $('#merchants').DataTable();
} );
</script>

<script>
    function changeStatus(el,id){
        return swal({
            text:"Do you want to change this order status?",
            buttons:true
        }).then((change)=>{
            var res = makeRequest('/shopper/change-delivery-status',{
                    delivery_status:el.value,
                    id:id
                }).then(
                    (e)=>{
                        console.log(e)
                        if(e.success) return swal("Delivery status changed")
                        return swal("Problem changing status")
                    }
                );
           
        })
       }
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.shopper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/shopper/delivery-merchant.blade.php ENDPATH**/ ?>