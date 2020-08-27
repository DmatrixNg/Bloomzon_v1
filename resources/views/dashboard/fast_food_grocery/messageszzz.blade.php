

@extends('dashboard.grocery.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

@section('content')
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-9">
                <div class="form-inline ">
                    <select class="form-control col-md-4" style="height: 40px; border-radius: 0px !important;">
                        <option>New</option>
                        <option>Old</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 mb-4 text-right">
                <a href="contact-admin" class="btn btn-secondary btn-sm">Create New Conversation</a>
            </div>
        </div>

        @if(count($issues = $user_metas->Issue))

            @foreach($issues as $issue)
                <div class="card m-0 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s;">
                    <div class="row p-5 ml-5 mr-5" style="border-bottom: 1px solid #ddd;">
                        <a href="message-chat">
                            <div class="col-md-2 text-left"><span class="badge badge-danger">Admin</span></div>
                            <div class="col-md-4 text-left" style="color: #999; font-size: 18px;">{{ \Illuminate\Support\Carbon::parse($issue->created_at)->format('g:i A')}}</div>
                            <div class="col-md-6 text-right" style="color: #999; font-size: 18px;">{{\Illuminate\Support\Carbon::parse($issue->created_at)->format('d/m/y')}}</div>
                            <div class="text col-md-12 text-justify" style="color: #333; font-size: 18px;">{{$issue->message}}</div>
                        </a>
                    </div>
                </div>
            @endforeach


            <div class="row col-md-12 text-center m-auto">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        @else
            <h3> You have no messages </h3>
        @endif
    </div>
@endsection
