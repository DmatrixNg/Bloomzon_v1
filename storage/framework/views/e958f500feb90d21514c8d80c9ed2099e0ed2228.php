        

<?php $__env->startSection('page_title'); ?>
    Professional's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Add To Your Gallery</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-8 p-5 offset-2">
                        <form name="addGallery">
                            <input type="hidden" name="_method" value="POST"/>
                            <input type="hidden" value="<?php echo e($professional->id); ?>" name="professional_id"/>
                            <div class="form-group mt-5">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Choose Image: </label>
                                <input type="file" class="form-control" id="avatar" placeholder="Subject: " name="avatar" style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group mt-5">
                                <label for="title" style="font-size: 16px;;">Title: </label>
                                <input type="text" class="form-control" id="title" placeholder="Subject: " name="title" style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group mt-5">
                                <label for="description" style="font-size: 16px;;">Description: </label>
                                <textarea class="form-control" name="description" rows="5" ></textarea>
                            </div>
                            <div id="error_list"></div>
                            <div class="form-group pull-right mt-5">
                                <button href="account-details " class="btn btn-danger ">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        <?php $__env->stopSection(); ?>
        <?php $__env->startPush('scripts'); ?>
        <script>
            FormHandler('addGallery', {
                requestUrl: '/professional/shop-gallery/add-shop',
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
                    if(response != null)ErrorHandler(response.errors);
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
<?php echo $__env->make('layouts.dashboard.professional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzon\resources\views/dashboard/professional/add-shop-gallery.blade.php ENDPATH**/ ?>