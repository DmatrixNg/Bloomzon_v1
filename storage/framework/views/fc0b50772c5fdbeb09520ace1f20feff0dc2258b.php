


<?php $__env->startSection('page_title'); ?>
    Seller's Dashboard - Payment Account Details
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10 ">
            <div class="p-0">
                <div class="row col-md-12 ml-1 mt-5" style="padding: 10px; text-align: right !important; border-bottom: 1px solid #f2f2f2;">
                    <div class="col-md-12 text-center ml-0">
                        <h2>Update Account Details</h2>
                    </div>

                </div>
                <div class="row mb-3" style="padding: 20px;">
                    <div class="col-md-8 p-5 offset-2">
                        <form action="<?php echo e(url('seller/edit-profiler')); ?>" method="post" name="sellerAccountDetailsForm">
                        <?php echo csrf_field(); ?>
                        <!-- @methode('put') -->
                            <div class="form-group text-center">
                                <img src="seller_asset/img/card.png" alt="">
                            </div>
                            <div class="form-group mb-5">
                                <label for="exampleFormControlInput1" style="font-size: 16px;;">Bank: </label>
                                <select name="bank_name" id="" class="form-control" >
                                    <option value="">Select bank</option>
                                    <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                                    <option value="First Bank Of Nigeria Plc">First Bank Of Nigeria Plc</option>
                                    <option value="Ecobank Nigeria">Ecobank Nigeria</option>
                                    <option value="Access Bank">Access Bank</option>
                                    <option value="First City Monument Bank">First City Monument Bank</option>
                                </select>
                                <p></p>
                            </div>
                            

                            <div class="form-group mb-5">
                                <label for="account_name" style="font-size: 16px;">Account Name: </label>
                                <input type="text" id="account_name" name="account_name" class="form-control" placeholder="" value="<?php echo e(auth()->guard('seller')->user()->account_name); ?>">
                            </div>

                            <div class="form-group mb-5">
                                <label for="card_number" style="font-size: 16px;">Account Number: </label>
                                <input type="text" id="card_number" maxlength="10" value="<?php echo e(auth()->guard('seller')->user()->account_number); ?>" name="account_number" class="form-control" placeholder="">
                            </div>

                            <div class="form-group mb-5 text-center">
                                <button class="btn btn-danger btn-rounded btn-lg">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dashboard.seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/dashboard/seller/account-details.blade.php ENDPATH**/ ?>