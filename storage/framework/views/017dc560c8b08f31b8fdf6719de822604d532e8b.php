<?php $__env->startSection('page_title'); ?>
    Edit New Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row">

            <div class="col-md-8 offset-2">
                <div class="row m-5">
                    <div class="col-md-12" style="background-color: white; border-radius: 10px; padding: 10px;">
                        <h3 class="text-center">Product Details</h3>
                    </div>
                </div>

                <form method="post" action="<?php echo e(url('/uploadImage')); ?>" enctype="multipart/form-data" class="dropzone"
                    name="dropZone" id="dropzone">
                    <?php echo csrf_field(); ?>
                </form>

                <form name="addProductForm" id="addProductForm" enctype="multipart/form-data">
                    <input type="hidden" name="seller_id" value="<?php echo e($fast_food_grocery->id); ?>">
                    
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="product_name">Product Name</label>
                        </div>
                        <div class="col-md-8">
                            <input name="product_name" style="border-radius: 20px; background-color: #EFEFEF;"
                        id="product_name" value="<?php echo e($product->product_name); ?>" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <input type="hidden" name="featured_img_url" />

                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="subject">Description</label>
                        </div>
                        <div class="col-md-8">
                            <textarea id="product_description" name="product_description" class="form-control" rows="5"
                                placeholder=""><?php echo e($product->product_description); ?></textarea>
                        </div>
                    </div>
                    <div class="row m-5">
                       
                        <div class="col-md-4" style="">
                            <label for="">Selected Colour</label>
                            <p>(Your product colors)</p>
                        </div>
                            <?php $__currentLoopData = $product->product_color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-1" id="blue" onclick="selectColor(this,'blue')">
                                <img src="<?php echo e(asset('assets/dashboard/img/'.$color.'.png')); ?>">
                                <p><?php echo e($color); ?></p>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                
                    <div class="row m-5">
                       
                        <div class="col-md-4" style="">
                            <label for="">Change Colour</label>
                            <p>(If any color is clicked, you will loose current product colors)</p>
                        </div>
                       
                        <div class="col-md-1" id="blue" onclick="selectColor(this,'blue')">
                            <img src="<?php echo e(asset('assets/dashboard/img/blue.png')); ?>">
                            <p>Blue</p>
                        </div>
                        <div class="col-md-1" onclick="selectColor(this,'black')">
                            <img src="<?php echo e(asset('assets/dashboard/img/black.png')); ?>">
                            <p>Black</p>
                        </div>
                        <div class="col-md-1" onclick="selectColor(this,'yellow')">
                            <img src="<?php echo e(asset('assets/dashboard/img/yellow.png')); ?>">
                            <p>Yellow</p>
                        </div>
                        <div class="col-md-1" onclick="selectColor(this,'pink')">
                            <img src="<?php echo e(asset('assets/dashboard/img/pink.png')); ?>">
                            <p>Pink</p>
                        </div>
                        <div class="col-md-1" onclick="selectColor(this,'purple')">
                            <img src="<?php echo e(asset('assets/dashboard/img/purple.png')); ?>">
                            <p>Purple</p>
                        </div>
                        <div class="col-md-1" onclick="selectColor(this,'green')">
                            <img src="<?php echo e(asset('assets/dashboard/img/green.png')); ?>">
                            <p>Green</p>
                        </div>
                        <div class="col-md-1" onclick="selectColor(this,'red')">
                            <img src="<?php echo e(asset('assets/dashboard/img/red.png')); ?>">
                            <p>Red</p>
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-5" style="">
                            <div class="card" style="background-color: #02499B; padding: 5px;">
                                <h4 class="text-white text-center">Stock</h4>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="" style="padding: 5px;">
                                <input value="<?php echo e($product->stock_level); ?>" type="number" name="stock_level" class="form-control" placeholder="10">
                            </div>
                        </div>
                    </div>
                    
                        <input type="hidden" name="category_id"   style="border-radius: 20px; background-color: #EFEFEF;" id="category_id" value="0"/>
                    
                   
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="qty">Minimum Quantity</label>
                        </div>

                        <div class="col-md-8">
                        <input value="<?php echo e($product->minimum_order_quantity); ?>" style="border-radius: 20px; background-color: #EFEFEF;" id="qty" class="form-control"
                                type="number" name="minimum_order_quantity" placeholder="">
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="weight">Weight</label>
                        </div>
                        <div class="col-md-8">
                        <input name="weight" value="<?php echo e($product->weight); ?>" style="border-radius: 20px; background-color: #EFEFEF;" id="weight"
                                class="form-control" type="number" placeholder="">
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="price">Price  ($)</label>
                        </div>
                        <div class="col-md-8">
                            <input style="border-radius: 20px; background-color: #EFEFEF;" id="price" class="form-control"
                                name="product_price" value="<?php echo e($product->product_price); ?>" type="number" placeholder="">
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="dis">Discount   ($)</label>
                        </div>
                        <div class="col-md-8">
                            <input style="border-radius: 20px; background-color: #EFEFEF;" id="dis" class="form-control"
                        name="product_sales_price" value="<?php echo e($product->product_sales_price); ?>" type="number" placeholder="N2,000">
                        </div>
                    </div>
                    <ul id="error_list"></ul>
                    <div class="row text-center m-5">

                        <button class="btn m-auto"
                            style="border: 1px solid white;width: 150px; background-color:#AF2E1D; border-radius: 20px; color: white;"
                            id="checkFiles">SAVE</button>
                    </div>
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
    
        FormHandler('addProductForm', {
            requestUrl: '/fast_food_grocery/grocery/update/<?php echo e($product->id); ?>',
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
                        text: 'Product Edited successfully',
                        icon: 'success'
                    }).then(() => {
                        window.location.reload()

                    })
                }
                ErrorHandler(response.errors ?? {})
                return swal({
                    title: 'Failed!!',
                    text: 'There was an error Editing the product, please try again.',
                    icon: 'error'
                })
            }
        })

        function selectColor(event, color) {
            if (colors.indexOf(color) != -1) {
                colors = colors.filter(function(el) {
                    return color != el;
                });
                return event.className = 'col-md-1'
            }
            colors.push(color)
            console.log(colors)
            return event.className = 'col-md-1 mt-3'
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

<?php echo $__env->make('layouts.dashboard.fast_food_grocery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/fast_food_grocery/editproduct.blade.php ENDPATH**/ ?>