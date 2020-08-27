
<?php $__env->startSection('page_title'); ?>
   Professional Service Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
        <h1 class="text-center m-auto pt-3 pb-3"><b>Cases</b></h1>
        <a href="<?php echo e(url('professional/create_message')); ?>" style="border: 1px #fff solid; color: #fff; padding: 10px; border-radius: 20px; height: 40px; margin-top: 10px;">Open New Message</a>
    </div>

    <div class="row col-md-12 mb-3" style="background-color: #fff !important; padding: 20px;">
        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mb-2 p-4" style="border-radius: 20px; background-color: #fcfcfc; width: 100%; border: 1px solid #fcfcfc; text-shadow: #666;">
                <div class="col-md-2">
                    <i class="fa fa-user-circle fa-4x pl-3"></i>
                </div>
                <a href="<?php echo e(url('/professional/message_replies/' . $message->id )); ?>">
                    <div class="col-md-4">
                        <span class="badge badge-dark" style="background-color: #AF2E1D !important; font-size: 17px;">
                            <?php echo e($message->messageable->full_name); ?>

                        </span>
                        <h5><span class="text-danger">Request Type:</span> <?php echo e($message->request_type); ?></h5>
                        <h5><span class="text-danger">Subject:</span> <?php echo e($message->subject); ?></h5>
                        <p style="font-size: large;"><?php echo e($message->message_replies->last()->message); ?></p>
                    </div>
                </a>
                <div class="col-md-6 text-right">
                    <p><?php echo e($message->created_at); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="row col-md-12 text-center m-auto">
        <nav aria-label="Page navigation example">
            <?php echo e($messages); ?>

        </nav>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.professional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzon\resources\views/dashboard/professional/messages.blade.php ENDPATH**/ ?>