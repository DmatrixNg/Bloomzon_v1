@extends('layouts.dashboard.admin')
@section('page_title')
    Sub Admin Dashboard
@endsection

@section('content')
    <div class="col-md-10">
        <div class="row col-md-12">
            @if(count($brands))
                @foreach($brands as $brand)
                    <div class="col-md-3 p-2">
                        <div class="card p-2">
                            <div class="badge bg-{{$brand->status == 1?'success':'warning'}} badge-sm">{{$brand->status == 1?'Active':'Deacticated'}}</div>
                            <img src="{{ asset('storage/assets/brand/' . $brand->avatar) }}" class="img img-circle m-auto"
                                width="120" height="120">
                            <ul class="list-group list-group-flush pt-3 text-center">
                                <li class="list-group-item" style="font-size: 20px;">
                                    <span class="badge badge-primary badge-pill pull-right">{{ $brand->brand_name }}</span>
                                </li>
                                <li class="list-group-item" style="font-size: 20px;">
                                    <p>{{ substr($brand->brand_description, 0, 10) }}...</p>
                                </li>
                                <li class="list-group-item text-center">
                                    <button onclick="deleteBrand({{$brand->id}})" class="btn btn-danger btn-sm pull-left">Delete</button>

                                        <button class="btn btn-outline-secondary btn-sm"
                                            onclick="changeStatus({{$brand->id}},{{ $brand->status == 1 ? 0 : 1 }})" type="button"
                                            aria-expanded="false">
                                            {{$brand->status == 1? 'Deactivate' :'Activate' }}
                                        </button>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-warning">No banner added to the system</div>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function changeStatus(id, val) {
            return swal({
                text: "Do you want to change brand status?",
                buttons: true
            }).then((e) => {
                if (e) {
                    makeRequest('/admin/change-brand-status', {
                        id: id,
                        status: val
                    }).then((e) => {
                        if (e.success) {
                            return swal("Status updated successfully").then(
                                e=>{
                                    window.location.reload()
                                } 
                            )

                        }
                    })
                }
            })

        }
        function deleteBrand(id) {
            return swal({
                text: "Do you want to delete this brand?",
                buttons: true
            }).then((e) => {
                if (e) {
                    makeRequest('/admin/delete-brand/'+id).then((e) => {
                        if (e.success) {
                            return swal("Status delete successfully").then(
                                e=>{
                                    window.location.reload()
                                } 
                            )
                        }
                    })
                }
            })

        }

    </script>
@endpush
