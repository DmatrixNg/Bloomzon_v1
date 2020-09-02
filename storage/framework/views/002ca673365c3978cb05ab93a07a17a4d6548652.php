<?php $__env->startSection('page_title'); ?>
    Seller's Dashboard - Add New Product
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
                    <input type="hidden" name="seller_id" value="<?php echo e($seller->id); ?>">
                    <?php if($seller->is_bloomzon): ?>
                    <input type="hidden" name="is_bloomzon" value="1">
                    <?php endif; ?>
                    <input type="file" name="avatar" class="d-none" id="myimg" />
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="product_name">Product Name</label>
                        </div>
                        <div class="col-md-8">
                            <input name="product_name" style="border-radius: 20px; background-color: #EFEFEF;"
                                id="product_name" class="form-control" type="text" placeholder="">
                        </div>
                    </div>
                    <input type="hidden" name="product_type"  value="seller"/>

                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="subject">Description</label>
                        </div>
                        <div class="col-md-8">
                            <textarea id="product_description" name="product_description" class="form-control" rows="5"
                                placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="">Colour</label>
                            <p>(Click the available
                                columns)</p>
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
                                <input type="number" name="stock_level" class="form-control" placeholder="10">
                            </div>
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="currency">Product Category</label>
                        </div>
                        <div class="col-md-8">
                            <select onchange="getSubCategories(this)" name="category_id"
                                style="border-radius: 20px; background-color: #EFEFEF;" id="category_id"
                                class="form-control">
                                <option>Select category</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="currency">Product Sub-Category(optional)</label>
                        </div>
                        <div class="col-md-8">
                            <select id="sub" name="sub_category_id"
                                style="border-radius: 20px; background-color: #EFEFEF;" id="category_id"
                                class="form-control">

                            </select>
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="qty">Minimum Quantity</label>
                        </div>

                        <div class="col-md-8">
                            <input style="border-radius: 20px; background-color: #EFEFEF;" id="qty" class="form-control"
                                type="number" name="minimum_order_quantity" placeholder="">
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="weight">Weight   (kg)</label>
                        </div>
                        <div class="col-md-8">
                            <input name="weight" style="border-radius: 20px; background-color: #EFEFEF;" id="weight"
                                class="form-control" type="number" placeholder="">
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="price">Price   ($)</label>
                        </div>
                        <div class="col-md-8">
                            <input style="border-radius: 20px; background-color: #EFEFEF;" id="price" class="form-control"
                                name="product_price" type="number" placeholder="">
                        </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-4" style="">
                            <label for="dis">Discount   ($)</label>
                        </div>
                        <div class="col-md-8">
                            <input style="border-radius: 20px; background-color: #EFEFEF;" id="dis" class="form-control"
                                name="product_sales_price" type="number" maxlength ="5000" placeholder="5000">
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

    const base_url  = "<?php echo e(url('/')); ?>";
    const file_path = "<?php echo e(asset('/storage')); ?>";

    jQuery(document).ready(function(e){ //when the page as completed loading start getting restaurants
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });

        get_all_category('#category_id')

    })

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
            requestUrl: '/seller/product/add',
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

<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/new/Bloomzon_v1/resources/views/dashboard/seller/addnewproduct.blade.php ENDPATH**/ ?>