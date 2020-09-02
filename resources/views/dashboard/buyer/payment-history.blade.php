@extends('layouts.dashboard.buyer')
@section('page_title')
    Payment History
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="col-md-12 mt-4 mb-4">
                    <div class="row">
                        <div class="col-md-3">

                            <div class="form-inline ">
                                <label for="exampleFormControlInput1" class="col-md-4" style="font-size: 20px; color: #666; font-weight: 500;">Statement:</label>
                                <select class="col-md-8 form-control">
                                    <option>Checkout</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <div class="form-inline">
                                {{-- <label for="exampleFormControlInput1" class="col-md-4" style="font-size: 20px; color: #666; font-weight: 500;">Month:</label> --}}
                                {{-- <select class="col-md-8 form-control">
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
                                </select> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card m-0 p-0">
                      {{-- @php
                        dd($payments)
                      @endphp --}}
                        @isset($payments)
                        <table class="table text-center table-bordered m-0" id="payment_history">
                            <thead style="background-color:  #003B88; color: #fff; font-size: 16px; vertical-align: middle;">
                                <tr style="height: 60px; text-align: center !important;" class="text-center">
                                    <th class="text-center" style="border: solid 3px #ddd;">QUANTITY</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">SELLER </th>
                                    <th class="text-center" style="border: solid 3px #ddd;">AMOUNT</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">MODE</th>
                                    <th class="text-center" style="border: solid 3px #ddd;">DATE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payments as  $payment)

                                    <tr style="height: 60px;">

                                        <td style="border: solid 1px #ddd;">{{count($payment->order_details) }}</td>
                                        <td style="border: solid 1px #ddd;"><a href="/seller-details/{{$payment->order_details[0]->seller->id}}">{{$payment->order_details[0]->seller->company_name }}</a></td>
                                        <td style="border: solid 1px #ddd;">{{$payment->total_amount}}</td>
                                        <td style="border: solid 1px #ddd;">{{$payment->payment_method}}</td>
                                        <td style="border: solid 1px #ddd;">{{date('Y-M-d',strtotime($payment->created_at))}}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        {{-- <div class="row col-md-12 text-center m-auto">
                                    <nav aria-label="Page navigation example">
                                      <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                      </ul>
                                    </nav>
                        </div> --}}
                            @else
                            @endisset
                    </div>

                </div>
            </div>
        @endsection
@push('scripts')
<script>
    $(document).ready(function(){
        $('#payment_history').DataTable()
    })
</script>
@endpush
