<?php $__env->startSection('page_title'); ?>
    Buyer's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #02499B !important; padding-top: 70px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b><i class="fas fa-user-lock pb-4" style="color: #fff; font-size: 120px;"></i><br>LOGIN &AMP; SECURITY</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #02499B !important; padding-left: 20px; padding-right: 20px; padding-top: 20px; padding-bottom: 160px;">
                    <div class="col-md-6 card p-5 offset-3">
                        <form name="updateProfile">





                            <div class="form-group">
                                <label for="password" style="font-size: 16px;;">CHANGE PASSWORD: </label>
                                <input type="password" name="password" class="form-control" id="password" style="height: 40px; border-radius: 0;" placeholder="type here...">
                            </div>

                            <div class="form-group">
                                <label for="cpassword" style="font-size: 16px;;">CONFIRM PASSWORD: </label>
                                <input type="password" name="cpassword" class="form-control" id="cpassword" style="height: 40px; border-radius: 0;" placeholder="type here...">
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-lg">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        const form =  document.forms['updateProfile'];
        form.addEventListener('submit', async e => {

            e.preventDefault();
            const elements = [...form.elements];

            elements[0].value === elements[1].value

                ? await axios.post('/buyer/edit-profile/<?php echo e($buyer->id); ?>', {_method: 'put', password: elements[0].value}).then( res => {
                    if(res.data.success){
                        swal({
                            title: 'Success!',
                            text: 'Password change successful',
                            icon: 'success'
                        }).then(
                            window.location.href = 'buyer/login'
                        )
                    }
                    console.log(res)
                })

                : swal({
                title: 'Password Mismatch Error',
                text: 'Passwords do not match, please try again',
                icon: 'error'
            })

        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.buyer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/buyer/edit-login-details.blade.php ENDPATH**/ ?>