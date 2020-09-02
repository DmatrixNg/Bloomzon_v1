<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row mb-5 mt-5">
        <div class="col-md-12 text-center">
            <h2>Review &amp; Feedback</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            

        </div>
        <div class="col-md-4"></div>
        
    </div>


    <div class="container" style="background-color: #fff; padding: 20px;">
    
        <div class="row" style="color: #02499B">
            <div class="col-md-2">
                <h5>Names</h5>
            </div>
            <div class="col-md-4">
                <h5>Review Messages</h5>
            </div>
            <div class="col-md-2">
                <h5>Products</h5>
            </div>
            <div class="col-md-2">
                <h5>For User</h5>
            </div>
            <div class="col-md-2">
                <h5>Action</h5>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row" style="background-color: white; color: black; border-radius: 20px; padding: 20px; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-2">
                        <p><?php echo e($review->buyer_id->full_name); ?></p>
                    </div>
                    <div class="col-md-4">
                        <p><?php echo e($review->review_message); ?></p>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo e(url('product-details/'.base64_encode($review->product_id->id))); ?>" target="_blank"><img src="<?php echo e(asset('storage/assets/product/avatars/'.$review->product_id->avatars[0])); ?>" height="35" width="35" alt="bag"></a>
                    </div>
                    <div class="col-md-2">
                        <p><?php echo e($review->seller->full_name); ?></p>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown col-2">
                            <?php if($review->status): ?>
                                <button class="btn btn-sm btn-primary" onclick="change_status(<?php echo e($review->id); ?>)">Approved</button>
                            <?php else: ?>
                                <button class="btn btn-sm btn-danger" onclick="change_status(<?php echo e($review->id); ?>)">Rejected</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    
    </div>
    
    <div class="container">
        <?php echo e($reviews); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        function change_status(id){
            return swal({
                text: "do you want to change the review status?",
                buttons: true,
            }).then((e)=>{
                if(e){
                makeRequest('/admin/reveiw/change_status/'+id).then((e)=>{
                    console.log(e);
                    if(e.success){
                    return swal("Status has been changed").then(e => window.location.reload());
                    }
                    return swal("Error changing status")
                })
                }
            })
            }
    </script>
        
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/review.blade.php ENDPATH**/ ?>