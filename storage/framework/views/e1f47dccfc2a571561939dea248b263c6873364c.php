<?php $__env->startSection('page_title'); ?>
    Fast Food Groceries
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container text-center mt-5">


    <p class="text-left"><a href="index.html">Home</a> <i class="fa fa-chevron-right"></i> <a style="color:grey;" href="fastfood.html">Fast Food Vendors</a></p>

    <h4 class="text-left"><?php echo e(strtoupper(\Request::segment(1))); ?> VENDOR</h4>
    <div class="alert alert-warning">No Vendor</div>
    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/front/fast-food-grocery.blade.php ENDPATH**/ ?>