@extends('layouts.dashboard.buyer')
@section('page_title')
    Buyer's Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="alert alert-warning">All Inactive adverts will need to be activated by the admin</div>
            @if(count($adverts))
                @foreach($adverts as $advert)
                    <div class="col-md-4 p-5">
                        <div class="card p-0">
                            <div class="col-md-12 p-0">
                                <img src="{{ asset('storage/assets/advert/avatar/' . $advert->avatar) }}" height="120"
                                    class="m-auto" width="100%">
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <p><b>url:</b>&nbsp;&nbsp;&nbsp;{{ $advert->advert_link }}</p>
                                <p><b>Page Section:</b>&nbsp;&nbsp;&nbsp;{{ $advert->advert_position }}</p>
                                <p><b>Amount:</b>&nbsp;&nbsp;&nbsp;${{ $advert->amount }}</p>
                            <p><b>Status:</b>&nbsp;&nbsp;&nbsp; {{$advert->status}}</p>
                                <button style="border-radius: 25px;" onclick="deleteAd(this,{{ $advert->id }})" type="button" class="btn btn-danger btn-sm mb-2">Delete</button>
                                @if($advert->status == 'paused')
                                <button style="border-radius: 25px;" type="button" class="btn btn-warning btn-sm mb-2" onclick="changeStatus(1,{{ $advert->id }})">Play</button>
                                @else
                                <button style="border-radius: 25px;" type="button" class="btn btn-warning btn-sm mb-2" onclick="changeStatus(0,{{ $advert->id }})">Pause</button>
                                @endif
    
                                <button style="border-radius: 25px;" type="button"  onclick="changeStatus(2,{{ $advert->id}})" class="btn btn-info btn-sm">Re-activate</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-warning">
                    <h3> You have no adverts running, create one now </h3>
                </div>
            @endif
        </div>
    @endsection
    
    
    @push('scripts')
        <script>
            async function deleteAd(el, id) {
                return swal({
                    title: 'Are you sure you want to delete this advert?',
                    buttons: true
                }).then((val) => {
                    if (val) {
                        makeRequest('/buyer/delete-ads/' + id).then((e)=>{
                            return swal("Advert deleted successfully").then(window.location.reload())
                            console.log(e);
                        })
                    }
                })
    
            }
            async function changeStatus(el, id) {
                console.log(id)
                return swal({
                    title: 'Are you sure you want to change status?',
                    buttons: true
                }).then((val) => {
                    if (val) {
                        makeRequest('/buyer/change-ads-status/'+id,{status:el}).then((e)=>{
                            return swal("Advert status changed successfully").then(window.location.reload())
                            console.log(e);
                        })
                    }
                })
    
            }
    
        </script>
    @endpush
    