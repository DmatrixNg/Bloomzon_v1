

@extends('dashboard.manufacturer.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
           <div class="row row justify-content-center mt-5"><h1 class="text-white">Delivery Status</h1></div>

           <div class="row mt-5">
               <div class="col-md-6 offset-3 text-center pt-4 pb-4 text-white" style="background-color: #6278ae; border-radius: 15px;">
                   <h3>Transaction ID: <span>Ose218</span></h3>
                   <h3>Manufacturer ID: <span>Paul145</span></h3>
               </div>
           </div>

            <div class="row">
                <div class="col-md-8 offset-2" style="padding: 30px;">
                    <div class="row" style="background-color: #fff;">
                        <div class="col-md-4 p-4 text-center">
                            <img src="../../../../public/manufacturer_asset/img/logitech.png" height="150" width="150">
                        </div>
                        <div class="col-md-4 p-4 text-center">
                            <img src="../../../../public/manufacturer_asset/img/bag.png" height="150" width="150">
                        </div>
                        <div class="col-md-4 p-4 text-center">
                            <img src="../../../../public/manufacturer_asset/img/shoe.png" height="150" width="150">
                        </div>
                    </div>

                </div>
            </div>

           <div class="row mt-5">
               <div class="col-md-6 offset-3">
                   <div class="text-white justify-content-center">
                       <div class="row p-5">
                           <div class="col-md-8 offset-2">
                               <select class="form-control">
                                   <option>Delivery Action</option>
                                   <option>Processing</option>
                                   <option>On Transit</option>
                                   <option>Delivered to Client</option>
                                   <option>Await Balance Payment</option>
                                   <option>Closed</option>
                               </select>
                           </div>
                       </div>

                   </div>

               </div>
               <div class="col-md-2"></div>
           </div>
        </div>
        @endsection
