
        
@extends('layouts.dashboard.subadmin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10" style="padding: 20px;">
            <div class="row">
                    <div class="col-md-3 mb-4 text-left">
                        <h2>Inactive Users</h2>
                    </div>
                    <div class="col-md-9 text-right">
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
                            <thead style="background-color: #FFE2E2;">
                            <tr>
                                <th>Names</th>
                                <th>Account Type</th>
                                <th>No. Of Transaction</th>
                                <th>Sales</th>
                                <th>Phone No.</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>

                            <tr>
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
                                <td>
                                    <div class="dropdown col-2">
                                        <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Active
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                            <a class="dropdown-item" href="">Active</a>
                                            <a class="dropdown-item" href="">Inactive</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
                                <td>Ose</td>
                                <td>Buyer</td>
                                <td>5</td>
                                <td>100</td>
                                <td>081234678764</td>
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
            </div>
        </div>
        @endsection
    