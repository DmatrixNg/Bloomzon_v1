@extends('layouts.front')
@section('page_title')
    {{ __("Track Delivery")}}
@endsection
@section('content')

    <div class="card container my-5 py-5 z-depth-1">

        <div class="col-md-9">
            <div class="tab-content m-auto">
                <div id="grid-products" class="tab-pane active">
                    <div class="row mb-4">
                        <div class="col-md-8 offset-2 form-inline">
                            <label><b>{{ __("Enter Your Order ID")}}:</b></label>
                            <input id="order_id" class="form-control ml-5" style="height: 50px; border-radius: 0px;" />
                            <button class="btn btn-lg btn-danger" style="border-radius: 0px;"
                                onclick="trackId()">{{ __("Track")}}</button>
                        </div>
                    </div>
                    @if (isset($delivery) && count($delivery))
                        <div class="row ">
                            @foreach ($delivery as $order)
                            <div class="col-md-4 p-3 mb-4 mr-2">
                                <div class="card" style="width: 18rem;">
                                    <div class="badge pull-right text-white" style="top: 0; right: 0; position: absolute; background-color: green;">{{$order->status}}</div>

                                    <img src="{{ asset('storage/assets/product/avatars/' . $order->product->avatars[0]) }}"
                                        class="img card-img-top" width="60" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ __("Order ID")}}:</span><span class="pl-5">{{ $order->order_id }}
                                        </h5>
                                        <p class="card-text"></p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">{{ __("Seller")}}:
                                          {{-- @php
                                            dd($order->seller)
                                          @endphp --}}
                                            {{ $order->seller->full_name }}</li>
                                        <li class="list-group-item">{{ __("Buyer")}}:
                                            {{ $order->order->orderable->full_name }}</span></p>
                                        </li>
                                        <li class="list-group-item"><p><span style="font-weight: bolder">{{ __("Billing
                                            Address")}}:</span>{{ $order->order->orderable->billing_address }}
                                        </li>
                                        <li class="list-group-item">{{ __("WareHouse Status")}}:
                                            {{ $order->shopper_status }}</span></p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            @endforeach
                        </div>

                        </div>
                    @elseif(isset($id) && $id != null)
                    <h4 class="alert alert-warning">{{ __("No order found with the ID")}} :  {{$id}}</h4>
                     @else
                        <h4>{{ __("Please enter order ID to track your delivery")}}</h4>
                    @endif
                    <div class="row m-auto">

                        <img class="img img-responsive" src="{{ asset('assets/frontend/img/map.png') }}" width="100%"
                            height="100%">

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
    <script>
        var order_id = document.getElementById('order_id');

        function trackId() {
            console.log(order_id)
            if (order_id.value == '') {
                return swal("Please enter order id");
            }
            window.location.href = "{{url(app()->getLocale().'/track-delivery/')}}/" + order_id.value
        }

    </script>
@endpush
