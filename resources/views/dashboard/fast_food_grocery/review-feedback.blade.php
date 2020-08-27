

@extends('layouts.dashboard.fast_food_grocery')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="card p-0">
                <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-12 text-center ml-0">
                        <h2>Review &amp; Feedback</h2>
                    </div>

                </div>
                <div class="row col-md-12 mb-3" style="padding: 20px;">

                    @if(count($reviews))
                    @foreach($reviews as $review)
                    <div class="mb-2 p-4" style="border-radius: 20px; background-color: #fcfcfc; width: 100%; border: 1px solid #fcfcfc; text-shadow: #666;">
                        <a href="reply-review">
                            <div class="col-md-2">
                            <img src="{{asset('storage/assets/buyer/avatar/'.$review->buyer_id->avatar)}}" class="img img-circle" width="70" height="70">
                            </div>
                            <div class="col-md-4">
                                <span class="badge badge-dark" style="background-color: #2B2950 !important; font-size: 17px;">
                                    {{$review->buyer_id->full_name}}
                                </span>
                                <p style="font-size: large;">{{$review->message}}</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p>
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i < $review->rating)
                                    <span class="fa fa-star-o"></span>
                                    @else
                                    <span class="fa fa-star"></span>
                                    @endif

                                    @endfor
                                   
                                </p>
                            <a href="{{url('fast_food_grocery/reply-review/'.$review->id)}}" class="btn btn-outline-primary mr-4" style="border: solid 1px #666;">Reply</button>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @else
                    <h3 class="alert alert-warning">
                        No reviews
                    </h3>
                    @endif


                </div>
                </div>
            </div>
        @endsection
