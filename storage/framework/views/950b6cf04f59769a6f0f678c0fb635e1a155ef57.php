<?php $__env->startSection('page_title'); ?>
    Terms and Conditions
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="card container my-5 py-5 z-depth-1">

        <div class="col-md-9">
            <div class="tab-content m-auto">
                <div id="grid-products" class="tab-pane active">
                    <div class="row mb-4">
                        <div class="col-md-8 offset-2 form-inline">
                            <label><b>Enter Your Order ID:</b></label>
                            <input id="order_id" class="form-control ml-5" style="height: 50px; border-radius: 0px;" />
                            <button class="btn btn-lg btn-danger" style="border-radius: 0px;"
                                onclick="trackId()">Track</button>
                        </div>
                    </div>
                    <?php if(isset($delivery) && count($delivery)): ?>
                        <div class="row ">
                            <?php $__currentLoopData = $delivery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4 p-3 mb-4 mr-2">
                                <div class="card" style="width: 18rem;">
                                    <div class="badge pull-right text-white" style="top: 0; right: 0; position: absolute; background-color: green;"><?php echo e($order->delivery_status); ?></div>
                                    <img src="<?php echo e(asset('storage/assets/product/avatars/' . $order->order_details->product->avatars[0])); ?>"
                                        class="img card-img-top" width="60" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Order ID:</span><span class="pl-5"><?php echo e($order->order_id->id); ?>

                                        </h5>
                                        <p class="card-text"></p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Seller:
                                            <?php echo e($order->order_details->seller_id->full_name); ?></li>
                                        <li class="list-group-item">Buyer:
                                            <?php echo e($order->order_details->buyer_id->full_name); ?></span></p>
                                        </li>
                                        <li class="list-group-item"><p><span style="font-weight: bolder">Billing
                                            Address:</span><?php echo e($order->order_details->buyer_id->billing_address); ?>

                                    </li>
                                    </ul>

                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        </div>
                    <?php else: ?>
                        <h4>Please enter order ID to track your delivery</h4>
                    <?php endif; ?>
                    <div class="row m-auto">

                        <img class="img img-responsive" src="<?php echo e(asset('assets/frontend/img/map.png')); ?>" width="100%"
                            height="100%">

                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        var order_id = document.getElementById('order_id');

        function trackId() {
            console.log(order_id)
            if (order_id.value == '') {
                return swal("Please enter order id");
            }
            window.location.href = '/track-order/' + order_id.value
        }

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/front/track-delivery.blade.php ENDPATH**/ ?>