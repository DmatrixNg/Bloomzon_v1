@extends('layouts.dashboard.admin')

@section('content')
    <div class="col-md-10">
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
        <div class="col-md-12">
            <div class="card m-0 p-0">
                <canvas id="myChart" width="700" height="300"></canvas>
            </div>
        </div>
    </div>
@endsection
