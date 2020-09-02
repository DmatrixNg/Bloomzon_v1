@extends('layouts.dashboard.admin')

@section('content')
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of All Newsletters</h2>
            </div>
            <div class="col-md-7"></div>
            <div class="col-md-2 text-right d-none">
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
              <table class="table"  id="users-table" class="display table">
                <thead class="bg-primary text-white"> 
                  <tr>
                    <th>ID</th>
                    <th>Subject</th>
                    <th>Message</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($newsletters as $newsletter )
                  <tr>
                    <td>{{$newsletter->id}}</td>
                    <td>{{$newsletter->subject}}</td>
                    <td>{{$newsletter->message}}</td>
                  </tr>
                  @endforeach
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

</script>
@endpush