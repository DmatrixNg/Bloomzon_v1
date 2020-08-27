@extends('layouts.dashboard.admin')

@section('content')
<div class="col-md-10">
    <div class="row mb-5 mt-5">
        <div class="col-md-12 text-center">
            <h2>Review &amp; Feedback</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{-- <form action="#" class="col-10 search-wrap">
                <div class="input-group">
                    <div class="input-group-prepend text-light">
                        <button class="btn btn-outline-secondary input-group-text dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ALL</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Location</a>
                            <a class="dropdown-item" href="#">Seller</a>
                            <a class="dropdown-item" href="#">Category</a>

                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </form> --}}

        </div>
        <div class="col-md-4"></div>
        {{-- <div class="col-md-2">
            <div class="dropdown col-2">
                <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="">Name</a>
                    <a class="dropdown-item" href="">Date</a>
                    <a class="dropdown-item" href="">Account</a>
                </div>
            </div>
        </div> --}}
    </div>


    <div class="container" style="background-color: #fff; padding: 20px;">
    
        <div class="row" style="color: #02499B">
            <div class="col-md-2">
                <h5>Names</h5>
            </div>
            <div class="col-md-4">
                <h5>Review Messages</h5>
            </div>
            <div class="col-md-2">
                <h5>Products</h5>
            </div>
            <div class="col-md-2">
                <h5>For User</h5>
            </div>
            <div class="col-md-2">
                <h5>Action</h5>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            @foreach($reviews as $review)
                <div class="row" style="background-color: white; color: black; border-radius: 20px; padding: 20px; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-2">
                        <p>{{ $review->buyer_id->full_name }}</p>
                    </div>
                    <div class="col-md-4">
                        <p>{{ $review->review_message }}</p>
                    </div>
                    <div class="col-md-2">
                        <a href="{{url('product-details/'.base64_encode($review->product_id->id))}}" target="_blank"><img src="{{asset('storage/assets/product/avatars/'.$review->product_id->avatars[0])}}" height="35" width="35" alt="bag"></a>
                    </div>
                    <div class="col-md-2">
                        <p>{{$review->seller->full_name}}</p>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown col-2">
                            @if($review->status)
                                <button class="btn btn-sm btn-primary" onclick="change_status({{ $review->id }})">Approved</button>
                            @else
                                <button class="btn btn-sm btn-danger" onclick="change_status({{ $review->id }})">Rejected</button>
                            @endif
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
            
        </div>
    
    </div>
    
    <div class="container">
        {{ $reviews }}
    </div>
</div>
@endsection

@push('scripts')
    <script>
        function change_status(id){
            return swal({
                text: "do you want to change the review status?",
                buttons: true,
            }).then((e)=>{
                if(e){
                makeRequest('/admin/reveiw/change_status/'+id).then((e)=>{
                    console.log(e);
                    if(e.success){
                    return swal("Status has been changed").then(e => window.location.reload());
                    }
                    return swal("Error changing status")
                })
                }
            })
            }
    </script>
        
@endpush