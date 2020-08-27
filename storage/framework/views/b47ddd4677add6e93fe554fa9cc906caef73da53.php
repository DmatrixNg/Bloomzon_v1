<?php $__env->startSection('page_title'); ?>
    Admin Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10 p-0">



        <div class="row col-md-12">
            <?php $__currentLoopData = $subadmins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subadmin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 p-2">
                    <div class="card p-2">
                        <img src="<?php echo e(asset('storage/assets/admin/avatar/' . $subadmin->avatar)); ?>"
                            class="img img-circle m-auto" width="120" height="120">
                        <ul class="list-group list-group-flush pt-3">
                            <li class="list-group-item" style="font-size: 16px;">
                                ID
                                <span
                                    class="badge badge-primary badge-pill pull-right"><?php echo e(substr($subadmin->full_name, 0, 3) . $subadmin->id); ?></span>
                            </li>
                            <li class="list-group-item" style="font-size: 16px;">
                                Location
                                <span class="badge badge-primary badge-pill pull-right"><?php echo e($subadmin->address); ?></span>
                            </li>
                            <li class="list-group-item" style="font-size: 16px;">
                                Status
                                <span
                                    class="badge badge-primary badge-pill pull-right"><?php echo e($subadmin->status ? 'Active' : 'Inactive'); ?></span>
                            </li>
                            <li class="list-group-item text-center">
                                
                                <a class="btn btn-sm text-white btn-<?php echo e($subadmin->status ? 'success' : 'warning'); ?>"
                                    onclick="changeStatus(<?php echo e($subadmin->id); ?>)"><?php echo e($subadmin->status ? 'Active' : 'Inactive'); ?></a>
                                <a class="btn btn-sm btn-danger text-white" onclick="deleteUser()">Delete</a>
                                <a class="btn btn-sm btn-primary text-white" onclick="querySubadmin()">Query</a>
                    </div>

                    </li>
                    </ul>
                </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>




    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        function deleteUser(id) {
            return swal({
                text: "Do you want to delete user?",
                buttons: true,
            }).then((e) => {
                if (e) {
                    makeRequest('/admin/delete-user/sub_admin/' + id).then((e) => {
                        console.log(e);
                        if (e.success) {
                            return swal("SubAdmin Deleted").then(e => window.location.reload());
                        }
                        return swal("Unable to delete")
                    })
                }
            })
        }

        function changeStatus(id){
          return swal({
                text: "Do you want to change status?",
                buttons: true,
            }).then((e) => {
                if (e) {
                    makeRequest('/admin/change-status/sub_admin/' + id).then((e) => {
                        console.log(e);
                        if (e.success) {
                            return swal("Subadmin status changed").then(e => window.location.reload());
                        }
                        return swal("Unable to change status")
                    })
                }
            })
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/admin/all_subadmins.blade.php ENDPATH**/ ?>