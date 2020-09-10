@extends('layouts.dashboard.admin')

@section('content')
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
                                <th>Paystack Payment Ref</th>
                                <th>Action</th>
                                <!-- <th>User Balance</th> -->
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($requests as $request)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td><a href="{{ url('/seller-details', $request->user_id->id) }}" target="_blank">{{$request->user_id->full_name}}</a></td>
                                    <td>{{$request->user_id->bank_name}}</td>
                                    <td>{{$request->user_id->account_number}}</td>
                                    <td>{{$request->user_id->account_name}}</td>
                                    <td>${{$request->user_id->wallet}}</td>
                                    <td>${{$request->amount}}</td>
                                    <td>{{$request->narration}}</td>
                                    <td>{{$request->paystack_transfer_code}}</td>

                                    @if($request->status == 0)

                                        <td>
                                            <select class="form-control p-1 checkout_options" 
                                            data-account_number="{{$request->user_id->account_number}}" 
                                            data-bank_code="{{$request->user_id->bank_code}}" 
                                            data-amount="{{$request->amount}}" 
                                            data-bank_name="{{$request->user_id->bank_name}}" 
                                            data-id="{{$request->id}}">

                                                <option>Choose Option</option>
                                                <option value="paystack">Checkout with paystack</option>
                                                <option value="manual">Manual payment</option>
                                                <option value="reject">Reject</option>
                                            </select> 
                                        </td>

                                    @elseif($request->status == 1)

                                        <td><a href="" class="btn btn-sm btn-success">Paid</a></td>

                                    @elseif($request->status == 2)

                                        <td><a href="" class="btn btn-sm btn-info">Rejected</a></td>

                                    @endif
                                    <!-- <td>$800</td> -->
                                </tr>
                            @endforeach
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
                <input type="hidden" id="request_id" disabled>
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

@endsection


@push('scripts')


<script>

    const base_url = "{{ url('/') }}"

    


    $(document).ready(function(){

        $("#request-table").DataTable();
    })

    

    $('.checkout_options').change( function(){
        console.log()
        if($(this).val() == 'paystack') {

            verify_account($(this).data('id'), $(this).data('account_number'), $(this).data('bank_code'), $(this).data('amount'), $(this).data('bank_name'))

        } else if( $(this).val() == 'manual' ) {
            update_request($(this).data('id'), 1)
        } else if( $(this).val() == 'reject' ) {
            update_request($(this).data('id'), 2)
        }
    })

    function update_request(id, status, ref='') {
        $.ajax({
            "url": base_url + "/admin/process_Request/pay",
            "method": "POST",
            "timeout": 0,
            "headers": {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            },
            "data": {
                paystack_transfer_code: ref,
                id: id,
                status: status
            },
            "dataType": "JSON",
            error: function(response_errors) {
                // console.log(response_errors)
                location.reload();
            }
        })
        .done(function (response) {
            location.reload();
        });
    }

    function verify_account(request_id, account_number, bank_code, amount, bank_name) {

        $('#payment_spinner').removeClass('d-none');
        $('#payment_form').addClass('d-none');
        $('#pay_btn').addClass('d-none');
        $('#payment_warning').addClass('d-none');


        $('#payment_modal').modal('show');
        $.ajax({
        url: "https://api.paystack.co/bank/resolve",
        type: "GET",
        headers: {
            "Authorization": "Bearer " + "{{env('PAYSTACK_SECRET_KEY')}}"
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
                $('#request_id').val(request_id);

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
            "Authorization": "Bearer " + "{{env('PAYSTACK_SECRET_KEY')}}"
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
            "Authorization": "Bearer " + "{{env('PAYSTACK_SECRET_KEY')}}"
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

                update_request($('#request_id').val(), 1, response['data']['transfer_code'])
                // $('#processing_payment_spinner').addClass('d-none')
                // $('#pay_btn').attr('disabled', false)
                
            } else {
                $('#processing_payment_info').append('<h4 class="text-warning">unable to process your payment, please try again</h4>')
                $('#processing_payment_spinner').addClass('d-none')
                $('#pay_btn').attr('disabled', false)
            }
        });
        
    }

</script>
@endpush