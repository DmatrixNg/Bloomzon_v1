


<?php $__env->startSection('page_title'); ?>
    professional's Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>How User Sees You</b></h1>
                    <a href="<?php echo e(route('professional.add-shop-gallery')); ?>" style="border: 1px #fff solid; color: #fff; padding: 10px; border-radius: 20px; height: 40px; margin-top: 10px;">Add To Shop Gallery</a>
                </div>

                <div class="row col-md-12 mr-2 pt-5" style="background-color: #fff">
                    <form class="col-md-6 offset-3" name="updateProfile">
                        <ul class="list-group" style="border: none !important;">
                            <li class="list-group-item" style="border: none !important;">

                                <label>SHOP NAME</label>
                                <input disabled class="form-control" name="company_name" value="<?php echo e($professional->company_name); ?>" style="font-size: 14px; background-color:#fff; color: #000;" />
                                <input type="hidden" name="_method" value="put" />
                            </li>
                            <li class="list-group-item" style="border: none !important;">
                                <label>LOCATION</label>
                                <input disabled name="phone" class="form-control" value="<?php echo e($professional->shop_address); ?>" style="font-size: 14px; background-color:#fff; color: #000;" />
                            </li>
                            <li class="list-group-item" style="border: none !important;">
                                <label>SERVICE</label>
                                <textarea disabled name="factory_description" class="form-control" style="font-size: 14px; background-color:#fff; color: #000;"><?php echo e($professional->service_description); ?></textarea>
                            </li>
                            <li class="list-group-item" style="border: none !important;">
                                <label>CONTACT</label>
                                <input disabled class="form-control" name="phone" value="<?php echo e($professional->phone_number); ?>" style="font-size: 14px; background-color:#fff; color: #000;" />
                            </li>
                            <div id="error_list"></div>
                            <div class="m-5 text-center">
                            <a href="<?php echo e(route('professional.edit-profile')); ?>" class="btn btn-danger btn-pill">EDIT</a>
                            </div>
                        </ul>
                    </form>
                    <div class="col-md-12">
                        <div class="row mt-5 mb-5" style="background-color: #02499B;">
                            <h1 style=" color: #fff; margin: 0px auto;" class="p-3">
                                <strong>Shop Picture</strong>
                            </h1>
                        </div>
                        <div class="row mb-5">
                            <?php if(count($shop_galleries)): ?>
                            <?php $__currentLoopData = $shop_galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3">
                                <div class="card text-center" style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                                    <?php if(pathinfo(asset('storage/assets/gallery/avatar/'.$gallery->avatar), PATHINFO_EXTENSION) == 'mp4' || pathinfo(asset('storage/assets/gallery/avatar/'.$gallery->avatar), PATHINFO_EXTENSION) == 'avi'): ?>
                                        <video width="320" height="240" controls>
                                            <source src="<?php echo e(asset('storage/assets/gallery/avatar/'.$gallery->avatar)); ?>" type="video/mp4">
                                            <source src="<?php echo e(asset('storage/assets/gallery/avatar/'.$gallery->avatar)); ?>" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('storage/assets/gallery/avatar/'.$gallery->avatar)); ?>" alt=" " height="200">

                                    <?php endif; ?>
                                    
                                    

                                    
                                <h4><?php echo e($gallery->title); ?></h4>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <div class="col-md-3">
                                <div class="alert alert-warning">
                                    Your have added no gallery
                                </div>
                            </div>
                            <?php endif; ?>
                            
                            
                        </div>
                    </div>
                </div>

            </div>
        <?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        FormHandler('updateProfile', {
            requestUrl: '/professional/edit-profile/<?php echo e(Auth::guard(`professional`)->user()->id); ?>',
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


<?php echo $__env->make('layouts.dashboard.professional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzon\resources\views/dashboard/professional/shop-gallery.blade.php ENDPATH**/ ?>