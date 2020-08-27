@extends('layouts.dashboard.admin')

@section('content')
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of All Buyers</h2>
            </div>
            <div class="col-md-7"></div>
            <div class="col-md-2 text-right">
                    <select class="form-control" style="height: 45px; border-radius: 0px;">
                        <option selected="">Sort</option>
                        <option>New</option>
                        <option>Old</option>
                    </select>
            </div>
        </div>
    <div class="panel panel-white">
        <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-responsive"  id="users-table" class="display table">
                <thead class="bg-primary text-white"> 
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
                 @if(count($buyers))
                  @foreach ($buyers as $buyer )
                  <tr>
                    <td>{{$buyer->id}}</td>
                  <td>{{$buyer->full_name}}</td>
                    <td>{{$buyer->email}}</td>
                  <td>{{$buyer->phone_number}}</td>
                  <td>{{$buyer->account_type}}</td>
                  <td>{{$buyer->subscription_date}}</td>
                  <td>{{$buyer->state}}</td>
                  <td>{{$buyer->street_address}}</td>
                  <td>
                    @if($buyer->account_status == 'active')
                      <button class="btn btn-sm bg-success text-white" onclick="change_status({{$buyer->id}})">Active</button>
                    @else
                      <button class="btn btn-sm bg-primary text-white" onclick="change_status({{$buyer->id}})">Inactive</button>
                    @endif
                  </td>
                    <td>
                      <button class="btn btn-sm bg-danger text-white" onclick="deleteUser({{$buyer->id}})">
                        delete
                      </button>
                      {{-- <button class="btn btn-sm" onclick="deUser">
                        delete
                      </button> --}}
                    </td>
                  </tr>    
                  @endforeach
                  @else
                  <div class="alert alert-warning">No buyer Found</div>
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
          makeRequest('/admin/delete-user/buyer/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Buyer Deleted").then(e => window.location.reload());
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
          makeRequest('/admin/change_status/buyer/'+id).then((e)=>{
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