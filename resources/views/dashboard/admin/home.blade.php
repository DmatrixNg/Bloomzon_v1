@extends('layouts.dashboard.admin')
@section('content')
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-4">
                <a href="site_analysis">
                    <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                        <i class="fa fa-users fa-4x" style="font-size: 150px;"></i>
                        <h1>Site Visitors</h1>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="all?account_type={{base64_encode(json_encode('seller'))}}">
                    <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;">
                        <i class="fa fa-users fa-4x" style="font-size: 150px;"></i>
                        <h1>All Users</h1>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;
                        vertical-align: middle">
                    <img class="img m-auto" src="super-asset/img/file.png" width="125" height="auto">

                    <h4 style="font-size: 24px;">
                        <b>Month:</b><span> April</span>
                    </h4>
                    <h4 style="font-size: 24px;">
                        <b>Income:</b><span> N10,000,000.00</span>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-md-3">
                <div class="card text-center" style="color: #02499B; background-color: white; padding: 30px;
                        vertical-align: middle">
                    <img class="img m-auto" src="super-asset/img/thumbs.png" width="150" height="auto">
                    <h4 style="font-size: 24px;">
                        <b>Review &amp; Feedback</b>
                    </h4>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card" style="color: #02499B; background-color: white; padding: 30px;">
                    <div class="row ml-3" style="border-bottom: 1px solid #f2f2f2;">
                        <div class="col-1 p-4"><img src="super-asset/img/profil.png" class="img img-circle" width="40" height="40"></div>
                        <div class="col-7">
                            <h4>Admin</h4>
                            <div class="badge badge-primary">How much instruments</div>
                        </div>
                        <div class="col-4 p-4 text-right"><a href="reply-review" class="btn btn-danger btn-sm">View/Reply</a></div>
                    </div>
                    <div class="row ml-3" style="border-bottom: 1px solid #f2f2f2;">
                        <div class="col-1 p-4"><img src="super-asset/img/profil.png" class="img img-circle" width="40" height="40"></div>
                        <div class="col-7">
                            <h4>Admin</h4>
                            <div class="badge badge-primary">How much instruments</div>
                        </div>
                        <div class="col-4 p-4 text-right"><a href="reply-review" class="btn btn-danger btn-sm">View/Reply</a></div>
                    </div>
                    <div class="row ml-3" style="border-bottom: 1px solid #f2f2f2;">
                        <div class="col-1 p-4"><img src="super-asset/img/profil.png" class="img img-circle" width="40" height="40"></div>
                        <div class="col-7">
                            <h4>Admin</h4>
                            <div class="badge badge-primary">How much instruments</div>
                        </div>
                        <div class="col-4 p-4 text-right"><a href="reply-review" class="btn btn-danger btn-sm">View/Reply</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
