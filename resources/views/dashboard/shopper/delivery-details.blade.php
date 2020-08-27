@extends('layouts.dashboard.shopper')
@section('page_title')
    Shopper's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="p-0">
                <div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-12 text-center ml-0">
                        <h1 style="color: #02499B;"><b>Delivery Request Details</b></h1>
                    </div>

                </div>
                <div class="col-md-12 mt-0" style="background-color: #fff;">
                    <div class="row pt-4">
                        <div class="col-md-4 mt-5 ml-4">
                            
                            <h4><span style="font-weight: bolder">Seller Details:</span> {{$order->seller_id->full_name}},  </h4><br>
                            
                            <h5><span style="font-weight: bolder">No of Product:</span> {{$order->product->quantity}}</h5><br>
                            <h5><span style="font-weight: bolder">Billing Address:</span> {{$order->buyer_id->billing_address}}</h5><br>
                            <hr />
                            <h5><span style="font-weight: bolder">Buyer:</span> {{$order->buyer_id->full_name}}</h5><br>
                            <h5><span style="font-weight: bolder">Contact No.:</span> {{$order->buyer_id->phone_number}}</h5>
                            <p><span style="font-weight: bolder">State: </span> <span class="ml-5">{{$order->buyer_id->state}}</span></p><br><br>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <h4><span style="font-weight: bolder">Product(s):</span>
                                @foreach($order->product->avatars as $ord)
                                <img src="{{asset('storage/assets/product/avatars/'.$ord)}}" width="80" height="80">
                                @endforeach
                            </h4>
                        </div>


                    </div><br><br><hr>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            
                        </div>

                        <div class="col-md-4">
                           <div class="form-group">
                            <label> Current Status:</label>
                            <p class="badge bg-warning">{{ $order->shopper_status}}</p>
                            
                           </div>
                           @if($order->shopper_status != 'in_stock')
                            <div  class="form-group">
                                <label>Status:</label>
                                <select id="order_status" class="form-control" onchange="checkStock(this)">
                                    <option value=""> Select Order Status </option>
                                    <option value="in_stock">In stock</option>
                                    <option value="yet_to_arrive">Yet to arrive</option>
                                </select>
                            </div>
                            @endif
                            <br><br>
                        </div>
                    </div><br>

                    <div class="row text-center">
                        <div class="col-md-12 text-center">
                            <a href="{{route('shopper.store-in-warehouse',$order->id)}}" hidden id="proceed_btn" style="border-radius: 25px; width: 140px;" type="button" class="btn btn-danger mr-5">Proceed</a>
                            {{-- <button style="border-radius: 25px; width: 140px;" type="button" class="btn btn-info" id="updateOrderStatus">Save</button>                        </div> --}}
                    </div><br>
                </div>
                </div>
            </div>
        @endsection

@push('scripts')
   <script>
       function checkStock(el){
        return swal({
            text:"Do you want to change this order status?",
            buttons:true
        }).then((change)=>{
            var res = makeRequest('/shopper/change-order-status',{
                    shopper_status:el.value,
                    id:`{{$order->id}}`
                });
            if(el.value == 'in_stock'){
                console.log(res);
            document.getElementById('proceed_btn').removeAttribute('hidden');

           }else{

               document.getElementById('proceed_btn').setAttribute('hidden',true)

           }
        })
       }
   </script>

@endpush
