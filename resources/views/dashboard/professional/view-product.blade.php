@extends('dashboard.professional-service.layout')
@section('page_title')
    Processional Service Dashboard
@endsection
@section('content')
    <form class="col-md-10" name="updateProductManufacturer">
        <div class="row mt-5 mb-5" style="background-color: #02499B;">
            <h1 style=" color: #fff; margin: 0px auto;" class="p-3">
                <strong>Product Details</strong>
            </h1>
        </div>
        <div class="row ">
            <div class="col-md-3">
                <div class="card text-center p-3 " style="color: #02499B; background-color: white; padding-right: 0px !important; z-index: -1; ">
                    <img src="{{$product->featured_img_url}}" alt=" " height="140" />
                </div>
            </div>
            <p style="color: #000; padding-top: 10px;">
                <input type="file" name="featured_img_url">
            </p>

        </div>
        <div class="row m-5">
            <div class="form-group col-md-12">
                <label for="product_description"><b>Description</b></label>
                <textarea id="product_description" class="form-control" name="product_description" rows="8">{{$product->product_description}}</textarea>
            </div>
        </div>
        <div class="row m-5 text-center">
            <div class="col-md-5 text-right pt-3">
                <label class="mr-5 text-right" for="amount" style="font-size: 16px;"><b>Amount:</b> </label>
            </div>

            <input type="hidden" name="_method" value="put" />

            <div class="col-md-7 form-inline">
                <select name="product_currency" id="" class="form-control" style="height: 40px; border-radius: 0;">
                    <option value="1">Naira</option>
                    <option value="2">Dollar</option>
                    <option value="3">Pound</option>

                </select>
                <input type="text" class="form-control" value="{{$product->product_price}}" id="amount" placeholder="" style=" height: 40px; border-radius: 0; ">
            </div>
        </div>
        <div class="row m-5 text-center">
            <div class="form-group col-md-12 m-auto">
                <button  class="btn btn-danger ">Save</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        FormHandler('updateProductManufacturer', {
            requestUrl: '/api/v1/crud/products/{{$product->id}}',
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
