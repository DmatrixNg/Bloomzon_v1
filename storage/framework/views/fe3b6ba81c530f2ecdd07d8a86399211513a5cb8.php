
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
                
                <div class="form-group text-center">
                    <img src="<?php echo e(asset('assets/dashboard/img/card.png')); ?>" alt="">
                </div>
                
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlInput1" style="font-size: 16px;;">Account Number: </label>
                        <input type="text" class="form-control" id="input_acc_num" name="account_number" value="<?php echo e($seller->account_number); ?>"
                        placeholder="0000000000">
                    </div>
                </div>

                <div class="pl-0">
                    <label for="exampleFormControlInput1" style="font-size: 16px;;">Bank: </label>
                    <select name="bank_name" class="form-control " onchange="checkBank(this)" id="input_bank_code">
                        <option selected>Choose</option>
                    </select>
                    <input class="d-none" placeholder="Enter bank name" name="other_bank" id="other_bank" />
                </div>
                <br>
                <p id="error_alert" class="text-danger"></p>

                <div class="form-group text-center">
                    <div id="error_list"></div>
                    <button class="btn btn-danger btn-rounded btn-lg" id="verify_btn" onclick="verify_account()">Verify Accountt</button>
                </div>

                <form action="<?php echo e(url('seller/update_account_details')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        
                        <div id="verify_details" class="">
                            <div class="form-group">
                                <label for="account_name" style="font-size: 16px;;">Account Name</label>
                                <input type="text" id="account_name" class="form-control disabled" name="account_name" value="<?php echo e($seller->account_name); ?>"
                                placeholder="Account Name" readonly>
                            </div>
                        </div>

                        <div id="verify_details" class="">
                            <div class="form-group">
                                <label for="account_number" style="font-size: 16px;;">Account Number</label>
                                <input type="text" id="account_number" class="form-control" name="account_number" value="<?php echo e($seller->account_number); ?>"
                                placeholder="Account Number" readonly>
                            </div>
                        </div>

                        <div id="verify_details" class="">
                            <div class="form-group">
                                <label for="bank_name" style="font-size: 16px;;">Bank</label>
                                <input type="text" id="bank_name" class="form-control" name="bank_name" value="<?php echo e($seller->bank_name); ?>"
                                placeholder="Bank Name" readonly>
                            </div>
                        </div>

                        <div id="verify_details" class="">
                            <div class="form-group">
                                <label for="bank_code" style="font-size: 16px;;">Bank Code</label>
                                <input type="text" id="bank_code" class="form-control" name="bank_code" value="<?php echo e($seller->bank_code); ?>"
                                placeholder="Bank Code" readonly>
                            </div>
                        </div>
                        
                    </div>

                    <div class="form-group text-center">
                        <div id="error_list"></div>
                        <button class="btn btn-primary btn-rounded btn-lg" onclick="verify_account()">Save</button>
                    </div>

                </form>
                    
                    


                <form action="" method="">
                    <div class="form-group">
                        <h2 style="color: green; text-align: center;"><strong>For sellers outside Africa</strong></h2>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" style="font-size: 16px;;">Paypal Email: </label>
                            <input type="" class="form-control" name="account_number" value="<?php echo e($seller->paypal_email); ?>"
                            placeholder="">
                            <div class="form-group text-center">
                                <div id="error_list"></div>
                                <br>
                                <button class="btn btn-primary btn-rounded btn-lg">Save</button>

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

        // FormHandler('accountDetailsForm', {
        //     requestUrl: '/seller/edit-bank/<?php echo e(Auth::guard(`seller`)->user()->id); ?>',
        //     cb: function(response) {
        //         if (response.success) {
        //             return swal({
        //                 title: 'Success!',
        //                 text: 'Account Details Saved successfully!',
        //                 icon: 'success',
        //                 button: 'Ok'
        //             }).then(() => window.location.reload())
        //         }

        //         ErrorHandler(response.errors ?? {})
        //         return swal({
        //             title: 'Error!',
        //             text: 'We had error updating your profile',
        //             icon: 'error',
        //             button: 'Try Again'
        //         })
        //     }
        // })


        list_banks()
        function list_banks() {

            console.log('dsdsds')

            // $('#payment_modal').modal('show');
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
                        
                        $('#input_bank_code').prepend(new Option(value['name'], value['code']));

                    });
                } else {
                    $('#bank').append(new Option('No bank to select, please refresh the page'))
                }
                
            });

        }


        function verify_account() {

            $('#error_alert').text('')
            $('#verify_btn').attr('disabled', true)

            $.ajax({
            url: "https://api.paystack.co/bank/resolve",
            type: "GET",
            headers: {
                "Authorization": "Bearer " + "<?php echo e(env('PAYSTACK_SECRET_KEY')); ?>"
            },
            data: {
                account_number: $('#input_acc_num').val(),
                bank_code: $('#input_bank_code').val(),
            },
            error: function(response_error) {
                $('#verify_btn').attr('disabled', false)
                console.log(response_error);
                if(response_error['responseJSON']['message'] != undefined) {
                    $('#error_alert').text(response_error['responseJSON']['message'])
                }
                
            }
            })
            .done(function (response) {
                $('#verify_btn').attr('disabled', false)
                console.log(response)

                $('#account_name').val(response['data']['account_name'])
                $('#account_number').val(response['data']['account_number'])
                $('#bank_name').val( $("#input_bank_code option:selected").html() )
                $('#bank_code').val($('#input_bank_code').val())

            });

            $('#verify_btn').attr('disabled', false)

        }

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/seller/account-details.blade.php ENDPATH**/ ?>