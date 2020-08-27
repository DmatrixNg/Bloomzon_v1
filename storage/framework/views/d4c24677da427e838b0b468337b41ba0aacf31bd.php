<?php $__env->startSection('page_title'); ?>
    Fast Food & Groceries Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row col-md-12 text-center " style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white ">
        <h1 class="text-center m-auto pt-3 pb-3 text-capitalize"><b><?php echo e(Auth::guard('fast_food_grocery')->user()->full_name); ?></b></h1>
    </div>


    <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($reply->replyer === 'fast_food_grocery'): ?>
            <div class="row col-md-12 p-3 " style="background-color: #fff !important; padding: 20px; ">
                <div class="col-md-6 offset-6 p-3 " style="border: 1px solid #ddd; border-radius: 5px ">
                    <small class="text-success">You</small>
                    <div class="row ">
                        <div class="col-md-6 text-left "><?php echo e($reply->created_at); ?></div>
                        <div class="col-md-6 text-right ">11:23AM</div>
                    </div>
                    <p><?php echo e($reply->message); ?></p>
                </div>
            </div>
        <?php else: ?>
            <div class="row col-md-12 p-3 " style="background-color: #fff !important; padding: 20px; ">
                <div class="col-md-4 p-3 " style="border: 1px solid #ddd; border-radius: 5px ">
                    <div class="row ">
                        <div class="col-md-6 text-left "><?php echo e($reply->created_at); ?></div>
                        <div class="col-md-6 text-right ">11:23AM</div>
                    </div>
                    <p><?php echo e($reply->message); ?></p>
                </div>
            </div>
        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    
    <form action="<?php echo e(url('fast_food_grocery/reply/' . $message_id)); ?>" method="post" class="row col-md-12 text-center mb-5" style="background-color: #fff !important; padding: 10px; text-align: center !important; color:white; border-top: solid #ccc 1px; ">
    <?php echo csrf_field(); ?>
        <div class="col-12 text-center">
            <textarea class="form-control" name="message"></textarea>
        </div>
        <div class="text-center col-12 pt-3">
            <button type="submit" class="btn btn-danger btn-sm col-2" style="height: 40px; border-radius: 0px;">Reply</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        FormHandler('issueForm', {
            requestType: 'POST',
            requestUrl: '/fast_food_grocery/contact-admin',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!',
                        text: 'Your support request has been sent, admin will reply shortly',
                        icon: 'success',
                    }).then( () => window.location.reload() )
                }
                return swal({
                    title: 'Error!',
                    text: response.message,
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.fast_food_grocery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzon\resources\views/dashboard/fast_food_grocery/message_replies.blade.php ENDPATH**/ ?>