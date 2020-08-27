<?php $__env->startSection('page_title'); ?>
    Fast Food & Groceries Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row col-md-12" style="background-color: #fff !important; padding: 10px; text-align: center !important;">
                    <div style="background-color: #02499B; width: 100%; padding: 10px 20px;">
                        <div class="col-md-9 text-left text-white">
                            <h1>
                                Food Menu
                            </h1>
                        </div>
                        <div class="col-md-3 pt-4">
                            <a href="<?php echo e(route('fast_food_grocery.add-food-menu')); ?>" class="btn btn-danger btn-lg">Add to Catalogue</a>
                        </div>
                    </div>

                    <?php $__currentLoopData = $food_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row col-md-12">

                            <div class="col-md-12 mb-3">
                                <h3 style="color: #02499B;"><?php echo e($menus->name); ?></h3>
                            </div>
                            <div class="row col-md-12 mt-5 pb-5 m-auto" style="border-bottom: 1px #dddddd solid;">
                               <?php $__currentLoopData = $food_menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                               <?php if($menu->category_id->id == $menus->id): ?>
                               <div class="col-md-4 text-center">
                                <img src="<?php echo e(asset('storage/assets/product/avatars/'.$menu->avatars[0])); ?>" width="220" alt="">
                                <h3> Price: $<?php echo e($menu->product_sales_price); ?></h3>
                                <p> Description: (<?php echo e($menu->product_description); ?>)</p>
                            </div>
                            <?php endif; ?>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    


                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.fast_food_grocery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/dashboard/fast_food_grocery/food-menu.blade.php ENDPATH**/ ?>