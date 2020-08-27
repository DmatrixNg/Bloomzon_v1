@extends('dashboard.manufacturer.layout')
@section('page_title')
    Manufacturer's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="padding: 10px; text-align: center !important; border-bottom: #f2f2f2 solid 1px;">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Add Product</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-8 p-5 offset-2">
                        <form name="manAddProductFirm">
                            <div class="form-group">
                                <label for="featured_image_url" style="font-size: 16px;;"> Featured Image : </label>
                                <input type="file" name="featured_img_url" class="form-control" id="featured_image_url" placeholder="Subject: " style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group">
                                <label for="product_name" style="font-size: 16px;;">Product Name: </label>
                                <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Subject: " style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group">
                                <label for="product_description" style="font-size: 16px;;">Product Description</label>
                                <textarea name="product_description" id="product_description" cols="30" rows="10" class="form-control" style="border-radius: 0;" placeholder=""></textarea>
                            </div>
                           <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                            <div class="form-inline">
                                <label class="mr-5" for="product_price" style="font-size: 16px;">Amount: </label>
                                <select name="product_currency" id="" class="form-control" style="height: 40px; border-radius: 0;">
                                    <option value="1">Naira</option>
                                    <option value="2">Dollar</option>
                                    <option value="3">Pound</option>
                                </select>
                                <input type="text" name="product_price" class="form-control" id="product_price" placeholder="" style=" height: 40px; border-radius: 0; ">
                            </div>

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
        FormHandler('manAddProductFirm', {
            requestUrl: '/api/v1/crud/products',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!!',
                        text:  'Product Added successfully',
                        icon: 'success'
                    })
                }
                console.log(response);
                return swal({
                    title: 'Failed!!',
                    text:   'There was an error Adding product, please try again.',
                    icon:   'error'
                })
            }
        })
    </script>
@endpush
