@extends('layouts.dashboard.admin')

@section('content')
<style>
    tr:nth-child(even) {
        background-color: #00008B !important;
        color: white !important;
    }
</style>
<div class="col-md-10">
    <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
        <h1 class="text-center m-auto pt-3 pb-3 "><b>All Category</b></h1>
    </div>
    <div class="">
        <div class="col-md-12">
        <div class="panel panel-white">
        <div class="panel-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered" style="width: 100%; cellspacing: 0; border: none !important;">
                    <thead style="background-color: #AF2E1D; color: white;">
                    <tr>
                        <th>Categories</th>
                        <th>Sub - Category</th>
                        <th>No. of Product</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td rowspan="{{ count($category->sub_categories) + 1 }}">{{ $category->name }} <a href="javascript:void(0)" class="text-danger" data-toggle="modal" data-target="#edit_category_modal" data-cat_name="{{ $category->name }}">edit</a></td>
                            <td></td>
                            <td></td>
                        </tr>

                        @foreach( $category->sub_categories as $subcategory )
                            <tr>
                                <td>{{ $subcategory->name }}</td>
                                <td> <a href="{{ url('/category/'.$category->name . '/' . $subcategory->name ) }}" target="_blabk">{{count($subcategory->products)}}</a> </td>
                            </tr>
                        @endforeach

                        
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_category_modal" tabindex="-1" aria-labelledby="edit_category_modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit_category_modalLabel">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="cat_name" name="cat_name">
            <input type="text" class="form-control" id="cat_id" name="cat_id">
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('page_js')
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script>

    $('#edit_category_modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var cat_name = button.data('cat_name')
        var cat_id = button.data('cat_id')
        var modal = $(this)

        $('#cat_name').val(cat_name);
        $('#cat_id').val(cat_id);
    })

    const base_url  = "{{ url('/') }}";
    const file_path = "{{ asset('/storage') }}";

    jQuery(document).ready(function(e){ //when the page as completed loading start getting restaurants
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
    })

    function create_category() {

        // disable the submit button so that user can not submite form more than once
        $("#save_category_btn").attr("disabled", true);

        // clear all the error in the DOM
        $('#name_error').text('');
        $('#icon_error').text('');
        $('#description_error').text('');
        $('#image_error').text('');

        // collect the data in the form
        var form = new FormData();
        form.append("name", $('#name').val());
        form.append("icon", $('#icon').val());
        form.append("description", $('#description').val());
        form.append("avatar", $('input[name=avatar]')[0].files[0]);

        // use jquery ajax to make request to the server
        $.ajax({
        "url": base_url + "/admin/store_category",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Accept": "application/json",
        },
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form,
        "dataType": "JSON",
        error: function(response_errors) {

            console.log(response_errors);

            // check if the error is form data validation error
            if(response_errors.responseJSON.message === "The given data was invalid.") {
            
            // get all the form validation errors
            const errors = response_errors.responseJSON.errors;

            // loop the all the validation errors ans show then on the form
            for (var key in errors) {
                if (errors.hasOwnProperty(key)) {
                    // show the error in the DOM
                    $("#" + key + "_error").text(errors[key])
                }
            }

            }
            
        }
        })
        .done(function (response) {
            console.log(response)
        });

        // enable the submite button
        $("#save_category_btn").attr("disabled", false);
    }
</script>
@endsection