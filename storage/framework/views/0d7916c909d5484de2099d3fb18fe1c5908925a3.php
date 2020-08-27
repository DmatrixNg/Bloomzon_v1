<?php $__env->startSection('page_title'); ?>
    Fast Food & Groceries Dashboard
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row col-md-12 text-center"
            style="background-color: #02499B !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Create Menu</b></h1>
        </div>
        <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <div class="col-md-6 card p-5 offset-3">
                <form method="post" action="<?php echo e(url('/uploadImage')); ?>" enctype="multipart/form-data" class="dropzone"
                    name="dropZone" id="dropzone">
                    <?php echo csrf_field(); ?>
                </form>
                <form name="createMenuForm">
                <input type="hidden" name="seller_id" value="<?php echo e($ffg->id); ?>"/>
                <input type="hidden" name="product_type" value="fast_food_grocery"/>
                    <div class="form-group mt-5">
                        <label for="name" style="font-size: 16px;;">Food name: </label>
                        <input type="text" id="name" name="product_name" class="form-control"
                            style="height: 40px; border-radius: 0;">
                    </div>
                    <div class="form-group mt-5">
                        <select name="category_id" id="" class="form-control" style="height: 40px; border-radius: 0;">
                            <option value="">Select Catalogue</option>
                            <?php $__currentLoopData = $food_catalogues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalogue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($catalogue->id); ?>"><?php echo e($catalogue->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group mt-5">
                        <label for="product_description" style="font-size: 16px;;">Description: </label>
                        <textarea id="product_description" name="product_description" class="form-control"
                            style="height: 40px; border-radius: 0; "></textarea>
                    </div>
                    <div class="form-inline mt-5 mb-4">
                        <label for="amount" style="font-size: 16px;" class="mr-5">Amount: </label>
                        
                        
                        <input type="text" id="product_price" name="product_price" class="form-control"
                            style="height: 40px; border-radius: 0; ">
                    </div>
                    <div class="form-inline mt-5 mb-4">
                        <label for="product_sales_price" style="font-size: 16px;" class="mr-5">Discount: </label>
                        <input type="text" name="product_sales_price" id="discount" class="form-control" style="height: 40px; border-radius: 0; ">
                    </div>
                    <ul id="error_list"></ul>
                    <div class="form-group mt-5 text-center">
                        <button class="btn btn-danger btn-lg">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        var count = 0;
        var sto = []; //stores arrays of image file names
        var colors = [];


        //dropzone handles multiple images ad store in file then returns the name
        Dropzone.options.dropzone = {
            maxFilesize: 5,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            removedfile: async function(file) {
                var name = file.upload.filename;
                sto = sto.filter(function(el) {
                    return el !== name;
                });

                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            timeout: 5000,
            success: function(file, response) {
                sto.push(response.data);
                console.log(response.data)
            },
            error: function(file, response) {
                console.log(response)
                return false;

            }
        }



        FormHandler('createMenuForm', {
            requestUrl: '/fast_food_grocery/store-food-menu',
            requestType: 'POST',
            props: {
                imgs: sto, //
                colors: colors
            },
            //list files uploaded
            cb: response => { // your call back function to be implemented after db communnication
                if (response.success) {
                    return swal({
                        title: 'Success!!',
                        text: 'Product Added successfully',
                        icon: 'success'
                    }).then(() => {
                        window.location.reload()

                    })
                }
                ErrorHandler(response.errors ?? {})
                return swal({
                    title: 'Failed!!',
                    text: 'There was an error Adding the product, please try again.',
                    icon: 'error'
                })
            }
        })

    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.fast_food_grocery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/fast_food_grocery/add-food-menu.blade.php ENDPATH**/ ?>