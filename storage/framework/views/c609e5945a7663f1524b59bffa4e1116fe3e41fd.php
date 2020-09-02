<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row col-md-12 text-center"
            style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Update Card Details</b></h1>
        </div>
        <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <div class="col-md-6 p-5 offset-3">
                <form name="accountDetailsForm" method="post" action="<?php echo e(route('pay')); ?>" id="accountDetailsForm">
                    <div class="form-group text-center">
                        <img src="<?php echo e(asset('assets/dashboard/img/card.png')); ?>" alt="">
                        <h1>Saved cards</h1>

                        <?php if(auth()->guard('buyer')->user()->cards): ?>

                          <?php $__currentLoopData = auth()->guard('buyer')->user()->cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <strong> Card type: </strong><?php echo e($card->card_type); ?> <br>
                            <strong> Last4: </strong><?php echo e($card->last4); ?> <br>
                            <strong> Expires: </strong> <?php echo e($card->exp_month); ?>/<?php echo e($card->exp_year); ?> <br>
                            <br>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    
                    
                    <div class="form-group">
                        <div class="">
                            <label for="card_number" style="font-size: 16px;;">Card Number: </label>
                            <input type="text" value="<?php echo e(substr($buyer->card_number,0,4)); ?>***********" name="card_number" id="card_number" class="form-control"
                                placeholder="0000 0000 0000 0000">
                        </div>

                    </div>
                    

                    <div class="form-group">
                        <div class="col-md-6 pl-0">
                            <label for="expires_at" style="font-size: 16px;;">Expires: </label>
                        <input type="text"  value="<?php echo e($buyer->card_expires); ?>" name="card_expires" id="card_expires" class="form-control" placeholder="02/23">
                        </div>

                        <div class="col-md-6 pl-0">
                            <label for="cvv" style="font-size: 16px;;"> cvv: </label>
                        <input type="password" value="<?php echo e($buyer->cvv); ?>" maxlength="3" name="cvv" id="cvv" class="form-control" placeholder="****">
                        </div>
                    </div>
                    <input type="hidden" name="email" value="<?php echo e(request()->user()->email); ?>"> 
                                <input type="hidden" name="amount" value="<?php echo e(0.20 * 100); ?>"> 
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="currency" value="USD">
                                <input type="hidden" name="metadata" value="<?php echo e(json_encode($array = ['action' => 'addCard'])); ?>">
                                <input type="hidden" name="reference" value="<?php echo e(Paystack::genTranxRef()); ?>"> 
                                <?php echo e(csrf_field()); ?>

                    <div class="form-group text-center">
                        <ul id="error_list"></ul>
                        <button class="btn btn-danger btn-rounded btn-lg"><?php echo e(__("Save")); ?></button>

                    </div>
                </form>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/new/Bloomzon_v1/resources/views/dashboard/buyer/update-account-details.blade.php ENDPATH**/ ?>