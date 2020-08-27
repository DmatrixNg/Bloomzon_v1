<?php $__env->startSection('page_title'); ?>
    Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <div class="mm-page mm-slideout" id="mm-0">
            <div class="container-fluid">
                
                <div style="max-width: 600px; margin: auto; padding: 100px 100px 100px 100px;">

                    <div class="text-center">
                        <h2>Email Verification</h2>
                        
                            <?php if(session()->has('message')): ?>
                                <div class="alert alert-info">
                                    <?php echo e(session()->get('message')); ?>

                                </div>
                            <?php endif; ?>
                        

                        <form method="post" action="<?php echo e(url('manufacturer/verify_email')); ?>">
                        <?php echo csrf_field(); ?>
                            <input type="text" name="verification_code" style="width: 100%; padding: 20px; font-size: 30px; text-align: center; margin-bottom: 20px; border: 2px solid rgba(0, 0, 0, .2); border-radius: 4px;" maxlength="4"/>
                            <button type="submit" value="Verify" class="btn btn-success text-center" style="font-size: 20px; background-color: #013677;" style="border: none;">Verify</button>
                        </form>

                        <p>Din't recieve confirmation email? <br/> <a href="">Resent Confirmation Email</a></p>

                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/front/email_verification.blade.php ENDPATH**/ ?>