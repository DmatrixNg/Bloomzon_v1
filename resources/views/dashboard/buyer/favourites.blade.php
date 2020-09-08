@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Favourites</h2>
                    </div>
                </div>
                <div class="row">
                                @if(count($favorites))


                                    @foreach($favorites as $favourite)

                                        <div class="col-md-4 mb-3">
                                            <div class="row">
                                                <div class=" pt-3 pb-3" style="background-color: #f2f2f2 !important;">
                                                    <div class="col-md-3 m-auto text-left">
                                                        <img src="{{asset('storage/assets/product/avatars/'.$favourite->product_id->avatars[0])}}" width="80">
                                                    </div>
                                                    <div class="col-md-6 m-auto">
                                                        <p><span style="font-weight: bolder">
                                                            <a href="{{ url(app()->getLocale().'/product-details/' . base64_encode($favourite->product_id->id)) }}">
                                                                {{$favourite->product_id->product_name}}
                                                            </a>
                                                        </span></p>
                                                        <p> &#8358;{{$favourite->product_id->product_price}} <small style="text-decoration: line-through;"> &#8358;{{$favourite->product_id->product_sales_price}}</small></p>
                                                        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <i class="fa fa-heart fa-2x" style="color: red"></i><br>
                                                        <button style="border-radius: 25px;" data-favourite-id="{{$favourite->id}}" type="button" id="removefv" onclick="removeFav({{$favourite->id}})" class="btn btn-info mt-3 btn-sm">Remove</button>
                                                        <a href="{{ url(app()->getLocale().'/product-details/' . base64_encode($favourite->product_id->id)) }}"
                                                            class="btn btn-info mt-3 btn-sm"><i class="fa fa-eye"></i>   </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    @endforeach
                                @else
                                <div class="text-center">
                                    <h4>You have added no favorites</h4>
                                </div>
                                @endif


                            </div>
                        </div>
{{--
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Saved for later</h2>
                    </div>
                </div>
                <div class="row">
                                @if(count($savedOrders))


                                    @foreach($savedOrders as $favourite)

                                        <div class="col-md-4 mb-3">
                                            <div class="row">
                                                <div class=" pt-3 pb-3" style="background-color: #f2f2f2 !important;">
                                                    <div class="col-md-3 m-auto text-left">
                                                        <img src="{{asset('storage/assets/product/avatars/'.$favourite->product_id->avatars[0])}}" width="80">
                                                    </div>
                                                    <div class="col-md-6 m-auto">
                                                        <p><span style="font-weight: bolder">
                                                            <a href="{{ url(app()->getLocale().'/product-details/' . base64_encode($favourite->product_id->id)) }}">
                                                                {{$favourite->product_id->product_name}}
                                                            </a>
                                                        </span></p>
                                                        <p> &#8358;{{$favourite->product_id->product_price}} <small style="text-decoration: line-through;"> &#8358;{{$favourite->product_id->product_sales_price}}</small></p>
                                                        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <i class="fa fa-heart fa-2x" style="color: red"></i><br>
                                                        <button style="border-radius: 25px;" data-favourite-id="{{$favourite->id}}" type="button" id="removefv" onclick="removeFav({{$favourite->id}})" class="btn btn-info mt-3 btn-sm">Remove</button>
                                                        <a href="{{ url(app()->getLocale().'/product-details/' . base64_encode($favourite->product_id->id)) }}"
                                                            class="btn btn-info mt-3 btn-sm"><i class="fa fa-eye"></i>   </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    @endforeach
                                @else
                                <div class="text-center">
                                    <h4>You have added no favorites</h4>
                                </div>
                                @endif


                            </div>
                        </div>
        --}}
                        @endsection
@push('scripts')
<script>
    elem = document.getElementById('removefv');
   var fid = elem.getAttribute('data-favourite-id');
function removeFav(id){
    return swal({
           text:"do you want to remove from favorite?",
           buttons: true,

    }).then(e => {
        if(e){
         makeRequest('/buyer/favorite/remove',{
        fid:fid,
        }).then( e => {
            if(e.success)
            return swal("Favorite removed").then(e=>{
                window.location.reload()

            }
            )

        })
    }

    });
}
</script>
@endpush
