
        
@extends('layouts.dashboard.subadmin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row align-items-center mt-5 mb-5">
                <div class="col-lg-8 col-sm-5 col-5 ">
                    <h2 class="">Manufacturers Management</h2>
                    <form action="#" class="col-10 search-wrap">
                        <div class="input-group">
                            <div class="input-group-prepend text-light">
                                <button class="btn btn-outline-secondary input-group-text dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ALL</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Location</a>
                                    <a class="dropdown-item" href="#">Seller</a>
                                    <a class="dropdown-item" href="#">Category</a>

                                </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div class="col-lg-2 col-sm-12 d-flex order-3 p-2 text-white">
                    <button type="button" class="btn" style="margin-top:20px; background-color:#02499B; color: white; border-radius: 20px; border: 1px solid white;">Send</button>
                </div>
                
                <div class="col-lg-2 col-sm-9 col-10 order-2 order-lg-3">
                    <div class="widgets-wrap d-flex justify-content-end">


                        
                        <div class="widget-header ml-3">
                            <div class="dropdown col-2">
                                <a style="margin-top:20px; background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="">Name</a>
                                    <a class="dropdown-item" href="">Date</a>
                                    <a class="dropdown-item" href="">Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-md-12">
                    <div class="panel panel-white">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead style="background-color: #AF2E1D; color: white;">
                            <tr>
                                <th>Names</th>
                                <th>Emails</th>
                                <th>Phone No.</th>
                                <th>Request</th>
                                <th>Messages <button style="background-color: #AF2E1D; color: white; border-radius: 20px; border: 1px solid white;">reply</button></th>
                                <th>Attach</th>
                            </tr>
                            </thead>

                            <tbody>

                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>paulose@ gmail.com</td>
                                <td>081234678764</td>
                                <td>Renew 4 tanks Of oil</td>
                                <td>Send in
                                    Retail of Pie</td>

                                <td>
                                    <input style="background-color: white;" type="file" class="form-control-file">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                    <nav>
                        <ul class="pagination d-flex justify-content-center flex-wrap pagination-rounded-flat pagination-success">
                            <li class="page-item"><a class="page-link" href="#" data-abc="true"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#" data-abc="true">1</a></li>
                            <li class="page-item"><a class="page-link" href="#" data-abc="true">2</a></li>
                            <li class="page-item"><a class="page-link" href="#" data-abc="true">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" data-abc="true">4</a></li>
                            <li class="page-item"><a class="page-link" href="#" data-abc="true"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        @endsection
    