<div class="col-md-2 pb-5">
    <div class="card p-0">
        <div class="sidenav p-0">
            <h2 class="text-center p-3">MENU</h2>
            <a href="<?php echo e(route('professional.dashboard')); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="<?php echo e(route('professional.profile')); ?>"><i class="fas fa-user-lock"></i> Profile Settings</a>
            <a href="<?php echo e(route('professional.notifications')); ?>"><i class="fa fa-bell"></i> Notification</a>
            <a href="<?php echo e(route("professional.products")); ?>"><i class="fas fa-shopping-cart"></i> Products</a>
            <a href="<?php echo e(url('/professional/messages')); ?>"><i class="fas fa-envelope"></i> Messages</a>
            <a href="<?php echo e(route('professional.shop-gallery')); ?>"><i class="fas fa-images"></i> Shop Gallery</a>
            <a href="<?php echo e(url('/professional/orders')); ?>"><i class="fas fa-comments"></i> Requests</a>
            <a href="<?php echo e(url('/professional/sales-history')); ?>"><i class="fa fa-file"></i> Sales History</a>
            <a href="<?php echo e(route('professional.wallet')); ?>"><i class="fas fa-wallet"></i> Wallet</a>
            <a href="<?php echo e(url('/professional/messages')); ?>"><i class="fas fa-headset"></i> Contact Admin</a>
            <a href="<?php echo e(url('/professional/reviews-and-feedback')); ?>"><i class="fas fa-comment-alt"></i> Reviews &amp; Feedback</a>
            <button class="dropdown-btn"><i class="fas fa-bullhorn"></i> Adverts
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a class="dropdown-item" href="<?php echo e(route('professional.all-ads')); ?>"> All Ads</a>
                <a class="dropdown-item" href="<?php echo e(route('professional.post-new-ads')); ?>"> Post New Ads</a>
            </div>
            
            <a href="<?php echo e(url('professional/logout')); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>
</div><?php /**PATH /home/bloomzon/bloomzon/resources/views/components/dashboard/professional-side-nav.blade.php ENDPATH**/ ?>