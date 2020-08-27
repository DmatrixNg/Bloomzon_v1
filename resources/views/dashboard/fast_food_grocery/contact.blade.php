
        
@extends('dashboard.grocery.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b><i class="fa fa-headset"></i> Write Admin</b></h1>
                </div>
                <div class="row mb-3" style="background-color: #fff !important; padding: 20px;">
                    <div class="col-md-6 card p-5 offset-3">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;">Subject: </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Subject: " style="height: 40px; border-radius: 0;">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Request Type: </label>
                                <select name="" id="" class="form-control" style="height: 40px; border-radius: 0;">
                                    <option value="Delivery">Delivery</option>
                                    <option value="Service">Service</option>
                                    <option value="Fund">Fund</option>
                                    <option value="Request">Request</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Email address</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control" style="border-radius: 0;" placeholder="Type your message: "></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        @endsection
    