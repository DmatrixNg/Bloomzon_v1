<?php $__env->startSection('content'); ?>
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of All Networking Agents</h2>
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
                <th>Verification Status</th>
                <th>Verify</th>
                <th>Account Status</th>
                <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php if(count($networking_agents)): ?>
                  <?php $__currentLoopData = $networking_agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $networking_agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($networking_agent->id); ?></td>
                  <td> <a href="<?php echo e(url('/networkingagent-details', $networking_agent->id)); ?>" target="_blank"><?php echo e($networking_agent->full_name); ?></a></td>
                    <td><?php echo e($networking_agent->email); ?></td>
                  <td><?php echo e($networking_agent->phone_number); ?></td>
                  <td><?php echo e($networking_agent->account_type); ?></td>
                  <td><?php echo e($networking_agent->subscription_date); ?></td>
                  <td><?php echo e($networking_agent->state); ?></td>
                  <td><?php echo e($networking_agent->street_address); ?></td>
                  <td><?php echo e($networking_agent->verification_status); ?></td>
                  <td>
                    <button class="btn btn-sm bg-success text-white" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
                    data-agent_id="<?php echo e($networking_agent->id); ?>"
                    data-verification_status="<?php echo e($networking_agent->verification_status); ?>" 
                    data-proof_of_address="<?php echo e(asset('storage/networking_agent/proof_of_address/' . $networking_agent->proof_of_address )); ?>" 
                    data-valid_id="<?php echo e(asset('storage/networking_agent/valid_id/' . $networking_agent->valid_id)); ?>"
                    >Verify</button>
                  </td>
                  <td>
                    <button class="btn btn-sm bg-primary text-white" onclick="change_status(<?php echo e($networking_agent->id); ?>)"><?php echo e($networking_agent->account_status); ?></button>
                  </td>
                    <td><button class="btn btn-sm bg-danger text-white" onclick="deleteUser(<?php echo e($networking_agent->id); ?>)">
                      delete
                    </button></td>
                  </tr>    
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                  <div class="alert alert-warning">No Networking Agent Found</div>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Networking Agent Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo e(url('/admin/update_na_verification')); ?>">
        <?php echo csrf_field(); ?>
          <a class="btn btn-primary" id="prof_of_address" href="" target="_blank">View Prof Of Address</a>
          <a class="btn btn-primary" id="valid_id" href="" target="_blank">View ID</a>

          <div class="form-group">
            <label for="status" class="col-form-label"></label>
            <select class="form-control" style="height: 30px;" name="status">
              <option value="">Select Status</option>
              <option value="approve">Approve</option>
              <option value="reject">Reject</option>
            </select>
          </div>

          <input id="agent_id" type="hidden" name="agent_id" value="" />

          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>


<script>

    $(document).ready(function(){
      $("#users-table").DataTable();
    })

    // const asset_url = "<?php echo e(asset('/')); ?>"



    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      // var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

      var verification_status = button.data('verification_status')
      var proof_of_address = button.data('proof_of_address')
      var valid_id = button.data('valid_id')
      var agent_id = button.data('agent_id')


      var modal = $(this)
      // modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('#prof_of_address').attr('href', proof_of_address)
      modal.find('#valid_id').attr('href', valid_id)
      modal.find('#agent_id').val(agent_id)
      // modal.find('.modal-body input').val(recipient)
    })


    function deleteUser(id){
      return swal({
        text: "Do you want to delete user?",
        buttons: true,
      }).then((e)=>{
        if(e){
          makeRequest('/admin/delete-user/networking_agent/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Networking Agent Deleted").then(e => window.location.reload());
            }
            return swal("Unable to delete")
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
          makeRequest('/admin/change_status/networking_agent/'+id).then((e)=>{
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
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/all_networking_agents.blade.php ENDPATH**/ ?>