@extends('layouts.dashboard.subadmin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
        <div class="row mb-5 mt-5">
            <div class="col-md-12 text-center">
                <h2>Account Statement</h2>
            </div>
        </div>
        <div class="row">
        <div class="col-md-4 text-center">
            <div class="dropdown col-2">
                <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="">Name</a>
                    <a class="dropdown-item" href="">Date</a>
                    <a class="dropdown-item" href="">Account</a>
                </div>
            </div>

        </div>
        <div class="col-md-4 text-center">
            <div class="dropdown col-2">
                <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Month
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="">January</a>
                    <a class="dropdown-item" href="">February</a>
                    <a class="dropdown-item" href="">March</a>
                    <a class="dropdown-item" href="">April</a>
                    <a class="dropdown-item" href="">May</a>
                    <a class="dropdown-item" href="">June</a>
                    <a class="dropdown-item" href="">July</a>
                    <a class="dropdown-item" href="">August</a>
                    <a class="dropdown-item" href="">September</a>
                    <a class="dropdown-item" href="">October</a>
                    <a class="dropdown-item" href="">November</a>
                    <a class="dropdown-item" href="">December</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 justify-content-center">
            <div class="dropdown col-2">
                <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Currency
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="">Naira</a>
                    <a class="dropdown-item" href="">Dollars</a>
                    <a class="dropdown-item" href="">Pounds</a>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding: 20px;">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead style="background-color: #02499B; color: white;">
                                <tr>
                                    <th>User Type</th>
                                    <th>Subscription</th>
                                    <th>Total Sales</th>
                                    <th>Payment</th>
                                    <th>Net Balance</th>
                                    <th>Month</th>
                                </tr>
                                </thead>

                                <tbody>

                                <tr>
                                    <td>Sellers</td>
                                    <td>Premium</td>
                                    <td>N6,000</td>
                                    <td>N4,000</td>
                                    <td>N2,000</td>
                                    <td>March</td>
                                </tr>
                                <tr>
                                    <td>Manufacturers</td>
                                    <td>Premium</td>
                                    <td>$6,000</td>
                                    <td>N4,000</td>
                                    <td>N2,000</td>
                                    <td>April</td>
                                </tr>
                                <tr>
                                    <td>Sellers</td>
                                    <td>Premium</td>
                                    <td>N6,000</td>
                                    <td>N4,000</td>
                                    <td>N2,000</td>
                                    <td>March</td>
                                </tr>
                                <tr>
                                    <td>Manufacturers</td>
                                    <td>Premium</td>
                                    <td>$6,000</td>
                                    <td>N4,000</td>
                                    <td>N2,000</td>
                                    <td>April</td>
                                </tr>
                                <tr>
                                    <td>Sellers</td>
                                    <td>Premium</td>
                                    <td>N6,000</td>
                                    <td>N4,000</td>
                                    <td>N2,000</td>
                                    <td>March</td>
                                </tr>
                                <tr>
                                    <td>Manufacturers</td>
                                    <td>Premium</td>
                                    <td>$6,000</td>
                                    <td>N4,000</td>
                                    <td>N2,000</td>
                                    <td>April</td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center m-5 p-5">
            <button class="btn m-auto" style="background-color:#AF2E1D; color:white;">Print</button>
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
        @endsection
