<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Your Wallet Account</b></h1>
        </div>
        <div class="row col-md-12" style="background-color: #2B2950 !important; padding: 20px;">

            <div class="col-md-3 text-center m-auto">
                <div class="p-5 m-5 m-auto" style="border-radius: 50%; border:solid #AF2E1D 10px; width: 200px; height: 200px; background-color: #5C5B78; color: white; vertical-align: middle;">
                    <div class="pt-5 m-auto">
                        <h1><?php echo e(count($orders)); ?></h1>
                    </div>
                </div>
                <h3 class="text-white">Total Orders</h3>
            </div>

            <div class="col-md-3 text-center m-auto">
                <a href="wallet-transaction-history">
                    <div class="p-5 m-5 m-auto" style="border-radius: 50%; border:solid #f2f2f2 10px; width: 200px; height: 200px; background-color: #5C5B78; color: white; vertical-align: middle;">
                        <div class="pt-5 m-auto">
                            <h1>$<?php echo e(number_format($seller->wallet)); ?></h1>
                        </div>
                    </div>
                    <h3 class="text-white">Available Cash</h3>
                </a>
            </div>

            <div class="col-md-3 text-center m-auto">
                <div class="p-5 m-5 m-auto" style="border-radius: 50%; border:solid #AF2E1D 10px; width: 200px; height: 200px; background-color: #5C5B78; color: white; vertical-align: middle;">
                    <div class="pt-5 m-auto">
                        <h1>$<?php echo e(number_format($history->sum('amount'))); ?></h1>
                    </div>
                </div>
                <h3 class="text-white">Cleared Balance</h3>
            </div>

            <div class="col-md-3 text-center m-auto">
                <div class="p-5 m-5 m-auto" style="border-radius: 50%; border:solid #f2f2f2 10px; width: 200px; height: 200px; background-color: #5C5B78; color: white; vertical-align: middle;">
                    <div class="pt-5 m-auto">
                        <h1><?php echo e(count($sales)); ?></h1>
                    </div>
                </div>
                <h3 class="text-white">Total Sales</h3>
            </div>

        </div>
        <div class="row col-md-12 mt-0 mb-5" style="background-color: #2B2950 !important; padding: 20px; margin-bottom: 100px !important;">
            <form class="col-md-6 offset-3 mb-5" id="reqForm" name="paymentRequestForm">
                <h3 class="text-white text-center">Request Cash Out</h3>
                <div class="form-inline mt-5" >
                    <label for="" class="text-white col-md-3"><b>Amount:</b> </label>
                    <input type="text" id="amount" name="amount" class="form-control col-md-8" placeholder="Enter amount...">
                </div>
                <div class="form-inline mt-5">
                    <label for="" class="text-white col-md-3"><b>Narration:</b> </label>
                    <input type="text" name="narration" class="form-control col-md-8" placeholder="">
                </div>
                <input type="hidden" name="user_id" value="<?php echo e($seller->id); ?>">
                <input type="hidden" name="user_type" value="seller">

                <div class="text-center mt-5">
                    <div id="error_list"></div>
                    <button class="btn btn-danger btn-lg" id="sub" type="button" onclick="amountCheck()">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        var ballance = <?php echo json_encode($seller->wallet, 15, 512) ?>

        function amountCheck(){
    ballance = parseInt(ballance)
    var amt = parseInt(document.getElementById('amount').value)
    console.log(amt)
    var btn = document.getElementById('sub');
    console.log(btn);
    if(document.getElementById('amount').value == ''){
        return swal("PLease enter a valid amount to withdraw ")
    }
    if(amt > ballance)
    {
           btn.setAttribute('type','button')
           return swal("Insufficient Fund")
        }
        else{
    document.getElementById('sub').setAttribute('type','submit').click()

        }
}
        const options = {
            requestUrl: '/seller/cashout',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!',
                        text: 'Payment Request sent successfully!',
                        icon: 'success',
                        button: 'Ok'
                    }).then((e)=>{
                        window.location.reload()
                    })
                }
                ErrorHandler(response.errors ?? {})
                return swal({
                    title: 'Error!',
                    text: 'Error occurred sending payment request, please try again',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        };

        FormHandler('paymentRequestForm', options)


    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/dashboard/seller/wallet.blade.php ENDPATH**/ ?>