<?php $__env->startSection('content'); ?>
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of All Fast Food Grocery</h2>
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
              <th>Status</th>
              <th>Action</th>
                </tr>
              </thead>
              <tbody>
               <?php if(count($fast_food_groceries)): ?>
                <?php $__currentLoopData = $fast_food_groceries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fast_food_grocery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($fast_food_grocery->id); ?></td>

                <td> <a href="<?php echo e(url('/fast-food-details', $fast_food_grocery->id)); ?>" target="_blank"><?php echo e($fast_food_grocery->full_name); ?></a></td>

                  <td><?php echo e($fast_food_grocery->email); ?></td>
                <td><?php echo e($fast_food_grocery->phone_number); ?></td>
                <td><?php echo e($fast_food_grocery->account_type); ?></td>
                <td><?php echo e($fast_food_grocery->subscription_date); ?></td>
                <td><?php echo e($fast_food_grocery->state); ?></td>
                <td><?php echo e($fast_food_grocery->street_address); ?></td>
                
                <td>
                  <?php if($fast_food_grocery->account_status == 'active'): ?>
                      <button class="btn btn-sm bg-success text-white" onclick="change_status(<?php echo e($fast_food_grocery->id); ?>)">Active</button>
                    <?php else: ?>
                      <button class="btn btn-sm bg-primary text-white" onclick="change_status(<?php echo e($fast_food_grocery->id); ?>)">Inactive</button>
                    <?php endif; ?>
                </td>
                  <td><button class="btn btn-sm bg-danger text-white" onclick="deleteUser(<?php echo e($fast_food_grocery->id); ?>)">
                    delete
                  </button></td>
                </tr>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <div class="alert alert-warning">No fast_food_grocery Found</div>
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
          makeRequest('/admin/delete-user/fast_food_grocery/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Fast Food Grocery Deleted").then(e => window.location.reload());
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
          makeRequest('/admin/change_status/fast_food_grocery/'+id).then((e)=>{
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
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/all_fast_food_groceries.blade.php ENDPATH**/ ?>