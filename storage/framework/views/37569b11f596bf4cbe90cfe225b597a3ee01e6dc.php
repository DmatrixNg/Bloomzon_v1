<?php $__env->startSection('page_title'); ?>
    Fast Food & Groceries Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-4 offset-2">
                <a href="wallet">
                    <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                        <h2><i class="fas fa-cash-register"></i> Total Withdrawal</h2>
                        <h1><b>0</b></h1>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                    <h2><i class="fas fa-shopping-cart"></i> Shopping</h2>
                    <h1><b>0</b></h1>
                </div>
            </div>
        </div>
        <br>
        <div class="row pl-5 mt-5 mb-5" style="background-color: #02499B">
            <h1 style=" color: #fff;">
                <strong>KITCHEN MENU</strong>
            </h1>
        </div>
        <div class="row  m-auto pl-5">
            <?php $__currentLoopData = $catalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 ml-5">
                    <div class="card text-center p-3 ">
                        <img src="<?php echo e(asset('storage/assets/fast_food_grocery/catalogue/' . $catalogue->avatar)); ?>" class="img img-circle m-auto"
                        width="100%" height="160"/>
                    </div>
                    <div class="p-1 text-center " style="background-color: #b92c28;">
                    <h4 class="text-white "><?php echo e($catalogue->name); ?></h4>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- <div class="row " style="padding: 15px; ">
            <div class="col-md-12 card " style="padding: 15px; text-align: right; ">
                <p>Copyright 2020 - Bloomzon </p>
            </div>
        </div> -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.fast_food_grocery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzon\resources\views/dashboard/fast_food_grocery/home.blade.php ENDPATH**/ ?>