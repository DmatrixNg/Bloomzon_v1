@extends('layouts.dashboard.fast_food_grocery')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection


@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 text-center"
            style="background-color: #02499B !important; padding: 10px; text-align: center !important; color:white">
            <h1 class="text-center m-auto pt-3 pb-3"><b>Create Menu</b></h1>
        </div>
        <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
            <div class="col-md-6 card p-5 offset-3">
                <form method="post" action="{{ url('/uploadImage') }}" enctype="multipart/form-data" class="dropzone"
                    name="dropZone" id="dropzone">
                    @csrf
                </form>
                <form name="createMenuForm">
                <input type="hidden" name="seller_id" value="{{$ffg->id}}"/>
                    <div class="form-group mt-5">
                        <label for="name" style="font-size: 16px;;">Food name: </label>
                        <input type="text" id="name" name="name" class="form-control"
                            style="height: 40px; border-radius: 0;">
                    </div>
                    <div class="form-group mt-5">
                        <select name="catalogue_id" id="" class="form-control" style="height: 40px; border-radius: 0;">
                            <option value="">Select Catalogue</option>
                            @foreach($food_catalogues as $catalogue)
                                <option value="{{ $catalogue->id }}">{{ $catalogue->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-5">
                        <label for="description" style="font-size: 16px;;">Description: </label>
                        <textarea id="description" name="description" class="form-control"
                            style="height: 40px; border-radius: 0; "></textarea>
                    </div>
                    <div class="form-inline mt-5 mb-4">
                        <label for="amount" style="font-size: 16px;" class="mr-5">Amount: </label>
                        {{-- <label for="currency"></label> --}}
                        {{-- <select name="currency" id="currency" class="form-control "
                            style="height: 40px; border-radius: 0; ">
                            <option value="3">£</option>
                            <option value="2">$</option>
                            <option value="1">N</option>
                        </select> --}}
                        <input type="text" id="amount" name="amount" class="form-control"
                            style="height: 40px; border-radius: 0; ">
                    </div>
                    <div class="form-inline mt-5 mb-4">
                        <label for="discount" style="font-size: 16px;" class="mr-5">Discount: </label>
                        <input type="text" name="discount" id="discount" class="form-control" style="height: 40px; border-radius: 0; ">
                    </div>
                    <ul id="error_list"></ul>
                    <div class="form-group mt-5 text-center">
                        <button class="btn btn-danger btn-lg">Save</button>
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



        FormHandler('createMenuForm', {
            requestUrl: '/fast_food_grocery/store-food-menu',
            requestType: 'POST',
            props: {
                imgs: sto, //
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

    </script>

@endpush
