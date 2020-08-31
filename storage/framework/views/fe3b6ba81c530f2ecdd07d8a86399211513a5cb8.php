
<?php $__env->startSection('page_title'); ?>
     Payment Account Details
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row col-md-12 text-center"
            style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Update Account Details</b></h1>
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
                            <label for="exampleFormControlInput1" style="font-size: 16px;;">Account Number: </label>
                            <input type="text" class="form-control" id="account_name" name="account_number" value="<?php echo e($seller->account_number); ?>"
                            placeholder="0000000000">
                        </div>
                    </div>

                    <div class="pl-0">
                        <label for="exampleFormControlInput1" style="font-size: 16px;;">Bank: </label>
                        <select name="bank_name" class="form-control " onchange="checkBank(this)" id="bank">
                            <option selected>Choose</option>
                            
                        </select>
                        <input class="d-none" placeholder="Enter bank name" name="other_bank" id="other_bank" />
                    </div>
                    <br>

                    <div class="form-group text-center">
                        <div id="error_list"></div>
                        <button class="btn btn-danger btn-rounded btn-lg" onclick="verify_account()">Verify Account</button>
                    </div>

                    <div class="form-group">
                        
                        
                        <div id="verify_details" class="">
                            <div class="form-group">
                                <label for="account_name" style="font-size: 16px;;">Account Name</label>
                                <input type="text" id="verified_account_name" class="form-control" name="account_name" value="<?php echo e($seller->account_name); ?>"
                                placeholder="Account Name" disabled>
                            </div>
                        </div>
                        <div id="verify_details" class="">
                            <div class="form-group">
                                <label for="account_number" style="font-size: 16px;;">Account Number</label>
                                <input type="text" id="verified_account_number" class="form-control" name="account_number" value="<?php echo e($seller->account_number); ?>"
                                placeholder="Account Number" disabled>
                            </div>
                        </div>
                        <div id="verify_details" class="">
                            <div class="form-group">
                                <label for="bank_name" style="font-size: 16px;;">Bank</label>
                                <input type="text" id="verified_bank_name" class="form-control" name="bank_name" value="<?php echo e($seller->bank_name); ?>"
                                placeholder="Bank Name" disabled>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="form-group text-center">
                        <div id="error_list"></div>
                        <button class="btn btn-primary btn-rounded btn-lg" onclick="verify_account()">Save</button>
                    </div>


                    <div class="form-group">
                        <h4 style="color: green;"><strong>For users outside Africa</strong></h4>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" style="font-size: 16px;;">Paypal ID: </label>
                            <input type="" class="form-control" name="account_number" value="<?php echo e($seller->account_number); ?>"
                            placeholder="">
                            <div class="form-group text-center">
                                <div id="error_list"></div>
                                <br>
                                <button class="btn btn-danger btn-rounded btn-lg">Save</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        function checkBank(el) {
            if (el.value == 'other_bank') {
                return document.getElementById('other_bank').className = "form-control"
            }
            return document.getElementById('other_bank').className = "form-control d-none"
        }

        FormHandler('accountDetailsForm', {
            requestUrl: '/seller/edit-bank/<?php echo e(Auth::guard(`seller`)->user()->id); ?>',
            cb: function(response) {
                if (response.success) {
                    return swal({
                        title: 'Success!',
                        text: 'Account Details Saved successfully!',
                        icon: 'success',
                        button: 'Ok'
                    }).then(() => window.location.reload())
                }

                ErrorHandler(response.errors ?? {})
                return swal({
                    title: 'Error!',
                    text: 'We had error updating your profile',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })


        list_banks()
        function list_banks() {

            $('#payment_modal').modal('show');
            $.ajax({
            url: "https://api.paystack.co/bank",
            type: "GET",
            headers: {
                "Authorization": "Bearer " + "<?php echo e(env('PAYSTACK_SECRET_KEY')); ?>"
            },
            data: {
                country: "nigeria",
            },
            error: function(response_error) {
                console.log(response_error);
            }
            })
            .done(function (response) {

                $('#bank').append(new Option('bank'))

                if(response['status']) {

                    // loop through each state and append it to the output selector's options
                    $.each(response['data'], function( key, value ) {
                        
                        $('#bank').prepend(new Option(value['name'], value['name'] + '--' + value['code']));

                    });
                } else {
                    $('#bank').append(new Option('No bank to select, please refresh the page'))
                }
                
            });

        }


        function verify_account() {

            // $('#payment_spinner').removeClass('d-none');
            // $('#payment_form').addClass('d-none');
            // $('#pay_btn').addClass('d-none');
            // $('#payment_warning').addClass('d-none');


            $('#payment_modal').modal('show');
            $.ajax({
            url: "https://api.paystack.co/bank/resolve",
            type: "GET",
            headers: {
                "Authorization": "Bearer " + "<?php echo e(env('PAYSTACK_SECRET_KEY')); ?>"
            },
            data: {
                account_number: '0177344478',
                bank_code: '058'
            },
            error: function(response_error) {
                console.log(response_error);
                // $('#payment_spinner').addClass('d-none');
                // $('#payment_warning').removeClass('d-none');
                // $('#pay_btn').addClass('d-none');
                // $('#payment_form').addClass('d-none');
            }
            })
            .done(function (response) {
                if(response['status'] == true) {

                    // $('#account_name').val(response['data']['account_name']);
                    // $('#account_number').val(response['data']['account_number']);
                    // $('#bank_name').val(bank_name);
                    // $('#bank_code').val(bank_code);
                    // $('#amount').val(amount);

                    // $('#payment_spinner').addClass('d-none');
                    // $('#payment_form').removeClass('d-none');
                    // $('#pay_btn').removeClass('d-none');
                    // $('#payment_warning').addClass('d-none');
                    
                    

                    // transfer_recipient(response['data']['account_name'], response['data']['account_number'], bank_code)
                    
                } else {
                    $('#payment_spinner').addClass('d-none');
                    $('#payment_warning').removeClass('d-none');
                    $('#pay_btn').addClass('d-none');
                    $('#payment_form').addClass('d-none');
                }
            });


        }

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/seller/account-details.blade.php ENDPATH**/ ?>