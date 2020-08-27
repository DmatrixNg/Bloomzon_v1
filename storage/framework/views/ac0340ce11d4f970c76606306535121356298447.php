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
                <th> State</th>
                <th>Street Address</th>
                <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php if(count($networking_agents)): ?>
                  <?php $__currentLoopData = $networking_agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $networking_agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($networking_agent->id); ?></td>
                  <td><?php echo e($networking_agent->full_name); ?></td>
                    <td><?php echo e($networking_agent->email); ?></td>
                  <td><?php echo e($networking_agent->phone_number); ?></td>
                  <td><?php echo e($networking_agent->state); ?></td>
                  <td><?php echo e($networking_agent->street_address); ?></td>
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>


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
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/admin/all_networking_agents.blade.php ENDPATH**/ ?>