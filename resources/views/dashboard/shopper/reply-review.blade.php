@extends('layouts.dashboard.shopper')
@section('page_title')
    REVIEW REPLY
@endsection

@section('content')
    <div class="col-md-10 mb-4">
        <div class="card p-0">
            <div class="row col-md-12 ml-1"
                style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                <div class="col-md-12 text-center ml-0">
                    <h2>Reply Review &amp; Feedback</h2>
                </div>

            </div>
            <div class="row col-md-12 p-3 " style="padding: 20px;">
                <div class="col-md-4 p-3 ml-5" style=" border-bottom: 1px solid #f2f2f2;">
                    <div class="row mb-3">

                        <div class="col-md-6 text-left "><img
                                src="{{ asset('storage/assets/buyer/avatar/' . $review->buyer_id->avatar) }}"
                                class="img img-circle" width="50" height="50"> <b>{{ $review->buyer_id->full_name }}</b>
                        </div>
                        <div class="col-md-6 text-right ">{{ date('Y-m-d', strtotime($review->created_at)) }}</div>
                    </div>
                    <p>{{ $review->review_message }}.</p>
                </div>
                @foreach ($review->replies as $reply)
                    @if ($reply->reply_by->id == $shopper->id && $reply->reply_type == 'shopper')
                    <div class="row col-md-12 p-3 " style="padding: 20px;">
                    <div class="col-md-4 offset-8" style=" border-bottom: 1px solid #f2f2f2;">
                        <div class="row mb-3">
                            <div class="col-md-6 text-left "><img
                                    src="{{ asset('storage/assets/' . $reply->reply_type . '/avatar/' . $reply->reply_by->avatar) }}"
                                    class="img img-circle" width="50" height="50">
                                <b>{{ $reply->reply_by->full_name }}</b></div>
                            <div class="col-md-6 text-right ">{{ date('Y-m-d', strtotime($reply->created_at)) }}</div>
                        </div>
                        <p>{{ $reply->message }}.</p>
                    </div>
                    </div>
                    @else
                    <div class="row col-md-12 p-3 " style="padding: 20px;">
                    <div class="col-md-4 p-3 ml-5" style=" border-bottom: 1px solid #f2f2f2;">
                        <div class="row mb-3">

                            <div class="col-md-6 text-left "><img
                                    src="{{ asset('storage/assets/' . $reply->reply_type . '/avatar/' . $reply->reply_by->avatar) }}"
                                    class="img img-circle" width="50" height="50">
                                <b>{{ $reply->reply_by->full_name }}</b></div>
                            <div class="col-md-6 text-right ">{{ date('Y-m-d', strtotime($review->created_at)) }}</div>
                        </div>
                        <p>{{ $reply->message }}.</p>
                    </div>
                    </div>
                    @endif
                @endforeach
            </div>

            <div class="row col-md-12 text-center ml-1"
                style="padding: 10px; text-align: center !important; color:white; border-top: solid #ccc 1px; ">
                <div class="form-inl  col-8 m-auto">
                    <form name="replyMsg">
                        <input type="hidden" name="review_id" value="{{ $review->id }}" />
                        <input name="reply_by" value="{{ Auth::guard('shopper')->user()->id }}" type="hidden" />
                        <input name="reply_type" value="shopper" type="hidden" />
                        <input type="text" placeholder="Enter message to reply review" name="message" class="form-control col-12"
                            style="height: 40px; border-radius: 0px;">
                            <button class="btn btn-secondary btn-sm col-2" type="submit"
                            style="height: 40px; border-radius: 0px;">Reply</button>
                        </form>
                    <ul id="error_list"></ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script>
        FormHandler('replyMsg', {
            requestUrl: '/shopper/reply-review',
            requestType: 'POST',
            cb: response => { // your call back function to be implemented after db communnication
                if (response.success) {
                    return swal({
                        title: 'Success!!',
                        text: 'Product Edited successfully',
                        icon: 'success'
                    }).then(() => {
                        window.location.reload()

                    })
                }
                ErrorHandler(response.errors ?? {})
                return swal({
                    title: 'Failed!!',
                    text: 'There was an error replying review',
                    icon: 'error'
                })
            }
        })

    </script>
@endpush
