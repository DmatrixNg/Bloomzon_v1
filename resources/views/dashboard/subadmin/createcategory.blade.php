@extends('layouts.dashboard.subadmin')
@section('page_title')
    SubAdmin Dashboard - Add Category
@endsection

@php
        $categories = \Illuminate\Support\Facades\DB::table('categories')->get();
@endphp
        @section('content')
        <div class="col-md-10">
            <div class="row align-items-center mt-5 pt-5">
                <div class="col-lg-5 col-sm-5 col-5 ">
                    <a href="/" class="brand-wrap">
                    </a>

                </div>
                <div class="col-lg-4 col-sm-12 d-flex order-3 p-2">
                    <h4><strong>Create New Category</strong></h4>
                </div>

                <div class="col-lg-3 col-sm-9 col-10 order-2 order-lg-3">
                    <div class="widgets-wrap d-flex justify-content-end">



                        <div class="widget-header ml-3">
                            <a href="allcategory" class="btn" style="background-color: #fff; color: 02499B; width: 170px; border: solid 2px #02499B; border-radius: 20px;">View All</a>

                        </div>
                    </div>

                </div>

            </div>
            <div class="row mt-5">

                <div class="col-md-6 offset-3">
                    <form name="AddCategoryForm">
                      
                    @if(isset($categories) && count($categories))

                                <div class="form-group mb-5 mt-5">
                                    <label for="category" style="color: #02499B;"><strong>Select Parent Category</strong></label>
                                    <select style="border: 2px solid #02499B ;color: #02499B;" id="category_id" class="form-control" name="category_id">
                                        <option value=""> Select Parent Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                        @endif

                    <div class="form-group mb-5 mt-5">
                        <label for="category" style="color: #02499B;"><strong>Category Name</strong></label>
                        <input style="border: 2px solid #02499B ;color: #02499B;" id="category" name="name" class="form-control" type="text" placeholder="Accessories">
                    </div>

                        <div class="form-group mb-5 mt-5">
                            <label for="category" style="color: #02499B;"><strong>Category Featured Image</strong></label>
                            <input style="border: 2px solid #02499B ;color: #02499B;" id="featured_img_url" class="form-control" name="featured_img_url" type="file" >
                        </div>

                        <div class="form-group mb-5 mt-5">
                            <label for="category" style="color: #02499B;"><strong>Category Description</strong></label>
                            <textarea style="border: 2px solid #02499B ;color: #02499B;" name="description" id="category" class="form-control" type="text" placeholder="Accessories"></textarea>
                        </div>


                    <div class="form-group text-center mt-5">
                        <button class="btn bloomzon_btn">CREATE CATEGORY</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        @endsection

@push('scripts')
    <script>

        const options = {
            requestUrl: '/api/v1/crud/categorys',
            requestType: 'POST',
            cb: response => {
                if(response.success){
                    return swal({
                        title: 'Success!',
                        text: 'Category created successfully!',
                        icon: 'success',
                        button: 'Ok'
                    })
                }
                console.log(response);
                return swal({
                    title: 'Error!',
                    text: 'Error occurred creating category, please try again',
                    icon: 'error',
                    button: 'Try Again'
                })
            }
        };

        const parentCategory = document.getElementById('category_id');

        parentCategory && parentCategory.addEventListener('change', e => {
            if (e.target.value) {
                options.requestUrl = '/api/v1/crud/subCategorys'
            } else {
                options.requestUrl  = '/api/v1/crud/categorys';
            }
        });

        FormHanler('AddCategoryForm', options)
    </script>
@endpush
