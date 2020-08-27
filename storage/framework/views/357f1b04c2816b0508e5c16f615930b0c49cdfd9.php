<?php $__env->startSection('page_title'); ?>
Create Sellers
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-10">
        <div class=" text-center "
            style="padding: 10px; text-align: center !important; border-bottom: 1px solid #f2f2f2;">
            <h1 class="text-center m-auto pt-3 pb-3 "><b>Create Seller Account</b></h1>
        </div>
        <div class="row">
            <div class="col-md-8 offset-2 card mt-5 mb-5" style="padding: 20px;">
                <form name="createSellerForm">

                    <div class="text-center align-items-center">
                        <img height="120" alt="Image preview..." class="rounded" id="output" src="#">
                        <p></p>
                        <p style="color: #02499B;">
                            Upload Picture
                            <input type="file" accept="image/*" onchange="loadFile(event)" id="profile_pic_url"
                                name="avatar">
                        </p>
                    </div>

                    <input type="hidden" name="networking_agent_id" value="<?php echo e($networking_agent->id); ?>" />
                    <div class="form-group">
                        <label for="account-number">Seller Name</label>
                        <input id="account-number" name="full_name" class="form-control" type="text"
                            placeholder="Enter Name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="service">Service Description</label>
                        <input id="service" name="service_description" class="form-control" type="text" placeholder="">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="shop_address">Shop Address</label>
                        <input id="shop_address" name="shop_address" class="form-control" type="text" placeholder="">
                    </div>
                    <br>
                    <input type="hidden" name="agent_id" value="<?php echo e(Auth::user()->id); ?>">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" class="form-control" type="email" placeholder="Enter a valid email">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="phone_number">Phone</label>
                        <input id="phone_number" name="phone_number" class="form-control" type="text"
                            placeholder="Enter a valid phone">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" name="password" class="form-control" type="password"
                            placeholder="Create a unique password">
                    </div>
                    <input type="hidden" name="account_type" value="buyer" />
                    <br>
                    <div class="form-group">
                        <label for="stage">Stage</label><br>
                    <input type="text" value="Stage_<?php echo e($stage); ?>" name="stage" disabled/>
                    </div>
                    <br><br>

                    <button class="btn"
                        style="border: 1px solid white; margin-left: 400px; width: 150px; background-color:#AF2E1D; border-radius: 20px; color: white;">SUBMIT</button>

                </form>
                <div id="error_list"></div>
                <br><br>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        const loadFile = function(event) {
            const output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };


        const options = {
            requestUrl: '/networking_agent/save-seller',
            cb: response => {
                if (response.success) {
                    return swal({
                        title: 'Success!',
                        text: 'User created successfully!',
                        icon: 'success',
                        button: 'Ok'
                    })
                }
                if (response != null) ErrorHandler(response.errors);
                console.log(response);
                return swal({
                    title: 'Error!',
                    text: 'Error occurred creating User, please try again',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        };

        FormHandler('createSellerForm', options)

    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.networking_agent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/networking_agent/createseller.blade.php ENDPATH**/ ?>