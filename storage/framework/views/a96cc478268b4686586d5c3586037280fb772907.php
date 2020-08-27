<div class="col-md-2 pb-5">
    <div class="card p-0">
        <div class="sidenav p-0">
            <h2 class="text-center p-3">MENU</h2>
            <a href="<?php echo e(route('shopper.dashboard')); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="<?php echo e(route('shopper.delivery-request')); ?>"><i class="fa fa-comment-alt"></i> Delivery Request</a>
            <button class="dropdown-btn"><i class="fas fa-warehouse"></i> Warehouse 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a class="dropdown-item" href="<?php echo e(route('shopper.warehouse-package')); ?>"> Package Goods</a>
            </div>
            <a href="<?php echo e(route('shopper.delivery-merchant')); ?>"><i class="fa fa-user"></i> Merchant Status</a>
        <a href="<?php echo e(route('shopper.routing')); ?>"><i class="fas fa-route"></i> Control/Routing Check</a>
            <a href="<?php echo e(route('shopper.wallet')); ?>"><i class="fas fa-wallet"></i> Wallet</a>
            <a href="contact-admin.html"><i class="fas fa-users-cog"></i> Contact Admin</a>
            <a href="review.html"><i class="fa fa-thumbs-up"></i> Customer Feedback</a>
            <a href="settings.html"><i class="fa fa-cog"></i> Settings</a>
            <a href="messages.html"><i class="fa fa-envelope"></i> Messages</a>
            <a href="notifications.html"><i class="fa fa-bell"></i> Notification</a>
            <a href="<?php echo e(route('shopper.logout')); ?>"><i class="fa fa-sign-out-alt mr-3"></i> Logout</a>
        </div>
    </div>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/bloomzoon_app/resources/views/components/dashboard/shopper-side-nav.blade.php ENDPATH**/ ?>