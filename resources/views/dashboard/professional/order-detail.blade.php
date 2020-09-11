@extends('layouts.dashboard.professional')
@section('page_title')
    Professional
@endsection

@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">

            <h1 class="text-center m-auto pt-3 pb-3 " style="color: #02499B;"><b>Orders Details</b></h1>
        </div>
        <a class="btn btn-sm btn-success" href="{{route('professional.histogram')}}">Go back</a>
        <div class="row col-md-12 mt-5 mb-5">
            <div class="col-md-3 text-right offset-2">
                <img class="img" src="{{ asset('storage/assets/buyer/avatar/'. $order->orderable->avatar) }}" width="80"
                    height="80" style="border-radius: 40px;">
            </div>
            <div class="col-md-5 text-left">
              @php
                // dd($order->orderable->avatar)
              @endphp
                <h4>BUYER ID:{{ $order->orderable->id }}</h4>
                <h4>LOCATION: {{ $order->orderable->street_address }}</h4>
                <h4>BILLING ADDRESS: {{ $order->orderable->billing_address }}</h4>

            </div>
        </div>
        <div class="row col-md-12 mt-5 mb-5">
            <div class="col-md-12" style="padding: 20px;">
                <h4 style="color: #02499B;" class="text-center">Order Details</h4>
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="text-success" id="state"></div>
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead style="background-color: #02499B; color: white;">
                                    <tr>
                                        <th>Product Id</th>
                                        <th>Address</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
                                        <th>Method</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($orders as $order_detail)

                                        <tr>
                                            <td><a href="{{url(app()->getLocale().'/product-details/'.base64_encode($order_detail->products->id))}}">{{ $order_detail->products->id }}</a></td>
                                            <td>{{ $order->orderable->billing_address }}</td>
                                            <td>{{ $order_detail->quantity }}</td>
                                            <td>{{ $order_detail->products->product_price }}</td>
                                            <td>{{ $order_detail->payment_method === 1 ? 'Card' : 'Cash' }}</td>
                                            <td>
                                            <select class="btn" id="statusChange" onchange="changeStatus(this)" order="{{$order_detail->id}}">
                                                    <option >Change status</option>
                                                    <option value="moved_to_warehouse">Moved to warehouse</option>
                                                    <option value="out_of_stock">Out of stock</option>
                                                    <option value="packaged">Packaged</option>
                                                    <option value="size_not_available">Size not available</option>
                                                    <option value="delivered">Delivered</option>
                                                </select>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <br><br><br>


            {{-- <nav>
                <ul class="pagination d-flex justify-content-center flex-wrap pagination-rounded-flat pagination-success">
                    <li class="page-item"><a class="page-link" href="#" data-abc="true"><i class="fa fa-angle-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#" data-abc="true">1</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-abc="true">2</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-abc="true">3</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-abc="true">4</a></li>
                    <li class="page-item"><a class="page-link" href="#" data-abc="true"><i
                                class="fa fa-angle-right"></i></a></li>
                </ul>
            </nav> --}}
        </div>




    </div>
    <script>

        async function changeStatus(el){
            var r = document.getElementById('state');
            console.log(r)
            var id = el.getAttribute('order');
            r.innerHTML = 'Changing Order Status';
   await makeRequest('/professional/change-order-status', {id:id,status:el.value}).then((e)=>{
       r.innerHTML = e.message;
       setTimeout(function(){
           r.innerHTML = '';
       },3000)
   });
        }
    </script>
@endsection
