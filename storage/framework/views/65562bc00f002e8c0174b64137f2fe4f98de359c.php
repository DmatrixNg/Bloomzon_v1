<?php $__env->startSection('page_title'); ?>
    Refund Policy
<?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h2>Refund Policy</h2>
                </div>
            </div>
                <div class="row mb-5" style="background-color: white; height: 450px;  padding: 50px;">
                    <div class="col-md-10 offset-1 text-center">
                        <textarea class="form-control mb-5" id="pp" rows="40"><?php echo e(\App\SiteConfig::find(1)->refundpolicy); ?></textarea>
                    <button class="bottom_btn mb-5" onclick="saveInput()">Save </button>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('scripts'); ?>
        <script>
            function saveInput(){
                var data = document.getElementById('pp').value
                makeRequest("/admin/save-setting",{data: data,type: 'refundpolicy'}).then((e)=>{
                    console.log(e)
                    if(e.success){
                        return swal("Data Updated")
                    }
                    return swal("unable to update")
                })
            }
        </script>
    <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/refundpolicy.blade.php ENDPATH**/ ?>