@extends('layouts.dashboard.admin')

@section('content')
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of All professional</h2>
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
              <th> Phone Number</th>
              <th> Subscription plan</th>
              <th> Subscription Date</th>
              <th> State</th>
              <th>Street Address</th>
              <th>Status</th>
              <th>Action</th>
                </tr>
              </thead>
              <tbody>
               @if(count($professionals))
                @foreach ($professionals as $professional )
                <tr>
                  <td>{{$professional->id}}</td>
                <td>{{$professional->full_name}}</td>
                  <td>{{$professional->email}}</td>
                <td>{{$professional->phone_number}}</td>
                <td>{{$professional->account_type}}</td>
                  <td>{{$professional->subscription_date}}</td>
                <td>{{$professional->state}}</td>
                <td>{{$professional->street_address}}</td>
                <td>
                @if($professional->account_status == 'active')
                      <button class="btn btn-sm bg-success text-white" onclick="change_status({{$professional->id}})">Active</button>
                    @else
                      <button class="btn btn-sm bg-primary text-white" onclick="change_status({{$professional->id}})">Inactive</button>
                    @endif
                </td>
                  <td><button class="btn btn-sm bg-danger text-white" onclick="deleteUser({{$professional->id}})">
                    delete
                  </button></td>
                </tr>    
                @endforeach
                @else
                <div class="alert alert-warning">No professional Found</div>
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
          makeRequest('/admin/delete-user/professional/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Professional Deleted").then(e => window.location.reload());
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
          makeRequest('/admin/change_status/professional/'+id).then((e)=>{
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