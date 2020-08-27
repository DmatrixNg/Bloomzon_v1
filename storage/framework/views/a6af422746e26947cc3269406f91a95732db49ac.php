<?php $__env->startSection('page_title'); ?>
    Admin Dashboard
<?php $__env->stopSection(); ?>

        <?php $__env->startSection('content'); ?>
        <div class="col-md-10">
                <div class="row mb-3 " style="background-color: #000 !important; padding: 20px; ">
                    <div class="col-md-6 p-5 offset-3 ">
                    <form action="<?php echo e(route("admin.set-config")); ?>">
                            
                            <div class="form-group ">
                                <label for="name " style="font-size: 16px; color: #fff; font-weight: 500; ">Base Currency</label><br>
                                <select name="base_currency" class="form-control">
                                    <option <?php if($config->base_currency == 'USD'): ?> selected <?php endif; ?> value="USD">USD</option>
                                    <option <?php if($config->base_currency == 'NAIRA'): ?> selected <?php endif; ?> value="NAIRA">NAIRA</option>
                                    <option <?php if($config->base_currency == 'POUND'): ?> selected <?php endif; ?> value="POUND">POUND</option>
                                    <option <?php if($config->base_currency == 'EURO'): ?> selected <?php endif; ?> value="EURO">EURO</option>
                                </select>

                                <?php $__errorArgs = ['base_currency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group ">
                                <label for="phone" style="font-size: 16px; color: #fff; font-weight: 500; ">Naira Value</label><br>
                                <input type="text"  class="form-control " id="naira" name="naira" value="<?php echo e($config->naira); ?>" style="height: 40px; ">
                                <?php $__errorArgs = ['naira'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group ">
                                <label for="email" style="font-size: 16px; color: #fff; font-weight: 500; ">Pound value</label><br>
                                <input type="text" name="pound" class="form-control " id="pound" value="<?php echo e($config->pound); ?>"  style="height: 40px; ">

                                <?php $__errorArgs = ['pound'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group ">
                                <label for="address" style="font-size: 16px; color: #fff; font-weight: 500; ">Euro</label><br>
                                <input type="text" name="euro"  class="form-control " id="euro" value="<?php echo e($config->euro); ?>" style="height: 40px; ">
                                <?php $__errorArgs = ['euro'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group ">
                                <label for="address" style="font-size: 16px; color: #fff; font-weight: 500; ">USD</label><br>
                                <input type="text" name="usd"  class="form-control " id="usd" value="<?php echo e($config->usd); ?>" style="height: 40px; ">
                                <?php $__errorArgs = ['usd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group ">
                                <label for="address" style="font-size: 16px; color: #fff; font-weight: 500; ">1 week advert-price</label><br>
                                <input type="text" name="ad1_week"  class="form-control " id="usd" value="<?php echo e($config->ad1_week); ?>" style="height: 40px; ">
                                <?php $__errorArgs = ['ad1_week'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group ">
                                <label for="address" style="font-size: 16px; color: #fff; font-weight: 500; ">2 week advert-price</label><br>
                                <input type="text" name="ad2_week"  class="form-control " id="usd" value="<?php echo e($config->ad2_week); ?>" style="height: 40px; ">
                                <?php $__errorArgs = ['ad2_week'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group ">
                                <label for="address" style="font-size: 16px; color: #fff; font-weight: 500; ">3 week advert-price</label><br>
                                <input type="text" name="ad2_week"  class="form-control " id="usd" value="<?php echo e($config->ad4_week); ?>" style="height: 40px; ">
                                <?php $__errorArgs = ['ad4_week'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            
                           <div class="form-group text-center">--}}
                               <button class="btn btn-danger btn-lg  ">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bloomzon/bloomzon/resources/views/dashboard/admin/site_config.blade.php ENDPATH**/ ?>