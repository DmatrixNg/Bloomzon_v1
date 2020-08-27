

<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row mb-5 mt-5">
        <div class="col-md-12 text-center">
            <h2>Review &amp; Feedback</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="#" class="col-10 search-wrap">
                <div class="input-group">
                    <div class="input-group-prepend text-light">
                        <button class="btn btn-outline-secondary input-group-text dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ALL</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Location</a>
                            <a class="dropdown-item" href="#">Seller</a>
                            <a class="dropdown-item" href="#">Category</a>

                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-4"></div>
        <div class="col-md-2">
            <div class="dropdown col-2">
                <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="">Name</a>
                    <a class="dropdown-item" href="">Date</a>
                    <a class="dropdown-item" href="">Account</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="background-color: #fff; padding: 20px;">
        <hr>
        <div class="col-md-12">
            <table class="table table-responsive">
                 
                <thead>
                    <tr>
                        <th>Buyer Names</th>
                        <th>Buyer ID</th>
                        <th>Review Messages</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($review->buyer->full_name); ?></td>
                            <td><?php echo e($review->buyer->id); ?></td>
                            <td><?php echo e($review->review_message); ?></td>
                            <td><?php echo e($review->product->product_name); ?></td>
                            <td><img src="<?php echo e(asset('storage/product/' . $review->product->avatars[0])); ?>" width="30px" /></td>
                            <td><?php echo e($review->status); ?></td>
                            <td>Action</td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
                <tfoot>

                </tfoot>
            </table>
            
            
        </div>
    
    </div>
    
    <div class="container">
        <?php echo e($reviews); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/admin/review.blade.php ENDPATH**/ ?>