<div>
    <div class="col-md-2">
        <div class="mt-3 mb-3">
            <div class="text-center mt-5 mb-5">
                <img src="asset/img/userface.png" alt="" height="105" width="105"><br><br>
                <span><strong>Login ID:</strong>sdsd</span>
            </div>
            <hr>
            <div class="sidenav1">
                <a href="home"> <i class="fa fa-tachometer-alt mr-3"></i> Dashboard</a>
                <button class="dropdown-btn"><i class="fas fa-user-cog mr-3"></i> User Management
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container1">
                    <a href="createnewuser">Create New User</a>
                    <a href="allusers?users=<?php echo e(base64_encode(json_encode('users'))); ?>">All Users</a>
                </div>
                <button class="dropdown-btn"><i class="fas fa-user-cog mr-3"></i> Brands Management
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container1">
                    <a href="createnewbrand">Create New Brand</a>
                    <a href="allusers?users=<?php echo e(base64_encode(json_encode('brands'))); ?>">All Brands</a>
                </div>
                <a href="review"><i class="fas fa-comments mr-3"></i> Review/Feedback</a>
                <a href="messages"><i class="fas fa-envelope  mr-3"></i> Messages</a>
                <a href="bloomzonproduct"><i class="fas fa-shopping-cart  mr-3"></i> Bloomzon Products</a>
                <button class="dropdown-btn"><i class="fas fa-user-cog mr-1"></i> Application Creation
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container1">
                    <a href="createcategory?categories=<?php echo e(base64_encode(json_encode('categories'))); ?>">Create Product
                        Categories</a>
                    <a href="allcategory">All Categories</a>
                </div>
                <a href="manufacturer"><i class="fas fa-tasks mr-2"></i> Manufacturers Mgt.</a>
                <button class="dropdown-btn"><i class="fas fa-money-check-alt mr-3"></i> Subscription
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container1">
                    <a href="allusers">All Users</a>
                    <a href="activeusers">Active Users</a>
                    <a href="inactiveusers">Inactive Users</a>
                </div>
                <button class="dropdown-btn"><i class="fas fa-newspaper mr-3"></i> Newsletter
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container1">
                    <a href="allsubscribers">All Subscribers</a>
                    <a href="newsletter">Send Out Newsletter</a>
                    <a href="allnewslettersubcribers">All Newsletter Subscribers</a>
                </div>
                <a href="advert"><i class="fas fa-bullhorn mr-3"></i> Adverts</a>
                <button class="dropdown-btn"><i class="fas fa-cash-register mr-3"></i> Payout Requests
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container1">
                    <a href="deliverypayout">Delivery Merchants</a>
                    <a href="manufacturerpayout">Manufacturer</a>
                    <a href="shopperpayout">Shopper</a>
                    <a href="fastfoodpayout">Fast Food</a>
                    <a href="grocerypayout">Grocery</a>
                    <a href="networkingagentpayout">Networking Agent</a>
                    <a href="proservicepayout">Professional Service</a>
                </div>
                <a href="/logout"><i class="fa fa-sign-out-alt mr-3"></i> Logout</a>
            </div>
        </div>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\bloomzoon_app\resources\views/components/dashboard/subadmin-side-nav.blade.php ENDPATH**/ ?>