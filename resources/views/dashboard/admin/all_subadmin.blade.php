@extends('layouts.dashboard.admin')
@section('page_title')
Admin Dashboard
@endsection

        @section('content')
        <div class="col-md-10 p-0">



                <div class="row col-md-12">
                  @foreach($subadmins as $subadmin)
                    <div class="col-md-3 p-2">
                        <div class="card p-2">
                            <img src="{{$subadmin->avatar}}" class="img img-circle m-auto" width="120" height="120">
                            <ul class="list-group list-group-flush pt-3">
                              <li class="list-group-item" style="font-size: 16px;">
                                ID
                                <span class="badge badge-primary badge-pill pull-right">{{substr($subadmin->full_name,0,3) . $subadmin->id}}</span>
                              </li>
                              <li class="list-group-item" style="font-size: 16px;">
                                Location
                                <span class="badge badge-primary badge-pill pull-right">{{$subadmin->address}}</span>
                              </li>
                              <li class="list-group-item" style="font-size: 16px;">
                                Status
                                <span class="badge badge-primary badge-pill pull-right">{{$subadmin->status?'Active':'Inactive'}}</span>
                              </li>
                              <li class="list-group-item text-center">
                                  <a href="edit-profile" class="btn btn-danger btn-sm pull-left">Details</a>
                                            <a class="btn btn-{{$subadmin->status?'success':'danger'}}"  onclick="changeStatus($subadmin->id)">{{$subadmin->status?'Active':'Inactive'}}</a>
                                            <a class="btn" onclick="deleteSubadmin()">Delete</a>
                                            <a class="btn" onclick="querySubadmin()">Query</a>
                                        </div>
                                
                              </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach

                </div>




            </div>
        @endsection
