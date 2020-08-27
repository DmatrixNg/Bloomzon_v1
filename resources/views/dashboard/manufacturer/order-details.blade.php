@extends('dashboard.manufacturer.layout')
@section('page_title')
    Manufacturer's Dashboard - Order Request Details
@endsection

        @section('content')
        <div class="col-md-10">
           <div class="row row justify-content-center mt-5"><h1 class="">Transaction Details</h1></div>

            <div class="row">
                <div class="col-md-6 offset-3" style="padding: 30px;">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="">Service Description</h3>
                        </div>
                        <div class="col-md-8 card pt-4 pb-4">
                            <p>Type Semi automatic, Automatic, Water Source, river water, open well water, municipal water supply, borewell water, Purification capacity 10000 L/hour</p>
                        </div>
                    </div>

                </div>
            </div>

           <div class="row mt-5">
               <div class="col-md-6 offset-3">
                   <div class=" justify-content-center">
                       <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                           <div class="col-md-6 text-left">
                               Consultant:
                           </div>
                           <div class="col-md-6 text-right">
                               <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$order->user_id->name}}</div>
                           </div>
                       </div>
                       <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                           <div class="col-md-6 text-left">
                               Supply Request:
                           </div>
                           <div class="col-md-6">
                               <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$order->id->order_details[0]->product_id->product_name}}</div>
                           </div>
                       </div>
                       <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                           <div class="col-md-6 text-left">
                               Payment Method:
                           </div>
                           <div class="col-md-6">
                               <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$order->payment_method === 1 ? 'Card': 'Cash'}}</div>
                           </div>
                       </div>
                       <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                           <div class="col-md-6 text-left">
                               Amount:
                           </div>
                           <div class="col-md-6">
                               <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{$order->total_amount}}</div>
                           </div>
                       </div>
                       <div class="row p-5" style="border-bottom: 1px solid #f2f2f2;">
                           <div class="col-md-6 text-left">
                               Date:
                           </div>
                           <div class="col-md-6">
                               <div style="border: 1px solid #fff; border-radius: 20px; padding: 8px; text-align: center; width: 100px; float: right;">{{\Illuminate\Support\Carbon::parse($order->created_at)->format('d/m/Y')}}</div>
                           </div>
                       </div>

                   </div>

               </div>
               <div class="col-md-2"></div>
           </div>
        </div>
        @endsection
