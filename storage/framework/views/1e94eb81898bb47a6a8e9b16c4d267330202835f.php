<?php $__env->startSection('page_title'); ?>
    Add new advert
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <a href="<?php echo e(route('professional.all-ads')); ?>" class="btn btn-primary">Go to All Ads</a>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="" style="color: #02499B; background-color: white; padding: 30px;">
                    <div class="col-md-12 pb-4 mb-4" style="border-bottom: #ddd solid 1px;">
                        <h2>Create New Advert</h2>

                    </div>

                    <form name="postAdvertForm" id="postAdvertForm">
                        <input name="user_id" id="user_id" type="hidden" value="<?php echo e($professional->id); ?>" />
                        <input name="ads_by" type="hidden" value="professional" />

                        <div class="form-group">
                            <label for="advert_position " style="font-size: 16px; color: #666; font-weight: 500;">Select
                                Page Section</label><br>
                            <select name="advert_position" id="advert_position" class="form-control">
                                <option value="">--Choose--</option>
                                <option value="Header">Header</option>
                                <option value="Body">Body</option>
                                <option value="Footer">Footer</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label for="duration "
                                style="font-size: 16px; color: #666; font-weight: 500;">Duration</label><br>
                            <select name="duration" id="ad_plan" class="form-control">
                                <option value="">--Choose--</option>
                                <option value="4">4 weeks - $36.22 - N<?php echo e($config->naira * 36.22); ?> -
                                    €<?php echo e($config->euro * 36.22); ?> - £<?php echo e($config->pound * 36.22); ?></option>
                                <option value="2">2 weeks - $23.29 - N<?php echo e($config->naira * 23.29); ?> -
                                    €<?php echo e($config->euro * 23.29); ?> - £<?php echo e($config->pound * 23.29); ?></option>
                                <option value="1">1 week - $13.123 - (N<?php echo e($config->naira * 13.123); ?>) -
                                    (€<?php echo e($config->euro * 13.123); ?>) - (£<?php echo e($config->pound * 13.123); ?>)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="amount " style="font-size: 16px; color: #666; font-weight: 500;">Amount to
                                spend</label><br>
                            <input type="hidden" value="" name="amount" id="amount"/>
                        </div>


                        <input type="hidden" name="status" value=0>

                        <div class="form-group">
                            <label for="advert_link " style="font-size: 16px; color: #666; font-weight: 500;">Advert
                                Link</label><br>
                            <input type="text" name="advert_link" id="advert_link" class="form-control">
                        </div>
                        <br>

                        <br>
                        <div class="form-group">
                            <label for="avatar" style="font-size: 16px; color: #666; font-weight: 500;">Banner</label><br>
                            <input type="file" name="avatar" id="avatar" class="form-control">
                        </div>
                        <br>


                        <div class="row mt-5">
                            <div class="col-md-4">
                                <label for="withdraw">Payment Methods</label>
                            </div>
                            <div class="col-md-8">
                                <select name="payment_method" id="payment_method" class="form-control">
                                    <option value="paypal">Paypal</option>
                                    <option value="paystack">Paystack</option>
                                </select>
                            </div>
                        </div>


                        <input id="payment_ref" type="hidden" name="payment_ref" value="">
                    <input id="payment_method" type="hidden" name="payment_method" value="">

                        <br>
                        <div id="error_list"></div>
                        <div class=" form-group text-center ">
                            
                            <button type="submit" id="submitForm" class="btn btn-danger btn-lg d-none btn-block "
                                style="vertical-align: middle; ">Submit</button>
                        </div>
                    </form>
                    <button type="button" onclick="pay_sub()" class="btn btn-danger btn-lg btn-block "
                                style="vertical-align: middle; ">Pay</button>
                    <div class="mt-3" id="paypal-button-container"></div>
                </div>
            </div>

        </div>
        <br>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>

    <!-- pk_test_09382aa6313abb13f39a4994ce801a2abfa26dd6 -->
    <!-- paystack -->
    <script src="https://js.paystack.co/v1/inline.js"></script>

    <!-- payapl -->
    <script
        src="https://www.paypal.com/sdk/js?client-id=ATzpIjJf7npIMKvyqEtunzHTwXcnJWhSdi8w7a_kjoh07S1bziigL0aI4yCvjFfDJ4ZqxPQgF1555Omp"
        data-namespace="paypal_sdk">
        // Required. Replace SB_CLIENT_ID with your sandbox client ID.

    </script>

    <script src="<?php echo e(asset('js/payment_handler.js')); ?>"></script>

    <script>
        var naira = <?php echo json_encode($config->naira, 15, 512) ?>;
        var euro = <?php echo json_encode($config->euro, 15, 512) ?>;
        var pound = <?php echo json_encode($config->pound, 15, 512) ?>;
        var usd = <?php echo json_encode($config->usd, 15, 512) ?>;
        var ad1 = <?php echo json_encode($config->ad1_week, 15, 512) ?>;
        var ad2 = <?php echo json_encode($config->ad2_week, 15, 512) ?>;
        var ad4 = <?php echo json_encode($config->ad4_week, 15, 512) ?>;

        jQuery(document).ready(function(e) { //when the page as completed loading start getting restaurants

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
        })

        function getPrice(payment_method) {
            var plan = document.getElementById('ad_plan').value
            var price = 0;
            switch (payment_method) {
                case ('paystack'):
                    if (plan == 4) {
                        price = ad4 * naira
                    } else if (plan == 2) {
                        price = ad2 * naira
                    } else if (plan == 1 ) {
                        price = ad1 * naira
                    }
                    break;
                case ('paypal'):

                    if (plan == '4') {
                        price = ad4;
                        
                    } else if (plan == '2') {
                        price = ad2;
                    } else if (plan == '1') {
                        price = ad1;
                    }
                    break;
                   
            }

            return parseFloat(price).toFixed(2)
        }

         function pay_sub() {
                 var payment_method = $('#payment_method').val();
                var payment_handler = new PaymentHandler();
                var price =  getPrice(payment_method);
                var shopper_name = <?php echo json_encode($professional->full_name, 15, 512) ?>;
                var shopper_email = <?php echo json_encode($professional->email, 15, 512) ?>;       
          console.log(payment_method)
          console.log(price)

        if (payment_method == 'paypal') {
            $('#paypal-button-container').empty()
            payment_handler.pay_with_paypal({
                el: '#paypal-button-container',
                amount: price,
                success: function(details) {

                    payment_callback(price, details.id,'paypal')

                    console.log(details)
                }
            })
        } 
        else if (payment_method == 'paystack') {
            payment_handler.pay_with_paystack({

                key: 'pk_test_09382aa6313abb13f39a4994ce801a2abfa26dd6',
                amount: price,
                curency: 'NGN',
                first_name: shopper_name,
                last_name: shopper_name,
                reference: makeid(10),
                email: shopper_email,
                onClose: function() {
                    alert('you clossed the payment frame')
                },
                success: function(details) {
                    payment_callback(price, details.reference,'paystack')
                    console.log(details.reference)
                }

            });
        }

        }



        function payment_callback(amount, reference,payment_method) {
            document.getElementById("amount").value = amount;
            document.getElementById("payment_ref").value = reference;
            document.getElementById("payment_method").value = payment_method;
            
            document.getElementById('submitForm').click();
        }

        function makeid(length) {
            var result = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }

        FormHandler('postAdvertForm', {
            requestUrl: '/professional/post-ads',
            requestType: 'POST',
            cb: response => {

                if (response.success) {
                    return swal({
                        title: 'Success!!',
                        text: 'Advert created successfully',
                        icon: 'success'
                    }).then(() => {
                        window.location.reload()
                    })
                }
                ErrorHandler(response.errors ?? {})
                return swal({
                    title: 'Failed!!',
                    text: 'Error occurred creating advert, please try again.',
                    icon: 'error'
                })
            }
        });

    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.professional', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/professional/post-new-ads.blade.php ENDPATH**/ ?>