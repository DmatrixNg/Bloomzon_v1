

<?php $__env->startSection('content'); ?>
<div class="col-md-10" style="padding: 20px;">
    <div class="row">
            <div class="col-md-3 mb-4 text-left">
                <h2>List of All Buyers</h2>
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
                  <?php $__currentLoopData = $newsletters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsletter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($newsletter->id); ?></td>
                    <td><?php echo e($newsletter->subject); ?></td>
                    <td><?php echo e($newsletter->message); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/newsletters.blade.php ENDPATH**/ ?>