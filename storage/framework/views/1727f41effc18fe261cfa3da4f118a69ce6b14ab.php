<?php $__env->startSection('page_title'); ?>
    Edit Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10" style="background-color: #000 !important;">
        <div class="row col-md-12 text-center"
            style="padding: 10px; text-align: center !important; color:white; border-bottom: 1px solid #333; ">
            <h1 class="text-center m-auto pt-3 pb-3 "><b>Edit Contact</b></h1>
        </div>
        <div class="row mb-3 " style="background-color: #000 !important; padding: 20px; ">
            <div class="col-md-8 p-5 offset-2 ">

                <form name="shopperProfileUpdateForm">
                    <div class="form-group text-center">
                        <img src="<?php echo e(asset('storage/assets/shopper/avatar/' . $shopper->avatar)); ?>" class="img img-circle "
                            width="120 " height="120 "><br>
                        <h3 class="text-white"><?php echo e($shopper->full_name); ?></h3>
                    </div>


                    <div class="form-group ">
                        <label for="avatar" style="font-size: 16px; color: #fff; font-weight: 500; ">Select Profile
                            Pic</label><br>
                        <input type="file" name="avatar" class="form-control col-md-9 " id="name " style="height: 40px; ">
                    </div>

                    <input type="hidden" value="put" name="_method">

                    <div class="form-group ">
                        <label for="name " style="font-size: 16px; color: #fff; font-weight: 500; ">Full Name</label><br>
                        <input type="text" name="full_name" class="form-control col-md-9 " id="name "
                            value="<?php echo e($shopper->full_name); ?>" style="height: 40px; ">
                    </div>


                    <div class="form-group ">
                        <label for="phone " style="font-size: 16px; color: #fff; font-weight: 500; ">Phone
                            number</label><br>
                        <input type="text" name="phone_number" class="form-control col-md-9 " id="phone_number"
                            value="<?php echo e($shopper->phone_number); ?>" style="height: 40px; ">
                    </div>
                    <div class="form-group ">
                        <label for="email" style="font-size: 16px; color: #fff; font-weight: 500; ">Email</label><br>
                        <input type="email" disabled name="email" class="form-control col-md-9 " id="email"
                            value="<?php echo e($shopper->email); ?>" style="height: 40px; ">
                    </div>
                    <div class="form-group ">
                        <label for="address" style="font-size: 16px; clor: #fff; font-weight: 500; ">Street Address</label><br>
                        <input type="text" name="street_address" class="form-control col-md-9 " id="street_address"
                            value="<?php echo e($shopper->street_address); ?>" style="height: 40px; ">
                    </div>
                    <div class="form-group ">
                        <label for="shop_address" style="font-size: 16px; color: #fff; font-weight: 500; ">Shop Address</label><br>
                        <input type="text" name="shop_address" class="form-control col-md-9 " id="shop_address"
                            value="<?php echo e($shopper->shop_address); ?>" style="height: 40px; ">
                    </div>

                    <div class="form-group mt-5">
                        <ul id="error_list"></ul>
                        <button class="btn btn-danger btn-block btn-lg col-md-9">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        var id = <?php echo json_encode($shopper->id, 15, 512) ?>;
        FormHandler('shopperProfileUpdateForm', {
            requestUrl: '/shopper/edit-profile/' + id,
            cb: response => {
                if (response.success) {
                    return swal({
                        title: 'Success!',
                        text: 'Profile updated successfully',
                        icon: 'success',
                    }).then(() => {

                        window.location.reload()
                    })
                }
                ErrorHandler(response.errors ?? {})
                return swal({
                    title: 'Error!',
                    text: response.message,
                    icon: 'error',
                    button: 'Try Again'
                });
            }
        })

    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.shopper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/shopper/edit-contact.blade.php ENDPATH**/ ?>