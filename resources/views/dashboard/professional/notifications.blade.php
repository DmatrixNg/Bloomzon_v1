

@extends('layouts.dashboard.professional')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

@section('content')
<div class="col-md-10 mb-4">
    <div class="row pb-2">
        <div class="col-md-9">
            <h1 class="pt-4">Notification</h1>
        </div>
        <div class="col-md-3 mt-4 text-right">
            <button class="btn btn-secondary">Show all</button>
        </div>
    </div>
    @if(count($notifications))
      @foreach($notifications as $notification)
          <div class="card mb-3 p-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-left: 5px solid #02499B;">
              <div class="row p-3 ml-3 mr-5">
                  <div class="col-md-3 text-left">
                      <h4>{{$notification->data['type']}}</h4>
                      @if ($notification->data['type'] == 'login')

                        <i class="fa fa-sign-in-alt mr-3"></i>
                      @elseif ($notification->data['type'] == 'order')
                        <i class="fas fa-shopping-cart"></i>

                      @endif
                      {{-- <img src="assets/img/profil.png" class="img img-circle" width="50" height="50" alt=""> --}}
                  </div>
                  <div class="col-md-6 m-auto">
                      <h5 style="color: #666;">{{$notification->data['message']}}</h5>
                      <p style="font-size: 14px; color: #999;">{{$notification->created_at}}</p>
                  </div>
              </div>
          </div>
          @endforeach

          <div class="row col-md-12 text-center m-auto">
            {{$notifications->links()}}
              {{-- <nav aria-label="Page navigation example">
                  <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
              </nav> --}}
          </div>
      @else
          <h4>You have no notifications</h4>
          @endif
        </div>
@endsection
