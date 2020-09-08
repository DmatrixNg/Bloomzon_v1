<div class="row mx-2">
    <div class="col-4 p-0"><a href="<?php echo e(url(app()->getLocale().'/product-details/' . base64_encode($product->id))); ?>"
            class="btn btn-success"><i class="fa fa-eye"></i></a></div>

            <div class="col-4 p-0"  onclick="addCart(<?php echo e($id); ?>)"><a href="javascript:void(0);" class="btn btn-success"><i
                class="fa fa-shopping-cart"></i></a></div>
            <div class="col-4 p-0" onclick="addFavorite(<?php echo e($id); ?>)"><a href="javascript:void(0);" class="btn btn-success"><i
                class="ti-heart"></i></a>
    </div>
</div>

<?php $__env->startPush('product-buttons'); ?>
    <script>

        var buyer_id = null;
        //check if user is authenticated then get the ID
        <?php if(Auth::guard('buyer')->user()): ?>
        buyer_id = <?php echo json_encode(Auth::guard('buyer')->user()->id, 15, 512) ?>
        <?php endif; ?>
        //handles the add to cart button
       async function addCart(id) {
            try {
                console.log("pressed")
                const response = await (await fetch('/cart/add/' + id + '/1',
                {
                    method: 'GET',
                    headers: {'Accept': 'application/json'}
                })).json();
                console.log(response);
                if (response.success) {
                    return swal({
                        'title': 'Cart Updated',
                        'text': 'Product Added to cart successfully',
                        'icon': 'success'
                    }).then(() => {
                        window.location.reload();

                    })
                }
            } catch (e) {
                console.log(e)
            }
        }
        //handles the add to favorite
         async function addFavorite(id) {
            if(buyer_id == null){
                return swal('','You must be logged in to add to favorite')
            }
            try {

                const response = await makeRequest('buyer/favorite/add',{
                    buyer_id:buyer_id,
                    product_id:id
                });

                console.log(response);
                if (response.success) {
                    return swal({
                        'title': 'Favorite',
                        'text': 'Product Added to favorite successfully',
                        'icon': 'success'
                    }).then(() => {
                        // window.location.reload();

                    })
                }
            } catch (e) {
                console.log(e)
            }
        }
    </script>

<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/components/product-buttons.blade.php ENDPATH**/ ?>