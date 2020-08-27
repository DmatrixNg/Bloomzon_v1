

@extends('dashboard.shopper.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">

                  <div class="row" style="">
                      <div class="col-md-4">
                          <p><span style="font-weight: bolder">Seller Details:</span>Ose 221</p>
                          <p><span style="font-weight: bolder">No of Product:</span>4</p>
                          <p><span style="font-weight: bolder">Billing Address:</span>FCT, Abuja</p>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <p><span style="font-weight: bolder">Product:</span><img src="../../../../public/shopper/img/baggy.png" width="50" height="50"><img src="../../../../public/shopper/img/shoe.png" width="50" height="50"></p>
                          <p><span style="font-weight: bolder">Buyer</span>Ose254</p>
                          <p><span style="font-weight: bolder">Contact No.</span>08104309144</p>
                      </div>


                  </div><br>

                  <div class="row" style="">
                      <div class="col-md-4">
                      </div>

                      <div class="col-md-4">
                          <p><span style="font-weight: bolder">State</span>Edo State</p>
                          <div class="form-group">
                              <label>Status</label>
                              <select class="form-control">
                             <option></option>
                             <option></option>
                          </select>
                          </div>
                          <div class="form-group">
                              <label>Assign To Order</label>
                              <select class="form-control">
                              <option>Ready for Pick Up</option>
                              <option></option>
                          </select>
                          </div>
                      </div>

                      <div class="col-md-4"></div>


                  </div><br>

                  <div class="row" style="">
                      <div class="col-md-4">
                          <button style="border-radius: 25px; width: 140px;" type="button" class="btn btn-danger">Proceed</button>
                      </div>
                      <div class="col-md-6"></div>
                      <div class="col-md-2">
                          <button style="border-radius: 25px; width: 140px;" type="button" class="btn btn-info">Save</button>
                      </div>


                  </div><br>
        </div>
        @endsection
