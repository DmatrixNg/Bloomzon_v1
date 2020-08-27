<?php $__env->startSection('content'); ?>
<div class="col-md-10">
    <div class="row col-md-12 text-center " style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white ">
        <h1 class="text-center m-auto pt-3 pb-3 "><b>Query</b></h1>
    </div>
    
    <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($reply->replyer == 'super_admin'): ?>
            
            <div class="row col-md-12 p-3 " style="background-color: #fff !important; padding: 20px; ">
            
                <div class="col-md-4 offset-8 p-3 "  style="border: 1px solid #ddd; border-radius: 5px ">
                <small class="text-success">You</small>
                    <div class="row ">
                        <div class="col-md-6 text-left "><?php echo e($reply->created_at); ?></div>
                        <div class="col-md-6 text-right ">11:2s3AM</div>
                    </div>
                    <p><?php echo e($reply->message); ?></p>
                </div>
            </div>
            
        <?php else: ?>
            <div class="row col-md-12 p-3 " style="background-color: #fff !important; padding: 20px; ">
                <div class="col-md-4 p-3 "  style="border: 1px solid #ddd; border-radius: 5px ">
                    <div class="row ">
                        <div class="col-md-6 text-left "><?php echo e($reply->created_at); ?></div>
                        <div class="col-md-6 text-right ">11:23AM</div>
                    </div>
                    <p><?php echo e($reply->message); ?></p>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

        
    <?php if(auth()->guard('admin')->user()->role == 'super_admin'): ?>
        <form action="<?php echo e(url('admin/super_admin_reply/' . $query_id)); ?>" method="post" class="row col-md-12 text-center mb-5" style="background-color: #fff !important; padding: 10px; text-align: center !important; color:white; border-top: solid #ccc 1px; ">
        <?php echo csrf_field(); ?>
            <div class="col-12 text-center">
                <textarea class="form-control" name="message"></textarea>
            </div>
            <div class="text-center col-12 pt-3">
                <button type="submit" class="btn btn-danger btn-sm col-2" style="height: 40px; border-radius: 0px;">Reply</button>
            </div>
        </form>
    <?php else: ?>

        <form action="<?php echo e(url('admin/sub_admin_reply/' . $query_id)); ?>" method="post" class="row col-md-12 text-center mb-5" style="background-color: #fff !important; padding: 10px; text-align: center !important; color:white; border-top: solid #ccc 1px; ">
        <?php echo csrf_field(); ?>
            <div class="col-12 text-center">
                <textarea class="form-control" name="message"></textarea>
            </div>
            <div class="text-center col-12 pt-3">
                <button type="submit" class="btn btn-danger btn-sm col-2" style="height: 40px; border-radius: 0px;">Reply</button>
            </div>
        </form>
    <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_js'); ?>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->

<script>

    const base_url  = "<?php echo e(url('/')); ?>";
    const file_path = "<?php echo e(asset('/storage')); ?>";

    jQuery(document).ready(function(e){ //when the page as completed loading start getting restaurants
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
    })

    function create_category() {

        // disable the submit button so that user can not submite form more than once
        $("#save_category_btn").attr("disabled", true);

        // clear all the error in the DOM
        $('#name_error').text('');
        $('#icon_error').text('');
        $('#description_error').text('');
        $('#image_error').text('');

        // collect the data in the form
        var form = new FormData();
        form.append("name", $('#name').val());
        form.append("icon", $('#icon').val());
        form.append("description", $('#description').val());
        form.append("avatar", $('input[name=avatar]')[0].files[0]);

        // use jquery ajax to make request to the server
        $.ajax({
        "url": base_url + "/admin/store_category",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Accept": "application/json",
        },
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form,
        "dataType": "JSON",
        error: function(response_errors) {

            console.log(response_errors);

            // check if the error is form data validation error
            if(response_errors.responseJSON.message === "The given data was invalid.") {
            
            // get all the form validation errors
            const errors = response_errors.responseJSON.errors;

            // loop the all the validation errors ans show then on the form
            for (var key in errors) {
                if (errors.hasOwnProperty(key)) {
                    // show the error in the DOM
                    $("#" + key + "_error").text(errors[key])
                }
            }

            }
            
        }
        })
        .done(function (response) {
            console.log(response)
        });

        // enable the submite button
        $("#save_category_btn").attr("disabled", false);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/admin/query_replies.blade.php ENDPATH**/ ?>