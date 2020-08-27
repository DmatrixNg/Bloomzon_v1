<?php $__env->startSection('page_title'); ?>
    Seller's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="row mt-5 mb-5" style="border-bottom: solid 1px #f2f2f2;">
                    <div class="col-md-9">
                        <h1 class="pt-4">My Product Catalogue</h1>
                    </div>
                    <div class="col-md-3 mt-4 text-right">
                        <a href="<?php echo e(route('seller.add-new-product')); ?>" class="btn btn-secondary">Add New Product</a>
                    </div>
                </div>

            <div class="row">

                <?php if(count($products)): ?>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6">
                    <div class="row" style="border: 1px solid #f2f2f2; border-radius: 5px; margin: 10px;">
                    <div class="col-md-3 m-auto">
                        <img src="<?php echo e(asset( 'storage/assets/product/avatars/' . $product->avatars[0])); ?>" width="100" height="auto">
                    </div>

                    <div class="col-md-4 text-center p-4">
                        <p><b>Product Name:</b>  <?php echo e($product->product_name); ?></p>
                        <p><b>Product Price:</b>  <?php echo e($product->product_price); ?></p>
                        <p><b>Stock Level :</b>  <?php echo e($product->stock_level); ?> </p>

                    </div>
                    <div class="col-md-4 text-right m-auto">
                        <p style="color: grey">13/04/2020</p>
                    <a href="<?php echo e(url('product-details/'.base64_encode($product->id))); ?>" target="_blank" class="btn" style="background-color: #AF2E1D; border-radius: 5px; width: 130px; color: white;margin-top:2px">View Details</a>
                    <a href="<?php echo e(route('seller.edit-product',$product->id)); ?>" target="_blank" class="btn" style="background-color: #AF2E1D; border-radius: 5px; width: 130px; color: white; margin-top:2px">Edit</a>
                        <a  class="btn" style="background-color: #AF2E1D; border-radius: 5px; width: 130px; color: white; margin-top:2px" onclick="deleteProd(this,<?php echo e($product->id); ?>)">Delete</a>


                    </div>
                    </div>
                </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <h3> You have not added any product</h3>
                <?php endif; ?>

            </div>


        </div>
        <?php $__env->stopSection(); ?>

        <?php $__env->startPush('scripts'); ?>
        <script>
        async function deleteProd(el, id) {
            return swal({
                text: "Do you want to delete this product?",
                buttons: true
            }).then(
                (val) => {
                    if (val) {
                        makeRequest('/seller/product/delete/' + id).then(
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
        <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/dashboard/seller/allproducts.blade.php ENDPATH**/ ?>