<?php $__env->startSection('content'); ?>
    <div class="col-md-10 p-0">
        <div class="col-md-12 mt-4 mb-4 d-none">
            <div class="row">
                <div class="col-md-9">
                    <label for="exampleFormControlInput1 " style="font-size: 20px; color: #666; font-weight: 500;">Statement:</label>
                    <div class="form-inline ">
                    <select class="form-control col-md-4" style="height: 45px; border-radius: 0px;">
                        <option selected="">Sort</option>
                        <option>New</option>
                        <option>Old</option>
                    </select>
                </div>
                </div>
                <div class="col-md-3">
                    <label for="exampleFormControlInput1 " style="font-size: 20px; color: #666; font-weight: 500;">Month:</label>
                    <div class="form-inline ">
                        <select class="form-control" style="height: 40px; border-radius: 0px; width: 100%;">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-5">
            <div class="card m-0 p-0">
                <table id="statements-table" class="table text-center table-bordered m-0">
                    <thead style="background-color:  #003B88; color: #fff; font-size: 16px; vertical-align: middle;">
                        <tr style="height: 60px; text-align: center !important;" class="text-center">
                            <th class="text-center">Users</th>
                            <th class="text-center">No. of Users</th>
                            <th class="text-center">Total Sales(N)</th>
                            <th class="text-center">Product Delivered</th>
                            <th class="text-center">Payout</th>
                            <th class="text-center">Total Premium Users &amp; Amount</th>
                            <th class="text-center">Total Basic Users &amp; Amount</th>
                            <th class="text-center">Total Amount Subscribed</th>
                            <th class="text-center">Income</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 60px;">
                            <td>Buyers</td>
                            <td><?php echo e($numb_buyers); ?></td>
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>
                            <td><?php echo e($premium_buyers); ?> - <?php echo e($premium_buyers * 5000); ?></td>
                            <td><?php echo e($basic_buyers); ?> - <?php echo e($basic_buyers * 2000); ?></td>
                            <td><?php echo e($premium_buyers + $premium_buyers); ?></td>
                            <td><?php echo e(($premium_buyers * 5000) + ($basic_buyers * 2000)); ?> </td>
                        </tr>
                        <tr style="height: 60px;">
                            <td>Sellers</td>
                            <td><?php echo e($numb_sellers); ?></td>
                            <td>4,000,000</td>
                            <td>600</td>
                            <td>49</td>
                            <td><?php echo e($premium_sellers); ?> - <?php echo e($premium_sellers * 5000); ?></td>
                            <td><?php echo e($basic_sellers); ?> - <?php echo e($basic_sellers * 2000); ?></td>
                            <td><?php echo e($premium_sellers + $premium_sellers); ?></td>
                            <td><?php echo e(($premium_sellers * 5000) + ($basic_sellers * 2000)); ?></td>
                        </tr>
                        <tr style="height: 60px;">
                            <td>Manufacturers</td>
                            <td><?php echo e($numb_manufacturers); ?></td>
                            <td>4,000,000</td>
                            <td>600</td>
                            <td>49</td>
                            <td><?php echo e($premium_manufacturers); ?> - <?php echo e($premium_manufacturers * 5000); ?></td>
                            <td><?php echo e($basic_manufacturers); ?> - <?php echo e($basic_manufacturers * 2000); ?></td>
                            <td><?php echo e($premium_manufacturers + $premium_manufacturers); ?></td>
                            <td><?php echo e(($premium_manufacturers * 5000) + ($basic_manufacturers * 2000)); ?></td>
                        </tr>
                        <tr style="height: 60px;">
                            <td>Professional Services</td>
                            <td><?php echo e($numb_ps); ?></td>
                            <td>4,000,000</td>
                            <td>600</td>
                            <td>49</td>
                            <td><?php echo e($premium_ps); ?> - <?php echo e($premium_ps * 5000); ?></td>
                            <td><?php echo e($basic_ps); ?> - <?php echo e($basic_ps * 2000); ?></td>
                            <td><?php echo e($premium_ps + $premium_ps); ?></td>
                            <td><?php echo e(($premium_ps * 5000) + ($basic_ps * 2000)); ?></td>
                        </tr>
                        <tr style="height: 60px;">
                            <td>Networking Agents</td>
                            <td><?php echo e($numb_na); ?></td>
                            <td>4,000,000</td>
                            <td>600</td>
                            <td>49</td>
                            <td><?php echo e($premium_na); ?> - <?php echo e($premium_na * 5000); ?></td>
                            <td><?php echo e($basic_na); ?> - <?php echo e($basic_na * 2000); ?></td>
                            <td><?php echo e($premium_na + $premium_na); ?></td>
                            <td><?php echo e(($premium_na * 5000) + ($basic_na * 2000)); ?></td>
                        </tr>
                        <tr style="height: 60px;">
                            <td>Delivery Merchants</td>
                            <td>400</td>
                            <td>4,000,000</td>
                            <td>600</td>
                            <td>49</td>
                            <td>2,000</td>
                            <td>90,000</td>
                            <td>79</td>
                            <td>2,000,000</td>
                        </tr>
                        <tr style="height: 60px;">
                            <td>Shoppers</td>
                            <td><?php echo e($numb_shopper); ?></td>
                            <td>4,000,000</td>
                            <td>600</td>
                            <td>49</td>
                            <td><?php echo e($premium_shopper); ?> - <?php echo e($premium_shopper * 5000); ?></td>
                            <td><?php echo e($basic_shopper); ?> - <?php echo e($basic_shopper * 2000); ?></td>
                            <td><?php echo e($premium_shopper + $premium_shopper); ?></td>
                            <td><?php echo e(($premium_shopper * 5000) + ($basic_shopper * 2000)); ?></td>
                        </tr>
                        <tr style="height: 60px;">
                            <td>Fast-Foods &amp; Groceries</td>
                            <td><?php echo e($numb_ffg); ?></td>
                            <td>4,000,000</td>
                            <td>600</td>
                            <td>49</td>
                            <td><?php echo e($premium_ffg); ?> - <?php echo e($premium_ffg * 5000); ?></td>
                            <td><?php echo e($basic_ffg); ?> - <?php echo e($basic_ffg * 2000); ?></td>
                            <td><?php echo e($premium_ffg + $premium_ffg); ?></td>
                            <td><?php echo e(($premium_ffg * 5000) + ($basic_ffg * 2000)); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>

<script>

    $(document).ready(function(){
      $("#statements-table").DataTable();
    })

    function deleteUser(id){
      return swal({
        text: "Do you want to delete user?",
        buttons: true,
      }).then((e)=>{
        if(e){
          makeRequest('/admin/delete-user/delivery_agent/'+id).then((e)=>{
            console.log(e);
            if(e.success){
              return swal("Delivery Agent Deleted").then(e => window.location.reload());
            }
            return swal("Unable to delete")
          })
        }
      })
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/dashboard/admin/account_sales_statements.blade.php ENDPATH**/ ?>