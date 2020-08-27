<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row mb-5 mt-5">
        <div class="col-md-12 text-center">
            <h2>Create New User</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3">
            <form onsubmit="event.preventDefault(); create_user()">

                <div class="form-group">
                    <label for="avatar" style="color: #02499B;"><strong>Upload User Picture</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="avatar" class="form-control" type="file" name="avatar" placeholder="Accessories">
                    <small class="text-danger" id="avatar_error"></small>
                </div>

                <div class="form-group">
                    <label for="name" style="color: #02499B;"><strong>Name</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="name" class="form-control" type="text" placeholder="Accessories">
                    <small class="text-danger" id="name_error"></small>
                </div>

                <div class="form-group">
                    <label for="account_type" style="color: #02499B;"><strong>Account Type</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <select style="border: 2px solid #02499B ;color: #02499B;" id="account_type" class="form-control" type="text">
                        <option value="">Choose Optiom</option>
                        <option value="manufacturer">Manufacturer</option>
                        <option value="seller">Seller</option>
                        <option value="buyer">Buyer</option>
                        <option value="networking_agent">Networking Agent</option>
                        <option value="professional_service">Professional Service</option>
                    </select>
                    <small class="text-danger" id="account_type_error"></small>
                </div>

                <div class="form-group">
                    <label for="email" style="color: #02499B;"><strong>Email</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="email" class="form-control" type="email" placeholder="email">
                    <small class="text-danger" id="email_error"></small>
                </div>

                <div class="form-group">
                    <label for="username" style="color: #02499B;"><strong>Username</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="username" class="form-control" type="text" placeholder="UserName">
                    <small class="text-danger" id="username_error"></small>
                </div>

                <div class="form-group">
                    <label for="password" style="color: #02499B;"><strong>Password</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="password" class="form-control" type="text" placeholder="Password">
                    <small class="text-danger" id="password_error"></small>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" style="color: #02499B;"><strong>Confirm Password</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="password_confirmation" class="form-control" type="text" placeholder="Password">
                </div>
                <br>
                <div class="form-group text-center">
                    <button class="btn bloomzon_btn m-auto" id="save_user_btn">CREATE</button>
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

    function create_user() {

        // disable the submit button so that user can not submite form more than once
        $("#save_user_btn").attr("disabled", true);

        // clear all the error in the DOM
        $('#avatar_error').text('');
        $('#name_error').text('');
        $('#account_type_error').text('');
        $('#username_error').text('');
        $('#email_error').text('');
        $('#password_error').text('');

        // collect the data in the form
        var form = new FormData();
        form.append("name", $('#name').val());
        form.append("account_type", $('#account_type').val());
        form.append("username", $('#username').val());
        form.append("email", $('#email').val());
        form.append("password", $('#password').val());
        form.append("password_confirmation", $('#password_confirmation').val());
        form.append("avatar", $('input[name=avatar]')[0].files[0]);

        // use jquery ajax to make request to the server
        $.ajax({
        "url": base_url + "/admin/store_user",
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
        $("#save_user_btn").attr("disabled", false);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/admin/create_user.blade.php ENDPATH**/ ?>