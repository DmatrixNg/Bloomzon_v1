
@extends('layouts.dashboard.admin')
@section('page_title')
    Fast Food & Groceries Dashboard
@endsection

        @section('content')
        <div class="col-md-10 p-0">
                <div class="row col-md-12">
                    @foreach($account_type as $user)
                        <div class="col-md-3 p-2">
                            <div class="card p-2">
                                <img src="{{asset($user->profile_pic_url)}}" class="img img-circle m-auto" width="120" height="120">
                                <ul class="list-group list-group-flush pt-3">
                                    <li class="list-group-item" style="font-size: 16px;">
                                        ID
                                        <span class="badge badge-primary badge-pill pull-right">{{$user->id}}</span>
                                    </li>
                                    <li class="list-group-item" style="font-size: 16px;">
                                        Location
                                        <span class="badge badge-primary badge-pill pull-right">{{$user->address}}</span>
                                    </li>
                                    <li class="list-group-item" style="font-size: 16px;">
                                        Status
                                        <span class="badge badge-primary badge-pill pull-right">{{$user->status}}</span>
                                    </li>
                                    <li class="list-group-item text-center">
                                        <a href="edit-profile?user={{base64_encode(json_encode($user))}}" class="btn btn-danger btn-sm pull-left">Details</a>
                                        <div class="dropdown pull-right">
                                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" data-user-id="{{$user->id}}">
                                                <a class="dropdown-item" data-action-type="post" data-status="active" href="#">Activate</a>
                                                <a class="dropdown-item" data-action-type="post" data-status="inactive" href="#">Deactivate</a>
                                                <a class="dropdown-item" data-action-type="delete" data-status="delete" href="#">Delete</a>
{{--                                                <a class="dropdown-item" href="#">Query</a>--}}
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        @endsection

@push('scripts')
    <script>
        [...document.querySelectorAll('.dropdown-menu')].map( elem =>
            elem.addEventListener('click', e => {
                const data = {status: e.target.getAttribute('data-status'), _method: e.target.getAttribute('data-action-type') !== 'delete' ? 'put' : undefined};
                axios[[e.target.getAttribute('data-action-type')]](`/api/v1/crud/users/${elem.getAttribute('data-user-id')}`, data).then( res => {
                    res.data.success && swal({
                        title: 'Success',
                        text: 'Action successful',
                        icon: 'success'
                    })
                })
            }, false)
        )
    </script>
@endpush
