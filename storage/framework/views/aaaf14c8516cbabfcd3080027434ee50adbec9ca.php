        

<?php $__env->startSection('page_title'); ?>
    Networking Agent Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
            <h1 class="text-center m-auto pt-3 pb-3 "><b>Verification</b></h1>
        </div>

        <div class="">
            <div class="col-md-8">
                <?php if(session()->get('message')): ?>
                    <div class="alert alert-success">Profile activation request sent successsfully</div>
                <?php endif; ?>
                <form action="<?php echo e(url('networking_agent/verify_account')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <div class="form-group m-5">
                        <label for="account-number">Proof of Address</label>
                        <input name="proof_of_address" id="account-number" class="form-control" type="file" placeholder="">
                        <?php $__errorArgs = ['proof_of_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group m-5">
                        <label for="validid">Valid ID</label>
                        <input name="valid_id" id="validid" class="form-control" type="file" placeholder="">
                        <?php $__errorArgs = ['valid_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group m-5">
                        <label for="narration">Narration</label>
                        <textarea name="narration" id="narration" class="form-control" type="text" rows="6" placeholder="Create an application to be verified"></textarea>
                        <?php $__errorArgs = ['narration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <strong><?php echo e($message); ?></strong>
                            </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group justify-content-center text-center m-5">
                        <button submit class="btn" style="border: 1px solid white;width: 150px; background-color:#AF2E1D; border-radius: 20px; color: white;">SEND</button>
                    </div>

                </form>
               
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.dashboard.networking_agent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/networking_agent/verification.blade.php ENDPATH**/ ?>