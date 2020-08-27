<div class="col-md-2 pb-5">
    <div class="card p-0">
        <div class="sidenav p-0">
            <h2 class="text-center p-3">MENU</h2>
            <a href="<?php echo e(route('fast_food_grocery.dashboard')); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="<?php echo e(route('fast_food_grocery.profile')); ?>"><i class="fa fa-user-circle"></i> Profile</a>
            <a href="<?php echo e(url('fast_food_grocery/messages')); ?>"><i class="fas fa-envelope"></i> Messages</a>
            <a href="<?php echo e(route('fast_food_grocery.food-menu')); ?>"><i class="fas fa-utensils"></i> Food Menu</a>
            <button class="dropdown-btn"><i class="fas fa-shopping-cart mr-3"></i> Groceries
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
            <a class="dropitem" href="<?php echo e(route('fast_food_grocery.all-my-groceries')); ?>">All Groceriees</a>
                <a class="dropitem" href="<?php echo e(url('fast_food_grocery/add-new-grocery')); ?>">Add New Product</a>
            </div>
            <a href="<?php echo e(route('fast_food_grocery.orders')); ?>"><i class="fas fa-copy"></i> Orders</a>

            <a href="<?php echo e(route('fast_food_grocery.wallet')); ?>"><i class="fas fa-wallet"></i> Wallet</a>
            <a href="<?php echo e(url('fast_food_grocery/messages')); ?>"><i class="fas fa-envelope"></i> Contact Admin</a>

            <a href="<?php echo e(url('fast_food_grocery/reviews-and-feedback')); ?>"><i class="fas fa-comment-alt"></i> Reviews &amp; Feedback</a>
            <a href="<?php echo e(url('fast_food_grocery/settings')); ?>"><i class="fa fa-cogs"></i> Settings</a>
            <button class="dropdown-btn"><i class="fas fa-bullhorn"></i>  Adverts
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a class="dropdown-item" href="<?php echo e(url('fast_food_grocery/all-ads')); ?>"> All Ads</a>
                <a class="dropdown-item" href="<?php echo e(url('fast_food_grocery/post-new-ads')); ?>"> Post New Ads</a>
            </div>
        <a href="<?php echo e(url('/fast_food_grocery/logout')); ?>"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
    </div>
</div><?php /**PATH /home/bloomzon/bloomzon/resources/views/components/dashboard/fast-food-grocery-side-nav.blade.php ENDPATH**/ ?>