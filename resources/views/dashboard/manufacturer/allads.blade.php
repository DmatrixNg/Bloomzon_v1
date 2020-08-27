@extends('dashboard.manufacturer.layout')
@section('page_title')
    Manufacturer's Dashboard
@endsection

        @section('content')
            <div class="col-md-10">
                @if(count($adverts= $user_metas->Advert))
                    @foreach($adverts as $advert)
                        <div class="col-md-4 p-5">
                            <div class="card p-0">
                                <div class="col-md-12 p-0">
                                    <img src="{{asset($advert->advert_image_url1)}}" class="m-auto" width="100%">
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <p><b>url:</b>&nbsp;&nbsp;&nbsp;{{$advert->advert_link}}</p>
                                    <p><b>Page Section:</b>&nbsp;&nbsp;&nbsp;{{$advert->advert_position}}</p>
                                    <p><b>Amount:</b>&nbsp;&nbsp;&nbsp;{{$advert->amount}}</p>
                                    <p><b>Status:</b>&nbsp;&nbsp;&nbsp;{{$advert->status === 1 ? 'Active': 'inactive'}}</p>
                                    <button style="border-radius: 25px;" type="button" class="btn btn-danger btn-sm mb-2">Delete</button>
                                    <button style="border-radius: 25px;" type="button" class="btn btn-warning btn-sm mb-2">Pause</button>
                                    <button style="border-radius: 25px;" type="button" class="btn btn-info btn-sm">Re-activate</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3> You have no adverts running, create one now </h3>
                @endif
            </div>
        @endsection
