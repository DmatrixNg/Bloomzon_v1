
<?php $__env->startSection('page_title'); ?>
    Agents
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container text-center mt-5">


    <p class="text-left"><a href="index.html">Home</a> <i class="fa fa-chevron-right"></i> <a style="color:grey;" href="agent.html">Networking Associates</a></p>

    <h4 class="text-left">NETWORKING ASSOCIATES</h4>
    
    <div class="row mt-5">

        <?php if(count($agents)): ?>
        <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
            <div class="card" style=" padding: 20px; background: #FFFFFF; box-shadow: -1px 13px 20px #F0F2F4; border-radius: 5px; width: 290px; height: 500px;">

                <div class="card-up white lighten-1"></div>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Avatar -->
                        <div class="avatar mx-auto white">
                            <img src="<?php echo e(asset('storage/assets/networking_agent/avatar/'.$agent->avatar)); ?>" class="rounded-circle" alt="" width="200" height="200">
                        </div>

                        <!-- Content -->

                    </div>

                </div>

                <div class="card-body">

                    <div class="text-center">
                        <h3 class="testimonial_heading font-weight-bold"><?php echo e(ucwords($agent->full_name)); ?></h3>
                        <p class="testimonial_heading2"><?php echo e($agent->street_address); ?></p>
                    <a href="<?php echo e(url('/networkingagent-details/'.$agent->id)); ?>" class="btn btn-outline-primary">View Services</a>

                    </div>
                    <br>
                    <!-- Quotation -->
                    
                </div>

            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <div class="alert alert-warning">
            No Associate on the system
        </div>
        <?php endif; ?>
      


    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/front/agents.blade.php ENDPATH**/ ?>