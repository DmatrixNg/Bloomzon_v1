<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row mb-5 mt-5">
        <div class="col-md-12 text-center">
            <h2>Create New User</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3">
            <form name="createUser">

                <div class="form-group">
                    <label for="avatar" style="color: #02499B;"><strong>Upload User Picture</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="avatar"  name="avatar" class="form-control" type="file" name="avatar" placeholder="Accessories">
                    <small class="text-danger" id="avatar_error"></small>
                </div>

                <div class="form-group">
                    <label for="full_name" style="color: #02499B;"><strong>Full Name</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" value="" name="full_name" id="full_name" class="form-control" type="text" placeholder="Full Name">
                    <small class="text-danger" id="full_name_error"></small>
                </div>

                <div class="form-group">
                    <label for="account_type" style="color: #02499B;"><strong>Account Type</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <select style="border: 2px solid #02499B ;color: #02499B;" id="account_type" name="account_type" class="form-control" type="text">
                        <option value="">Choose Optiom</option>
                        <option value="manufacturer">Manufacturer</option>
                        <option value="bloomzon_seller">Bloomzon Seller</option>
                        <option value="sub_admin">SubAdmin</option>
                        <option value="fast_food_grocery">Fast Food Grocery</option>
                        <option value="buyer">Buyer</option>
                        <option value="seller">Seller</option>
                        <option value="shopper">Shopper</option>
                        <option value="networking_agent">Networking Agent</option>
                        <option value="professional">Professional Service</option>
                    </select>
                    <small class="text-danger" id="account_type_error"></small>
                </div>

                <div class="form-group">
                    <label for="email" style="color: #02499B;"><strong>Email</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="email" name="email" class="form-control" type="email" placeholder="email">
                    <small class="text-danger" id="email_error"></small>
                </div>

                <div class="form-group">
                    <label for="username" style="color: #02499B;"><strong>Username</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="username" name="username" class="form-control" type="text" placeholder="UserName">
                    <small class="text-danger" id="username_error"></small>
                </div>

                <div class="form-group">
                    <label for="password" style="color: #02499B;"><strong>Password</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="password" name="password" class="form-control" type="password" placeholder="Password">
                    <small class="text-danger" id="password_error"></small>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" style="color: #02499B;"><strong>Confirm Password</strong><abbr title="required field" style="color: red;">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" name="password_confirmation" class="form-control" type="password" placeholder="Password">
                </div>
                <br>
                <div class="form-group text-center">
                    <ul id="error_list"></ul>
                    <button class="btn bloomzon_btn m-auto" id="save_user">CREATE</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
       FormHandler('createUser', {
            requestUrl:'/admin/store_user',
        cb: function(response){
            if(response.success){
                return swal({
                    title: 'Success!',
                    text: 'User Created successfully!',
                    icon: 'success',
                    button: 'Ok'
                }).then( () => window.location.reload() )
            }
            ErrorHandler(response.errors??{})
            return swal({
                title: 'Error!',
                text: 'We had error creating your user',
                icon: 'error',
                button: 'Try Again'
            })
        }
        })    
</script>    
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/admin/create_user.blade.php ENDPATH**/ ?>