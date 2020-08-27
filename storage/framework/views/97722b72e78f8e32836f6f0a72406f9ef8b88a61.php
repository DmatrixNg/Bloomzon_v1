<?php $__env->startSection('page_title'); ?>
    professional's Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row col-md-12 text-center"
            style="padding: 10px; text-align: center !important; border-bottom: #f2f2f2 solid 1px;">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Add Product</b></h1>
        </div>
        <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <div class="col-md-8 p-5 offset-2">
                <label for="featured_image_url" style="font-size: 16px;;"> Featured Image : </label>
                <form method="post" action="<?php echo e(url('/uploadImage')); ?>" enctype="multipart/form-data" class="dropzone"
                    name="dropZone" id="dropzone">
                    <?php echo csrf_field(); ?>
                </form>
                <form name="addProductForm">
                    <input type="hidden" name="seller_id" value="<?php echo e($professional->id); ?>">
                    <input type="hidden" name="product_type" value="professional"/>
                    

                    <div class="form-group">
                        <label for="product_name" style="font-size: 16px;;">Product Name: </label>
                        <input type="text" name="product_name" class="form-control" id="product_name"
                            placeholder="Product Name" style="height: 40px; border-radius: 0;">
                    </div>
                    <div class="form-group">
                        <label for="currency" style="font-size: 16px;;">Product Category</label>

                        <select onchange="getSubCategories(this)" name="category_id" id="category_id" class="form-control">
                            <option>Select category</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      
                    </div>
                    <div class="form-group">
                        <label for="currency">Product Sub-Category</label>
                        <select id="sub" name="sub_category_id" id="category_id" class="form-control"> </select>
                    </div>
                    <div class="form-group">
                        <label for="product_description" style="font-size: 16px;;">Product Description</label>
                        <textarea name="product_description" id="product_description" cols="30" rows="10"
                            class="form-control" style="border-radius: 0;" placeholder=""></textarea>
                    </div>
                   

                    <div class="form-inline">
                        <label class="mr-5" for="product_price" style="font-size: 16px;">Amount ($): </label>
                        <input type="number" name="product_price" class="form-control" id="product_price" placeholder=""
                            style=" height: 40px; border-radius: 0; ">
                    </div>
                    <div class="form-inline">
                        <label class="mr-5" for="product_sales_price" style="font-size: 16px;">Actual Amount ($): </label>
                        <input type="number" name="product_sales_price" class="form-control mt-4" id="product_price" placeholder=""
                            style=" height: 40px; border-radius: 0; ">
                    </div>
                    <div id="error_list"></div>
                    <div class="form-group text-center mt-5">
                        <button class="btn btn-danger m-auto">Add Product</button>
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

        FormHandler('addProductForm', {
            requestUrl: '/professional/product/add',
            requestType: 'POST',
            props: {
                imgs: sto,//
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

        function getSubCategories(el) {
            makeRequest('/product/getSubCategories/' + el.value).then((e) => {

                var categories = e.data
                var subEl = document.getElementById('sub');
                subEl.options.length = 0;

                categories.forEach(function(el) {
                    var op = document.createElement('option')
                    op.appendChild(document.createTextNode(el.name))
                    op.value = el.id;
                    subEl.appendChild(op);
                })
                var op = document.createElement('option')
                    op.appendChild(document.createTextNode('Others'))
                    op.value = 0;
                    subEl.appendChild(op);
            })
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.professional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/professional/add-product.blade.php ENDPATH**/ ?>