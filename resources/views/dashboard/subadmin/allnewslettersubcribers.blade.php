
        
@extends('layouts.dashboard.subadmin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row">
                    <div class="col-md-6 mb-4 text-left">
                        <h2>All Newsletter Subscribers</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <form action="#" class="col-10 search-wrap">
                            <div class="input-group">
                                <div class="input-group-prepend text-light">
                                    <button class="btn btn-outline-secondary input-group-text dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ALL</button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
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
                </div>
                <div class="panel panel-white">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead>
                            <tr>
                                <th><h5>S/N</h5></th>
                                <th><h5>Names</h5></th>
                                <th><h5>Email</h5></th>
                                <th><h5>Status</h5></th>
                                <th><h5>Action</h5></th>
                            </tr>
                            </thead>

                            <tbody>

                            <tr>
                                <td>1</td>
                                <td>Ose</td>
                                <td>ose34@gmail.com</td>
                                <td>Active</td>
                                <td>
                                    <div class="dropdown col-2">
                                        <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Active
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="">Active</a>
                                            <a class="dropdown-item" href="">Inactive</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ose</td>
                                <td>ose34@gmail.com</td>
                                <td>Active</td>
                                <td>
                                    <div class="dropdown col-2">
                                        <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Active
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="">Active</a>
                                            <a class="dropdown-item" href="">Inactive</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Ose</td>
                                <td>ose34@gmail.com</td>
                                <td>Active</td>
                                <td>
                                    <div class="dropdown col-2">
                                        <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Active
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="">Active</a>
                                            <a class="dropdown-item" href="">Inactive</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ose</td>
                                <td>ose34@gmail.com</td>
                                <td>Active</td>
                                <td>
                                    <div class="dropdown col-2">
                                        <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Active
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="">Active</a>
                                            <a class="dropdown-item" href="">Inactive</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ose</td>
                                <td>ose34@gmail.com</td>
                                <td>Active</td>
                                <td>
                                    <div class="dropdown col-2">
                                        <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Active
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="">Active</a>
                                            <a class="dropdown-item" href="">Inactive</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ose</td>
                                <td>ose34@gmail.com</td>
                                <td>Active</td>
                                <td>
                                    <div class="dropdown col-2">
                                        <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Active
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="">Active</a>
                                            <a class="dropdown-item" href="">Inactive</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ose</td>
                                <td>ose34@gmail.com</td>
                                <td>Active</td>
                                <td>
                                    <div class="dropdown col-2">
                                        <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Active
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="">Active</a>
                                            <a class="dropdown-item" href="">Inactive</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ose</td>
                                <td>ose34@gmail.com</td>
                                <td>Active</td>
                                <td>
                                    <div class="dropdown col-2">
                                        <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Active
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="">Active</a>
                                            <a class="dropdown-item" href="">Inactive</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ose</td>
                                <td>ose34@gmail.com</td>
                                <td>Active</td>
                                <td>
                                    <div class="dropdown col-2">
                                        <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Active
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="">Active</a>
                                            <a class="dropdown-item" href="">Inactive</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>
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
        @endsection
    