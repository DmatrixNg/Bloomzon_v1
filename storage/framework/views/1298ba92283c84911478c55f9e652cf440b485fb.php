<?php $__env->startSection('page_title'); ?>
    Fast Food & Groceries Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #02499B !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Create Catalogue</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-6 card p-5 offset-3">
                        <form name="foodCatalogue">

                            <div class="form-group">
                                <label for="avatar" style="font-size: 16px;;"> Catalogue Image: </label>
                                <input type="file" name="avatar" class="form-control" id="avatar" style="height: 40px; border-radius: 0;">
                            </div>

                            <div class="form-group">
                                <label for="name" style="font-size: 16px;;"> Catalogue Name: </label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="" style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group">
                                <label for="description" style="font-size: 16px;;">Description: </label>
                                <textarea name="description" id="description" cols="20" rows="7" class="form-control" style="border-radius: 0;" placeholder=""></textarea>
                            </div>
                            <div class="form-group">
                                <ul id="error_list"></ul>
                                <button class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        <?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        FormHandler('foodCatalogue', {
            requestUrl: '/admin/store-catalogue',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!!',
                        text:  'Food Catalogue created successfully',
                        icon: 'success'
                    }).then((e)=>window.location.reload())
                }
                ErrorHandler(response.errors ?? {})
                return swal({
                    title: 'Failed!!',
                    text:   'There was an error creating the catalogue, please try again.',
                    icon:   'error'
                }).then(
                    
                )
            }
        })
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/dashboard/admin/create-catalogue.blade.php ENDPATH**/ ?>