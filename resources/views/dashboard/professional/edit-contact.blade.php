

@extends('dashboard.professional-service.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10" style="background-color: #000 !important;">
                <div class="row col-md-12 text-center" style="padding: 10px; text-align: center !important; color:white; border-bottom: 1px solid #333; ">
                    <h1 class="text-center m-auto pt-3 pb-3 "><b>Edit Contact</b></h1>
                </div>
                <div class="row mb-3 " style="background-color: #000 !important; padding: 20px; ">
                    <div class="col-md-8 p-5 offset-2 ">
                        <form>
                            <div class="form-group text-center ">
                                <img src="../../../../public/prof_asset/img/profile.png " class="img img-circle " width="120 " height="120 "><br>
                                <h3 class="text-white">Anabel Olivia</h3>
                                <button class="btn-sm btn btn-danger ">Edit</button>
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Name</label><br>
                                <input type="email " class="form-control col-md-9 " id="exampleFormControlInput1 " placeholder="Anabel Olivia " style="height: 40px; "> <button class="btn btn-secondary btn-sm col-md-2 " style="border-top-left-radius:
                    0px; border-bottom-left-radius: 0px; height: 40px; margin-left: 5px ">Edit</button>
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Phone number</label><br>
                                <input type="email " class="form-control col-md-9 " id="exampleFormControlInput1 " placeholder="0000000000 " style="height: 40px; "> <button class="btn btn-secondary btn-sm col-md-2 " style="border-top-left-radius: 0px;
                    border-bottom-left-radius: 0px; height: 40px; margin-left: 5px ">Edit</button>
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Email</label><br>
                                <input type="email " class="form-control col-md-9 " id="exampleFormControlInput1 " placeholder="Olivia@gmail.com " style="height: 40px; "> <button class="btn btn-secondary btn-sm col-md-2 " style="border-top-left-radius:
                    0px; border-bottom-left-radius: 0px; height: 40px; margin-left: 5px ">Edit</button>
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Address</label><br>
                                <input type="email " class="form-control col-md-9 " id="exampleFormControlInput1 " placeholder="Abuja " style="height: 40px; "> <button class="btn btn-secondary btn-sm col-md-2 " style="border-top-left-radius: 0px; border-bottom-left-radius:
                    0px; height: 40px; margin-left: 5px ">Edit</button>
                            </div>
                            <div class="form-group ">
                                <label for="exampleFormControlInput1 " style="font-size: 16px; color: #fff; font-weight: 500; ">Password</label><br>
                                <input type="password " class="form-control col-md-9 " id="exampleFormControlInput1 " value="************* " style=" height: 40px; ">
                                <button class="btn btn-secondary btn-sm col-md-2 " style="border-top-left-radius: 0px; border-bottom-left-radius: 0px; height: 40px; margin-left: 5px ">Edit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        @endsection
