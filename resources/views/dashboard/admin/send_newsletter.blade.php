@extends('layouts.dashboard.admin')

@section('content')
<div class="col-md-10">
    <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
        <h1 class="text-center m-auto pt-3 pb-3 "><b>Send Out Newsletter</b></h1>
    </div>
    <div class="mt-5 pt-5">
        <div class="col-md-6 offset-3">
            <form action="{{ url('admin/send-newsletter/') }}" method="POST">
            @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="subject">Subject:</label>
                        </div>
                        <div class="col-md-10">
                            <input  id="subject" name="subject" class="form-control" type="text" placeholder="" required>
                            @error('subject')
                                <span class="text-danger">
                                    <small>{{ $message }}</small>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="image">Image:</label>
                        </div>
                        <div class="col-md-10">
                            <input  id="image" name="image" class="form-control-file" type="file" placeholder="">
                            @error('image')
                                <span class="text-danger">
                                    <small>{{ $message }}</small>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>
                <br>
                <div class="form-group">
                    <label for="message">Messages</label>
                    <textarea style="height: 180px;" name="message_body"  id="message" class="form-control" type="text" placeholder="" required></textarea>
                    @error('message')
                        <span class="text-danger">
                            <small>{{ $message }}</small>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-2">
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                    <div class="col-md-2"></div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection