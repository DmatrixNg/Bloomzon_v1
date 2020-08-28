<?php $__env->startSection('page_title'); ?>
    Admin Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        
        <div class="col-md-10">
                <div class="row col-md-12 mb-4">
                    <div class="col-md-9 d-none">
                        <label for="exampleFormControlInput1 " style="font-size: 20px; color: #666; font-weight: 500;">Statement:</label>
                        <div class="form-inline ">
                            <select class="form-control col-md-4" style="height: 45px; border-radius: 0px;">
                                <option selected="">Sort</option>
                                <option>New</option>
                                <option>Old</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 d-none">
                        <label for="exampleFormControlInput1 " style="font-size: 20px; color: #666; font-weight: 500;">Month:</label>
                        <div class="form-inline ">
                            <select class="form-control" style="height: 40px; border-radius: 0px; width: 100%;">
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row col-md-12">
                
                    <div class="card m-0 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s;">
                    
                        <?php $__currentLoopData = $queries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $query): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row p-5 ml-5 mr-5" style="border-bottom: 1px solid #ddd; width: 100%;">
                                <a href="<?php echo e(url('/admin/query_replies', $query->id)); ?>" style="width: 100%;">
                                    <div class="row col-12 mb-2">
                                        <div class="col-md-2 text-left"><span class="badge badge-danger">Query</span></div>
                                        <div class="col-md-4 text-left" style="color: #999; font-size: 18px;">8:46 AM</div>
                                        <div class="col-md-6 text-right" style="color: #999; font-size: 18px;"><?php echo e($query->created_at); ?></div>
                                    </div>
                                    <div class="text row col-md-12 text-justify" style="color: #333; font-size: 18px;"><?php echo e($query->query_replies->last()->message); ?></div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/queries.blade.php ENDPATH**/ ?>