<?php $__env->startSection('page_title'); ?>
    Professional's Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="col-md-12 text-center mb-5"
            style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Your Products</b></h1>
            <a href="<?php echo e(route('professional.add-product')); ?>"
                style="border: 1px #fff solid; color: #fff; padding: 10px; border-radius: 20px; height: 40px; margin-top: 10px;">Add
                Product</a>
        </div>

        <?php if(count($products)): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="row col-md-6 mr-2">
                    <div
                        style="background-color: white !important; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border-radius: 0px !important; border: 1px solid #f2f2f2;">
                        <div class="col-md-4 m-auto">
                                <?php $image = count($product->avatars) == 0 ? 'avatar.png' : $product->avatars[0]; ?>
                            <img src="<?php echo e(asset('storage/assets/product/avatars/' . $image)); ?>" height="120" width="170"
                                style="border-radius: 50%">
                        </div>
                        <div class="col-md-8 text-center">
                            <h3><?php echo e(substr($product->product_description, 0, 100) . '...'); ?></h3>
                            <a href="<?php echo e(route('professional.edit-product', $product->id)); ?>" style="border-radius: 25px;"
                                type="button" class="btn btn-danger btn-sm mb-2">Edit</a>
                            <a href="#" onclick="deleteProd(this,<?php echo e($product->id); ?>)" style="border-radius: 25px;" type="button"
                                class="btn btn-danger btn-sm mb-2">Remove</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>
            <div class="row col-md-6 mr-2">
                <div class="col-12 alert alert-warning">
                    <h4>You have no Products</h4>
                </div>
            </div>
        <?php endif; ?>


    </div>


    <script>
        async function deleteProd(el, id) {
            return swal({
                text: "Do you want to delete this product?",
                buttons: true
            }).then(
                (val) => {
                    if (val) {
                        makeRequest('/professional/product/delete/' + id).then(
                            (res) => {
                                console.log(res)
                                if(res.success){
                                    
                                    return swal("Product deleted").then(window.location.reload())
                                }
                            }
                        )
                    }
                }
            )

        }

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.professional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzon\resources\views/dashboard/professional/products.blade.php ENDPATH**/ ?>