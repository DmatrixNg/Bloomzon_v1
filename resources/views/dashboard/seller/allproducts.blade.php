@extends('layouts.dashboard.seller')
@section('page_title')
    Seller's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row mt-5 mb-5" style="border-bottom: solid 1px #f2f2f2;">
                    <div class="col-md-9">
                        <h1 class="pt-4">My Product Catalogue</h1>
                    </div>
                    <div class="col-md-3 mt-4 text-right">
                        <a href="{{route('seller.add-new-product')}}" class="btn btn-secondary">Add New Product</a>
                    </div>
                </div>

            <div class="row">

                @if(count($products))
                    @foreach($products as $product)
                <div class="col-md-6">
                    <div class="row" style="border: 1px solid #f2f2f2; border-radius: 5px; margin: 10px;">
                    <div class="col-md-3 m-auto">
                        <img src="{{asset( 'storage/assets/product/avatars/' . $product->avatars[0])}}" width="100" height="auto">
                    </div>

                    <div class="col-md-4 text-center p-4">
                        <p><b>Product Name:</b>  {{$product->product_name}}</p>
                        <p><b>Product Price:</b>  {{$product->product_price}}</p>
                        <p><b>Stock Level :</b>  {{$product->stock_level}} </p>

                    </div>
                    <div class="col-md-4 text-right m-auto">
                        <p style="color: grey">{{date($product->created_at)}}</p>
                    <a href="{{url('product-details/'.base64_encode($product->id))}}" target="_blank" class="btn" style="background-color: #AF2E1D; border-radius: 5px; width: 130px; color: white;margin-top:2px">View Details</a>
                    <a href="{{route('seller.edit-product',$product->id)}}" target="_blank" class="btn" style="background-color: #AF2E1D; border-radius: 5px; width: 130px; color: white; margin-top:2px">Edit</a>
                        <a  class="btn" style="background-color: #AF2E1D; border-radius: 5px; width: 130px; color: white; margin-top:2px" onclick="deleteProd(this,{{$product->id}})">Delete</a>


                    </div>
                    </div>
                </div>
                    @endforeach
                    @else
                    <h3> You have not added any product</h3>
                @endif

            </div>


        </div>
        @endsection

        @push('scripts')
        <script>
        async function deleteProd(el, id) {
            return swal({
                text: "Do you want to delete this product?",
                buttons: true
            }).then(
                (val) => {
                    if (val) {
                        makeRequest('/seller/product/delete/' + id).then(
                            (res) => {
                                console.log(res)
                                if(res.success){
                                    
                                    return swal("Product deleted").then(window.location.reload())
                                }
                            }
                        )
                    }
                }
            )

        }
    </script>
        @endpush