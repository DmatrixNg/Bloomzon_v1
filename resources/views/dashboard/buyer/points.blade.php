@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="col-md-12 mt-4 mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row text-center text-white p-3 mr-1" style="border-radius: 5px; background-color: #02499B;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-chart-line fa-4x"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>MY POINTS</h4>
                                    <h3><b>{{$points->total_point ?? 0}}</b></h3>
                                    <p>Total Available Points</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row text-center text-white pt-3 pb-3 mr-1" style="border-radius: 5px; background-color: firebrick;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-chart-pie fa-4x"></i>
                                </div>
                                <div class="col-md-9">

                                    <h3><b>Earned Points: </b> ${{$points->amount ?? 0}} </h3>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row text-center  pt-4 pb-4 text-white p-3 mr-1" style="border-radius: 5px; background-color: #02499B;">
                                <div class="col-md-3 m-auto">
                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                </div>
                                <div class="col-md-9">
                                    <h4>Make an order to earn 100 points</h4>
                                    <button class="btn btn-danger"><a href="{{url(app()->getLocale().'/shop')}}" target="_blank" class="text-white"> Start Shopping </a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                        <table id="dataTable" class="table text-center table-bordered m-0 p-0">

                          @php
                            // dd(auth()->guard('buyer')->user()->orders)
                          @endphp

                            @if(@$points->total_point)
                                <thead style="background-color:  #003B88; color: #fff; font-size: 16px; vertical-align: middle;">
                                <tr style="height: 60px; text-align: center !important;" class="text-center">
                                    <th class="text-center" style="border: solid 3px #ddd;">DAY</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">TOTAL PURCHASE </th>
                                    <th class="text-center" style="border: solid 3px #ddd;">POINTS EARNED</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">AVAILABLE POINTS</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{-- @foreach(auth()->guard('buyer')->user()->orders as $order) --}}
                                    <tr style="height: 60px;">
                                        <td style="border: solid 1px #ddd;">{{@$points->created_at->format('d/m/y g:i A')}}</td>
                                        <td style="border: solid 1px #ddd;">{{@$points->purchase_count}}</td>
                                        <td style="border: solid 1px #ddd;">${{@$points->amount}}</td>
                                        <td style="border: solid 1px #ddd;">{{@$points->total_point - ($points->used_point * 100)}}</td>
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>

                        </table>

                    @else
                        <h3> You have not earned any points yet. start shopping to earn points </h3>
                    @endif
                </div>
            </div>
        @endsection

        @push('scripts')
        <script>
                $(document).ready(function(){
                    $("#dataTable").DataTable();
                })
        </script>
        @endpush
