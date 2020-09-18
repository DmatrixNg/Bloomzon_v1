@extends('layouts.dashboard.admin')
@section('page_title')
    Admin Dashboard
@endsection

@section('content')

    <div class="row col-md-10 p-0" style="
    height: -webkit-fill-available;
">
      <div class="row col-12 justify-content-end" style="">

        <form  action="?" method="get">

          <input type="search" name="q" placeholder="Search Name " value="@if(request()->q){{request()->q}}@endif">
        </form>
      </div>
      <div class="row col-12">


      @php
      if (request()->q) {

        $subadmins = \App\Admin::where('role','sub_admin')->where('full_name','like','%'.request()->q.'%')->get();
        // dd($subadmins);
      }
      if (empty($subadmins)) {
        echo "No User with that Name found";
      }
      @endphp
        @foreach ($subadmins as $subadmin)
          @php
            // dd($subadmin);
          @endphp
            <div class="col-md-3 p-2">
                <div class="card p-2">
                    <img src="{{ asset('storage/assets/admin/avatar/' . $subadmin->avatar) }}"
                        class="img img-circle m-auto" width="120" height="120">
                    <ul class="list-group list-group-flush pt-3">
                        <li class="list-group-item" style="font-size: 16px;">
                            ID
                            <span
                                class="badge badge-primary badge-pill pull-right">{{ substr($subadmin->full_name, 0, 3) . $subadmin->id }}</span>
                        </li>
                        <li class="list-group-item" style="font-size: 16px;">
                            Full Name
                            <span class="badge badge-primary badge-pill pull-right">{{ $subadmin->full_name }}</span>
                        </li>
                        <li class="list-group-item" style="font-size: 16px;">
                            Location
                            <span class="badge badge-primary badge-pill pull-right">{{ $subadmin->address }}</span>
                        </li>
                        <li class="list-group-item" style="font-size: 16px;">
                            Status
                            <span
                                class="badge badge-primary badge-pill pull-right">{{ $subadmin->status ? 'Active' : 'Inactive' }}</span>
                        </li>
                        <li class="list-group-item text-center">
                            {{-- <a href=""
                                class="btn btn-danger btn-sm pull-left">Details</a> --}}
                            <a class="btn btn-sm text-white btn-{{ $subadmin->status ? 'success' : 'warning' }}"
                                onclick="changeStatus({{$subadmin->id}})">{{ $subadmin->status ? 'Active' : 'Inactive' }}</a>
                            <a class="btn btn-sm btn-danger text-white" onclick="deleteUser({{$subadmin->id}})">Delete</a>
                            <a class="btn btn-sm btn-primary text-white" href="{{ url('/admin/create_query', $subadmin->id) }}" onclick="querySubadmin()">Query</a>
                </div>

                </li>
                </ul>
            </div>
        @endforeach

    </div>
    </div>



@endsection

@push('scripts')
    <script>
        function deleteUser(id) {
            return swal({
                text: "Do you want to delete user?",
                buttons: true,
            }).then((e) => {
                if (e) {
                    makeRequest('/admin/delete-user/sub_admin/' + id).then((e) => {
                        console.log(e);
                        if (e.success) {
                            return swal("SubAdmin Deleted").then(e => window.location.reload());
                        }
                        return swal("Unable to delete")
                    })
                }
            })
        }

        function changeStatus(id){
          return swal({
                text: "Do you want to change status?",
                buttons: true,
            }).then((e) => {
                if (e) {
                    makeRequest('/admin/change-status/sub_admin/' + id).then((e) => {
                        console.log(e);
                        if (e.success) {
                            return swal("Subadmin status changed").then(e => window.location.reload());
                        }
                        return swal("Unable to change status")
                    })
                }
            })
        }
    </script>
@endpush
