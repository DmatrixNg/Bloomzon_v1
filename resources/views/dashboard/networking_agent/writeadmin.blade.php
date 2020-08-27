@extends('dashboard.networking-agent.layout')
@section('page_title')

@endsection

@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Write Admin</b></h1>
        </div>
        <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <div class="col-md-8 p-5 offset-2">
                <form name="issueForm">
                    <div class="form-group">
                        <label for="exampleFormControlInput1" style="font-size: 16px;;">Subject: </label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject: " style="height: 40px; border-radius: 0;">
                    </div>
                    <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                    <div class="form-group">
                        <label for="issue_type" style="font-size: 16px;;">Request Type: </label>
                        <select name="issue_type" id="issue_type" class="form-control" style="height: 40px; border-radius: 0;">
                            <option value="delivery">Delivery</option>
                            <option value="service">Service</option>
                            <option value="fund">Fund</option>
                            <option value="request">Request</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1" style="font-size: 16px;;">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" style="border-radius: 0;" placeholder="Type your message: "></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-danger btn-lg">Send</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
@push('scripts')
    <script>
        FormHandler('issueForm', {
            requestType: 'POST',
            requestUrl: '/api/v1/crud/issues',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!',
                        text: 'Your support request has been sent, admin will reply shortly',
                        icon: 'success',
                    })
                }
                return swal({
                    title: 'Error!',
                    text: 'We had error sending your request',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })
    </script>
@endpush

