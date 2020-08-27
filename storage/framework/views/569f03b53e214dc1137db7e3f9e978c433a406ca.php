<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Favourites</h2>
                    </div>
                </div>
                <div class="row">
                                <?php if(count($favorites)): ?>


                                    <?php $__currentLoopData = $favorites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favourite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <div class="col-md-4 mb-3">
                                            <div class="row">
                                                <div class=" pt-3 pb-3" style="background-color: #f2f2f2 !important;">
                                                    <div class="col-md-3 m-auto text-left">
                                                        <img src="<?php echo e(asset('storage/assets/product/avatars/'.$favourite->product_id->avatars[0])); ?>" width="80">
                                                    </div>
                                                    <div class="col-md-6 m-auto">
                                                        <p><span style="font-weight: bolder">
                                                            <a href="<?php echo e(url('product-details/' . base64_encode($favourite->product_id->id))); ?>">
                                                                <?php echo e($favourite->product_id->product_name); ?>

                                                            </a>
                                                        </span></p>
                                                        <p> &#8358;<?php echo e($favourite->product_id->product_price); ?> <small style="text-decoration: line-through;"> &#8358;<?php echo e($favourite->product_id->product_sales_price); ?></small></p>
                                                        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <i class="fa fa-heart fa-2x" style="color: red"></i><br>
                                                        <button style="border-radius: 25px;" data-favourite-id="<?php echo e($favourite->id); ?>" type="button" id="removefv" class="btn btn-info mt-3 btn-sm">Remove</button>
                                                        <a href="<?php echo e(url('product-details/' . base64_encode($favourite->product_id->id))); ?>"
                                                            class="btn btn-info mt-3 btn-sm"><i class="fa fa-eye"></i>   </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <div class="text-center">
                                    <h4>You have added no favorites</h4>
                                </div>
                                <?php endif; ?>


                            </div>
                        </div>

<script>
    elem = document.getElementById('removefv');
   var fid = elem.getAttribute('data-favourite-id');

   elem.onclick =async function(){
   const resp = await makeRequest('buyer/favorite/remove',{
        fid:fid,
    });

   }
   
</script>

        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/buyer/favourites.blade.php ENDPATH**/ ?>