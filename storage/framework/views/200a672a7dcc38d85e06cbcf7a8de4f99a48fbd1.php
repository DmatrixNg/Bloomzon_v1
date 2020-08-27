<?php $__env->startSection('page_title'); ?>
    Sub Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row col-md-12">
            <?php if(count($brands)): ?>
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 p-2">
                        <div class="card p-2">
                            <div class="badge bg-<?php echo e($brand->status == 1?'success':'warning'); ?> badge-sm"><?php echo e($brand->status == 1?'Active':'Deacticated'); ?></div>
                            <img src="<?php echo e(asset('storage/assets/brand/' . $brand->avatar)); ?>" class="img img-circle m-auto"
                                width="120" height="120">
                            <ul class="list-group list-group-flush pt-3 text-center">
                                <li class="list-group-item" style="font-size: 20px;">
                                    <span class="badge badge-primary badge-pill pull-right"><?php echo e($brand->brand_name); ?></span>
                                </li>
                                <li class="list-group-item" style="font-size: 20px;">
                                    <p><?php echo e(substr($brand->brand_description, 0, 10)); ?>...</p>
                                </li>
                                <li class="list-group-item text-center">
                                    <button onclick="deleteBrand(<?php echo e($brand->id); ?>)" class="btn btn-danger btn-sm pull-left">Delete</button>

                                        <button class="btn btn-outline-secondary btn-sm"
                                            onclick="changeStatus(<?php echo e($brand->id); ?>,<?php echo e($brand->status == 1 ? 0 : 1); ?>)" type="button"
                                            aria-expanded="false">
                                            <?php echo e($brand->status == 1? 'Deactivate' :'Activate'); ?>

                                        </button>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="alert alert-warning">No banner added to the system</div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        function changeStatus(id, val) {
            return swal({
                text: "Do you want to change brand status?",
                buttons: true
            }).then((e) => {
                if (e) {
                    makeRequest('/admin/change-brand-status', {
                        id: id,
                        status: val
                    }).then((e) => {
                        if (e.success) {
                            return swal("Status updated successfully").then(
                                e=>{
                                    window.location.reload()
                                } 
                            )

                        }
                    })
                }
            })

        }
        function deleteBrand(id) {
            return swal({
                text: "Do you want to delete this brand?",
                buttons: true
            }).then((e) => {
                if (e) {
                    makeRequest('/admin/delete-brand/'+id).then((e) => {
                        if (e.success) {
                            return swal("Status delete successfully").then(
                                e=>{
                                    window.location.reload()
                                } 
                            )
                        }
                    })
                }
            })

        }

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/dashboard/admin/all-brands.blade.php ENDPATH**/ ?>