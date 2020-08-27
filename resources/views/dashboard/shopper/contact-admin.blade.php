

@extends('dashboard.shopper.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

{{--        @section('content')--}}
{{--        <div class="col-md-10">--}}
{{--                <div class="card p-0">--}}
{{--                <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">--}}
{{--                    <div class="col-md-12 text-center ml-0">--}}
{{--                        <h1><b><i class="fa fa-headset"></i> Write Admin</b></h1>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="row mb-3" style="padding: 20px;">--}}
{{--                    <div class="col-md-10 p-5 offset-1">--}}
{{--                        <form>--}}
{{--                            <div class="form-inline row mb-5">--}}
{{--                                <label class="exampleFormControlInput1 col-md-3" style="font-size: 16px; justify-content: start !important;">Subject: </label>--}}
{{--                                <input type="email" class="form-control col-md-9" id="exampleFormControlInput1" placeholder="Subject: " style="height: 40px; border-radius: 0;">--}}
{{--                            </div>--}}
{{--                            <div class="form-inline row  mb-5">--}}
{{--                                <label class="exampleFormControlInput1 col-md-3" style="font-size: 16px; justify-content: start !important;">Request Type: </label>--}}
{{--                                <select name="" id="" class="form-control col-md-9" style="height: 40px; border-radius: 0;">--}}
{{--                                    <option value="Delivery">Delivery</option>--}}
{{--                                    <option value="Service">Service</option>--}}
{{--                                    <option value="Fund">Fund</option>--}}
{{--                                    <option value="Request">Request</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-inline row  mb-5">--}}
{{--                                <label class="exampleFormControlInput1 col-md-3" style="font-size: 16px; justify-content: start !important;">Email address</label>--}}
{{--                                <textarea name="" id="" cols="30" rows="10" class="form-control col-md-9" style="border-radius: 0;" placeholder="Type your message: "></textarea>--}}
{{--                            </div>--}}

{{--                            <div class="form-group text-center">--}}
{{--                                <a href="#" class="btn btn-danger btn-lg">Send</a>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endsection--}}

{{--<div class="form-group text-center">--}}
{{--    <a href="#" class="btn btn-danger btn-lg">Send</a>--}}
{{--</div>--}}

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
                        <div class="form-group text-center">
                            <button class="btn btn-danger btn-lg">Send</button>
                        </div>

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
