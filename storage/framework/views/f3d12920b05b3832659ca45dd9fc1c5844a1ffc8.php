<?php $__env->startSection('content'); ?>
<div class="col-md-10"  style="background-color: white; padding: 10px;">
    <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
            <h1 class="text-center m-auto pt-3 pb-3 "><b>Order Requests</b></h1>
        </div>
    <div class="">
        <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6">
                <div class="row"  style="border: 1px solid #f2f2f2; border-radius: 5px; margin: 10px;">
                <div class="col-md-3 m-auto">
                    <img src="<?php echo e(asset( 'storage/assets/admin/avatar/' . $request->admin->avatar)); ?>" width="120" height="120" style="border-radius: 60px;">
                </div>
                <div class="col-md-4 text-center m-auto">
                    <p><b>ID:</b> <?php echo e($request->id); ?></p>
                </div>
                <div class="col-md-4 text-right m-auto">
                    <a href="<?php echo e(url('/manufacturer/request-details', $request->id)); ?>" class="btn btn-danger btn-sm mb-3 mt-3">Order Details</a>
                    <a href="<?php echo e(url('/manufacturer/request-status', $request->id)); ?>" class="btn btn-danger btn-sm mb-3">Delivery Status</a>
                    <a href="<?php echo e(asset('storage/assets/request_attachment' . $request->attached_document)); ?>" target="_blank" class="btn btn-primary btn-sm mb-3">Attachments</a>
                </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.manufacturer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/manufacturer/requests.blade.php ENDPATH**/ ?>