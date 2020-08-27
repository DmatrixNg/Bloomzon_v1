<?php $__env->startSection('page_title'); ?>
    CheckOut
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="shopping-cart-steps">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-steps">
                        <ul class="clearfix">
                            <li>
                                <div class="inner">
                                    <span class="step">01</span> <span class="inner-step">Shopping Cart</span>
                                </div>
                            </li>
                            <li class="active">
                                <div class="inner">
                                    <span class="step">02</span> <span class="inner-step">Checkout </span>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <span class="step">03</span> <span class="inner-step">Order Completed </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="checkout-area mt-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php if(!$buyer && $cart_items): ?>
                        <p>Returning customer? <a href="/buyer/login">Click here</a> to login</p>
                    <?php endif; ?>
                </div>
            </div>

            <form name="billingForm" id="billingForm">
                <div class="row mt-10">
                    <div class="col-lg-8">

                        <div class="billing-form">
                            <h4>Billing Details</h4>
                            <div class="row">
                                <input type="hidden" id="total_amount" name="total_amount" value="<?php echo e($total); ?>" />
                                <input type="hidden" name="buyer_id" value="<?php echo e($buyer ? $buyer->id : ''); ?>" />
                                <input type="hidden" name="naira_price" value="<?php echo e($naira_price); ?>" id="naira_price" />
                                <input type="hidden" name="ref" value="<?php echo e($ref); ?>" id="ref" />
                                <input type="hidden" name="payment_status" value="0" id="payment_status" />
                                <input type="hidden" name="payment_gateway" value="" id="payment_gateway" />
                                <div class="col-lg-3 align-items-center">
                                    <label for="country">COUNTRY *</label>
                                </div>
                                <div class="col-lg-9">

                                    <input name="country" id="country" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label >FULL NAME *</label>
                                </div>
                                <div class="col-lg-9">
                                    <input id="full_name" value="<?php echo e($buyer ? $buyer->full_name : ''); ?>" name="full_name"
                                        type="text" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <label>ADDRESS *</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="billing_address" id="billing_address" placeholder="Billing Address">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>TOWN / CITY *</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="city" value="<?php echo e($buyer ? $buyer->city : ''); ?>" name="city">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>COUNTRY / STATES</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="state" value="<?php echo e($buyer ? $buyer->state : ''); ?>" name="state">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>POSTCODE / ZIP *</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="zip_code" value="<?php echo e($buyer ? $buyer->zip_code : ''); ?>" name="zip_code">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <label>EMAIL ADDRESS *</label>
                                </div>
                                <div class="col-lg-9">
                                    <?php if($buyer): ?>
                                        <input disabled id="email" value="<?php echo e($buyer ? $buyer->email : ''); ?>" value=""
                                            name="email" type="text">
                                    <?php else: ?>
                                        <input id="email" value="" value="" name="email" type="text">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>PHONE *</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" value="<?php echo e($buyer? $buyer->phone : ''); ?>" name="phone_number" id="phone_number">
                                </div>
                            </div>
                            <?php if(!$buyer): ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>Create an account by entering the information below. </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>ACCOUNT PASSWORD *</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="password" value="" name="password">
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="p-0">ORDER NOTES</label>
                                </div>
                                <div class="col-lg-9">
                                    <textarea class="p-0 form-control" name="order_notes"></textarea>
                                </div>
                            </div>
                            <div id="error_list"></div>
                        </div>


                    </div>
                    <?php if(count($cart_items)): ?>
                        <div class="col-lg-4">
                            <div class="sidebar-checkout">
                                <div class="cart-box cart-coupon fix">
                                    <h5>Promotional Code</h5>
                                    <div class="cart-box-inner">
                                        <p>Enter your coupon code if you have one</p>
                                        <input type="text" name="coupon" value="">
                                        <p></p>
                                        <a href="#" class="btn-common">Apply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="order-details mt-30">
                                <h4>Your Order</h4>
                                <div class="order-details-inner">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>PRODUCT</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <tr>
                                                    <td><?php echo e($cart_item->product_name); ?></td>
                                                    <td><strong>$<?php echo e(number_format($cart_item->total)); ?></strong></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <td>Cart Subtotal</td>
                                                <td><strong>$<?php echo e(number_format($total)); ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping and Handling</td>
                                                <td>Free Shipping</td>
                                            </tr>
                                            <tr>
                                                <td>ORDER TOTAL</td>
                                                <td><strong id="totalDisplay">$<?php echo e(number_format($total)); ?></strong></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <select class="form-control" onchange="showConversion(this)">
                                        <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($curr); ?>"><?php echo e($curr); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <input type="hidden" id="status" name="status" value="new" class="d-none">
                                    <div class="payment-gateways mt-30">
                                        <div id="payment_gateways">
                                            <div class="single-payment-gateway">
                                                <input type="radio" name="ptype" value="paystack"  id="paystack">
                                                <img src="<?php echo e(asset('assets/frontend/img/paystack.png')); ?>" width="50"
                                                    height="50" />
                                                <label for="paystack">Paystack</label>
                                            </div>
                                            <div class="single-payment-gateway">
                                                <input type="radio" name="ptype" value="paypal"  id="paypal">
                                                <img src="<?php echo e(asset('assets/frontend/img/paypal.png')); ?>" width="50"
                                                    height="50" />
                                                <label for="paypal">PayPal</label>
                                            </div>
                                            <div class="single-payment-gateway">
                                                <input type="radio" name="ptype"  value="pay_on_delivery" id="pay_on_delivery">
                                                <img src="<?php echo e(asset('assets/frontend/img/COD.jpg')); ?>" width="50"
                                                    height="50" />
                                                <label for="pay_on_delivery">Pay on delivery</label>
                                            </div>
                                            <div id="payMsg"></div>
                                        </div>
                                    </div>
                                    <div class="place-order text-center mt-60">

                                        <button class="btn btn-common btn-outline-danger btn-lg " href="" type="button"
                                            id="place_order">Place
                                            Order</button>
                                        <button class="btn btn-outline-warning btn-lg btn-common d-none" href="" type="submit"
                                            id="pay">
                                            Pay on delivery</button>
                                        <button onclick="saveOrder()" class="btn btn-common btn-outline-success btn-lg"
                                            type="button" class="btn-common width-180" id="place_order">
                                            Save for later</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php else: ?>
                        <h3> Your Cart is empty, <a href="shop">start shopping</a></h3>
                    <?php endif; ?>
                </div>
            </form>

            <div id="btn_pp"></div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script  src="https://www.paypal.com/sdk/js?client-id=ATzpIjJf7npIMKvyqEtunzHTwXcnJWhSdi8w7a_kjoh07S1bziigL0aI4yCvjFfDJ4ZqxPQgF1555Omp"></script>
    <script src="<?php echo e(asset('js/payment_handler.js')); ?>"></script>
    
    <script>
        var payment = new PaymentHandler();
        var place_order = document.getElementById('place_order');
        var products = <?php echo json_encode($products, 15, 512) ?>;

        var url = '';
//WHEN PLACE ORDER BUTTON IS PRESSED
        place_order.onclick = function() {
            if(validateInputs() =='valid'){ //Validate to check all  inout are correct
                    var names = document.getElementById('full_name',2).value.split(' ');
                    var first_name = names[0]
                    var last_name = names[1]
                    var price = document.getElementById('naira_price').value;
                    var usd_price = document.getElementById('total_amount').value;
                    var ref = document.getElementById('ref');
                    var email = document.getElementById('email').value;
                    var payment_stat = document.getElementById('payment_status');
                    var pgateway = document.getElementById('payment_gateway');


            //When PAYSTACK IS SELECTED
            if (document.getElementById('paystack').checked) {
                // ALL INPUT IS VALIDATED BEFORE PROCEEDING TO PAYMENT 
                
                return payment.pay_with_paystack({
                key: 'pk_test_09382aa6313abb13f39a4994ce801a2abfa26dd6',
                amount: price,
                curency: 'NGN',
                first_name: first_name,
                last_name: last_name,
                reference: ref.value,
                email: email,
                onClose: function() {
                    swal("Your payment could not be processed")
                },
                success: function(res) {
                 ref.value = res.reference
                payment_stat.value = 1;
                pgateway.value = 'paystack'
                 document.getElementById('pay').click();
                }
            })

        }//HANDLES PAYPAL PAYMENT METHOD 
        else if (document.getElementById('paypal').checked) {
           return payment.pay_with_paypal({
               el:"#btn_pp",
                 amount: usd_price,
                success: function(res) {
                    ref.value = res.id
                    payment_stat.value = 1;
                    pgateway.value = 'paypal'
                    document.getElementById('pay').click();

    }
});
            }
            //HADLES PAY ON DELIVERY METHOD 
            else if(document.getElementById('pay_on_delivery').checked){
                payment_stat.value = 0;
                pgateway.value = 'pay_on_delivery'
                document.getElementById('pay').click();
            }
            else {
                return swal("Please select payment method")
            }
        }}


        //VALIDATE EACH USER INPUT NOT NULL
        function validateInputs(){
            var names = document.getElementById('full_name').value;
            var li = names.split(' ');
            if(names == '' || li.length < 2){
                return swal("Please input name correctly")
            }
            if(document.getElementById('country').value == ''){
                return swal("Please enter country")
            }
            if( document.getElementById('billing_address').value == ''){
                return swal("Please enter billing address")
            }
                if(document.getElementById('state').value == ''){
                    return swal("Please enter state")
                } 
                if(document.getElementById('city').value == ''){
                    return swal("please enter city")
                } 
                if(document.getElementById('email').value == ''){
                    return swal("Please eter email address")
                } 
                if(document.getElementById('phone_number').value == ''){
                    return swal("Please enter phone number")
                } 
                if(document.getElementById('zip_code').value == ''){
                return swal("Please zip code correctly");
            }
            return 'valid';
        }
//HANDLE FOMR SUBMITION
        FormHandler('billingForm', {
            requestUrl: '/order/create',
            requestType: 'POST',
            props: {
                products: products
            },
            cb: response => {
                if (response.success) {
                    return swal({
                        title: 'Success!!',
                        text: 'Order placed successfully',
                        icon: 'success'
                    }).then(
                        makeRequest('/cart/clear', {}).then(
                            () => {
                                window.location.href = '/'

                            }
                        )
                    )
                }
                ErrorHandler(response.errors ?? {})
                return swal({
                    title: 'Failed!!',
                    text: 'Error occurred creating order, please try again.',
                    icon: 'error'
                })
            }
        })

//SAVE ORDER FOR LATER
        function saveOrder() {
            return swal({
                title: "save order for later",
                text: "Do you want to save order for later",
                buttons: true,
            }).then((willSave) => {
                if (willSave) {
                    document.getElementById('status').value = "save";
                    document.getElementById('pay_on_delivery').click();
                } else {
                    document.getElementById('status').value = "new";

                }
            })
        }

        //DISPLAY CONVERSIONS ON REAL TIME
        function showConversion(val) {
            document.getElementById('totalDisplay').innerHTML = val.value;
        }

    </script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/front/checkout.blade.php ENDPATH**/ ?>