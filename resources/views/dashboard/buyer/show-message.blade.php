@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection
@php

@endphp
        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center " style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white ">
                    <h1 class="text-center m-auto pt-3 pb-3 "><b>Chat History</b></h1>
                <h4>Ticket: {{$messages[0]->ticket}}</h4>
                </div>

                    
                     @foreach($messages as $message)   
                        <div class="row col-md-12 p-3 " style="background-color: #fff !important; padding: 20px; ">
                            <div class="col-md-4 p-3 " style="border: 1px solid #ddd; border-radius: 5px ">
                                <p> {{Auth::guard('buyer')->user()->fullname}} </p>
                                <div class="row ">
                                    <div class="col-md-6 text-left ">{{\Carbon\Carbon::parse($message->created_at)->format('M d Y')}}</div>
                                    <div class="col-md-6 text-right ">{{\Carbon\Carbon::parse($message->created_at)->format('g:i A')}}</div>
                                </div>
                                <p>{{$message->message}}</p>
                            </div>
                        </div>
                        <div class="row col-md-12 p-3 " style="background-color: #fff !important; padding: 20px; ">
                            @if($message->reply)
                                <div class="col-md-6 offset-6 p-3 " style="border: 1px solid #ddd; border-radius: 5px ">
                                    <p>Admin</p>
                                    <div class="row ">
                                        <div class="col-md-6 text-left ">{{\Carbon\Carbon::parse($message->reply_id->created_at)->format('M d Y')}}</div>
                                        <div class="col-md-6 text-right ">{{\Carbon\Carbon::parse($message->reply_id->created_at)->format('g:i A')}}</div>
                                    </div>
                                    <p>{{$message->reply}}</p>
                                </div>
                                
                                @endif
                        </div>
                    @endforeach
                    <form name="issueForm">
                    <div class="form-inline  col-md-8 m-auto">
                        <input name="ticket" value="{{$messages[0]->ticket}}"  type="hidden"/>
                    <input type="hidden" class="form-control" value="{{$messages[0]->subject}}"  name="subject" id="subject" placeholder="Subject: " style="height: 40px; border-radius: 0;">
                        <input type="hidden" value="{{Auth::guard('buyer')->user()->id}}" name="buyer_id">
                        <input type="hidden" value="{{$messages[0]->issue_type}}" name="issue_type"/>
                        <input type="text" name="message" class="form-control col-10" style="height: 45px; border-radius: 0px;">
                        <button class="btn btn-danger btn-sm col-2" style="height: 45px; border-radius: 0px;">Send</button>
                    </div>
                    </form>
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
