@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection

@section('content')
<div class="col-md-10">
    <div class="row col-md-12 text-center" style="background-color: #2B2950 !important; padding: 10px; text-align: center !important; color:white">
        <h1 class="text-center m-auto pt-3 pb-3"><b>Review &amp; Feedback</b></h1>
    </div>
    <div class="row col-md-12 mb-3" style="background-color: #fff !important; padding: 20px;">
        @foreach($reviews as $review)
            <div class="mb-2 p-4" style="border-radius: 20px; background-color: #fcfcfc; width: 100%; border: 1px solid #fcfcfc; text-shadow: #666;">
                <div class="col-md-2">
                    <i class="fa fa-user-circle fa-4x pl-3"></i>
                </div>
                <div class="col-md-4">
                    <span class="badge badge-dark" style="background-color: #2B2950 !important; font-size: 17px;">
                        {{ $review->buyer }}
                    </span>
                    <p style="font-size: large;">{{ $review->review_message }}</p>
                </div>
                <div class="col-md-6 text-right text-danger">
                    <p>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                    </p>
                    {{-- <a href="#" class="btn btn-outline-primary mr-4" style="border: solid 1px #666;">Edit</a> --}}
                </div>
            </div>
        @endforeach

        
    </div>
</div>
@endsection
