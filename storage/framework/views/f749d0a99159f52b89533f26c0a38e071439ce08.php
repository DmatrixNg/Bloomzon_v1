

<?php $__env->startSection('content'); ?>
<div class="col-md-9">
    <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
        <h1 class="text-center m-auto pt-3 pb-3"><b>Write Admin</b></h1>
    </div>
    <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
        <div class="col-md-6 card p-5 offset-3">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-size: 16px;;">Subject: </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Subject: " style="height: 40px; border-radius: 0;">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-size: 16px;;">Request Type: </label>
                    <select name="" id="" class="form-control" style="height: 40px; border-radius: 0;">
                        <option value="Delivery">Delivery</option>
                        <option value="Service">Service</option>
                        <option value="Fund">Fund</option>
                        <option value="Request">Request</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-size: 16px;;">Email address</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" style="border-radius: 0;" placeholder="Type your message: "></textarea>
                </div>

                <div class="form-group pull-right">
                    <a href="account-details" class="btn btn-primary">Send</a>
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
            console.log(response)
        });

        // enable the submite button
        $("#save_category_btn").attr("disabled", false);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/admin/message_create.blade.php ENDPATH**/ ?>