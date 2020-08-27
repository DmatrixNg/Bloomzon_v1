@extends('dashboard.manufacturer.layouts.app')

@section('content')
<div class="col-md-10">
            <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
                    <h1 class="text-center m-auto pt-3 pb-3 "><b>Verify Your Account</b></h1>
                </div>
            <div class=" mt-5">
                <div class="col-md-8 offset-2">
                    <form action="{{ url('manufacturer/verify') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group m-5">
                            <label for="registration_document">Upload Company Registration Document</label>
                            <input  id="registration_document" name="registration_document" class="form-control" type="file" placeholder="">
                            @error('registration_document')
                                <small class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group m-5">
                            <label for="registration_id">Company Registration ID</label>
                            <input  id="registration_id" name="registration_id" class="form-control" type="text" placeholder="">
                            @error('registration_id')
                                <small class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group m-5">
                            <label for="proof_of_address">Proof of Address</label>
                            <input  id="proof_of_address" name="proof_of_address" class="form-control" type="file" placeholder="">
                            @error('proof_of_address')
                                <small class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group m-5">
                            <label for="valid_id">Valid ID</label>
                            <input  id="valid_id" name="valid_id" class="form-control" type="file" placeholder="">
                            @error('valid_id')
                                <small class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group m-5">
                            <label for="narration">Narration</label>
                            <textarea  id="narration" name="narration" class="form-control" type="text" rows="6" placeholder="Create an application to be verified"></textarea>
                            @error('narration')
                                <small class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group justify-content-center text-center m-5">
                            <button class="btn" type="submit" style="border: 1px solid white;width: 150px; background-color:#AF2E1D; border-radius: 20px; color: white;">SEND</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
@endsection

