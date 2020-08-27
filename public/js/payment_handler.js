// demo paystack payment

{/* <script src="https://js.paystack.co/v1/inline.js"></script>  */}

// var payment_handler = new PaymentHandler();

// payment_handler.pay_with_paystack({
//     key: 'pk_test_09382aa6313abb13f39a4994ce801a2abfa26dd6',
//     amount: 500,
//     curency: 'NGN',
//     first_name: 'john',
//     last_name: 'doe',
//     reference: 'dsdsddsd', 
//     email: 'paulwhiteblogs@gmail.com',
//     onClose: function(){
//         alert('you clossed the payment frame')
//     },
//     success: function(detaisl) {
//         alert('success payment')
//     }
// })



// demo paypal payment
{/* <script src="https://www.paypal.com/sdk/js?client-id=AaJMejIDjhumOr48XsycjfvQegxAku1dHdrA0DNfkqFSg7bFFkpJTnnwyaLIGUFsPijWx1g51gxp9F-5&currency=USD" data-namespace="paypal_sdk"></script> */}
{/* <script
    src="https://www.paypal.com/sdk/js?client-id=ATzpIjJf7npIMKvyqEtunzHTwXcnJWhSdi8w7a_kjoh07S1bziigL0aI4yCvjFfDJ4ZqxPQgF1555Omp"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
</script> */}

// var payment_handler = new PaymentHandler();

// payment_handler.pay_with_paypal({
//     amount: 500,
//     success: function(details) {
//         // This function shows a transaction success message to your buyer.
//         // alert('Transaction completed by ' + details.payer.name.given_name);
//         console.log(details);
//     }
// });









/**
 * handler for paypal and paystack payment gatway.
 * 
 * @return null
 */
function PaymentHandler() {

    /**
     * handles payment with paypal gatway, you need to incluse the paypal js library withing your application body tag.
     *
     * @param string parems.el (this is the html container ID (#id_name) or Class (.class_name) in which the paystack buttoms will be placed)
     * 
     * 
     * @param int amount (amount to pay)
     * 
     * 
     * @param function success (the call back function for a successfull payment, this function should have a parameter whicl will take the payment details)
     * 
     * 
     * @return null
     * 
     */
    this.pay_with_paypal = function(params = {el, amount, success}) {
        
        paypal_sdk.Buttons({

            createOrder: function(data, actions) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                    purchase_units: [{
                    amount: {
                        value: params.amount
                    }
                    }]
                });
            },
            onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(params.success);
            }
        }).render(params.el);
        //This function displays Smart Payment Buttons on your web page.
    };

    /**
     * handles payment with paystack gatway, you need to incluse the paypal js library and Jquary library withing your application body tag for this function to work.
     *
     * @param object params
     * 
     * @return null
     */
    this.pay_with_paystack = function(params = {key, email, amount, curency: 'NGN', first_name: '', last_name: '', reference, success, onClose}) {
        
        var handler = PaystackPop.setup({

            key      : params.key,
            amount   : params.amount * 100,   // the amount value is multiplied by 100 to convert to the lowest currency unit
            currency : params.curency,        // Use GHS for Ghana Cedis or USD for US Dollars
            firstname: params.first_name,
            lastname : params.last_name,
            reference: params.reference, // Replace with a reference you generated
            email    : params.email,

            callback: params.success,

            onClose: params.onClose,

        });

        handler.openIframe();

    }


}