@extends('layouts.dashboard.admin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10 p-0">
                <div class="col-md-12 mt-4 mb-4">
                    <div class="row">
                        <div class="col-md-9">
                            <label for="exampleFormControlInput1 " style="font-size: 20px; color: #666; font-weight: 500;">Statement:</label>
                            <div class="form-inline ">
                            <select class="form-control col-md-4" style="height: 45px; border-radius: 0px;">
                                <option selected="">Sort</option>
                                <option>New</option>
                                <option>Old</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1 " style="font-size: 20px; color: #666; font-weight: 500;">Month:</label>
                            <div class="form-inline ">
                                <select class="form-control" style="height: 40px; border-radius: 0px; width: 100%;">
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    <div class="card m-0 p-0">
                        <table class="table text-center table-bordered m-0">
                            <thead style="background-color:  #003B88; color: #fff; font-size: 16px; vertical-align: middle;">
                                <tr style="height: 60px; text-align: center !important;" class="text-center">
                                    <th class="text-center">Users</th>
                                    <th class="text-center">No. of Users</th>
                                    <th class="text-center">Total Sales(N)</th>
                                    <th class="text-center">Product Delivered</th>
                                    <th class="text-center">Payout</th>
                                    <th class="text-center">Total Premium Users &amp; Amount</th>
                                    <th class="text-center">Total Basic Users &amp; Amount</th>
                                    <th class="text-center">Total Amount Subscribed</th>
                                    <th class="text-center">Income</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="height: 60px;">
                                    <td>Buyers</td>
                                    <td>400</td>
                                    <td>4,000,000</td>
                                    <td>600</td>
                                    <td>49</td>
                                    <td>2,000</td>
                                    <td>90,000</td>
                                    <td>79</td>
                                    <td>2,000,000</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td>Sellers</td>
                                    <td>400</td>
                                    <td>4,000,000</td>
                                    <td>600</td>
                                    <td>49</td>
                                    <td>2,000</td>
                                    <td>90,000</td>
                                    <td>79</td>
                                    <td>2,000,000</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td>Manufacturers</td>
                                    <td>400</td>
                                    <td>4,000,000</td>
                                    <td>600</td>
                                    <td>49</td>
                                    <td>2,000</td>
                                    <td>90,000</td>
                                    <td>79</td>
                                    <td>2,000,000</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td>Professional Services</td>
                                    <td>400</td>
                                    <td>4,000,000</td>
                                    <td>600</td>
                                    <td>49</td>
                                    <td>2,000</td>
                                    <td>90,000</td>
                                    <td>79</td>
                                    <td>2,000,000</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td>Networking Agents</td>
                                    <td>400</td>
                                    <td>4,000,000</td>
                                    <td>600</td>
                                    <td>49</td>
                                    <td>2,000</td>
                                    <td>90,000</td>
                                    <td>79</td>
                                    <td>2,000,000</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td>Delivery Merchants</td>
                                    <td>400</td>
                                    <td>4,000,000</td>
                                    <td>600</td>
                                    <td>49</td>
                                    <td>2,000</td>
                                    <td>90,000</td>
                                    <td>79</td>
                                    <td>2,000,000</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td>Shoppers</td>
                                    <td>400</td>
                                    <td>4,000,000</td>
                                    <td>600</td>
                                    <td>49</td>
                                    <td>2,000</td>
                                    <td>90,000</td>
                                    <td>79</td>
                                    <td>2,000,000</td>
                                </tr>
                                <tr style="height: 60px;">
                                    <td>Fast-Foods &amp; Groceries</td>
                                    <td>400</td>
                                    <td>4,000,000</td>
                                    <td>600</td>
                                    <td>49</td>
                                    <td>2,000</td>
                                    <td>90,000</td>
                                    <td>79</td>
                                    <td>2,000,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        @endsection
