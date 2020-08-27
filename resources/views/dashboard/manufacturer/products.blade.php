@extends('dashboard.manufacturer.layouts.app')

@section('content')
    <div class="col-md-10">
        <div class="col-md-12 text-center mb-5"
            style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Your Products</b></h1>
            <a href="{{ route('manufacturer.add-product') }}"
                style="border: 1px #fff solid; color: #fff; padding: 10px; border-radius: 20px; height: 40px; margin-top: 10px;">Add
                Product</a>
        </div>

        @if(count($products))
            @foreach($products as $product)

                <div class="row col-md-6 mr-2">
                    <div
                        style="background-color: white !important; padding: 20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); border-radius: 0px !important; border: 1px solid #f2f2f2;">
                        <div class="col-md-4 m-auto">
                                <?php $image = count($product->avatars) == 0 ? 'avatar.png' : $product->avatars[0]; ?>
                            <img src="{{ asset('storage/assets/product/avatars/' . $image) }}" height="120" width="170"
                                style="border-radius: 50%">
                        </div>
                        <div class="col-md-8 text-center">
                            <h3>{{ substr($product->product_description, 0, 100) . '...' }}</h3>
                            <a href="{{ route('manufacturer.edit-product', $product->id) }}" style="border-radius: 25px;"
                                type="button" class="btn btn-danger btn-sm mb-2">Edit</a>
                            <a href="#" onclick="deleteProd(this,{{ $product->id }})" style="border-radius: 25px;" type="button"
                                class="btn btn-danger btn-sm mb-2">Remove</a>
                        </div>
                    </div>
                </div>
            @endforeach

        @else
            <div class="row col-md-6 mr-2">
                <div class="col-12 alert alert-warning">
                    <h4>You have no Products</h4>
                </div>
            </div>
        @endif


    </div>


    <script>
        async function deleteProd(el, id) {
            return swal({
                text: "Do you want to delete this product?",
                buttons: true
            }).then(
                (val) => {
                    if (val) {
                        makeRequest('/manufacturer/product/delete/' + id).then(
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

@endsection
