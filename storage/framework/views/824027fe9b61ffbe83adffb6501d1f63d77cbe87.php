<?php $__env->startSection('page_title'); ?>
    Admin Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <div class="row col-md-12 text-center" style="border-bottom: 1px solid #f2f2f2;">
                <h1 class="text-center m-auto pt-3 pb-3 "><b>All Advert List</b></h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="adverts" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead>
                            <tr>
                                <th><h5>User ID</h5></th>
                                <th><h5>Amount</h5></th>
                                <th><h5>Views</h5></th>
                                <th><h5>Position</h5></th>
                                <th><h5>Advertise Banner</h5></th>
                                <th><h5>Action</h5></th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($advert->user_id->full_name); ?></td>
                                <td><?php echo e(money($advert->amount,'USD')); ?></td>
                                <td><?php echo e($advert->views); ?></td>
                                <td><?php echo e($advert->advert_position); ?></td>
                                <td>
                                    <img src="<?php echo e(asset('storage/assets/advert/avatar/'.$advert->avatar)); ?>" width="100">
                                </td>
                                <td>
                                    <select name="ad_status" id="ad_status" onchange="changeStatus(this,<?php echo e($advert->id); ?>)" class="form-control form-group" style=" color: white; background-color: #2B2950;">
                                        <option  <?php if($advert->status == 0): ?> selected <?php endif; ?>  value="1" >Activate</option>
                                        <option <?php if($advert->status == 1): ?>  selected <?php endif; ?>  value="0" >Deactivate</option>
                                    </select>
                                    </div>
                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        <?php $__env->stopSection(); ?>

        <?php $__env->startPush('scripts'); ?>
        <script>
            $(document).ready( function () {
            $('#adverts').DataTable();
        } );
        </script>
        <script>
             function changeStatus(el,id){
        return swal({
            text:"Do you want to change this advert status?",
            buttons:true
        }).then((change)=>{
            var res = makeRequest('/admin/change-advert-status',{
                    status:el.value,
                    id:id
                }).then(
                    (e)=>{
                        console.log(e)
                        if(e.success) return swal("Advert status changed")
                        return swal("Problem changing status")
                    }
                );
           
        })
       }
        </script>
        
        <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzon/resources/views/dashboard/admin/all-adverts.blade.php ENDPATH**/ ?>