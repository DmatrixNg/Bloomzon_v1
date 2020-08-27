@extends('layouts.dashboard.seller')

@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 text-center" style="background-color: #2B2950 !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Review &amp; Feedback</b></h1>
        </div>
        <div class="row col-md-12 mb-3" style="background-color: #fff !important; padding: 20px;">

            <div class="mb-2 p-4" style="border-radius: 20px; background-color: #fcfcfc; width: 100%; border: 1px solid #fcfcfc; text-shadow: #666;">
                <div class="col-md-2">
                    <i class="fa fa-user-circle fa-4x pl-3"></i>
                </div>
                @if(count($reviews = $user_metas->Review))
                    @foreach($reviews as $review)
                        <div class="col-md-4">
                                <span class="badge badge-dark" style="background-color: #2B2950 !important; font-size: 17px;">
                                   Product : {{$review->product_id->product_name}}
                                </span>
                            <p style="font-size: large;">{{$review->review_message}}</p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p>
                                @for( $i=0; $i<$review->rating; $i++)
                                    <span class="fa fa-star"></span>
                                @endfor

                            </p>

                        </div>
                    @endforeach
            </div>

            @else
                <h3> You have not reviewed any product </h3>
            @endif
        </div>
    </div>
@endsection
