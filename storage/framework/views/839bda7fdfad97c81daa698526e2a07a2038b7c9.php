<?php $__env->startSection('page_title'); ?>
    Sub Admin Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="row mb-5 mt-5">
                <div class="col-md-12 text-center">
                    <h2>Create New User</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card shadow">
                        <div class="card-body">
                    <form name="createBrandForm" id="createBrandForm">

                        <div class="form-group text-center">
                            <img src="<?php echo e(asset('assets/dashboard/img/brand_lg.png')); ?>" alt="" height="105" width="105">
                        </div>
                        <div class="form-group">
                            <label for="name" style="color: #02499B;"><strong>Upload Brand Picture</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" name="avatar" id="profile_pic_url" class="form-control" type="file" placeholder="Input Brand Image">
                        </div>
                        <div class="form-group">
                            <label for="name" style="color: #02499B;"><strong>Brand Name</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" id="brand_name" name="brand_name" class="form-control" type="text" placeholder="Input brand name">
                        </div>
                        <div class="form-group mb-5 mt-5">
                            <label for="category" style="color: #02499B;"><strong>Brand Description</strong></label>
                            <textarea style="border: 2px solid #02499B ;color: #02499B;" name="brand_description" id="brand_description" class="form-control" type="text" placeholder="Short description of brand"></textarea>
                        </div>
                        <br>
                        <div id="error_list"></div>
                        <div class="form-group text-center">
                            <button class="btn bloomzon_btn m-auto">CREATE</button>
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
        FormHandler('createBrandForm', {
            requestUrl:'/admin/store-brand',
            requestType: 'POST',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!',
                        text: 'Brand created successfully!',
                        icon: 'success',
                        button: 'Ok'
                    }).then((e)=>{

                        window.location.reload()
                    }
                    )
                }
                ErrorHandler(response.errors ?? {})
                console.log(response);
                return swal({
                    title: 'Error!',
                    text: 'Error occurred creating brand',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/admin/createnewbrand.blade.php ENDPATH**/ ?>