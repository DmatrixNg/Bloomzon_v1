<?php $__env->startSection('page_title'); ?>
    Seller's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="row col-md-12 ml-1 mt-5 mb-5" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                <div class="col-md-12 text-center ml-0">
                    <h2><i class="fas fa-box-open"></i> Trading Policy</h2>
                </div>
            </div>
            <form style="padding: 20px;" name="policiesForm" id="policiesForm">
                <input type="hidden" name="_method" value="put" />
                <div class="row mt-4 mb-4">
                    <div class="col-md-7 m-auto">
                        <h4 style="color: #02499B; ">Terms & Condition</h4>
                        <textarea class="form-control" name="terms_and_conditions" rows="5"><?php echo e($seller->terms_and_conditions ?? ''); ?></textarea>
                    </div>

                </div>
                <hr>
                <div class="row mt-4 mb-4">
                    <div class="col-md-7 m-auto">
                        <h4 style="color: #02499B; ">Policy</h4>
                        <textarea class="form-control" name="policy" rows="5"><?php echo e($seller->policy ?? ''); ?></textarea>
                    </div>

                </div>
                <hr>
                <div class="row mt-4 mb-4">
                    <div class="col-md-7 m-auto">
                        <h4 style="color: #02499B; ">Delivery Terms</h4>
                        <textarea name="delivery_terms" class="form-control" rows="5"><?php echo e($seller->delivery_terms ?? ''); ?></textarea>
                    </div>

                   

                </div>
                <hr>
                <div class="row mt-4 mb-4">
                    <div class="col-md-7 m-auto">
                        <h4 style="color: #02499B; ">Terms of Purchase</h4>
                        <textarea name="terms_of_purchase" class="form-control" rows="5"><?php echo e($seller->terms_of_purchase ?? ''); ?></textarea>
                    </div>
                    
                </div>
                <div class="row mt-4 mb-4">
                    <div class="col-md-7 m-auto">
                        <div id="error_list"></div>
                    <button type="submit" class="btn" style="color: white; background-color: #AF2E1D; border-radius: 5px;">UPDATE</button>
                    </div></div>

            </form>
        </div>
        <?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        FormHandler('policiesForm', {
            requestUrl: '/seller/edit-terms-policy/<?php echo e(Auth::guard(`seller`)->user()->id); ?>',
            cb: response => {
                if (response.success) {
                    return swal({
                        title: 'Success!',
                        text: 'Profile updated successfully',
                        icon: 'success',
                    }).then(() => {
                        window.location.reload()
                    })
                }
                if(response != null)ErrorHandler(response.errors);
                return swal({
                    title: 'Error!',
                    text: response.message,
                    icon: 'error',
                    button: 'Try Again'
                });
            }
        })
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/seller/policy.blade.php ENDPATH**/ ?>