<?php $__env->startSection('page_title'); ?>
    Fast Food & Groceries Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
            <br>
            <div class="container" style="background-color: #02499B; height: 100px; padding: 30px;">
                <div class="card align-items-center" style="background-color: white; height: 50px; color: #02499B; padding: 10px;">
                    <h4>My Account Information</h4>
                </div>
            </div>
            <div style="background-color: white; padding: 30px;">
                <a href="<?php echo e(url('fast_food_grocery/edit-profile')); ?>">
                  <div class="row">
                      <div class="col-md-8 offset-2">
                          <div class="row">
                              <div class="col-md-3">
                                  <img class="img" src="<?php echo e(asset('storage/assets/fast_food_grocery/avatar/'.$fast_food_grocery->avatar)); ?>" width="80" height="80" style="border-radius: 40px" >
                              </div>
                              <div class="col-md-7">
                                  <h5 style="color: #02499B;">Edit Profile Details</h5>
                                  <p style="color: #02499B;">View and edit your information</p>
                              </div>
                              <div class="col-md-1"></div>
                              <div class="col-md-1">
                                  <i style="color: #02499B;" class="fa fa-chevron-right"></i>
                              </div>
                          </div>
                      </div>
                  </div>
                </a>
                <hr>
                <a href="<?php echo e(url('fast_food_grocery/update-account-details')); ?>">
                    <div class="row">
                        <div class="col-md-8 offset-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?php echo e(asset('assets/dashboard/img/creditcardicon.png')); ?>">
                                </div>
                                <div class="col-md-7">
                                    <h5 style="color: #02499B;">Account Details</h5>
                                    <p style="color: #02499B;">View and edit your details to receive payment</p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-1">
                                    <i style="color: #02499B;" class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr>
                <a href="accountupgrade">
                    <div class="row">
                        <div class="col-md-8 offset-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?php echo e(asset('assets/dashboard/img/faqicon.png')); ?>">
                                </div>
                                <div class="col-md-7">
                                    <h5 style="color: #02499B;">User Account Type</h5>
                                    <p style="color: #02499B;">(View your account type and upgrade)</p>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-1">
                                    <i style="color: #02499B;" class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <hr>
                <a href="#">
                    <div class="row">
                        <div class="col-md-8 offset-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="<?php echo e(asset('assets/dashboard/img/signouticon.png')); ?>">
                                </div>
                                <div class="col-md-7">
                                <a style="color: #02499B;" href="<?php echo e(url('fast_food_grocery/logout')); ?>">
                                    <h3>Sign Out</h3>
                                    </a>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-1">
                                    <i style="color: #02499B;" class="fa fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.fast_food_grocery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/fast_food_grocery/profile.blade.php ENDPATH**/ ?>