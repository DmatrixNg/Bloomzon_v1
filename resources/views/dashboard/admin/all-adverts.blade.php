

@extends('layouts.dashboard.admin')
@section('page_title')
    Admin Dashboard
@endsection

        @section('content')
        <div class="col-md-10">
            <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
                <h1 class="text-center m-auto pt-3 pb-3 "><b>All Advert List</b></h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="adverts" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead>
                            <tr>
                                <th><h5>User ID</h5></th>
                                <th><h5>Amount</h5></th>
                                <th><h5>Views</h5></th>
                                <th><h5>Position</h5></th>
                                <th><h5>Advertise Banner</h5></th>
                                <th><h5>Action</h5></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($adverts as $advert)
                            <tr>
                                <td>{{$advert->user_id->full_name ?? ''}}</td>
                                <td>{{money($advert->amount,'USD')}}</td>
                                <td>{{$advert->views}}</td>
                                <td>{{$advert->advert_position}}</td>
                                <td>
                                    <img src="{{asset('storage/assets/advert/avatar/'.$advert->avatar)}}" width="100">
                                </td>
                                <td>
                                    <select name="ad_status" id="ad_status" onchange="changeStatus(this,{{$advert->id}})" class="form-control form-group" style=" color: white; background-color: #2B2950;">
                                        <option  @if($advert->status == 0) selected @endif  value="1" >Activate</option>
                                        <option @if($advert->status == 1)  selected @endif  value="0" >Deactivate</option>
                                    </select>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        @endsection

        @push('scripts')
        <script>
            $(document).ready( function () {
            $('#adverts').DataTable();
        } );
        </script>
        <script>
             function changeStatus(el,id){
        return swal({
            text:"Do you want to change this advert status?",
            buttons:true
        }).then((change)=>{
            var res = makeRequest('/admin/change-advert-status',{
                    status:el.value,
                    id:id
                }).then(
                    (e)=>{
                        console.log(e)
                        if(e.success) return swal("Advert status changed")
                        return swal("Problem changing status")
                    }
                );
           
        })
       }
        </script>
        
        @endpush