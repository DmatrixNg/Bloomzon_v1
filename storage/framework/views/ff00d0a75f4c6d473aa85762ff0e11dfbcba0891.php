<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row align-items-center mt-5 pt-5">
        <div class="col-lg-5 col-sm-5 col-5 ">
            <a href="/" class="brand-wrap">
            </a>
            <!-- brand-wrap.// -->
        </div>
        <div class="col-lg-4 col-sm-12 d-flex order-3 p-2">
            <h4><strong>Create Subcategory</strong></h4>
        </div>
    </div>
    <div class="row mt-5">
        
        <div class="col-md-6 offset-3">

            <form onsubmit="event.preventDefault(); create_category()">
                <div class="form-group">
                    <label for="category_id" style="color: #02499B;"><strong>Select Category</strong><abbr title="required field">*</abbr></label>
                    <select style="border: 2px solid #02499B ;color: #02499B;" id="category_id" class="form-control" type="text" placeholder="Accessories">
                        <option value="">Select Option</option>
                    </select>
                    <small class="text-danger" id="category_id_error"></small>
                </div>

                <div class="form-group">
                    <label for="name" style="color: #02499B;"><strong>Name</strong><abbr title="required field">*</abbr></label>
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
                    <button class="btn bloomzon_btn" id="save_subcategory_btn">SAVE</button>
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

        get_all_category('#category_id')

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

    function get_all_category(output_id, selected_id = '') {

        $(output_id).empty();

        $.ajax({
        url: base_url + "/get_categories",
        type: "GET",
        error: function(response_errors) {
            console.log(response_errors);
        }
        })
        .done(function (response) {
        
            $(output_id).append('<option value="">Choose Option</option>');

            // loop through each state and append it to the output selector's options
            $.each(response, function( key, value ) {
                
                if(selected_id == value['id']) {// select an option
                    $(output_id).append(new Option(value['name'], value['id'], true, true));
                } else {
                    $(output_id).append(new Option(value['name'], value['id']));
                }
                
            });

        });

    }

    function create_category() {

        // disable the submit button so that user can not submite form more than once
        $("#save_subcategory_btn").attr("disabled", true);

        // clear all the error in the DOM
        $('#category_id_error').text('');
        $('#name_error').text('');
        $('#icon_error').text('');
        $('#description_error').text('');
        $('#image_error').text('');

        // collect the data in the form
        var form = new FormData();
        form.append("category_id", $('#category_id').val());
        form.append("name", $('#name').val());
        form.append("icon", $('#icon').val());
        form.append("description", $('#description').val());
        form.append("avatar", $('input[name=avatar]')[0].files[0]);

        // use jquery ajax to make request to the server
        $.ajax({
            "url": base_url + "/admin/store_subcategory",
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

            return swal({
                title: 'Success!',
                text: 'Subcategory has been created',
                icon: 'success',
                button: 'OK'
            })

        });

        // enable the submite button
        $("#save_subcategory_btn").attr("disabled", false);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/admin/create_subcategory.blade.php ENDPATH**/ ?>