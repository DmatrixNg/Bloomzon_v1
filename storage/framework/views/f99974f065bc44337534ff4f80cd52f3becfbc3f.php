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
                                    <li><a href="<?php echo e(route('home','about')); ?>">About</a> </li>
                                    <li><a href="<?php echo e(route('home','services')); ?>">Services</a> </li>
                                    <li><a href="<?php echo e(route('home','agent')); ?>">Agents</a> </li>
                                    <li><a href="<?php echo e(route('home','investor_relations')); ?>">Investor Relations</a></li>
                                    <li><a href="<?php echo e(route('home','bloomzontrip')); ?>">Bloomzon trip</a></li>
                                    <li><a href="<?php echo e(route('home','make_money')); ?>">Make Money with Us</a></li>
                                    <li><a href="<?php echo e(route('home','sell_on_bloomzon')); ?>">Sell on bloomzon</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="<?php echo e(route('home','career')); ?>">Career</a> </li>
                                    <li><a href="<?php echo e(route('home','blog')); ?>">Blog</a> </li>
                                    <li><a href="<?php echo e(route('home','faq')); ?>">FAQ</a> </li>
                                    <li><a href="<?php echo e(route('home','sell_your_service')); ?>">Sell Your Services on bloomzon</a></li>
                                    <li><a href="<?php echo e(route('home','advertise_on_bloomzon')); ?>">Advertise on bloomzon tv</a></li>
                                    <li><a href="<?php echo e(route('home','contact_us')); ?>">contact us</a></li>
                                    <li><a href="<?php echo e(route('home','advertise_your_products')); ?>">Advertise Your Products</a></li>
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
                                    <li><a href="<?php echo e(route('home','termsandcondititons')); ?>">Terms and Condition</a> </li>
                                    <li><a href="<?php echo e(route('home','retailpolicy')); ?>">Retail Policy</a> </li>
                                    <li><a href="<?php echo e(route('home','accountpolicy')); ?>">Account Policy</a> </li>
                                    <li><a href="<?php echo e(route('home','accountpolicy')); ?>">Become an Affiliate</a></li>
                                    <li><a href="<?php echo e(route('home','cookies')); ?>">cookies</a> </li>
                                    <li><a href="<?php echo e(route('home','gifts')); ?>">Gifts</a> </li>
                                    <li><a href="<?php echo e(route('home','datapolicy')); ?>">data policy</a> </li>
                                    <li><a href="<?php echo e(route('home','privacy')); ?>">Privacy</a> </li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="<?php echo e(route('home','refundpolicy')); ?>">Refund Policy</a> </li>
                                    <li><a href="<?php echo e(route('home','shippingreturns')); ?>">Shipping &amp; Returns</a> </li>
                                    <li><a href="<?php echo e(route('home','qualitycontrol')); ?>">Quality Control</a> </li>
                                    <li><a href="<?php echo e(route('home','accountpolicy')); ?>">Account Policy</a> </li>
                                    <li><a href="/register">Register</a> </li>
                                    <li><a href="/login">Login</a> </li>
                                    <li><a href="<?php echo e(route('home','help')); ?>">Help</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-45">
                <div class="footer-widget">
                    <div class="subscribe-form">
                        <h4 class="text-white">SOCIAL MEDIA</h4>
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
                                    <input type="submit" value="Subscribe" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><?php /**PATH /Users/DMatrix/work/new/Bloomzon_v1/resources/views/components/front/footer-nav.blade.php ENDPATH**/ ?>