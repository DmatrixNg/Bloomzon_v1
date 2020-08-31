

<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
        <h1 class="text-center m-auto pt-3 pb-3 "><b>Send Out Newsletter</b></h1>
    </div>
    <div class="mt-5 pt-5">
        <div class="col-md-6 offset-3">
            <form action="<?php echo e(url('admin/send-newsletter/')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="subject">Subject:</label>
                        </div>
                        <div class="col-md-10">
                            <input  id="subject" name="subject" class="form-control" type="text" placeholder="" required>
                            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger">
                                    <small><?php echo e($message); ?></small>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                </div>
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="image">Image:</label>
                        </div>
                        <div class="col-md-10">
                            <input  id="image" name="image" class="form-control-file" type="file" placeholder="">
                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger">
                                    <small><?php echo e($message); ?></small>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                </div>
                <br>
                <div class="form-group">
                    <label for="message">Messages</label>
                    <textarea style="height: 180px;" name="message_body"  id="message" class="form-control" type="text" placeholder="" required></textarea>
                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger">
                            <small><?php echo e($message); ?></small>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-2">
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                    <div class="col-md-2"></div>

                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/send_newsletter.blade.php ENDPATH**/ ?>