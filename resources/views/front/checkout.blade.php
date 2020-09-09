@extends('layouts.front')
@section('page_title')
    CheckOut
@endsection

@section('content')
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
                    @if (!$buyer && $cart_items)
                        <p>Returning customer? <a href="/buyer/login">Click here</a> to login</p>
                    @endif
                </div>
            </div>

            <form name="billingForm" id="billingForm">
                <div class="row mt-10">
                    <div class="col-lg-8">

                        <div class="billing-form">
                            <h4>Billing Details</h4>
                            <div class="row">
                                <input type="hidden" id="total_amount" name="total_amount" value="{{ $total }}" />
                                <input type="hidden" name="buyer_id" value="{{ $buyer ? $buyer->id : '' }}" />
                                <input type="hidden" name="naira_price" value="{{ $naira_price }}" id="naira_price" />
                                <input type="hidden" name="ref" value="{{ $ref }}" id="ref" />
                                <input type="hidden" name="payment_status" value="0" id="payment_status" />
                                <input type="hidden" name="payment_gateway" value="" id="payment_gateway" />
                                <div class="col-lg-3 align-items-center">
                                    <label for="country">COUNTRY *</label>
                                </div>
                                <div class="col-lg-9">

                                    <input name="country" value="{{ $buyer ? $buyer->country : '' }}" id="country" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>FULL NAME *</label>
                                </div>
                                <div class="col-lg-9">
                                    <input id="full_name" value="{{ $buyer ? $buyer->full_name : '' }}" name="full_name"
                                        type="text" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <label>ADDRESS *</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="billing_address" value="{{ $buyer ? $buyer->billing_address : '' }}" id="billing_address"
                                        placeholder="Billing Address">
                                    {{-- <input type="text"
                                        placeholder="Apartment, suite, unite ect (optinal)"
                                        class="mt-sm-30">--}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>TOWN / CITY *</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="city" value="{{ $buyer ? $buyer->city : '' }}" name="city">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>COUNTRY / STATES</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="state" value="{{ $buyer ? $buyer->state : '' }}" name="state">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>POSTCODE / ZIP *</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="zip_code" value="{{ $buyer ? $buyer->zip_code : '' }}"
                                        name="zip_code">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3">
                                    <label>EMAIL ADDRESS *</label>
                                </div>
                                <div class="col-lg-9">
                                    @if ($buyer)
                                        <input disabled id="email" value="{{ $buyer ? $buyer->email : '' }}" value=""
                                            name="email" type="text">
                                    @else
                                        <input id="email" value="" value="" name="email" type="text">
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label>PHONE *</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" value="{{ $buyer ? $buyer->phone_number : '' }}" name="phone_number"
                                        id="phone_number">
                                </div>
                            </div>
                            @if (!$buyer)
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
                            @endif
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
                    @if (count($cart_items))
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

                                            @foreach ($products as $cart_item)

                                                <tr>
                                                    <td>{{ $cart_item->product_name }}</td>
                                                    <td><strong>${{ number_format($cart_item->total) }}</strong></td>
                                                </tr>
                                            @endforeach

                                            <tr>
                                                <td>Cart Subtotal</td>
                                                <td><strong>${{ number_format($total) }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Shipping and Handling</td>
                                                <td>Free Shipping</td>
                                            </tr>
                                            <tr>
                                                <td>ORDER TOTAL</td>
                                                <td><input type="hidden" id="cart-total" value="{{ number_format($total) }}">
                                                  <strong id="totalDisplay">${{ number_format($total) }}</strong></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <select class="form-control" id="convertions" onchange="showConversion(this)">

                                        @foreach ($currencies as $curr)

                                            <option value="{{ $curr }}">{{ $curr }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" id="status" name="status" value="new" class="d-none">
                                    <input type="hidden" id="with" name="with" value="" class="d-none">
                                    <div class="payment-gateways mt-30">
                                        <div id="payment_gateways">
                                          @auth('buyer')
                                            @if($buyer->point && $buyer->point->total_point != 0)

                                              <div class="single-payment-gateway">
                                                <input id="point" type="checkbox" name="point" value="{{$buyer->point->amount}}" id="paypal">
                                                {{-- <img src="{{ asset('assets/frontend/images/icons/bank-loan.png') }}" width="50"
                                                height="50" /> --}}
                                                <label for="point">Point (${{$buyer->point->amount}})</label>
                                              </div>
                                            @endif
                                          @endauth
                                            <div class="single-payment-gateway">
                                                <input type="radio" name="ptype" value="paystack" id="paystack">
                                                <img src="{{ asset('assets/frontend/img/paystack.png') }}" width="50"
                                                    height="50" />
                                                <label for="paystack">Paystack</label>
                                            </div>
                                            <div class="single-payment-gateway">
                                                <input type="radio" name="ptype" value="paypal" id="paypal">
                                                <img src="{{ asset('assets/frontend/img/paypal.png') }}" width="50"
                                                    height="50" />
                                                <label for="paypal">PayPal</label>
                                            </div>
                                            @auth('buyer')
                                              <input type="hidden" id="card_detail" name="card" value="">
                                            @if ($buyer->cards)

                                              @foreach ($buyer->cards as $card)

                                                <div class="single-payment-gateway">
                                                  <input type="radio" name="card" value="{{$card->id}}" class="cards" id="card-{{$card->id}}" >

                                                  @if ($card->brand == 'visa')

                                                    <img src="{{ asset('assets/frontend/images/cards/VISA-logo.png') }}" width="50"
                                                     />
                                                  @elseif ($card->brand == 'mastercard')
                                                    <img src="{{ asset('assets/frontend/images/cards/mastercard.png') }}" width="50"
                                                    />
                                                  @endif
                                                  <label for="card-{{$card->id}}"> Ending with {{$card->last4}} </label>
                                                </div>
                                              @endforeach
                                            @endif
                                          @endauth
                                            <div class="single-payment-gateway">
                                                <input type="radio" name="ptype" value="pay_on_delivery"
                                                    id="pay_on_delivery">
                                                <img src="{{ asset('assets/frontend/img/COD.jpg') }}" width="50"
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
                    @else
                        <h3> Your Cart is empty, <a href="{{url(app()->getLocale())}}/shop">start shopping</a></h3>
                    @endif
                </div>
            </form>


        </div>
    </div>



@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
crossorigin="anonymous"></script>

{{-- //INCLUDE ALL REQUIRED SCRIPTS FROM CDN--}}
<script src="https://js.paystack.co/v1/inline.js"></script>
<!-- payapl -->
<script
src="https://www.paypal.com/sdk/js?client-id=ATzpIjJf7npIMKvyqEtunzHTwXcnJWhSdi8w7a_kjoh07S1bziigL0aI4yCvjFfDJ4ZqxPQgF1555Omp"
data-namespace="paypal_sdk">
// Required. Replace SB_CLIENT_ID with your sandbox client ID.

</script>
<script src="{{ asset('js/payment_handler.js') }}"></script>

    {{-- END OF REQUIRED SCRIPTS --}}
    <script>
    const a = jQuery.noConflict();

    var payment = new PaymentHandler();
    var place_order = document.getElementById('place_order');
    var products = @json([$products,$cart_items]);

// console.log($("input[name='card']:checked"));
// console.log($('.cards'));
    var url = '';
    //WHEN PLACE ORDER BUTTON IS PRESSED
    place_order.onclick = function() {
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
        else if ($("input[name='card']:checked")) {
          // console.log($("input[name='card']:checked").val());
          payment_stat.value = 0;
          pgateway.value = 'card'
          $("#card_detail").val($("input[name='card']:checked").val())
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
        var newtotal = total - point
        console.log(newtotal);
        a('#totalDisplay').html("$"+newtotal)
        a('#with').val("point")

        getConversion(newtotal)


      }
      else {
        let total = a('#cart-total').val()

        switchStatus = a(this).is(':checked');
        a('#totalDisplay').html("$"+total)
        getConversion(total)



      }
    });
    function getConversion(total) {
      a.ajax({
        type: 'get',
        url: "{{ url('/convert/') }}/"+total,
        dataType: 'json',

        success: function (data) {
          // console.log(data[0]['currency']);
          // console.log(data[1]);

          if(Object.keys(data[0]).length != 0) {
            var convertions = a('#convertions');
            convertions.empty();
            for (var i = 0; i < data.length; i++) {
              var key = Object.keys(data[i].currency)
                convertions.append('<option id=' + i + ' value=' + data[i][0].amount + '> '+ data[i]['currency'][key].prefix +" " + curency_format(data[i][0].amount) + '</option>');
                if (Object.keys(data[i].currency) == "NGN") {
                  console.log('here');
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
@endpush
