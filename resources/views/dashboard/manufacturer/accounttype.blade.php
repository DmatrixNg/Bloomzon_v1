

@extends('dashboard.manufacturer.layout')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <br>
            <div class="text-center align-items-center" style="padding: 80px;">
                <img class="img img-circle" src="../../../../public/manufacturer_asset/img/profil.png" width="120" height="120" style="border-radius: 60px;" >
                <p style="color: #02499B; margin-top: 40px;">Your Package: <strong>BASIC</strong></p>
            </div>

            <br><br>
            <div class="text-center">
                <button class="btn" style="border: 1px solid white; width: 200px; background-color:#AF2E1D; border-radius: 20px; color: white;">Upgrade To Premium</button>
            </div>


        </div>
        @endsection
