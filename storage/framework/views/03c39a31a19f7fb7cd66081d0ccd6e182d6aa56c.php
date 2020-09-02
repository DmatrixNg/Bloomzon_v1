<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row align-items-center mt-5 pt-5">
        <div class="col-lg-5 col-sm-5 col-5 ">
            <a href="/" class="brand-wrap">
            </a>
            <!-- brand-wrap.// -->
        </div>
        <div class="col-lg-4 col-sm-12 d-flex order-3 p-2">
            <h4><strong>Create New Category</strong></h4>
        </div>
        <!-- col.// -->
        <div class="col-lg-3 col-sm-9 col-10 order-2 order-lg-3">
            <div class="widgets-wrap d-flex justify-content-end">


                <!-- widget  dropdown.// -->
                <div class="widget-header ml-3">
                    <a href="allcategory.html" class="btn" style="background-color: #fff; color: 02499B; width: 170px; border: solid 2px #02499B; border-radius: 20px;">View All</a>

                </div>
            </div>
            <!-- widgets-wrap.// -->
        </div>
        <!-- col.// -->
    </div>
    <div class="row mt-5">
        
        <div class="col-md-6 offset-3">

            <form name="createCategory">
                <div class="form-group">
                    <label for="name" style="color: #02499B;"><strong>Category Name</strong><abbr title="required field">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" name="name" id="name" class="form-control" type="text" placeholder="Accessories">
                    <small class="text-danger" id="name_error"></small>
                </div>

                <div class="form-group d-none">
                    <label for="icon" style="color: #02499B;"><strong>Icon</strong></label>
                    <input name="icon" style="border: 2px solid #02499B ;color: #02499B;" id="icon" class="form-control" type="text" placeholder="">
                    <small class="text-danger" id="icon_error"></small>
                </div>

                <div class="form-group">
                    <label for="description" style="color: #02499B;"><strong>Description</strong></label>
                    <textarea name="description" style="border: 2px solid #02499B ;color: #02499B;" id="description" class="form-control" type="text" placeholder=""></textarea>
                    <small class="text-danger" id="description_error"></small>
                </div>

                <div class="form-group">
                    <label for="avatar" style="color: #02499B;"><strong>Image</strong></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" name="avatar" id="avatar" name="avatar" class="form-control" type="file" placeholder="">
                    <small class="text-danger" id="avatar_error"></small>
                </div>
                
                <div class="form-group text-center mt-5">
                    <ul id="error_list"></ul>
                    <button class="btn bloomzon_btn" id="save_category_btn">SAVE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
<script>
    FormHandler('createCategory', {
         requestUrl:'/admin/store_category',
     cb: function(response){
         if(response.success){
             return swal({
                 title: 'Success!',
                 text: 'Account Details Saved successfully!',
                 icon: 'success',
                 button: 'Ok'
             }).then( () => window.location.reload() )
         }
         ErrorHandler(response.errors??{})
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


<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/create_category.blade.php ENDPATH**/ ?>