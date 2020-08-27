

@extends('dashboard.professional-service.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
                <div class="row col-md-12 text-center" style="background-color: #AF2E1D !important; padding: 10px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-3 pb-3"><b>Transaction Details</b></h1>

                </div>

                <div class="row col-md-12 mt-5 ">
                    <div class="col-md-2 offset-3">
                        <div class="card text-center p-3 " style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                            <img src="../../../../public/prof_asset/img/bag.png" alt=" " height="120">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card text-center p-3 " style="color: #02499B; background-color: white; padding-right: 0px !important; ">
                            <img src="../../../../public/prof_asset/img/sneakers.png" alt=" " height="120">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card text-center p-3 " style="color: #02499B; background-color: white; padding-right: 0px !important;">
                            <img src="../../../../public/prof_asset/img/e.png" alt=" " height="120">
                        </div>
                    </div>
                </div>

                <div class="row col-md-12 text-center mt-5" style="background-color: #AF2E1D !important; padding: 5px; text-align: center !important; color:white">
                    <h1 class="text-center m-auto pt-2 pb-2"><b>Product Type</b></h1>

                </div>

                <div class="row col-md-12 mt-5 ">
                    <div class="col-md-8 offset-2">
                        <a href="wallet">
                            <div class="p-0 m-0" style="color: #02499B; background-color: white;">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <b>Shoes</b>
                                        <span class="badge badge-primary badge-pill">10</span>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Bags</b>
                                        <span class="badge badge-primary badge-pill">5</span>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Mouse</b>
                                        <span class="badge badge-primary badge-pill">5</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row col-md-12 mt-5">
                    <div class="col-md-8 offset-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Buyer</b>
                                <span class="badge badge-primary badge-pill">Paul234</span></li>
                            <li class="list-group-item"><b>Billing Address</b><span class="badge badge-primary badge-pill">1, Kudang Street, Wuse 2, Abuja FCT.</span></li>
                            <li class="list-group-item"><b>Amount</b><span class="badge badge-primary badge-pill">N50,000</span></li>
                            <li class="list-group-item"><b>Payment Method</b>
                                <span class="badge badge-primary badge-pill">Card</span></li>
                            <li class="list-group-item"><b>Description of Service</b><span class="badge badge-primary badge-pill">This is the total of what i will to order. Thanks.</span></li>
                            <li class="list-group-item"><b>Review/Feedback</b>
                                <span class="badge badge-primary badge-pill">Very well </span>
                            </li>
                            <li class="list-group-item"><b>Rating</b> <span class="badge badge-primary badge-pill"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span></li>
                            <li class="list-group-item"><b>Date</b><span class="badge badge-primary badge-pill">31/05/2020</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        @endsection
