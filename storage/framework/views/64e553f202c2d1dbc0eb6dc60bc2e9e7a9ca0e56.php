<?php $__env->startSection('content'); ?>
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of All Sellers</h2>
            </div>
            <div class="col-md-7"></div>
        </div>
    <div class="panel panel-white">
        <div class="panel-body">
            <div class="table-responsive">
                <table id="users-table" class="display table" style="width: 100%; cellspacing: 0;"></table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_js'); ?>


<script>

    const base_url  = "<?php echo e(url('/')); ?>";
    const file_path = "<?php echo e(asset('/storage')); ?>";

    jQuery(document).ready(function(e){ //when the page as completed loading start getting restaurants
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });

        get_all_users('sellers')
    })

    function get_all_users(user_type) {
      $.ajax({
        url: base_url + "/admin/get_users/" + user_type,
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
            response[i]['full_name'],
            response[i]['email'],
            response[i]['phone_number'],
            response[i]['state'],
            response[i]['area'],
            response[i]['street_address'],
            '<button class="btn btn-sm btn-warning" data-toggle="modal">Action</button>',
          ])
        }

        $(document).ready(function() {
          $('#users-table').DataTable( {
              data: monitors_array,
              paging: true,
              lengthChange: true,
              searching: true,
              ordering: true,
              info: true,
              autoWidth: false,
              "order": [[ 0, "desc" ]],
              'createdRow': function( row, data, dataIndex ) {
                  $(row).attr('id', 'user_' + data[0]);
                  console.log(data)
              },
              columns: [
                { title: "ID" },
                { title: "Full Name" },
                { title: "Email" },
                { title: "Phone NUmber" },
                { title: "State" },
                { title: "Area" },
                { title: "Street Address" },
                { title: "Action" }
              ],
          } );
        });

      });
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/dashboard/admin/all_sellers.blade.php ENDPATH**/ ?>