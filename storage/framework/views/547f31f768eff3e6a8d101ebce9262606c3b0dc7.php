<?php $__env->startSection('page_title'); ?>
    Manufacturers
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container text-center pt-5">

        <h4 class="text-left">MANUFACTURERS</h4>

        <div class="row pt-4">

            <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3">
                    <div class="card" style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">

                        <div class="card-up white lighten-1"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Avatar -->
                                <div class="avatar mx-auto white">
                                    <img src="<?php echo e(asset('storage/manufacturer/'.$manufacturer->avatar)); ?>" class="rounded-circle" alt="" width="200" height="200">
                                </div>

                                <!-- Content -->

                            </div>

                        </div>

                        <div class="card-body">

                            <div class="text-center">
                                <h3 class="testimonial_heading font-weight-bold"><?php echo e($manufacturer->company_name); ?></h3>
                                <p class="testimonial_heading2"><?php echo e($manufacturer->street_address); ?></p>
                                <a href="<?php echo e(url('manufacturer-details/'. $manufacturer->id )); ?>" class="btn btn-danger btn-sm mb-2">View dealer</a>
                                <a href="#" class="btn btn-outline-primary btn-sm d-none">Message dealer</a>

                            </div>
                            <br>
                            <!-- Quotation -->
                            <p class="testimonial_text"><?php echo e($manufacturer->description); ?></p>
                        </div>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/front/manufacturers.blade.php ENDPATH**/ ?>