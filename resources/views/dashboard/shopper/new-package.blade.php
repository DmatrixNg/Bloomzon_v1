

@extends('dashboard.shopper.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="card p-0"><div class="row col-md-12 ml-1" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-8 text-left ml-0">
                        <h2>New Packages</h2>
                    </div>
                </div>
                <div class="row mb-3" style="padding: 20px;">
                    <div class="col-md-12 p-5">
                        <form>
                            <div class="form-group text-left">
                                <label for="exampleFormControlInput1" class="col-md-4" style=" font-size: 16px;; ">Product Type: </label>
                                <input type="file" class="form-control col-md-4" style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-group">
                                <div class=" col-md-6 offset-4">
                                    <img src="../../../../public/shopper/img/shoe_small.png " width="40px " height="40px " class="img img-thumbnail " >
                                    <img src="../../../../public/shopper/img/shoe_small.png " width="40px " height="40px " class="img img-thumbnail " >
                                    <img src="../../../../public/shopper/img/shoe_small.png " width="40px " height="40px " class="img img-thumbnail " >
                                    <img src="../../../../public/shopper/img/shoe_small.png " width="40px " height="40px " class="img img-thumbnail " >
                                    <img src="../../../../public/shopper/img/shoe_small.png " width="40px " height="40px " class="img img-thumbnail " >
                                    <img src="../../../../public/shopper/img/shoe_small.png " width="40px " height="40px " class="img img-thumbnail " >
                                </div>
                            </div>
                            <div class="form-inline pt-5">
                                <label for="exampleFormControlInput1 " class="col-md-4 " style="font-size: 16px; justify-content: start !important;">Quantity:  </label>
                                <input type="text " class="form-control col-md-2 " value="4 " style="height: 40px; border-radius: 0; ">
                                <label class="ml-5">  Date: 20/04/2020</label>
                            </div>
                            <div class="form-inline pt-5">
                                <label for="exampleFormControlInput1 " class="col-md-4 " style="font-size: 16px; justify-content: start !important;">Sender Name:  </label>
                                <input type="text " class="form-control col-md-8 " value=" " style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-inline pt-5">
                                <label for="exampleFormControlInput1 " class="col-md-4 " style="font-size: 16px; justify-content: start !important;">Buyer Name:  </label>
                                <input type="text " class="form-control col-md-8 " value=" " style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-inline pt-5 ">
                                <label for="exampleFormControlInput1 " class="col-md-4 " style="font-size: 16px; justify-content: start !important;">Buyer Phone:  </label>
                                <input type="text " class="form-control col-md-8 " value=" " style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-inline pt-5 ">
                                <label for="exampleFormControlInput1 " class="col-md-4 " style="font-size: 16px; justify-content: start !important;">Billing Address:  </label>
                                <input type="text " class="form-control col-md-8 " value=" " style="height: 40px; border-radius: 0; ">
                            </div>
                            <div class="form-inline pt-5 ">
                                <label for="exampleFormControlInput1 " class="col-md-4 " style="font-size: 16px; justify-content: start !important;">Product Location:  </label>
                                <input type="text " class="form-control col-md-8 " value=" Room 14, Black Box " style="height: 40px; border-radius: 0; ">
                            </div>

                            <div class="form-group m-auto text-center pt-5 ">
                                <a href="scan-code" class=" btn btn-danger btn-lg">Store</a>
                            </div>
                        </form>
                    </div>

                </div>
                </div>
            </div>
        @endsection
