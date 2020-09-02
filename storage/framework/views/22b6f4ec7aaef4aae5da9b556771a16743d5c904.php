<?php $__env->startSection('content'); ?>
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of <?php echo e($bloomzon); ?> Sellers</h2>
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
                   <?php if(count($sellers)): ?>
                    <?php $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($seller->id); ?></td>
                    <td> <a href="<?php echo e(url('/seller-details', $seller->id)); ?>" target="_blank"><?php echo e($seller->full_name); ?></a> </td>
                      <td><?php echo e($seller->email); ?></td>
                    <td><?php echo e($seller->phone_number); ?></td>
                    <td><?php echo e($seller->account_type); ?></td>
                    <td><?php echo e($seller->subscription_date); ?></td>
                    <td><?php echo e($seller->state); ?></td>
                    <td><?php echo e($seller->street_address); ?></td>
                    <td>
                      <?php if($seller->account_status == 'active'): ?>
                        <button class="btn btn-sm bg-success text-white" onclick="change_status(<?php echo e($seller->id); ?>)">Active</button>
                      <?php else: ?>
                        <button class="btn btn-sm bg-primary text-white" onclick="change_status(<?php echo e($seller->id); ?>)">Inactive</button>
                      <?php endif; ?>
                    </td>
                      <td>
                        <button class="btn btn-sm bg-danger text-white" onclick="deleteUser(<?php echo e($seller->id); ?>)">
                        delete
                      </button>
                      <button class="btn btn-sm <?php if($seller->is_bloomzon): ?>bg-warning <?php else: ?> bg-success <?php endif; ?> text-white" onclick="makeBloomzon(<?php echo e($seller->id); ?>)"><?php if($seller->is_bloomzon): ?>remove bloomzon <?php else: ?> make bloomzon <?php endif; ?></button>
                    </td>
                    </tr>    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <div class="alert alert-warning">No Seller Found</div>
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
          makeRequest('/admin/delete-user/seller/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Seller Deleted").then(e => window.location.reload());
            }
            return swal("Unable to delete")
          })
        }
      })
    }

    function makeBloomzon(id){
      return swal({
        text: "Do you want to change seller type?",
        buttons: true,
      }).then((e)=>{
        if(e){
          makeRequest('/admin/make-bloomzon-seller/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Seller type changed").then(e => window.location.reload());
            }
            return swal("Unable to change seller type")
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
          makeRequest('/admin/change_status/seller/'+id).then((e)=>{
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
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/all_sellers.blade.php ENDPATH**/ ?>