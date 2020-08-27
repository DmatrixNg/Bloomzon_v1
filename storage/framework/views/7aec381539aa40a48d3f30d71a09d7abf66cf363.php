

<?php $__env->startSection('page_title', 'Buyer\'s Dashboard'); ?>

    <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="row mb-3 " style=" padding: 100px; ">
                <div class="col-md-6 p-5 offset-3">
                    <div class="card shadow">
                        <div class="card-body"> 
                    <form name="updateProfile" id="updateProfile">
                        <div class="form-group text-center ">
                        <img src="<?php echo e(asset('storage/buyer/'.$buyer->avatar)); ?>" class="img img-circle"  width="100 " height="100 ">
                        </div>

                        <div class="form-group ">
                            <label for="profile_pic_url" style="font-size: 16px; color: #fff; font-weight: 500; ">Set Profile Picture</label><br>
                            <input type="file" class="form-control" value="" name="avatar" id="profile_pic_url"  style="height: 40px; ">
                        </div>
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group ">
                            <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Phone number</label><br>
                        <input type="email " class="form-control" value="<?php echo e(old('phone_number')??$buyer->phone_number); ?>" name="phone_number" id="phone_number" placeholder="0000000000 " style="height: 40px; ">
                        </div>
                        <div class="form-group ">
                            <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Email</label><br>
                        <input type="email " class="form-control "  value="<?php echo e($buyer->email); ?>"  name="email" id="email " placeholder="Olivia@gmail.com " style="height: 40px; ">
                        </div>
                        <div class="form-group ">
                            <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Billing Address</label><br>
                        <input type="text" class="form-control " value="<?php echo e($buyer->billing_address); ?>"  id="billing_address" name="billing_address" placeholder="Abuja " style="height: 40px; ">
                        </div>
                        <div class="form-group ">
                            <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Security Pin</label><br>
                        <input type="password" name="security_pin" id="pin"  class="form-control"  value="<?php echo e($buyer->security_pin); ?>" style=" height: 40px; ">
                        </div>
                        <div class="form-group ">
                            <button class="btn btn-danger btn-lg" type="submit">Save</button>
                        </div>
                    </form>
                        </div>
                </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
    FormHandler('updateProfile', {
        requestUrl:'/buyer/edit-profile/<?php echo e($buyer->id); ?>',
        cb: function(response){
            if(response.success){
                return swal({
                    title: 'Success!',
                    text: 'Account Profile Updated successfully!',
                    icon: 'success',
                    button: 'Ok'
                }).then( () => window.location.reload() )
            }


            return swal({
                title: 'Error!',
                text: 'We had error updating your profile',
                icon: 'error',
                button: 'Try Again'
            })
        }
    })
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/buyer/edit-profile.blade.php ENDPATH**/ ?>