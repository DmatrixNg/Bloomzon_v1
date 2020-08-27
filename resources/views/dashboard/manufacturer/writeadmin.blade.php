

@extends('dashboard.manufacturer.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
            <div class="col-md-10">
                <div class="row col-md-12 ml-1 mt-5 mb-5" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-12 text-center ml-0">
                        <h2><i class="fas fa-headset"></i> Write Admin</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <form class="" name="contactForm">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input id="subject" name="subject" class="form-control" type="text" placeholder="">

                            </div>
                            <br>
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <div class="form-group">
                                <label for="image">Request type</label>
                                <select  name="issue_type" id="image" class="form-control" type="file">
                                    <option>Fraud</option>
                                    <option>Refund</option>
                                    <option>Complaint</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="message"></label>
                                <textarea style="height: 180px;"  name="message"  id="message" class="form-control" type="text" placeholder="Type Your Message"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-8"></div>
                                <div class="col-md-2">
                                    <button class="btn bloomzon_btnsm2">Send</button>
                                </div>
                                <div class="col-md-4"></div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection

@push('scripts')
    <script>
        FormHandler('contactForm', {
            requestUrl:'/api/v1/crud/issues',
            requestType: 'POST',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!',
                        text: 'Issue created successfully!',
                        icon: 'success',
                        button: 'Ok'
                    })
                }
                console.log(response);
                return swal({
                    title: 'Error!',
                    text: 'We had error creating the issue',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        })
    </script>
@endpush
