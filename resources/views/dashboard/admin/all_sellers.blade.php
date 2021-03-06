@extends('layouts.dashboard.admin')

@section('content')
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of {{$bloomzon}} Sellers</h2>
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
                   @if(count($sellers))
                    @foreach ($sellers as $seller )
                    <tr>
                      <td>{{$seller->id}}</td>
                    <td> <a href="{{ url(app()->getLocale().'/seller-details', $seller->id) }}" target="_blank">{{$seller->full_name}}</a> </td>
                      <td>{{$seller->email}}</td>
                    <td>{{$seller->phone_number}}</td>
                    <td>{{$seller->account_type}}</td>
                    <td>{{$seller->subscription_date}}</td>
                    <td>{{$seller->state}}</td>
                    <td>{{$seller->street_address}}</td>
                    <td>
                      @if($seller->account_status == 'active')
                        <button class="btn btn-sm bg-success text-white" onclick="change_status({{$seller->id}})">Active</button>
                      @else
                        <button class="btn btn-sm bg-primary text-white" onclick="change_status({{$seller->id}})">Inactive</button>
                      @endif
                    </td>
                      <td>
                        <button class="btn btn-sm bg-danger text-white" onclick="deleteUser({{$seller->id}})">
                        delete
                      </button>
                      <button class="btn btn-sm @if($seller->is_bloomzon)bg-warning @else bg-success @endif text-white" onclick="makeBloomzon({{$seller->id}})">@if($seller->is_bloomzon)remove bloomzon @else make bloomzon @endif</button>
                    </td>
                    </tr>
                    @endforeach
                    @else
                    <div class="alert alert-warning">No Seller Found</div>
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
          makeRequest('/admin/delete-user/seller/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Seller Deleted").then(e => window.location.reload());
            }
            return swal("Unable to delete")
          })
        }
      })
    }

    function makeBloomzon(id){
      return swal({
        text: "Do you want to change seller type?",
        buttons: true,
      }).then((e)=>{
        if(e){
          makeRequest('/admin/make-bloomzon-seller/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Seller type changed").then(e => window.location.reload());
            }
            return swal("Unable to change seller type")
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
          makeRequest('/admin/change_status/seller/'+id).then((e)=>{
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
