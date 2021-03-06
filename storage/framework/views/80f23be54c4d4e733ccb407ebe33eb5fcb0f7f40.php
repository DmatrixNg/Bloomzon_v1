<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>

        <?php
        $sellers_arr = [];

        // dd($order->order_details);
        foreach($order->order_details as $order_detail){

          // dd($order_detail->products);
            array_push($sellers_arr, @$order_detail->products->seller->full_name ??  "");
        }
        ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-10 offset-1">
                        <div class="" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                            <h1 style="padding: 10px; margin: 0px auto;"><b>Order Details</b></h1>
                            <span class="badge badge-danger col-4 p-3 m-3" style="background-color: crimson;"> Seller(s) ID : <?php echo e(implode(' , ', $sellers_arr)); ?></span>
                            <span class="badge badge-danger col-4 p-3 m-3" style="background-color: crimson;"><?php echo e($order->created_at); ?></span>
                            <div class="p-3">
                                <ul class="list-group" style="font-size: 18px; color: #000;">
                                    <li class="list-group-item">
                                        <br>
                                        <b>BILLING ADDRESS</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;"><?php echo e($order->order_details[0]->order->billing_address); ?></span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>AMOUNT ($)</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;"><?php echo e($order->total_amount); ?></span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>PAYMENT METHOD</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;"><?php echo e($order->payment_method === 1 ? 'Card': 'Cash'); ?></span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>DELIVERY AGENT</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;"><?php echo e($order->delivery_agent_id->name ?? ''); ?></span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <b>REVIEW FEEDBACK</b>

                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>STATUS</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;"><?php echo e($order->status); ?></span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>NO. OF GOODS</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;"><?php echo e(count($order->order_details)); ?></span>
                                        <br>
                                    </li>
                                    <li class="list-group-item">
                                        <br>
                                        <b>TRANSACTION DATE</b>
                                        <span class="badge badge-primary badge-pill" style="background-color: #02499B; font-size: 15px;"><?php echo e($order->created_at); ?></span>
                                        <br>
                                    </li>
                                </ul>
                            </div>
                            <a href="<?php echo e(url('buyer/create_message')); ?>">
                            <div class="row col-md-12 text-center m-auto">
                                  <button class="btn btn-danger m-auto" data-toggle="modal" data-target="#chater">Chat On This Order</button>
                            </div>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/new/Bloomzon_v1/resources/views/dashboard/buyer/view-order-details.blade.php ENDPATH**/ ?>