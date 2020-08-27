<?php $__env->startSection('page_title'); ?>
    Shopper's Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <h4>Order products in Warehouse</h4>
        <div class="row pl-5 pr-5 pt-5 pb-2">
            <?php if(count($other_products)): ?>
                <?php $__currentLoopData = $other_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 p-3 mb-4">
                        <div class="card p-2 " style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border-radius: 0px !important;">
                            
                            <div class="row m-auto">
                                <div class="col-md-2">
                                    <img src="<?php echo e(asset('storage/assets/product/avatars/' . $prod->order_details->product->avatars[0])); ?>"
                                        class="img " width="100" alt="">
                                  
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <p><span style="font-weight: bolder">Product:</span><span
                                            class="pl-2"><?php echo e($prod->order_details->product->product_name); ?></span></p>
                                </div>
                                <div class="col-md-12">
                                    <p><span style="font-weight: bolder">Location:</span><span
                                            class="pl-2"><?php echo e($prod->storage_location); ?></span></p>
                                </div>
                               
                                <div class="col-md-12 text-center mt-2">
                                    <a href="<?php echo e(route('shopper.delivery-details', $prod->id)); ?>" type="button"
                                        class="btn btn-danger m-auto">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <div class="alert alert-warning"><h4>No product of the same ID found in warehouse</h4></div>
            <?php endif; ?>        
            </div>
            <div class="card p-0">
                <div class="row col-md-12 ml-1"
                    style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-8 text-left ml-0">
                        <h2><b>Store In Warehouse</b></h2>
                    </div>

                </div>
                <div class="row mb-3" style="padding: 20px;">
                    <div class="col-md-8 p-5 offset-2">
                        <form name="packageForm">
                            <div class="form-inline pt-4">
                                <label for="storage_location " class="col-md-4 " style="font-size: 16px;; ">Storage Location:
                                </label>
                                <input type="text" name="storage_location" id="storage_location" class="form-control col-md-8 "
                                    value=" " style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-inline pt-4">
                                <label for="description" class="col-md-4 " style="font-size: 16px;; ">Description: </label>
                                <input type="text" id="description " class="form-control col-md-8" id="description"
                                    name="description" value="" style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-inline pt-4 ">
                                <label for="time_in" class="col-md-4 " style="font-size: 16px;; ">Time In: </label>
                                <input type="date" id="time_in" name="time_in" class="form-control col-md- " value=" "
                                    style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-inline pt-4 ">
                                <label for="sender_name" class="col-md-4 " style="font-size: 16px;; ">Seller Name: </label>
                                <input type="text" id="sender_name" class="form-control col-md-8 "
                                    value="<?php echo e($order->seller_id->full_name); ?>" style="height: 40px; border-radius: 0; ">
                                <input type="hidden" value="<?php echo e($order->order_id); ?>" name="order_id" />
                                <input type="hidden" value="<?php echo e($order->seller_id->id); ?>" name="seller_id" />
                                <input type="hidden" value="<?php echo e($order->buyer_id->id); ?>" name="buyer_id" />
                                <input type="hidden" value="<?php echo e($order->id); ?>" name="order_details_id" />
                                <input type="hidden" value="<?php echo e($shopper->id); ?>" name="shopper_id" />
                            </div>
                            <div class="form-group pt-4 text-center">
                                <label for="exampleFormControlInput1" class="col-md-4 mt-5" style=" font-size: 16px; ">Product
                                    Image: </label>
                                <img src="<?php echo e(asset('storage/assets/product/avatars/' . $order->product->avatars[0])); ?>"
                                    width="40px " height="20px " class="col-md-2 img img-thumbnail ">
                            </div>
                            <div class="form-inline pt-2 ">
                                <label for="buyer_name" class="col-md-4 " style="font-size: 16px;; ">Buyer Name: </label>
                                <input type="text" class="form-control col-md-8" disabled
                                    value="<?php echo e($order->buyer_id->full_name); ?>" style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-inline pt-2 ">
                                <label for="exampleFormControlInput1 " class="col-md-4 " style="font-size: 16px;; ">Billing
                                    Address: </label>
                                <input type="text" class="form-control col-md-8" disabled
                                    value="<?php echo e($order->order->billing_address); ?>" style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-inline pt-2 ">
                                <label for="buyer_phone " class="col-md-4 " style="font-size: 16px;; ">Buyer No: </label>
                                <input type="text" name="buyer_phone" class="form-control col-md-8" disabled
                                    value="<?php echo e($order->buyer_id->phone_number); ?>" style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-inline pt-2 ">
                                <label for="amount" class="col-md-4 " style="font-size: 16px;; ">Amount:</label>
                                <input type="text" name="amount" class="form-control col-md-8" disabled
                                    value="<?php echo e(number_format($order->order->total_amount)); ?>"
                                    style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-inline pt-2 ">
                                <label for="delivery_fee" class="col-md-4" style="font-size: 16px;; ">Delivery Fee: </label>
                                <input type="text " class="form-control col-md-8"
                                    value="<?php echo e(number_format($order->order->delivery_fee)); ?>"
                                    style="height: 40px; border-radius: 0; ">
                            </div>
                            <div id="error_list"></div>
                            <div class="form-group m-auto text-right" style="margin-top: 50px !important;">
                                <button class="btn btn-primary">Store</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('scripts'); ?>
        <script>
            FormHandler('packageForm', {
                requestUrl: '/shopper/store-in-warehouse',
                cb: response => {
                    if (response.success) {
                        return swal({
                            title: 'Success!!',
                            text: 'Storing in warehouse successful',
                            icon: 'success'
                        }).then(() => {
                            window.location.href = '/shopper/scan-code/<?php echo e($order->id); ?>';
                        })
                    }
                    ErrorHandler(response.errors ?? {})
                    return swal({
                        title: 'Failed!!',
                        text: 'There was an storing in warehouse, please try again.',
                        icon: 'error'
                    })
                }
            })

        </script>

    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.shopper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/shopper/store-in-warehouse.blade.php ENDPATH**/ ?>