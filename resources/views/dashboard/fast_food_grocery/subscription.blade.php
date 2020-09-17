

@extends('layouts.dashboard.fast_food_grocery')
@section('page_title')
    Subscription
@endsection

@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 ml-1 mt-5 mb-5" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
            <div class="col-md-12 text-center ml-0">
                <h2><i class="fas fa-box-open"></i> Your Packages</h2>
            </div>
        </div>

        @if(auth()->guard('fast_food_grocery')->user()->is_subscribed())
            <div class="">
                <div class="col-md-3"></div>
                <div class="col-md-6" style="padding: 30px;">
                    <div class="text-center align-items-center card" style="padding: 30px;">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Current Package</h4>
                            </div>
                            <div class="col-md-6">
                                <button class="btn text-capitalize" style="color: white; background-color: #02499B; border-radius: 5px;">{{ auth()->guard('fast_food_grocery')->user()->is_subscribed()->package }}</button>
                            </div>

                            <div class="col-md-6">
                                <h4>Start Date</h4>
                            </div>
                            <div class="col-md-6">
                                <button class="btn text-capitalize" style="color: white; background-color: #02499B; border-radius: 5px;">{{ auth()->guard('fast_food_grocery')->user()->is_subscribed()->start_date }}</button>
                            </div>

                            <div class="col-md-6">
                                <h4>End Date</h4>
                            </div>
                            <div class="col-md-6">
                                <button class="btn text-capitalize" style="color: white; background-color: #02499B; border-radius: 5px;">{{ auth()->guard('fast_food_grocery')->user()->is_subscribed()->end_date }}</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3"></div>
            </div>
        @else

            <div class="">
                <div class="col-md-3"></div>
                <div class="col-md-6" style="padding: 30px;">
                    <div class="text-center align-items-center card" style="padding: 30px;">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Current Package</h4>
                            </div>
                            <div class="col-md-6">
                                <button class="btn" style="color: white; background-color: #02499B; border-radius: 5px;">You are not subscribed to any package</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form id="sub_form" action="{{ url('fast_food_grocery/create_subscription') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label for="renewal">Renewal Plan</label>
                            </div>
                            <div class="col-md-8">
                                <select name="package" id="package" class="form-control">
                                    <option value="basic">Basic</option>
                                    <option value="premium">Premium</option>
                                </select>
                            </div>
                        </div>

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
                        <input id="amount" type="hidden" name="amount" value="">

                        <br>
                        <br>

                        
                    </form>

                        <div class="text-center">
                            <button class="btn btn-primary" onclick="pay_sub()" type="submit">Pay</button>
                        </div>
                    
                    
                    <div class="mt-3" id="paypal-button-container"></div>
                </div>

                <div class="col-md-4"></div>

            </div>
        @endif

        

        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- pk_test_09382aa6313abb13f39a4994ce801a2abfa26dd6 -->
<!-- paystack -->
<script src="https://js.paystack.co/v1/inline.js"></script>

<!-- payapl -->
<script src="https://www.paypal.com/sdk/js?client-id=ATzpIjJf7npIMKvyqEtunzHTwXcnJWhSdi8w7a_kjoh07S1bziigL0aI4yCvjFfDJ4ZqxPQgF1555Omp" data-namespace="paypal_sdk"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
</script>

<script src="{{ asset('js/payment_handler.js') }}"></script>

<script>

    jQuery(document).ready(function(e){ //when the page as completed loading start getting restaurants

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    })

    function pay_sub() {
        var payment_method = $('#payment_method').val();
        
        var payment_handler = new PaymentHandler();

        var price = 0

        var plan = $('#package').val()
        // var duration = $('#sub_duration').val()

        if(plan == 'basic') {
            price = 5000
        } else if (plan == 'premium') {
            price = 7000
        }

        var fast_food_grocery_name = '{{ auth()->guard("fast_food_grocery")->user()->company_name }}'
        var fast_food_grocery_email = '{{ auth()->guard("fast_food_grocery")->user()->email }}'


        
        if(payment_method == 'paypal') {

            $('#paypal-button-container').empty()

            payment_handler.pay_with_paypal({
                el: '#paypal-button-container',
                amount: price,
                success: function(details) {
                    payment_callback(price, details.id)
                    console.log(details.id)
                }
            })
            
        } else if(payment_method == 'paystack') {

            payment_handler.pay_with_paystack({

                key       : 'pk_test_09382aa6313abb13f39a4994ce801a2abfa26dd6',
                amount    : price,
                curency   : 'NGN',
                first_name: fast_food_grocery_name,
                last_name : fast_food_grocery_name,
                reference : makeid(10),
                email     : fast_food_grocery_email,
                onClose   : function(){
                    alert('you clossed the payment frame')
                },
                success: function(details) {
                    payment_callback(price, details.reference)
                   console.log(details.reference)
                }

            })

        }
    }

    function payment_callback(amount, reference) {
        $('#payment_ref').val(reference);
        $('#amount').val(amount);
        $('#sub_form').submit();
    }

    function makeid(length) {
        var result           = '';
        var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }
    
</script>
@endsection
