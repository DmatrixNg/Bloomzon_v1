

<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row align-items-center mt-5 pt-5">
        <div class="col-lg-5 col-sm-5 col-5 ">
            <a href="/" class="brand-wrap">
            </a>
            <!-- brand-wrap.// -->
        </div>
        <div class="col-lg-4 col-sm-12 d-flex order-3 p-2">
            <h4><strong>Create New Category</strong></h4>
        </div>
        <!-- col.// -->
        <div class="col-lg-3 col-sm-9 col-10 order-2 order-lg-3">
            <div class="widgets-wrap d-flex justify-content-end">


                <!-- widget  dropdown.// -->
                <div class="widget-header ml-3">
                    <a href="allcategory.html" class="btn" style="background-color: #fff; color: 02499B; width: 170px; border: solid 2px #02499B; border-radius: 20px;">View All</a>

                </div>
            </div>
            <!-- widgets-wrap.// -->
        </div>
        <!-- col.// -->
    </div>
    <div class="row mt-5">
        
        <div class="col-md-6 offset-3">

            <form onsubmit="event.preventDefault(); create_category()">
                <div class="form-group">
                    <label for="name" style="color: #02499B;"><strong>Category Name</strong><abbr title="required field">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="name" class="form-control" type="text" placeholder="Accessories">
                    <small class="text-danger" id="name_error"></small>
                </div>

                <div class="form-group">
                    <label for="icon" style="color: #02499B;"><strong>Icon</strong></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="icon" class="form-control" type="text" placeholder="">
                    <small class="text-danger" id="icon_error"></small>
                </div>

                <div class="form-group">
                    <label for="description" style="color: #02499B;"><strong>Description</strong></label>
                    <textarea style="border: 2px solid #02499B ;color: #02499B;" id="description" class="form-control" type="text" placeholder=""></textarea>
                    <small class="text-danger" id="description_error"></small>
                </div>

                <div class="form-group">
                    <label for="avatar" style="color: #02499B;"><strong>Image</strong></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="avatar" name="avatar" class="form-control" type="file" placeholder="">
                    <small class="text-danger" id="avatar_error"></small>
                </div>
                
                <div class="form-group text-center mt-5">
                    <button class="btn bloomzon_btn" id="save_category_btn">SAVE</button>
                </div>
            </form>
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
            return swal({
                title: 'Success!',
                text: 'Category has been created',
                icon: 'success',
                button: 'OK'
            })
        });

        // enable the submite button
        $("#save_category_btn").attr("disabled", false);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/admin/create_category.blade.php ENDPATH**/ ?>