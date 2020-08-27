@extends('layouts.dashboard.networking_agent')
@section('page_title')
    Buyer's Dashboard
@endsection

@section('content')
<div class="col-md-10">
    <div class="row col-md-12 text-center " style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white ">
        <h1 class="text-center m-auto pt-3 pb-3 text-capitalize"><b>{{ Auth::guard('networking_agent')->user()->full_name}}</b></h1>
    </div>


    @foreach($replies as $reply)
        @if($reply->replyer === 'networking_agent')
            <div class="row col-md-12 p-3 " style="background-color: #fff !important; padding: 20px; ">
                <div class="col-md-6 offset-6 p-3 " style="border: 1px solid #ddd; border-radius: 5px ">
                    <small class="text-success">You</small>
                    <div class="row ">
                        <div class="col-md-6 text-left ">{{ $reply->created_at }}</div>
                        <div class="col-md-6 text-right ">11:23AM</div>
                    </div>
                    <p>{{ $reply->message }}</p>
                </div>
            </div>
        @else
            <div class="row col-md-12 p-3 " style="background-color: #fff !important; padding: 20px; ">
                <div class="col-md-4 p-3 " style="border: 1px solid #ddd; border-radius: 5px ">
                    <div class="row ">
                        <div class="col-md-6 text-left ">{{ $reply->created_at }}</div>
                        <div class="col-md-6 text-right ">11:23AM</div>
                    </div>
                    <p>{{ $reply->message }}</p>
                </div>
            </div>
        @endif

    @endforeach


    
    <form action="{{ url('networking_agent/reply/' . $message_id) }}" method="post" class="row col-md-12 text-center mb-5" style="background-color: #fff !important; padding: 10px; text-align: center !important; color:white; border-top: solid #ccc 1px; ">
    @csrf
        <div class="col-12 text-center">
            <textarea class="form-control" name="message"></textarea>
        </div>
        <div class="text-center col-12 pt-3">
            <button type="submit" class="btn btn-danger btn-sm col-2" style="height: 40px; border-radius: 0px;">Reply</button>
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
