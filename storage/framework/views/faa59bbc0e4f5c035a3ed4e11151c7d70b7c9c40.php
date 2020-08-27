

<?php $__env->startSection('content'); ?>
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of All Sellers</h2>
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
                <table id="user_list" class="display table" style="width: 100%; cellspacing: 0;"></table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_js'); ?>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->

<script>

    const base_url  = "<?php echo e(url('/')); ?>";
    const file_path = "<?php echo e(asset('/storage')); ?>";

    jQuery(document).ready(function(e){ //when the page as completed loading start getting restaurants
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });

        get_all_category('#category_id')

    })

    function get_all_monitors() {
        $.ajax({
        url: base_url + "/admin/get_users/",
        type: "POST",
        error: function(error) {
            console.log(error);
        }
        })
    .done(function (response) {

      console.log(response);

      var monitors_array = []
      
      // loop through the returnes response containtaining the monitors
      for (var i = 0; i < response.length; i++) {
        monitors_array.push([
          response[i]['id'],
          response[i]['first_name'],
          response[i]['last_name'],
          response[i]['date_of_birth'].substring(0, 10),
          response[i]['sex'],
          response[i]['email'],
          response[i]['phone_number'],
          response[i]['street_address'],
          response[i]['local_government_area']['name'],
          response[i]['state']['name'],
          response[i]['account_name'],
          response[i]['account_number'],
          response[i]['bank'],
          '<button class="btn btn-sm btn-warning" data-toggle="modal" onclick="get_monitor(' + response[i]['id'] + ')" data-target="#edit_monitor_modal">Edit</button>',
          'action',
        ])
      }

      $(document).ready(function() {
        $('#monitors-table').DataTable( {
            data: monitors_array,
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false,
            "order": [[ 0, "desc" ]],
            'createdRow': function( row, data, dataIndex ) {
                $(row).attr('id', 'monitor_' + data[0]);
                console.log(data)
            },
            columns: [
              { title: "ID" },
              { title: "First Name" },
              { title: "Last Name" },
              { title: "Date Of Birth." },
              { title: "Sex" },
              { title: "Email" },
              { title: "Phone Number" },
              { title: "Street Address" },
              { title: "LGA" },
              { title: "State" },
              { title: "Account Name" },
              { title: "Account Number" },
              { title: "Bank" },
              { title: "Edit" },
              { title: "Status" }
            ],
        } );
      });

    });
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/admin/all_users.blade.php ENDPATH**/ ?>