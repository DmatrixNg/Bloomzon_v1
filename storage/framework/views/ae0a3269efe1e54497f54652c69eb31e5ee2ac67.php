<?php $__env->startSection('page_title'); ?>
    Professional Service's Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row col-md-12 text-center"
            style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Update Card Details</b></h1>
        </div>
        <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <div class="col-md-6 p-5 offset-3">
                <form name="accountDetailsForm" id="accountDetailsForm">
                    <div class="form-group text-center">
                        <img src="<?php echo e(asset('assets/dashboard/img/card.png')); ?>" alt="">
                    </div>
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="acc_name" style="font-size: 16px;;">Card Holder Name: </label>
                        <input type="text" value="<?php echo e($professional->account_name); ?>" id="account_name" name="account_name" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <label for="card_number" style="font-size: 16px;;">Card Number: </label>
                            <input type="text" value="<?php echo e(substr($professional->card_number,0,4)); ?>***********" name="card_number" id="card_number" class="form-control"
                                placeholder="0000 0000 0000 0000">
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-md-6 pl-0">
                            <label for="exampleFormControlInput1" style="font-size: 16px;;">Bank: </label>
                            <select name="bank_name" id=""  class="form-control">

                                <option value="zenith">Zenith Bank</option>
                                <option value="uba">UBA </option>
                                <option value="gtb">Guarantee Trust Bank</option>
                                <option value="polaris">Polaris</option>
                                <option value="wema">Wema</option>
                            </select>
                        </div>
                        <div class="col-md-6 pr-0">
                            <label for="exampleFormControlInput1" style="font-size: 16px;;">Selected Bank: </label>
                        <input type="text" value="<?php echo e($professional->bank_name); ?>" disabled class="form-control" placeholder="No bank selected">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" style="font-size: 16px;;">Account Number: </label>
                    <input type="text" class="form-control" name="account_number" value="<?php echo e($professional->account_number); ?>" placeholder="0000000000">
                    </div>
                   
                    <div class="form-group">
                        <div class="col-md-6 pl-0">
                            <label for="expires_at" style="font-size: 16px;;">Expires: </label>
                        <input type="text"  value="<?php echo e($professional->card_expires); ?>" name="card_expires" id="card_expires" class="form-control" placeholder="02/23">
                        </div>

                        <div class="col-md-6 pl-0">
                            <label for="cvv" style="font-size: 16px;;"> cvv: </label>
                            <input type="password" value="<?php echo e($professional->cvv); ?>" name="cvv" id="cvv" class="form-control" placeholder="****">
                        </div>
                    </div>
                    
                    <div id="error_list"></div>
                    <div class="form-group text-center">
                        
                        <button class="btn btn-danger btn-rounded btn-lg">Save</button>

                    </div>
                </form>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        FormHandler('accountDetailsForm', {
            requestUrl:'/professional/edit-bank-account/<?php echo e(Auth::guard(`professional`)->user()->id); ?>',
        cb: function(response){
            if(response.success){
                return swal({
                    title: 'Success!',
                    text: 'Account Details Saved successfully!',
                    icon: 'success',
                    button: 'Ok'
                }).then( () => window.location.reload() )
            }
            if(response != null)ErrorHandler(response.errors);
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

<?php echo $__env->make('layouts.dashboard.professional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/professional/accountdetails.blade.php ENDPATH**/ ?>