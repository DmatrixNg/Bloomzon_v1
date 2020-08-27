
        
@extends('layouts.dashboard.networking_agent')
@section('page_title')
    Networking Agent Dashboard
@endsection

@section('content')
    <div class="col-md-10">
        <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
            <h1 class="text-center m-auto pt-3 pb-3 "><b>Verification</b></h1>
        </div>

        <div class="">
            <div class="col-md-8">
                @if(session()->get('message'))
                    <div class="alert alert-success">Profile activation request sent successsfully</div>
                @endif
                <form action="{{ url('networking_agent/verify_account') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group m-5">
                        <label for="account-number">Proof of Address</label>
                        <input name="proof_of_address" id="account-number" class="form-control" type="file" placeholder="">
                        @error('proof_of_address')
                            <small class="text-danger">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>
                    <div class="form-group m-5">
                        <label for="validid">Valid ID</label>
                        <input name="valid_id" id="validid" class="form-control" type="file" placeholder="">
                        @error('valid_id')
                            <small class="text-danger">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>
                    <div class="form-group m-5">
                        <label for="narration">Narration</label>
                        <textarea name="narration" id="narration" class="form-control" type="text" rows="6" placeholder="Create an application to be verified"></textarea>
                        @error('narration')
                            <small class="text-danger">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                    </div>
                    <div class="form-group justify-content-center text-center m-5">
                        <button submit class="btn" style="border: 1px solid white;width: 150px; background-color:#AF2E1D; border-radius: 20px; color: white;">SEND</button>
                    </div>

                </form>
               
            </div>
        </div>
    </div>
@endsection
    