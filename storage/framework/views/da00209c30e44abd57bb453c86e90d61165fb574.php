

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
                            <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                <tr>
                                    <th><h5>User ID</h5></th>
                                    <th><h5>Amount</h5></th>
                                    <th><h5>Views</h5></th>
                                    <th><h5>Advertise Banner</h5></th>
                                    <th><h5>Action</h5></th>
                                </tr>
                                </thead>

                                <tbody>

                                    <?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>Ose</td>
                                            <td>11,000</td>
                                            <td>2</td>
                                            <td>
                                                <img src="asset/img/advert_ban.png">
                                            </td>
                                            <td>
                                                <div class="dropdown col-2">
                                                    <a style="background-color: white; color: black;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Active
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                        <a class="dropdown-item" href="">Approve</a>
                                                        <a class="dropdown-item" href="">Delete</a>
                                                        <a class="dropdown-item" href="">Edit</a>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
        
                </div>
                <nav>
                    <ul class="pagination d-flex justify-content-center flex-wrap pagination-rounded-flat pagination-success">
                        <li class="page-item"><a class="page-link" href="#" data-abc="true"><i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#" data-abc="true">1</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-abc="true">2</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-abc="true">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-abc="true">4</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-abc="true"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/admin/advert.blade.php ENDPATH**/ ?>