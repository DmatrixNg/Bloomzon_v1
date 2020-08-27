@extends('layouts.dashboard.professional')
@section('page_title')
    professional's Dashboard
@endsection
@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 text-center"
            style="padding: 10px; text-align: center !important; border-bottom: #f2f2f2 solid 1px;">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Add Product</b></h1>
        </div>
        <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <div class="col-md-8 p-5 offset-2">
                <label for="featured_image_url" style="font-size: 16px;;"> Featured Image : </label>
                <form method="post" action="{{ url('/uploadImage') }}" enctype="multipart/form-data" class="dropzone"
                    name="dropZone" id="dropzone">
                    @csrf
                </form>
                <form name="addProductForm">
                    
                    <input type="hidden" name="seller_id" value="{{ $professional->id }}">
                    <input type="hidden" name="product_type" value="professional"/>
                    {{-- <input type="file" name="avatar" class="d-none" id="myimg" /> --}}

                    <div class="form-group">
                        <label for="product_name" style="font-size: 16px;;">Product Name: </label>
                    <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control" id="product_name"
                            placeholder="Subject: " style="height: 40px; border-radius: 0;">
                    </div>
                    <div class="form-group">
                        <label for="product_description" style="font-size: 16px;;">Product Description</label>
                    <textarea name="product_description" id="product_description" cols="30" rows="10"
                            class="form-control" style="border-radius: 0;" placeholder="">{{$product->product_description}}
                        </textarea>
                    </div>
                   

                    <div class="form-inline">
                        <label class="mr-5" for="product_price" style="font-size: 16px;">Amount ($): </label>
                    <input type="text" name="product_price" value="{{$product->product_price}}" class="form-control" id="product_price" placeholder=""
                            style=" height: 40px; border-radius: 0; ">
                    </div>
                    <div class="form-inline">
                        <label class="mr-5" for="product_sales_price"  style="font-size: 16px;">Actual Amount ($): </label>
                    <input type="text" name="product_sales_price" value="{{$product->product_sales_price}}" class="form-control mt-4" id="product_price" placeholder=""
                            style=" height: 40px; border-radius: 0; ">
                    </div>
                    <div id="error_list"></div>
                    <div class="form-group text-center mt-5">
                        <button class="btn btn-danger m-auto">Add Product</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var count = 0;
        var sto = []; //stores arrays of image file names
        var colors = [];

        FormHandler('addProductForm', {
            requestUrl: '/professional/product/edit/{{$product->id}}',
            requestType: 'POST',
            props: {
                imgs: sto,//
                colors: colors
            },
            //list files uploaded
            cb: response => { // your call back function to be implemented after db communnication
                if (response.success) {
                    return swal({
                        title: 'Success!!',
                        text: 'Product Added successfully',
                        icon: 'success'
                    }).then(() => {
                        window.location.reload()
                        
                    })
                }
                ErrorHandler(response.errors ?? {})
                return swal({
                    title: 'Failed!!',
                    text: 'There was an error Adding the product, please try again.',
                    icon: 'error'
                })
            }
        })


        //dropzone handles multiple images ad store in file then returns the name
        Dropzone.options.dropzone = {
            maxFilesize: 5,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            removedfile: async function(file) {
                var name = file.upload.filename;
                sto = sto.filter(function(el) {
                    return el !== name;
                });

                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            timeout: 5000,
            success: function(file, response) {
                sto.push(response.data);
                console.log(response.data)
            },
            error: function(file, response) {
                console.log(response)
                return false;

            }
        }

    </script>
@endpush
