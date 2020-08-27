
        
@extends('dashboard.manufacturer.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10"  style="background-color: white; padding: 10px;">
            <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
                    <h1 class="text-center m-auto pt-3 pb-3 "><b>Transaction Attachment</b></h1>
                </div>
                <div class="row col-md-12 p-4 text-center" style="background-color: #AF2E1D;">
                    <h3 class="text-white m-auto">Transaction ID: Ose21</h3>
                </div>
            <div class="row mt-5">

                <div class="col-md-6">
                    <div class="row"  style="border: 1px solid #f2f2f2; border-radius: 5px; margin: 10px;">
                    <div class="col-md-6 text-center m-auto">
                        <h3><i class="fas fa-book mr-4"></i> Policies</h3>
                    </div>
                    <div class="col-md-2 text-right m-auto">
                        <a href="#" class="btn btn-danger mb-3 mt-3">Print</a>
                        <a href="#"  data-toggle="modal" data-target="#editpolicy" class="btn btn-danger mb-3">Update</a>
                    </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row"  style="border: 1px solid #f2f2f2; border-radius: 5px; margin: 10px;">
                    <div class="col-md-6 text-center m-auto">
                        <h3><i class="fas fa-handshake mr-4"></i> Agreements</h3>
                    </div>
                    <div class="col-md-2 text-right m-auto">
                        <a href="#" class="btn btn-danger mb-3 mt-3">Print</a>
                        <a href="#"  data-toggle="modal" data-target="#editpolicy" class="btn btn-danger mb-3">Update</a>
                    </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="row"  style="border: 1px solid #f2f2f2; border-radius: 5px; margin: 10px;">
                    <div class="col-md-6 text-center m-auto">
                        <h3><i class="fas fa-envelope mr-4"></i> Payment Receipt</h3>
                    </div>
                    <div class="col-md-2 text-right m-auto">
                        <a href="#" class="btn btn-danger mb-3 mt-3">Print</a>
                        <a href="#"  data-toggle="modal" data-target="#editpolicy" class="btn btn-danger mb-3">Update</a>
                    </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="row"  style="border: 1px solid #f2f2f2; border-radius: 5px; margin: 10px;">
                    <div class="col-md-6 text-center m-auto">
                        <h3><i class="fas fa-users mr-4"></i> List of Requests</h3>
                    </div>
                    <div class="col-md-2 text-right m-auto">
                        <a href="#" class="btn btn-danger mb-3 mt-3">Print</a>
                        <a href="#"  data-toggle="modal" data-target="#editpolicy" class="btn btn-danger mb-3">Update</a>
                    </div>
                    </div>
                </div>


            </div>
        </div>
        @endsection
    