@extends('layouts.dashboard.admin')
@section('page_title')
    Sub Admin Dashboard
@endsection

@section('content')
    <div class="col-md-10">
        <div class="row col-md-12">
            @if(count($food_catalogues))
                @foreach($food_catalogues as $catalogue)
                    <div class="col-md-3 p-2">
                        <div class="card p-2">
                          
                            <a href="{{ url('category/' . $catalogue->name . '?fast_food_grocery') }}" target="_blank">
                                <img src="{{ asset('storage/assets/fast_food_grocery/catalogue/' . $catalogue->avatar) }}" class="img img-circle m-auto"
                                width="120" height="120">
                            </a>

                            <ul class="list-group list-group-flush pt-3 text-center">
                                <li class="list-group-item" style="font-size: 20px;">
                                    <span class="badge badge-primary badge-pill pull-right"><a style="color: white;" href="{{ url('category/' . $catalogue->name . '?fast_food_grocery') }}" target="_blank">{{ $catalogue->name }}</a> </span>
                                </li>Zone%20Q
                                <li class="list-group-item" style="font-size: 20px;">
                                    <p>{{ substr($catalogue->description, 0, 10) }}...</p>
                                </li>
                                <li class="list-group-item text-center">
                                    <button onclick="deleteBrand({{$catalogue->id}})" class="btn btn-danger btn-sm pull-left">Delete</button>

                                    <a href="{{ url('admin/edit-catalogue', $catalogue->id) }}" class="btn btn-primary" style="float: right;">Edit</a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-warning">No Catalogue added to the system</div>
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
                text: "Do you want to delete this catalogue?",
                buttons: true
            }).then((e) => {
                if (e) {
                    makeRequest('/admin/delete-catalogue/'+id).then((e) => {
                        if (e.success) {
                            return swal("Catalogue deleted successfully").then(
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
