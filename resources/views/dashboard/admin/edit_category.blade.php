@extends('layouts.dashboard.admin')

@section('content')
<div class="col-md-10">
    <div class="row align-items-center mt-5 pt-5">
        <div class="col-lg-5 col-sm-5 col-5 ">
            <a href="/" class="brand-wrap">
            </a>
            <!-- brand-wrap.// -->
        </div>
        <div class="col-lg-4 col-sm-12 d-flex order-3 p-2">
            <h4><strong>Edit Category</strong></h4>
        </div>
        <!-- col.// -->
        <div class="col-lg-3 col-sm-9 col-10 order-2 order-lg-3">
            <div class="widgets-wrap d-flex justify-content-end">
                <!-- widget  dropdown.// -->
                <div class="widget-header ml-3">
                    <a href="allcategory.html" class="btn" style="background-color: #fff; color: 02499B; width: 170px; border: solid 2px #02499B; border-radius: 20px;">View All</a>

                </div>
            </div>
            <!-- widgets-wrap.// -->
        </div>
        <!-- col.// -->
    </div>
    <div class="row mt-5">
        
        <div class="col-md-6 offset-3">

            <form>
                <div class="form-group">
                    <label for="name" style="color: #02499B;"><strong>Category Name</strong><abbr title="required field">*</abbr></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="name" class="form-control" type="text" placeholder="Accessories">
                    <small class="text-danger" id="name_error"></small>
                </div>

                <div class="form-group">
                    <label for="icon" style="color: #02499B;"><strong>Icon</strong></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="icon" class="form-control" type="text" placeholder="">
                    <small class="text-danger" id="icon_error"></small>
                </div>

                <div class="form-group">
                    <label for="description" style="color: #02499B;"><strong>Description</strong></label>
                    <textarea style="border: 2px solid #02499B ;color: #02499B;" id="description" class="form-control" type="text" placeholder=""></textarea>
                    <small class="text-danger" id="description_error"></small>
                </div>

                <div class="form-group">
                    <label for="avatar" style="color: #02499B;"><strong>Image</strong></label>
                    <input style="border: 2px solid #02499B ;color: #02499B;" id="avatar" class="form-control" type="file" placeholder="">
                    <small class="text-danger" id="avatar_error"></small>
                </div>
                
                <div class="form-group text-center mt-5">
                    <button class="btn bloomzon_btn">SAVE</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('page_js')
<script>
    function create_coordinator() {

        // disable the submit button so that user can not submite form more than once
        $("#create_coordinator_btn").attr("disabled", true);

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
        "url": base_url + "/admin/create_category",
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
                    $("#error_"+key).text(errors[key])
                }
            }

            }
            
        }
        })
        .done(function (response) {

        // get the menu html table
        var table = $('#coordinator-table').DataTable();

        // add a new row to the table
        let d = table.row.add([
            response['id'],
            response['first_name'],
            response['last_name'],
            response['date_of_birth'].substring(0, 10),
            response['sex'],
            response['email'],
            response['phone_number'],
            response['street_address'],
            response['local_government_area']['name'],
            response['state']['name'],
            response['account_name'],
            response['account_number'],
            response['bank'],
            '<button class="btn btn-sm btn-warning" data-toggle="modal" onclick="get_coordinator(' + response['id'] + ')" data-target="#edit_coordinator_modal">Edit</button>',
            'action',
        ]).draw();

        // reset the form
        $("#register_coordinator_form").trigger("reset");

        });

        // enable the submite button
        // disable the submit button so that user can not submite form more than once
        $("#create_coordinator_btn").attr("disabled", false);
    }
</script>
@endsection