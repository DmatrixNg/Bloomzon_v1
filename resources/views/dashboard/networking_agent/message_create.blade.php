@extends('layouts.dashboard.networking_agent')
@section('page_title')
    Buyer's Dashboard
@endsection

@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Write Admin</b></h1>
        </div>
        <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <div class="col-md-8 p-5 offset-2">
                <form method="POST" action="{{ url('/networking_agent/store_message') }}">
                    @csrf

                    <div class="form-group">
                        <label for="subject" style="font-size: 16px;;">Subject: </label>
                        <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" autocomplete="subject" autofocus>
                        @error('subject')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="request_type" style="font-size: 16px;;">Request Type: </label>
                        <select name="request_type" id="request_type" class="form-control" style="height: 40px; border-radius: 0;">
                            <option value="">Choose Option</option>
                            <option value="delivery">Delivery</option>
                            <option value="service">Service</option>
                            <option value="fund">Fund</option>
                            <option value="request">Request</option>
                        </select>
                        @error('request_type')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message" style="font-size: 16px;;">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" style="border-radius: 0;" placeholder="Type your message: "></textarea>
                        @error('message')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
            requestUrl: '/buyer/contact-admin',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!',
                        text: 'Your support request has been sent, admin will reply shortly',
                        icon: 'success',
                    }).then( () => window.location.reload() )
                }
                return swal({
                    title: 'Error!',
                    text: response.message,
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })
    </script>
@endpush
