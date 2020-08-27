@extends('dashboard.manufacturer.layouts.app')

@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Cases</b></h1>
            <a href="{{ url('manufacturer/create_message') }}" style="border: 1px #fff solid; color: #fff; padding: 10px; border-radius: 20px; height: 40px; margin-top: 10px;">Open New Case</a>
        </div>

        <div class="row col-md-12 mb-3" style="background-color: #fff !important; padding: 20px;">
            @foreach($messages as $message)
                <div class="mb-2 p-4" style="border-radius: 20px; background-color: #fcfcfc; width: 100%; border: 1px solid #fcfcfc; text-shadow: #666;">
                    <div class="col-md-2">
                        <i class="fa fa-user-circle fa-4x pl-3"></i>
                    </div>
                    <a href="{{ url('/manufacturer/message_replies/' . $message->id ) }}">
                        <div class="col-md-4">
                            <span class="badge badge-dark" style="background-color: #AF2E1D !important; font-size: 17px;">
                                {{ $message->messageable->full_name }}
                            </span>
                            <div class="col-md-6 text-right">
                                <p>{{ $message->created_at }}</p>
                            </div>
                            <h5><span class="text-danger">Request Type:</span> {{ $message->request_type }}</h5>
                            <h5><span class="text-danger">Subject:</span> {{ $message->subject }}</h5>
                            <p style="font-size: large;">{{ $message->message_replies->last()->message }}</p>
                        </div>
                    </a>
                    
                </div>
            @endforeach
        </div>

        <div class="row col-md-12 text-center m-auto">
            <nav aria-label="Page navigation example">
                {{ $messages }}
            </nav>
        </div>
    </div>
@endsection
