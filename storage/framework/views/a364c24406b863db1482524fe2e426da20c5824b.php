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

                                    <input name="country" value="<?php echo e($buyer ? $buyer->country : ''); ?>" id="country" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>FULL NAME *</label>
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
                                    <input type="text" name="billing_address" value="<?php echo e($buyer ? $buyer->billing_address : ''); ?>" id="billing_address"
                                        placeholder="Billing Address">
                                    
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
                                    <input type="text" id="zip_code" value="<?php echo e($buyer ? $buyer->zip_code : ''); ?>"
                                        name="zip_code">
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
                                    <input type="text" value="<?php echo e($buyer ? $buyer->phone_number : ''); ?>" name="phone_number"
                                        id="phone_number">
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
                                        <input type="text" id="coupon" name="coupon" value="">
                                        <p></p>
                                        <a href="#" onclick="applyCoupon()" class="btn-common">Apply</a>
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
                                                <td><input type="hidden" id="cart-total" value="<?php echo e($total); ?>">
                                                  <strong id="totalDisplay">$<?php echo e(number_format($total)); ?></strong></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <select class="form-control" id="convertions" onchange="showConversion(this)">

                                        <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <option value="<?php echo e($curr); ?>"><?php echo e($curr); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <input type="hidden" id="status" name="status" value="new" class="d-none">
                                    <input type="hidden" id="with" name="with" value="" class="d-none">
                                    <div class="payment-gateways mt-30">
                                        <div id="payment_gateways">
                                          <?php if(auth()->guard('buyer')->check()): ?>
                                            <?php if($buyer->point && $buyer->point->total_point != 0): ?>

                                              <div class="single-payment-gateway">
                                                <input id="point" type="checkbox" name="point" value="<?php echo e($buyer->point->amount); ?>" id="paypal">
                                                
                                                <label for="point">Point ($<?php echo e($buyer->point->amount); ?>)</label>
                                              </div>
                                            <?php endif; ?>
                                          <?php endif; ?>
                                            <div class="single-payment-gateway">
                                                <input type="radio" name="ptype" value="paystack" id="paystack">
                                                <img src="<?php echo e(asset('assets/frontend/img/paystack.png')); ?>" width="50"
                                                    height="50" />
                                                <label for="paystack">Paystack</label>
                                            </div>
                                            <div class="single-payment-gateway">
                                                <input type="radio" name="ptype" value="paypal" id="paypal">
                                                <img src="<?php echo e(asset('assets/frontend/img/paypal.png')); ?>" width="50"
                                                    height="50" />
                                                <label for="paypal">PayPal</label>
                                            </div>
                                            <?php if(auth()->guard('buyer')->check()): ?>
                                              <input type="hidden" id="card_detail" name="card" value="">
                                            <?php if($buyer->cards): ?>

                                              <?php $__currentLoopData = $buyer->cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div class="single-payment-gateway">
                                                  <input type="radio" name="ptype" value="<?php echo e($card->id); ?>" class="cards" id="card-<?php echo e($card->id); ?>">

                                                  <?php if($card->brand == 'visa'): ?>

                                                    <img src="<?php echo e(asset('assets/frontend/images/cards/VISA-logo.png')); ?>" width="50"
                                                     />
                                                  <?php elseif($card->brand == 'mastercard'): ?>
                                                    <img src="<?php echo e(asset('assets/frontend/images/cards/mastercard.png')); ?>" width="50"
                                                    />
                                                  <?php endif; ?>
                                                  <label for="card-<?php echo e($card->id); ?>"> Ending with <?php echo e($card->last4); ?> </label>
                                                </div>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                          <?php endif; ?>
                                            <div class="single-payment-gateway">
                                                <input type="radio" name="ptype" value="pay_on_delivery"
                                                    id="pay_on_delivery">
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
                                        <button class="btn btn-outline-warning btn-lg btn-common d-none" href=""
                                            type="submit" id="pay">
                                            Pay on delivery</button>
                                        <button onclick="saveOrder()" class="btn btn-common btn-outline-success btn-lg"
                                            type="button" class="btn-common width-180" id="place_order">
                                            Save for later</button>
                                        <div id="btn_pp"></div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    <?php else: ?>
                        <h3> Your Cart is empty, <a href="<?php echo e(url(app()->getLocale())); ?>/shop">start shopping</a></h3>
                    <?php endif; ?>
                </div>
            </form>


        </div>
    </div>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
crossorigin="anonymous"></script>


<script src="https://js.paystack.co/v1/inline.js"></script>
<!-- payapl -->
<script
src="https://www.paypal.com/sdk/js?client-id=ATzpIjJf7npIMKvyqEtunzHTwXcnJWhSdi8w7a_kjoh07S1bziigL0aI4yCvjFfDJ4ZqxPQgF1555Omp"
data-namespace="paypal_sdk">
// Required. Replace SB_CLIENT_ID with your sandbox client ID.

</script>
<script src="<?php echo e(asset('js/payment_handler.js')); ?>"></script>

    
    <script>
    const a = jQuery.noConflict();

    var payment = new PaymentHandler();
    var place_order = document.getElementById('place_order');
    var products = <?php echo json_encode([$products, $cart_items], 512) ?>;

// console.log($("input[name='card']:checked"));
// console.log($('.cards'));
    var url = '';
    //WHEN PLACE ORDER BUTTON IS PRESSED
    place_order.onclick = function() {
      // console.log(validateInputs());
      if (validateInputs() == 'valid') { //Validate to check all  inout are correct
        var names = document.getElementById('full_name', 2).value.split(' ');
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

        } //HANDLES PAYPAL PAYMENT METHOD
        else if (document.getElementById('paypal').checked) {
          return payment.pay_with_paypal({
            el: "#btn_pp",
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
        else if (document.getElementById('pay_on_delivery').checked) {
          payment_stat.value = 0;
          pgateway.value = 'pay_on_delivery'
          document.getElementById('pay').click();
        }
        else if ($('.single-payment-gateway .cards:checked')) {
          // console.log($("input[name='card']").is('checked'));
          // console.log($("input[name='card']:checked").val());
          // alert($('.single-payment-gateway .cards:checked').val())
          payment_stat.value = 0;
          pgateway.value = 'card'
          $("#card_detail").val($('.single-payment-gateway .cards:checked').val())
          document.getElementById('pay').click();
        }
         else {
          return swal("Please select payment method")
        }
      }
    }


    //VALIDATE EACH USER INPUT NOT NULL
    function validateInputs() {
      var names = document.getElementById('full_name').value;
      var li = names.split(' ');
      if (names == '' || li.length < 2) {
        return swal("Please input name correctly")
      }
      if (document.getElementById('country').value == '') {
        return swal("Please enter country")
      }
      if (document.getElementById('billing_address').value == '') {
        return swal("Please enter billing address")
      }
      if (document.getElementById('state').value == '') {
        return swal("Please enter state")
      }
      if (document.getElementById('city').value == '') {
        return swal("please enter city")
      }
      if (document.getElementById('email').value == '') {
        return swal("Please enter email address correctly")
      }
      if(validateEmail(document.getElementById('email').value) == false){
        console.log(validateEmail(document.getElementById('email').value))
        return swal("Please enter email address correctly")
      }

      if (document.getElementById('phone_number').value == '') {
        return swal("Please enter phone number")
      }
      if (document.getElementById('zip_code').value == '') {
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
            text: 'THANK YOU FOR YOUR ORDER, YOUR ORDER ID IS: ' + response.data,
            icon: 'success'
          }).then(
          (e) => {
            makeRequest('/cart/clear', {}).then(
            () => {
              window.location.href = '/'

            }
            )
          }

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

    function validateEmail(email) {
      const re =
      /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(String(email).toLowerCase());
    }
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


    function applyCoupon() {
      var coup = document.getElementById('coupon').value;
      makeRequest('/cart/add-coupon', {
        code: coup
      }).then((e) => {
        if (e.success) {
          return swal("Your coupon has been added - proceed to checkout").then((e) => window.location
          .reload())
        }
        return swal("Invalid coupon code added")
      })
    }
    a("#point").on('change', function() {
      if (a(this).is(':checked')) {
        // const subtotal = $('#checkout_subtotal').html();
        let total = a('#cart-total').val()
        let point = a(this).val()

        switchStatus = $(this).is(':checked');
        var newtotal = Number(total) - Number(point)
        // console.log(newtotal);
        a('#totalDisplay').html("$"+ curency_format(newtotal))
        a('#with').val("point")

        getConversion(newtotal)


      }
      else {
        let total = a('#cart-total').val()

        switchStatus = a(this).is(':checked');
        a('#totalDisplay').html("$"+curency_format(total))
        getConversion(total)



      }
    });
    function getConversion(total) {
      a.ajax({
        type: 'get',
        url: "<?php echo e(url('/convert/')); ?>/"+total,
        dataType: 'json',

        success: function (data) {
          // console.log(data[0]['currency']);

          if(Object.keys(data[0]).length != 0) {
            var convertions = a('#convertions');
            convertions.empty();
            for (var i = 0; i < data.length; i++) {
              // console.log(data[i][0].value);
              var key = Object.keys(data[i].currency)
                convertions.append('<option id=' + i + ' value=' + data[i][0].amount + '> '+ data[i]['currency'][key].prefix +" " + curency_format(data[i][0].value) + '</option>');
                if (Object.keys(data[i].currency) == "NGN") {
                  // console.log('here');
                  a("#naira_price").val(data[i][0].amount)
                }
            }
          }
        },

        error: function (data) {
          console.log('Error:', data);
        }

    });
  }
  function curency_format (number) {
    let to_fixed = parseFloat(number).toFixed(2)
    let number_format = new Intl.NumberFormat('ja-JP').format(to_fixed)
    return number_format
  }
  </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/DMatrix/work/new/Bloomzon_v1/resources/views/front/checkout.blade.php ENDPATH**/ ?>