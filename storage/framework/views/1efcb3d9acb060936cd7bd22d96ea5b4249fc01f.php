
<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>
<?php

?>
        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row col-md-12 text-center " style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white ">
                    <h1 class="text-center m-auto pt-3 pb-3 "><b>Chat History</b></h1>
                </div>

                    
                        
                        <div class="row col-md-12 p-3 " style="background-color: #fff !important; padding: 20px; ">
                            <div class="col-md-4 p-3 " style="border: 1px solid #ddd; border-radius: 5px ">
                                <p> <?php echo e(Auth::guard('buyer')->user()->fullname); ?> </p>
                                <div class="row ">
                                    <div class="col-md-6 text-left "><?php echo e(\Carbon\Carbon::parse($message->created_at)->format('M d Y')); ?></div>
                                    <div class="col-md-6 text-right "><?php echo e(\Carbon\Carbon::parse($message->created_at)->format('g:i A')); ?></div>
                                </div>
                                <p><?php echo e($message->message); ?></p>
                            </div>
                        </div>
                        <div class="row col-md-12 p-3 " style="background-color: #fff !important; padding: 20px; ">
                            <?php if($message->reply): ?>
                                <div class="col-md-6 offset-6 p-3 " style="border: 1px solid #ddd; border-radius: 5px ">
                                    <p>Admin</p>
                                    <div class="row ">
                                        <div class="col-md-6 text-left "><?php echo e(\Carbon\Carbon::parse($message->reply_id->created_at)->format('M d Y')); ?></div>
                                        <div class="col-md-6 text-right "><?php echo e(\Carbon\Carbon::parse($message->reply_id->created_at)->format('g:i A')); ?></div>
                                    </div>
                                    <p><?php echo e($message->reply); ?></p>
                                </div>
                                <?php else: ?>
                                <div class="col-md-6 offset-6 p-3 " style="border: 1px solid #ddd; border-radius: 5px ">
                                    <p>Awaiting admin response...</p>
                                </div>
                                <?php endif; ?>
                        </div>
                    
            </div>
        <?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        FormHandler('chatForm', {
            requestUrl: '/api/v1/crud/messages',
            cb: response => {
                if (response.success) {
                    return swal({
                        title: 'Success!',
                        text: 'Message sent, admin will respond shortly',
                        icon: 'success',
                        button: 'Okay'
                    }).then(() => {
                        window.location.reload();
                    })
                }

                return swal({
                    title: 'Error!',
                    text: 'We had error sending your message. Please Try Again',
                    icon: 'error',
                    button: 'Try Again'
                });
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/buyer/show-message.blade.php ENDPATH**/ ?>