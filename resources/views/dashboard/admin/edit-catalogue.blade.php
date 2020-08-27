@extends('layouts.dashboard.admin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #02499B !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Edit Catalogue</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-6 card p-5 offset-3">
                        @if(session()->has('message'))
                            <div class="alart alert-success p-2">{{ session()->get('message')}} </div>
                        @endif
                        <form method="POST" action="{{ url('/admin/update-catalogue') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="avatar" style="font-size: 16px;;"> Catalogue Image: </label>
                                <input type="file" name="avatar" class="form-control" id="avatar" style="height: 40px; border-radius: 0;">
                                <input type="hidden" name="catalogue_id" value="{{ $food_catalogue->id }}">
                            </div>

                            <div class="form-group">
                                <label for="name" style="font-size: 16px;;"> Catalogue Name: </label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="" style="height: 40px; border-radius: 0;" value="{{ $food_catalogue->name }}">
                            </div>

                            <div class="form-group">
                                <label for="description" style="font-size: 16px;;">Description: </label>
                                <textarea name="description" id="description" cols="20" rows="7" class="form-control" style="border-radius: 0;" placeholder="">{{ $food_catalogue->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <ul id="error_list"></ul>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        @endsection
@push('scripts')
    <script>
        FormHandler('foodCatalogue', {
            requestUrl: '/admin/store-catalogue',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!!',
                        text:  'Food Catalogue created successfully',
                        icon: 'success'
                    }).then((e)=>window.location.reload())
                }
                ErrorHandler(response.errors ?? {})
                return swal({
                    title: 'Failed!!',
                    text:   'There was an error creating the catalogue, please try again.',
                    icon:   'error'
                }).then(
                    
                )
            }
        })
    </script>

@endpush
