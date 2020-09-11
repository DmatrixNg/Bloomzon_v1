<?php $__env->startSection('page_title'); ?>
    Payment History
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="col-md-12 mt-4 mb-4">
                    <div class="row">
                        <div class="col-md-3">

                            <div class="form-inline ">
                                <label for="exampleFormControlInput1" class="col-md-4" style="font-size: 20px; color: #666; font-weight: 500;">Statement:</label>
                                <select class="col-md-8 form-control">
                                    <option>Checkout</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <div class="form-inline">
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card m-0 p-0">
                      
                        <?php if(isset($payments)): ?>
                        <table class="table text-center table-bordered m-0" id="payment_history">
                            <thead style="background-color:  #003B88; color: #fff; font-size: 16px; vertical-align: middle;">
                                <tr style="height: 60px; text-align: center !important;" class="text-center">
                                    <th class="text-center" style="border: solid 3px #ddd;">QUANTITY</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">SELLER </th>
                                    <th class="text-center" style="border: solid 3px #ddd;">AMOUNT</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">MODE</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr style="height: 60px;">

                                        <td style="border: solid 1px #ddd;"><?php echo e(count($payment->order_details)); ?></td>
                                        <td style="border: solid 1px #ddd;"><a href="/<?php echo e(app()->getLocale()); ?>/seller-details/<?php echo e(@$payment->order_details[0]->seller->id ?? ""); ?>"><?php echo e(@$payment->order_details[0]->seller->company_name ?? ""); ?></a></td>
                                        <td style="border: solid 1px #ddd;"><?php echo e($payment->total_amount); ?></td>
                                        <td style="border: solid 1px #ddd;"><?php echo e($payment->payment_method); ?></td>
                                        <td style="border: solid 1px #ddd;"><?php echo e(date('Y-M-d',strtotime($payment->created_at))); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>

                        
                            <?php else: ?>
                            <?php endif; ?>
                    </div>

                </div>
            </div>
        <?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(function(){
        $('#payment_history').DataTable()
    })
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/new/Bloomzon_v1/resources/views/dashboard/buyer/payment-history.blade.php ENDPATH**/ ?>