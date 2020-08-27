<?php $__env->startSection('page_title'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="alert alert-warning">All Inactive adverts will need to be activated by the admin</div>
        <?php if(count($adverts)): ?>
            <?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 p-5">
                    <div class="card p-0">
                        <div class="col-md-12 p-0">
                            <img src="<?php echo e(asset('storage/assets/advert/avatar/' . $advert->avatar)); ?>" height="120"
                                class="m-auto" width="100%">
                        </div>
                        <div class="col-md-12 text-center mt-3">
                            <p><b>url:</b>&nbsp;&nbsp;&nbsp;<?php echo e($advert->advert_link); ?></p>
                            <p><b>Page Section:</b>&nbsp;&nbsp;&nbsp;<?php echo e($advert->advert_position); ?></p>
                            <p><b>Amount:</b>&nbsp;&nbsp;&nbsp;<?php echo e($advert->amount); ?></p>
                        <p><b>Status:</b>&nbsp;&nbsp;&nbsp; <?php echo e(ucfirst($advert->status)); ?></p>
                            <button style="border-radius: 25px;" onclick="deleteAd(this,<?php echo e($advert->id); ?>)" type="button" class="btn btn-danger btn-sm mb-2">Delete</button>
                            <?php if($advert->status == 'paused'): ?>
                            <button style="border-radius: 25px;" type="button" class="btn btn-warning btn-sm mb-2" onclick="changeStatus(1,<?php echo e($advert->id); ?>)">Play</button>
                            <?php else: ?>
                            <button style="border-radius: 25px;" type="button" class="btn btn-warning btn-sm mb-2" onclick="changeStatus(0,<?php echo e($advert->id); ?>)">Pause</button>
                            <?php endif; ?>

                            <button style="border-radius: 25px;" type="button"  onclick="changeStatus(2,<?php echo e($advert->id); ?>)" class="btn btn-info btn-sm">Re-activate</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="alert alert-warning">
                <h3> You have no adverts running, create one now </h3>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
    <script>
        async function deleteAd(el, id) {
            return swal({
                title: 'Are you sure you want to delete this advert?',
                buttons: true
            }).then((val) => {
                if (val) {
                    makeRequest('/professional/delete-ads/' + id).then((e)=>{
                        return swal("Advert deleted successfully").then(window.location.reload())
                        console.log(e);
                    })
                }
            })

        }
        async function changeStatus(el, id) {
            console.log(id)
            return swal({
                title: 'Are you sure you want to change status?',
                buttons: true
            }).then((val) => {
                if (val) {
                    makeRequest('/professional/change-ads-status/'+id,{status:el}).then((e)=>{
                        return swal("Advert status changed successfully").then(window.location.reload())
                        console.log(e);
                    })
                }
            })

        }

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/seller/all-ads.blade.php ENDPATH**/ ?>