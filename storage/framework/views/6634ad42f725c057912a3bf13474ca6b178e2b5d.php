
    <div class="col-md-2 pb-5">
        <div class="card p-0">
            <div class="sidenav p-0">
            <h2 class="text-center p-3">MENU</h2>
                <a href="<?php echo e(url('buyer/dashboard')); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                <a href="<?php echo e(url('buyer/profile')); ?>"><i class="fa fa-user-circle"></i> Profile</a>
                <a href="<?php echo e(url('buyer/purchase-history/'.base64_encode($buyer->id))); ?>"><i class="fas fa-clock"></i> Purchase History</a>
                <a href="<?php echo e(url('buyer/notifications/'.base64_encode($buyer->id))); ?>"><i class="fa fa-bell"></i> Notifications</a>
                <a href="<?php echo e(route('buyer.favorites')); ?>"><i class="fa fa-heart"></i> Favourites</a>
                <a href="<?php echo e(url('buyer/products/bloomzon')); ?>"><i class="fas fa-shopping-cart"></i> Bloomzon Products</a>
                <a href="#"><i class="fas fa-credit-card"></i> Payment History</a>
                <a href="<?php echo e(url('buyer/messages')); ?>"><i class="fas fa-envelope"></i> Messages</a>
                <a href="<?php echo e(url('buyer/points')); ?>"><i class="fa fa-dot-circle"></i> Points</a>
                <button class="dropdown-btn"><i class="fas fa-bullhorn"></i> Adverts
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a class="dropdown-item" href="<?php echo e(route('buyer.all-ads')); ?>"> All Ads</a>
                    <a class="dropdown-item" href="<?php echo e(route('buyer.post-new-ads')); ?>"> Post New Ads</a>
                </div>
                <a href="<?php echo e(url('buyer/messages')); ?>"><i class="fa fa-envelope"></i> Contact Admin</a>
                <button class="dropdown-btn"><i class="fas fa-star-half-alt"></i> Service Rating
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a class="dropdown-item" href="dispute.html"> Dispute</a>
                    <a class="dropdown-item" href="feedback.html"> Feedback</a>
                    <a class="dropdown-item" href="review.html"> Reviews</a>
                </div>

                <button class="dropdown-btn"><i class="fas fa-upload"></i> Upgrade
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a class="dropdown-item" href="<?php echo e(url('seller/register')); ?>"> Become a Seller</a>
                </div>
                <a href="<?php echo e(url('buyer/logout')); ?>"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
        </div>
    </div>

<?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/components/dashboard/buyer-side-nav.blade.php ENDPATH**/ ?>