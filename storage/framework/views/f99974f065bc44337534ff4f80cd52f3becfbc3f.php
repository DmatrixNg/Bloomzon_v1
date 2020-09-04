<div>
    <!-- Well begun is half done. - Aristotle -->
    <footer class="footer-area mt-50" style="background-color: #000;">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="fooer-widget">
                    <h4 class="text-white">BLOOMZON</h4>
                    <div class="footer-menu">
                        <div class="row footer-list border-right">
                            <div class="col">
                                <ul>
                                    <li><a href="<?php echo e(route('home','about')); ?>"><?php echo e(__("About")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','services')); ?>"><?php echo e(__("Services")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','agent')); ?>"><?php echo e(__("Agents")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','investor_relations')); ?>"><?php echo e(__("Investor Relations")); ?></a></li>
                                    <li><a href="<?php echo e(route('home','bloomzontrip')); ?>"><?php echo e(__("Bloomzon trip")); ?></a></li>
                                    <li><a href="<?php echo e(route('home','make_money')); ?>"><?php echo e(__("Make Money with Us")); ?></a></li>
                                    <li><a href="<?php echo e(route('home','sell_on_bloomzon')); ?>"><?php echo e(__("Sell on")); ?> bloomzon</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="<?php echo e(route('home','career')); ?>"><?php echo e(__("Career")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','blog')); ?>"><?php echo e(__("Blog")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','faq')); ?>"><?php echo e(__("FAQ")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','sell_your_service')); ?>"><?php echo e(__("Sell Your Services on")); ?> bloomzon</a></li>
                                    <li><a href="<?php echo e(route('home','advertise_on_bloomzon')); ?>"><?php echo e(__("Advertise on")); ?> bloomzon tv</a></li>
                                    <li><a href="<?php echo e(route('home','contact_us')); ?>"><?php echo e(__("contact us")); ?></a></li>
                                    <li><a href="<?php echo e(route('home','advertise_your_products')); ?>"><?php echo e(__("Advertise Your Products")); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-3 mt-sm-45">
                <div class="fooer-widget">
                    <h4 class="text-white">LEGAL</h4>
                    <div class="footer-menu">
                        <div class="row footer-list border-right">
                            <div class="col">
                                <ul>
                                    <li><a href="<?php echo e(route('home','termsandcondititons')); ?>"><?php echo e(__("Terms and Condition")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','retailpolicy')); ?>"><?php echo e(__("Retail Policy")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','accountpolicy')); ?>"><?php echo e(__("Account Policy")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','accountpolicy')); ?>"><?php echo e(__("Become an Affiliate")); ?></a></li>
                                    <li><a href="<?php echo e(route('home','cookies')); ?>"><?php echo e(__("cookies")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','gifts')); ?>"><?php echo e(__("Gifts")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','datapolicy')); ?>"><?php echo e(__("data policy")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','privacy')); ?>"><?php echo e(__("Privacy")); ?></a> </li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="<?php echo e(route('home','refundpolicy')); ?>"><?php echo e(__("Refund Policy")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','shippingreturns')); ?>"><?php echo e(__("Shipping")); ?> &amp; <?php echo e(__("Returns")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','qualitycontrol')); ?>"><?php echo e(__("Quality Control")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','accountpolicy')); ?>"><?php echo e(__("Account Policy")); ?></a> </li>
                                    <li><a href="/register"><?php echo e(__("Register")); ?></a> </li>
                                    <li><a href="/login"><?php echo e(__("Login")); ?></a> </li>
                                    <li><a href="<?php echo e(route('home','help')); ?>"><?php echo e(__("Help")); ?></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-45">
                <div class="footer-widget">
                    <div class="subscribe-form">
                        <h4 class="text-white"><?php echo e(__("SOCIAL MEDIA")); ?></h4>
                    </div>
                    <div class="social-icons style-2">
                        <div class="row footer-list">
                            <div class="col">
                                <ul>
                                    <li class="text-white"><img src="<?php echo e(asset('assets/frontend/img/tv.PNG')); ?>" alt="" width="20"> Youtube</li>
                                    <li class="text-white pt-3"><img src="<?php echo e(asset('assets/frontend/img/facebook-logo.png')); ?>" alt="" width="20"> Facebook</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li class="text-white"><img src="<?php echo e(asset('assets/frontend/img/twitter-logo.PNG')); ?>" alt="" width="20"> Twitter</li>
                                    <li class="text-white pt-3"><img src="<?php echo e(asset('assets/frontend/img/youtube.JPEG')); ?>" alt="" width="20"> Bloomzon</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="social-icons style-2">
                        <div class="row footer-list">

                            <br>
                            <form method="post" action="<?php echo e(url('newsletter_subscribe')); ?>">

                                <?php echo csrf_field(); ?>
                                <?php if(session()->has('message')): ?>
                                    <div class="alert alert-primary"><?php echo e(session()->get('message')); ?></div>
                                <?php endif; ?>

                                <div class="col">
                                    <input class="form-control" placeholder="Email" name="email">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger">
                                            <small style="color: white;"><?php echo e($message); ?></small>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col">
                                    <input type="submit" value="Subscribe" class="btn btn-danger ">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php /**PATH /Users/DMatrix/work/new/Bloomzon_v1/resources/views/components/front/footer-nav.blade.php ENDPATH**/ ?>