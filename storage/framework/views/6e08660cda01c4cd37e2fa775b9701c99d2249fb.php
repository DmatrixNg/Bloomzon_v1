<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
        <h1 class="text-center m-auto pt-3 pb-3 "><b>All Category</b></h1>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="panel panel-white">
        <div class="panel-body">
            <div class="table-responsive">
                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                    <thead style="background-color: #AF2E1D; color: white;">
                    <tr>
                        <th>Categories</th>
                        <th>Sub - Category</th>
                        <th>No. of Product</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td rowspan="<?php echo e($category->subcategories->count() + 1); ?>"><?php echo e($category->name); ?></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($subcategory->name); ?></td>
                                <td>1000</td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_js'); ?>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->

<script>

    const base_url  = "<?php echo e(url('/')); ?>";
    const file_path = "<?php echo e(asset('/storage')); ?>";

    jQuery(document).ready(function(e){ //when the page as completed loading start getting restaurants
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
    })

    function create_category() {

        // disable the submit button so that user can not submite form more than once
        $("#save_category_btn").attr("disabled", true);

        // clear all the error in the DOM
        $('#name_error').text('');
        $('#icon_error').text('');
        $('#description_error').text('');
        $('#image_error').text('');

        // collect the data in the form
        var form = new FormData();
        form.append("name", $('#name').val());
        form.append("icon", $('#icon').val());
        form.append("description", $('#description').val());
        form.append("avatar", $('input[name=avatar]')[0].files[0]);

        // use jquery ajax to make request to the server
        $.ajax({
        "url": base_url + "/admin/store_category",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Accept": "application/json",
        },
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form,
        "dataType": "JSON",
        error: function(response_errors) {

            console.log(response_errors);

            // check if the error is form data validation error
            if(response_errors.responseJSON.message === "The given data was invalid.") {
            
            // get all the form validation errors
            const errors = response_errors.responseJSON.errors;

            // loop the all the validation errors ans show then on the form
            for (var key in errors) {
                if (errors.hasOwnProperty(key)) {
                    // show the error in the DOM
                    $("#" + key + "_error").text(errors[key])
                }
            }

            }
            
        }
        })
        .done(function (response) {
            console.log(response)
        });

        // enable the submite button
        $("#save_category_btn").attr("disabled", false);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/admin/all_categories.blade.php ENDPATH**/ ?>