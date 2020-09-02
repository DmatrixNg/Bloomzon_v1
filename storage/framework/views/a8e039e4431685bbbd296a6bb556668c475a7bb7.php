<?php $__env->startSection('page_title'); ?>
    Seller's Dashboard - Sale Details
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="row mt-5 justify-content-center">

                <div class="col-md-2 text-center" style="background-color: #fff !important; padding: 15px !important;">
                    <img src="<?php echo e(asset('storage/assets/product/avatars/'.$sale->product->avatars[0])); ?>" class="img" width="140" height="105">
                </div>
           </div>
           <div class="row row justify-content-center mt-5"><h2 class="text-white">Product Type</h2></div>

            <div class="row">
                <div class="card col-md-6 offset-3" style="padding: 30px;">


                        <div class="row">
                            <div class="col-md-3">
                                <p><?php echo e($sale->product->product_name); ?></p>
                            </div>
                            <div class="col-md-3">
                                <p>-</p>
                            </div>
                            <div class="col-md-3">
                                <p><?php echo e($sale->product->quantity); ?> piece(s)</p>
                            </div>
                        </div>



                </div>
            </div>

           <div class="row mt-5">
               <div class="col-md-6 offset-3">
                   <div class="justify-content-center">
                       <div class="row text-center">
                           <div class="col-md-6">
                               Buyer:
                           </div>
                           <div class="col-md-6">
                             
                               <?php echo e($order->orderable->full_name); ?>

                           </div>
                       </div><hr>
                       <div class="row text-center">
                           <div class="col-md-6">
                               Billing Address:
                           </div>
                           <div class="col-md-6">
                               <?php echo e($order->orderable->billing_address); ?>

                           </div>
                       </div><hr>
                       <div class="row text-center">
                           <div class="col-md-6">
                               Amount:
                           </div>
                           <div class="col-md-6">

                               <?php echo e(number_format($sale->product->total)); ?>

                           </div>
                       </div><hr>
                       <div class="row text-center">
                           <div class="col-md-6">
                               Payment Mode:
                           </div>
                           <div class="col-md-6">
                               <?php echo e($order->payment_method === 1 ? 'Card': 'Cash'); ?>

                           </div>
                       </div><hr>
                       <div class="row text-center">
                           <div class="col-md-6">
                               Delivery Agent:
                           </div>
                           <div class="col-md-6">
                               <?php echo e($order->delivery_agent_id->name ?? ''); ?>

                           </div>
                       </div><hr>
                       <div class="row text-center">
                           <div class="col-md-6">
                               Review/feedback:
                           </div>
                           <div class="col-md-6">

                           </div>
                       </div><hr>
                       <div class="row text-center">
                           <div class="col-md-6">
                               Rating:
                           </div>
                           <div class="col-md-6">

                           </div>
                       </div>
                   </div>

               </div>
               <div class="col-md-2"></div>
           </div>
        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/new/Bloomzon_v1/resources/views/dashboard/seller/saledetail.blade.php ENDPATH**/ ?>