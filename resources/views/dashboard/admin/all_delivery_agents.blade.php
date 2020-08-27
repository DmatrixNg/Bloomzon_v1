@extends('layouts.dashboard.admin')

@section('content')
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of All Delivery Agents</h2>
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
                <th> State</th>
                <th>Street Address</th>
                <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 @if(count($delivery_agents))
                  @foreach ($delivery_agents as $delivery_agent )
                  <tr>
                    <td>{{$delivery_agent->id}}</td>
                  <td>{{$delivery_agent->full_name}}</td>
                    <td>{{$delivery_agent->email}}</td>
                  <td>{{$delivery_agent->phone_number}}</td>
                  <td>{{$delivery_agent->state}}</td>
                  <td>{{$delivery_agent->street_address}}</td>
                    <td><button class="btn btn-sm bg-danger text-white" onclick="deleteUser({{$delivery_agent->id}})">
                      delete
                    </button></td>
                  </tr>    
                  @endforeach
                  @else
                  <div class="alert alert-warning">No Delivery Agent Found</div>
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
          makeRequest('/admin/delete-user/delivery_agent/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Delivery Agent Deleted").then(e => window.location.reload());
            }
            return swal("Unable to delete")
          })
        }
      })
    }
</script>
@endpush