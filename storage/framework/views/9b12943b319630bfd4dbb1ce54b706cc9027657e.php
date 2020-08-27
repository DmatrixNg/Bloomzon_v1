<?php $__env->startSection('page_title'); ?>
   Networking Agent's Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row" style="padding: 40px;">
            <div class="col-md-8 offset-2 text-center mt-2 mb-5">
                <img src="<?php echo e(asset($user_metas->User[0]->profile_pic_url)); ?>" height="140" width="140" style="border-radius: 50%">
                <h5 class="text-center "><?php echo e($user_metas->User[0]->name); ?></h5>

            </div>

            <div class="col-md-8 offset-2">
                <form name="agentProfileUpdate" id="agentProfileUpdate">

                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left" style="font-size: 18px;">Edit Profile image</div>
                        <input class="col-md-10" type="file" name="profile_pic_url" style="border-radius:20px; font-size: 12px; height: 30px; background-color: #535057" class="btn">
                    </div>

                    <input type="hidden" name="_method" value="put">
                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left" style="font-size: 18px;">Name</div>
                        <input style="background-color:#1A1A1A; height: 40px;" id="name" value="<?php echo e($user_metas->User[0]->name); ?>" type="text" name="name" placeholder="Anabel Olivia" class="col-md-10 text-white">
                    </div>

                    <div class="form-inline mb-5">
                        <div class="text-left col-md-12"  style="font-size: 18px;" for="phone">Phone</div>
                        <input style="background-color:#1A1A1A; height:40px;" id="phone" value="<?php echo e($user_metas->User[0]->phone); ?>" type="text" name="phone" placeholder="" class="col-md-10 text-white">
                    </div>

                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left " style="font-size: 18px;">Email</div>
                        <input style="background-color:#1A1A1A; height: 40px;"  id="email" type="email" value="<?php echo e($user_metas->User[0]->email); ?>" name="email" placeholder="" class="col-md-10 text-white">
                    </div>

                    <div class="form-inline mb-5">
                        <div class="col-md-12 text-left "  style="font-size: 18px;">Billing Address</div>
                        <input style="background-color:#1A1A1A; height: 40px;" id="billing_address" value="<?php echo e($user_metas->User[0]->billing_address); ?>" type="text" name="billing_address" placeholder="" class="col-md-10 text-white">
                    </div>

                    <div class="form-group mt-4 mb-4 text-center">
                        <button class="btn" style="border: 1px solid white; width: 150px; background-color:#AF2E1D; border-radius: 20px; color: white;">SAVE</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        FormHandler('agentProfileUpdate', {
            requestUrl: '/api/v1/crud/users/<?php echo e(Auth::user()->id); ?>',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!!',
                        text:  'Profile Updated successfully',
                        icon: 'success'
                    })
                }
                console.log(response);
                return swal({
                    title: 'Failed!!',
                    text:   'There was an error updating your profile, please try again.',
                    icon:   'error'
                })
            }
        })
    </script>

<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.dashboard.networking_agent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/networking_agent/editprofile.blade.php ENDPATH**/ ?>