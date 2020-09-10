<?php $__env->startSection('content'); ?>
    <div class="col-md-10">
        <div class="row mb-5 mt-5">
            <div class="col-md-12 text-center">
                <h2>Payout Requests</h2>
            </div>
        </div>
        <div class="panel panel-white">
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="request-table"  class="display table" style="width: 100%; cellspacing: 0;">
                        <thead style="background-color: #E2EFFF;">
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Bank Name</th>
                                <th>Account Number</th>
                                <th>Account Name</th>
                                <th>Wallet Balance</th>
                                <th>Amount Request</th>
                                <th>Narration</th>
                                <th>Action</th>
                                <!-- <th>User Balance</th> -->
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->index + 1); ?></td>
                                    <td><a href="<?php echo e(url('/seller-details', $request->user_id->id)); ?>" target="_blank"><?php echo e($request->user_id->full_name); ?></a></td>
                                    <td><?php echo e($request->user_id->bank_name); ?></td>
                                    <td><?php echo e($request->user_id->account_number); ?></td>
                                    <td><?php echo e($request->user_id->account_name); ?></td>
                                    <td>$<?php echo e($request->user_id->wallet); ?></td>
                                    <td>$<?php echo e($request->amount); ?></td>
                                    <td><?php echo e($request->narration); ?></td>

                                    <?php if($request->status == 0): ?>

                                        <td>
                                            <select class="form-control p-1 checkout_options" data-account_number="0177344478" data-bank_code="058" data-amount="<?php echo e($request->amount); ?>" data-bank_name="<?php echo e($request->user_id->bank_name); ?>" data-id="<?php echo e($request->amount); ?>">
                                                <option>Choose Option</option>
                                                <option value="paystack">Checkout with paystack</option>
                                                <option value="manual">Manual payment</option>
                                                <option value="reject">Reject</option>
                                            </select> 
                                        </td>

                                    <?php elseif($request->status == 1): ?>

                                        <td><a href="" class="btn btn-sm btn-success">Paid</a></td>

                                    <?php elseif($request->status == 2): ?>

                                        <td><a href="" class="btn btn-sm btn-info">Rejected</a></td>

                                    <?php endif; ?>
                                    <!-- <td>$800</td> -->
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>


<!-- Modal -->
<div class="modal fade" id="payment_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Process Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <div id="payment_spinner" class="text-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <p>Verifying account details</p>
          </div>

          <div id="payment_warning" class="text-center">
            <h4 class="text-warning">unable to verify account details, please try again</h4>
          </div>
        
        <form id="payment_form" class="d-none">
            <div class="form-group">
                <label for="account_name">Account Name</label>
                <input type="text" class="form-control" id="account_name" placeholder="Account Name" disabled>
            </div>

            <div class="form-group">
                <label for="account_number">Account Number</label>
                <input type="text" class="form-control" id="account_number" placeholder="Account Number" disabled>
            </div>

            <div class="form-group">
                <label for="bank_name">Bank</label>
                <input type="text" class="form-control" id="bank_name" placeholder="Bank" disabled>
                <input type="hidden" class="form-control" id="bank_code" placeholder="Bank" disabled>
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" placeholder="Amount" disabled>
            </div>
        </form>
            <div id="processing_payment_spinner" class="text-center d-none">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <p>processing payment...</p>
            </div>
            <div id="processing_payment_info" class="text-center">
                
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="pay_btn" type="button" class="btn btn-primary d-none" onclick="create_transfer_recipient()">Make Payment</button>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>


<script>

    $(document).ready(function(){
        $("#request-table").DataTable();
    })

    $('.checkout_options').change( function(){
        console.log()
        if($(this).val() == 'paystack') {
            verify_account($(this).data('account_number'), $(this).data('bank_code'), $(this).data('amount'), $(this).data('bank_name'))
        } else if( $(this).val() == 'manual' ) {

            $.ajax({
                "url": base_url + "/admin/resources_used/edit",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Accept": "application/json",
                },
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": {
                    request_id: $(this).data('id')
                },
                "dataType": "JSON",
                error: function(response_errors) {

                    console.log(response_errors);
                    errorAlert(response_errors)

                    // check if the error is form data validation error
                    if(response_errors.responseJSON.message === "The given data was invalid.") {
                    
                    // get all the form validation errors
                    const errors = response_errors.responseJSON.errors;

                    // loop the all the validation errors ans show then on the form
                    for (var key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            // show the error in the DOM
                            $("#error_edit_120x_"+key).text(errors[key])
                        }
                    }

                    }
                    
                }
            })
            .done(function (response) {

                // get the datatable
                var table = $('#resources_used-table').DataTable();

                // change the status element text this will only work for pages that have the resources_used_status id
                $('#resources_used_status').text(response['status'])

                // get the table row
                var row_data  = table.row('#resources_used_'+response['id']).data();

                // check if the row exists
                if(row_data) {

                    // assign data
                    row_data[3] = response['status']

                    // commit changes to row
                    table.row('#resources_used_'+response['id']).data(row_data).draw(false);
                }

            });
                
        } else if( $(this).val() == 'reject' ) {

        }
    })

    function verify_account(account_number, bank_code, amount, bank_name) {

        $('#payment_spinner').removeClass('d-none');
        $('#payment_form').addClass('d-none');
        $('#pay_btn').addClass('d-none');
        $('#payment_warning').addClass('d-none');


        $('#payment_modal').modal('show');
        $.ajax({
        url: "https://api.paystack.co/bank/resolve",
        type: "GET",
        headers: {
            "Authorization": "Bearer " + "<?php echo e(env('PAYSTACK_SECRET_KEY')); ?>"
        },
        data: {
            account_number: account_number,
            bank_code: bank_code
        },
        error: function(response_error) {
            console.log(response_error);
            $('#payment_spinner').addClass('d-none');
            $('#payment_warning').removeClass('d-none');
            $('#pay_btn').addClass('d-none');
            $('#payment_form').addClass('d-none');
        }
        })
        .done(function (response) {
            if(response['status'] == true) {
                $('#account_name').val(response['data']['account_name']);
                $('#account_number').val(response['data']['account_number']);
                $('#bank_name').val(bank_name);
                $('#bank_code').val(bank_code);
                $('#amount').val(amount);

                $('#payment_spinner').addClass('d-none');
                $('#payment_form').removeClass('d-none');
                $('#pay_btn').removeClass('d-none');
                $('#payment_warning').addClass('d-none');

                // transfer_recipient(response['data']['account_name'], response['data']['account_number'], bank_code)
                
            } else {
                $('#payment_spinner').addClass('d-none');
                $('#payment_warning').removeClass('d-none');
                $('#pay_btn').addClass('d-none');
                $('#payment_form').addClass('d-none');
            }
        });

        
    }

    function create_transfer_recipient() {
        $('#processing_payment_spinner').removeClass('d-none')
        $('#pay_btn').attr('disabled', true)
        $('#processing_payment_info').empty()

        $.ajax({
        url: "https://api.paystack.co/transferrecipient",
        type: "POST",
        headers: {
            "Authorization": "Bearer " + "<?php echo e(env('PAYSTACK_SECRET_KEY')); ?>"
        },
        data: {
            "type": "nuban", 
            "name": $('#account_name').val(),
            "account_number": $('#account_number').val(), 
            "bank_code": $('#bank_code').val(), 
            "currency": "NGN"
        },
        error: function(response_error) {
            $('#processing_payment_info').append('<h4 class="text-warning">unable to process your payment, please try again</h4>')
            $('#processing_payment_spinner').addClass('d-none')
            $('#pay_btn').attr('disabled', false)
            console.log(response_error);
        }
        })
        .done(function (response) {

            console.log(response)
            if(response['status'] == true) {

                // call transfer function
                initiate_transfer($('#amount').val(), response['data']['recipient_code'])

            } else {
                $('#processing_payment_info').append('<h4 class="text-warning">unable to process your payment, please try again</h4>')
                $('#processing_payment_spinner').addClass('d-none')
                $('#pay_btn').attr('disabled', false)
            }

        });
        
    }
    
    function initiate_transfer(amount, recipient_code) {

        // account_name, account_number, bank_code
        $.ajax({
        url: "https://api.paystack.co/transfer",
        type: "POST",
        headers: {
            "Authorization": "Bearer " + "<?php echo e(env('PAYSTACK_SECRET_KEY')); ?>"
        },
        data: {
            "source": "balance",
            "amount": amount,
            "recipient": recipient_code, 
            "reason": "agent payment"
        },
        error: function(response_error) {
            $('#processing_payment_info').append('<h4 class="text-warning">unable to process your payment, please try again</h4>')
            $('#processing_payment_spinner').addClass('d-none')
            $('#pay_btn').attr('disabled', false)
            console.log(response_error);
        }
        })
        .done(function (response) {

            if(response['status'] == true) {

                console.log('good paymr')
                console.log(response)
                
            } else {
                $('#processing_payment_info').append('<h4 class="text-warning">unable to process your payment, please try again</h4>')
                $('#processing_payment_spinner').addClass('d-none')
                $('#pay_btn').attr('disabled', false)
            }
        });
        
    }

</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/payout_requests.blade.php ENDPATH**/ ?>