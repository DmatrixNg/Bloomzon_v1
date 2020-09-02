<div class="col-md-2">

    <div class="mt-3 mb-3">
        <div class="text-center mt-5 mb-5">
            <img src="<?php echo e(asset('storage/assets/seller/avatar/'.$seller->avatar)); ?>" alt="" width="105" height="105"
                style="border-radius: 52px;"><br><br>
            <span><strong><?php echo e($seller->full_name); ?></strong> </span><br>
            <span><strong>Seller ID: </strong> <?php echo e($seller->id); ?></span>
        </div>
        <hr>


        <div class="sidenav1">
            <a href="<?php echo e(route('seller.dashboard')); ?>"><i class="fa fa-tachometer-alt mr-3"></i>Dashboard</a>
            <a href="<?php echo e(route('seller.profile')); ?>"><i class="fa fa-user-cog mr-3"></i> Profile</a>
            <a href="<?php echo e(route('seller.sales')); ?>"><i class="fas fa-clipboard-list mr-3"></i> Sales History</a>
            <a href="notification"><i class="fa fa-bell mr-3"></i> Notifications</a>
            <a href="<?php echo e(route('seller.messages')); ?>"><i class="fa fa-envelope mr-3"></i> Messages</a>
            <button class="dropdown-btn"><i class="fas fa-shopping-cart mr-3"></i> Products
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
            <a class="dropitem" href="<?php echo e(route('seller.all-my-products')); ?>">All Product</a>
                <a class="dropitem" href="<?php echo e(url('seller/add-new-product')); ?>">Add New Product</a>
            </div>
            
            <a href="<?php echo e(route("seller.histogram")); ?>"><i class="fas fa-clipboard-list mr-3"></i> Orders</a>
            <a href="<?php echo e(route('seller.messages')); ?>"><i class="fas fa-headset mr-3"></i> Contact Admin</a>
            <a href="<?php echo e(url('seller/reviews-and-feedback')); ?>"><i class="fas fa-comment-alt"></i> Reviews &amp; Feedback</a>
            <a href="<?php echo e(url('seller/settings')); ?>"><i class="fas fa-cogs mr-3"></i> Settings</a>
            <a href="<?php echo e(route('seller.wallet')); ?>"><i class="fas fa-cogs mr-3"></i> Wallet</a>
            <button class="dropdown-btn"><i class="fas fa-bullhorn"></i> Adverts
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a class="dropdown-item" href="<?php echo e(route('seller.all-ads')); ?>"> All Ads</a>
                <a class="dropdown-item" href="<?php echo e(route('seller.post-new-ads')); ?>"> Post New Ads</a>
            </div>
           
            <a href="logout"><form action="/seller/logout" method="post"><i class="fa fa-sign-out-alt mr-3"></i>Logout</form></a>
        </div>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/components/dashboard/seller-side-nav.blade.php ENDPATH**/ ?>