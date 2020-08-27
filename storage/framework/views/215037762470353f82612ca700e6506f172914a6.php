        

<?php $__env->startSection('page_title'); ?>
    Fast Food & Groceries Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h2>Manufacturer Payout</h2>
                </div>
            </div>
            <div class="panel panel-white">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead style="background-color: #E2EFFF;">
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Wallet Balance</th>
                                <th>Amount Request</th>
                                <th>Narration</th>
                                <th>Action</th>
                                <th>User Balance</th>
                            </tr>
                            </thead>

                            <tbody>
                                <?php if(count($requests)): ?>
                                    <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>1</td>
                                <td>Ose</td>
                                <td>N1,000</td>
                                <td>N200</td>
                                <td>Urgent need</td>
                                <td><button style="background-color: white; border: 1px solid black; border-radius: 20px;">Pay</button></td>
                                <td>N800</td>
                            </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <h4 class="alert alert-warning">
                                        No withdrawal request from the manufacturers
                                    </h4>
                                    <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          
        </div>
        <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/admin/manufacturerpayout.blade.php ENDPATH**/ ?>