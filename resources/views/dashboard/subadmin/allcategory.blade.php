@extends('layouts.dashboard.subadmin')
@section('page_title')
    Sub Admin's Dashboard - All Categories
@endsection
@php
$categories = \Illuminate\Support\Facades\DB::table('categories as pc')
                               ->leftJoin('sub_categories as sc', 'pc.id', '=', 'sc.id')
                               ->select('pc.id as parent_id', 'pc.name as parent_name', 'sc.id as child_id', 'sc.name as child_name')
                               ->get();
@endphp
        @section('content')
        <div class="col-md-10">
            <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
                <h1 class="text-center m-auto pt-3 pb-3 "><b>All Category</b></h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                <div class="panel panel-white">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead style="background-color: #AF2E1D; color: white;">
                            <tr>
                                <th>Categories</th>
                                <th>Sub - Category</th>
                                <th>No. of Product</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        @endsection
