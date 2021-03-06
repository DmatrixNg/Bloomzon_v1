<div class="col-md-2">
    <div class="mt-3 mb-3">
        <div class="text-center mt-5 mb-5">
            <img src="<?php echo e(asset('assets/dashboard/img/bloomzon.png')); ?>" alt="" height="105" width="105"><br><br>
            <span><strong>Name: </strong> <?php echo e(Auth::guard('admin')->user()->full_name); ?></span>
        </div>
        <hr>
        <div class="sidenav1">
            <a href="<?php echo e(url('admin/dashboard')); ?>"> <i class="fa fa-tachometer-alt mr-3"></i> Dashboard</a>
            <button class="dropdown-btn"><i class="fas fa-user-cog mr-3"></i> User Management
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="<?php echo e(url('admin/create_user')); ?>">Create New User</a>
            </div>

            <button class="dropdown-btn"><i class="fas fa-user-circle"></i> System User
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="<?php echo e(url('admin/get_users/buyers')); ?>">Buyers</a>
                <a href="<?php echo e(url('admin/get_users/sellers')); ?>">Sellers</a>
                <a href="<?php echo e(url('admin/get_users/bloomzon_sellers')); ?>">Bloomzon Sellers</a>
                <a href="<?php echo e(url('admin/get_users/networking_agents')); ?>">Networking Associates</a>
                <a href="<?php echo e(url('admin/get_users/shoppers')); ?>">Shoppers Associates</a>
                <a href="#">Delivery Merchants</a>
                <a href="<?php echo e(url('admin/get_users/professionals')); ?>">Professional Service</a>
                <?php if(auth()->guard('admin')->user()->role == 'super_admin'): ?>
                <a href="<?php echo e(url('admin/get_users/sub_admins')); ?>">Sub Admin</a>
                <?php endif; ?>
                <a href="<?php echo e(url('admin/get_users/fast_food_groceries')); ?>">Fast Food &amp; Groceries</a>
                <a href="<?php echo e(url('admin/get_users/manufacturers')); ?>">Manufacturers</a>
            </div>

            <a href="<?php echo e(url('/admin/reviews')); ?>"><i class="fas fa-comments mr-3"></i> Review/Feedback</a>
            <a href="<?php echo e(url('admin/all_messages')); ?>"><i class="fas fa-envelope  mr-3"></i> Messages</a>
            <a href="<?php echo e(url('admin/queries')); ?>"><i class="fas fa-envelope  mr-3"></i> Queries</a>
            <a href="<?php echo e(url('admin/bloomzonproducts')); ?>"><i class="fas fa-shopping-cart  mr-3"></i> Bloomzon Products</a>
            <button class="dropdown-btn"><i class="fas fa-user-cog mr-1"></i> Application Creation
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="<?php echo e(url('admin/create_category')); ?>">Create Product Categories</a>
                <a href="<?php echo e(url('admin/create_subcategory')); ?>">Create Subategories</a>
                <a href="<?php echo e(url('admin/all_categories')); ?>">All Categories</a>
            </div>
            <button class="dropdown-btn"><i class="fas fa-folder-open"></i> Food Catalogue
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="<?php echo e(route('admin.food-catalogues')); ?>">All Food Catalogues</a>
                <a href="<?php echo e(route('admin.create-catalogue')); ?>">Create Catalogue</a>
            </div>

            <a href="<?php echo e(url('admin/manufacturer-chats')); ?>"><i class="fas fa-tasks mr-2"></i> Manufacturers Mgt.</a>

            <button class="dropdown-btn"><i class="fas fa-user-cog mr-3"></i> Brands Management
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="<?php echo e(route('admin.all-brands')); ?>">All Brands</a>
                <a href="<?php echo e(route('admin.create-brand')); ?>">Create New Brand</a>
            </div>
            <button class="dropdown-btn"><i class="fas fa-newspaper mr-3"></i> Newsletter
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="<?php echo e(url('admin/subscribers')); ?>">All Subscribers</a>
                <a href="<?php echo e(url('admin/newsletter')); ?>">Send Out Newsletter</a>
                <a href="<?php echo e(url('admin/newsletters')); ?>">All Newsletter Subscribers</a>
            </div>

            <button class="dropdown-btn"><i class="fas fa-bullhorn mr-3"></i> Adverts
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="<?php echo e(route('admin.all-adverts')); ?>">All Adverts</a>
                <a href="<?php echo e(route('admin.create-advert')); ?>">Post Ad</a>
            </div>

            <button class="dropdown-btn"><i class="fas fa-cash-register mr-3"></i> Payout Requests
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="<?php echo e(url('admin/payout-request/delivery_merchants')); ?>">Delivery Merchants</a>
                <a href="<?php echo e(url('admin/payout-request/manufacturer')); ?>">Manufacturer</a>
                <a href="<?php echo e(url('admin/payout-request/shopper')); ?>">Shopper</a>
                <a href="<?php echo e(url('admin/payout-request/fast_food_grocery')); ?>">Fast Food & Grocery</a>
                <a href="<?php echo e(url('admin/payout-request/networking_agent')); ?>">Networking Agent</a>
                <a href="<?php echo e(url('admin/payout-request/professional_service')); ?>">Professional Service</a>
                <a href="<?php echo e(url('admin/payout-request/seller')); ?>">Seller</a>
            </div>
            <?php if($admin->role == 'super_admin'): ?>
            <button class="dropdown-btn d-none"><i class="fas fa-users"></i> Sub-Admin
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a class="dropdown-item" href="<?php echo e(route('admin.all-subadmin')); ?>">All Sub - Admin</a>
                <a class="dropdown-item" href="create_subadmin.html">Create Sub - Admin</a>
            </div>
            <a href="<?php echo e(url('admin/account-statement')); ?>"><i class="fas fa-clipboard-list"></i> Account Sales Statements</a>
            <a href="<?php echo e(url('admin/site-analysis')); ?>"><i class="fas fa-route"></i> Site Analysis</a>
            <a href="<?php echo e(route("admin.site-config")); ?>"><i class="fas fa-route"></i> Site Configuration</a>
            <a href="#"><i class="fa fa-cog"></i>System Control</a>
            <?php endif; ?>
            <a href="<?php echo e(url('/admin/logout')); ?>"><i class="fa fa-sign-out-alt mr-3"></i> Logout</a>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Bloomzon_v1\resources\views/components/dashboard/subadmin-side-nav.blade.php ENDPATH**/ ?>