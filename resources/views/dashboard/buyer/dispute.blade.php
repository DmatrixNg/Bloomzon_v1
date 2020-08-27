
@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Platform Dispute File</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-6 card p-5 offset-3">
                        <form name="disputeForm" id="disputeForm">
                            <div class="form-group">
                                <label for="subject" style="font-size: 16px;;">Select Subject: </label>
                                <select name="subject" id="subject" class="form-control" style="height: 40px; border-radius: 0;">
                                    <option value="Delivery">Delivery</option>
                                    <option value="Service">Service Failure</option>
                                    <option value="Fund">Fund</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="report_id" style="font-size: 16px;;">Report ID: </label>
                                <input type="text" class="form-control" name="report_id" id="report_id" style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-inline">
                                <label for="currency" style="font-size: 16px;;">Amount: </label>
                                <select name="currency" id="currency" class="form-control ml-5" style="height: 40px; border-radius: 0;">
                                    <option value="naira">&#8358;</option>
                                    <option value="dollar">$</option>
                                </select>
                                <input type="number" id="amount" name="amount" class="form-control"  style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group mt-4">
                                <label for="message"> Message </label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" style="border-radius: 0;" placeholder="Type your message:"></textarea>
                            </div>

                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                            <div class="form-group text-right">
                                <button class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        @endsection

@push('scripts')
    <script>
        FormHandler('disputeForm', {
            requestUrl: '/api/v1/crud/disputes',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!!',
                        text:  'Dispute Complaint has been sent to admin, expect reply shortly',
                        icon: 'success'
                    })
                }
                console.log(response);
                return swal({
                    title: 'Failed!!',
                    text:   'Error occurred creating dispute file, please try again.',
                    icon:   'error'
                })
            }
        })
    </script>

@endpush
