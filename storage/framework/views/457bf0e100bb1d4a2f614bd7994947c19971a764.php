<?php $__env->startSection('page_title'); ?>
    Seller's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="row col-md-12 ml-1 mt-5 mb-5" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                <div class="col-md-8 text-left ml-0">
                    <h2><i class="fas fa-bullhorn">
                        </i> Promotional Code</h2>
                </div>
                <div class="col-md-4 m-auto"><a href="<?php echo e(route('seller.create-coupon')); ?>" class="btn btn-danger text-right">Create New Code</a></div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2" style="padding: 30px;">
                    <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="text-center align-items-center mt-4 mb-4" style="border-radius: 50px; padding: 30px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="#<?php echo e($coupon->id); ?>">Coupon Code</label>
                                    <input type="text" disabled id="#<?php echo e($coupon->id); ?>" value="<?php echo e($coupon->code); ?>" style="background-color: #F2F2F2; height: 50px;" class="form-control">
                                </div>
                                <div class="col-md-6 coupons">
                                    <h4>Description</h4>
                                    <p> <?php echo e($coupon->description); ?> </p>
                                    <?php if($coupon->status === 0): ?>
                                        <p>Status: Deactivated</p>
                                        <button class="btn"  onclick="changeStatus(this,<?php echo e($coupon->id); ?>)" style="color: white; background-color: #1daf1d; border-radius: 20px;">Activate</button>
                                    <?php else: ?>
                                        <p>Status: Active</p>
                                        <button class="btn" onclick="changeStatus(this,<?php echo e($coupon->id); ?>)" style="color: white; background-color: #AF2E1D; border-radius: 20px;">Deactivate</button>
                                     <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <hr>

                </div>
            </div>

        </div>
        <?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
       function changeStatus(el,id){
        makeRequest('/seller/change-coupon-status/'+id).then((e)=>{
            if(e.success)return swal('Status changed').then( window.location.reload());
            return swal("unable to change status")
        })
       }
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/dashboard/seller/promotion.blade.php ENDPATH**/ ?>