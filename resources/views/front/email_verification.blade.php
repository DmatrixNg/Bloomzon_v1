@extends('layouts.front')
@section('page_title')
    Home
@endsection
@section('content')
        <div class="mm-page mm-slideout" id="mm-0">
            <div class="container-fluid">

                <div style="max-width: 600px; margin: auto; padding: 100px 100px 100px 100px;">

                    <div class="text-center">
                        <h2>Email Verification</h2>

                            @if(session()->has('message'))
                                <div class="alert alert-info">
                                    {{ session()->get('message') }}
                                </div>
                            @endif


                        <form method="post" action="{{ url('manufacturer/verify_email') }}">
                        @csrf
                            <input type="text" name="verification_code" style="width: 100%; padding: 20px; font-size: 30px; text-align: center; margin-bottom: 20px; border: 2px solid rgba(0, 0, 0, .2); border-radius: 4px;" maxlength="4"/>
                            <button type="submit" value="Verify" class="btn btn-success text-center" style="font-size: 20px; background-color: #013677;" style="border: none;">Verify</button>
                        </form>

                        <p>Didn't recieve confirmation email? <br/> <a href="">Resent Confirmation Email</a></p>

                    </div>
                </div>
            </div>
        </div>
@endsection
