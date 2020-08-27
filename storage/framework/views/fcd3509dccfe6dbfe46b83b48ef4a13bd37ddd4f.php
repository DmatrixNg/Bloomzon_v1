<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Notifications</h2>
                    </div>
                    <div class="col-md-3 mt-4 text-right">
                        <button class="btn btn-secondary">Show all</button>
                    </div>
                </div>
            <?php if(count($notifications)): ?>
            <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-3 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-left: 5px solid #02499B;">
                    <div class="row p-3 ml-3 mr-5">
                        <div class="col-md-3 text-left">
                            <h4>Admin</h4>
                            <img src="assets/img/profil.png" class="img img-circle" width="50" height="50" alt="">
                        </div>
                        <div class="col-md-6 m-auto">
                            <h5 style="color: #666;"><?php echo e($notification->message); ?></h5>
                            <p style="font-size: 14px; color: #999;"><?php echo e($notification->created_at); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="row col-md-12 text-center m-auto">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            <?php else: ?>
                <h4>You have no notifications</h4>
                <?php endif; ?>

            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/sqt/bloom/resources/views/dashboard/buyer/notifications.blade.php ENDPATH**/ ?>