@extends('layouts.dashboard.admin')

@section('content')
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of All Shopper</h2>
            </div>
            <div class="col-md-7"></div>
        </div>
    <div class="panel panel-white">
        <div class="panel-body">
          <div class="table-responsive">
            <table id="users-table" class="display table" style="width: 100%; cellspacing: 0;">
              <thead class="text-white bg-primary"> 
                <tr>
                  <th>ID</th>
              <th>Full Name</th>
              <th>Email</th>
              <th> Phone NUmber</th>
              <th> Subscription plan</th>
              <th> Subscription Date</th>
              <th> State</th>
              <th>Street Address</th>
              <th>Status</th>
              <th>Action</th>
                </tr>
              </thead>
              <tbody>
               @if(count($shoppers))
                @foreach ($shoppers as $shopper )
                <tr>
                  <td>{{$shopper->id}}</td>
                  <td> <a href="{{ url('/admin/shopper-details', $shopper->id) }}" target="_blank">{{$shopper->full_name}}</a></td>
                  <td>{{$shopper->email}}</td>
                <td>{{$shopper->phone_number}}</td>
                <td>{{$shopper->account_type}}</td>
                <td>{{$shopper->subscription_date}}</td>
                <td>{{$shopper->state}}</td>
                <td>{{$shopper->street_address}}</td>
                <td>
                  @if($shopper->account_status == 'active')
                      <button class="btn btn-sm bg-success text-white" onclick="change_status({{$shopper->id}})">Active</button>
                    @else
                      <button class="btn btn-sm bg-primary text-white" onclick="change_status({{$shopper->id}})">Inactive</button>
                    @endif
                </td>
                  <td><button class="btn btn-sm bg-danger text-white" onclick="deleteUser({{$shopper->id}})">
                    delete
                  </button></td>
                </tr>    
                @endforeach
                @else
                <div class="alert alert-warning">No Shopper Found</div>
                @endif
              </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
<script>
    $(document).ready(function(){
      $("#users-table").DataTable();
    })

    function deleteUser(id){
      return swal({
        text: "Do you want to delete user?",
        buttons: true,
      }).then((e)=>{
        if(e){
          makeRequest('/admin/delete-user/shopper/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Shopper Deleted").then(e => window.location.reload());
            }
            return swal("Unable to delete")
          })
        }
      })
    }

    function change_status(id){
      return swal({
        text: "do you want to change the user status?",
        buttons: true,
      }).then((e)=>{
        if(e){
          makeRequest('/admin/change_status/shopper/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Status has been changed").then(e => window.location.reload());
            }
            return swal("Error changing status")
          })
        }
      })
    }
</script>
@endpush