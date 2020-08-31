<?php $__env->startSection('content'); ?>
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of All Buyers</h2>
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
              <table class="table table-responsive"  id="users-table" class="display table">
                <thead class="bg-primary text-white"> 
                  <tr>
                    <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th> Phone Number</th>
                <th> Subscription plan</th>
                <th> Subscription Date</th>
                <th> State</th>
                <th>Street Address</th>
                <th>Status</th>
                <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php if(count($buyers)): ?>
                  <?php $__currentLoopData = $buyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($buyer->id); ?></td>
                  <td> <a href="<?php echo e(url('/admin/buyer-details', $buyer->id)); ?>" target="_blank"><?php echo e($buyer->full_name); ?></a></td>
                    <td><?php echo e($buyer->email); ?></td>
                  <td><?php echo e($buyer->phone_number); ?></td>
                  <td><?php echo e($buyer->account_type); ?></td>
                  <td><?php echo e($buyer->subscription_date); ?></td>
                  <td><?php echo e($buyer->state); ?></td>
                  <td><?php echo e($buyer->street_address); ?></td>
                  <td>
                    <?php if($buyer->account_status == 'active'): ?>
                      <button class="btn btn-sm bg-success text-white" onclick="change_status(<?php echo e($buyer->id); ?>)">Active</button>
                    <?php else: ?>
                      <button class="btn btn-sm bg-primary text-white" onclick="change_status(<?php echo e($buyer->id); ?>)">Inactive</button>
                    <?php endif; ?>
                  </td>
                    <td>
                      <button class="btn btn-sm bg-danger text-white" onclick="deleteUser(<?php echo e($buyer->id); ?>)">
                        delete
                      </button>
                      
                    </td>
                  </tr>    
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                  <div class="alert alert-warning">No buyer Found</div>
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
          makeRequest('/admin/delete-user/buyer/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Buyer Deleted").then(e => window.location.reload());
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
          makeRequest('/admin/change_status/buyer/'+id).then((e)=>{
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
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/all_buyers.blade.php ENDPATH**/ ?>