@extends('layouts.dashboard.admin')

@section('content')
<div class="col-md-10 mt-4 mb-4 p-3">
    <div class="row">
        <div class="col-md-9">
            <div class="form-inline ">
                <select class="form-control col-md-4" style="height: 45px; border-radius: 0px;">
                    <option selected="">Sort</option>
                    <option>New</option>
                    <option>Old</option>
                </select>
            </div>
        </div>
        <div class="col-md-3 mb-4 text-right d-none">
            <a href="contact-admin.html" class="btn btn-secondary btn-lg">Create New <i class="fa fa-comments"></i></a>
        </div>
    </div>
    <div class="card m-0 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s;">

        @foreach($messages as $message)
            <a href="{{ url('/admin/replies/' . $message->id) }}">
                <div class="row p-5 ml-5 mr-5" style="border-bottom: 1px solid #ddd;">
                    <div class="col-md-2 text-left">
                        <span class="badge badge-danger">{{ $message->messageable->full_name }}</span>
                        <span class="badge badge-danger">{{ $message->messageable->email }}</span>
                    </div>
                    <div class="col-md-4 text-left" style="color: #999; font-size: 18px;">8:46 AM</div>
                    <div class="col-md-6 text-right" style="color: #999; font-size: 18px;">{{ $message->created_at }}</div>
                    <div class="text col-md-12 text-justify" style="color: #333; font-size: 18px;"><h4>{{ $message->request_type }}</h4></div>
                    <div class="text col-md-12 text-justify" style="color: #333; font-size: 18px;">{{ $message->message_replies->last()->message }}</div>
                </div>
            </a>
        @endforeach

    </div>
    <div class="row text-center">
        {{$messages}}
    </div>
</div>
@endsection