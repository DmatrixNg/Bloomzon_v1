<div class="col-md-2">
    <div class="mt-3 mb-3">
        <div class="text-center mt-5 mb-5">
            <img src="asset/img/userface.png" alt="" height="105" width="105"><br><br>
            <span><strong>Name: </strong> {{ Auth::guard('admin')->user()->full_name }}</span>
        </div>
        <hr>
        <div class="sidenav1">
            <a href="{{ url('admin/dashboard') }}"> <i class="fa fa-tachometer-alt mr-3"></i> Dashboard</a>
            <button class="dropdown-btn"><i class="fas fa-user-cog mr-3"></i> User Management
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="{{ url('admin/create_user') }}">Create New User</a>
            </div>

            <button class="dropdown-btn"><i class="fas fa-user-circle"></i> System User
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="{{ url('admin/get_users/buyers') }}">Buyers</a>
                <a href="{{ url('admin/get_users/sellers') }}">Sellers</a>
                <a href="{{ url('admin/get_users/bloomzon_sellers') }}">Bloomzon Sellers</a>
                <a href="{{ url('admin/get_users/networking_agents') }}">Networking Associates</a>
                <a href="{{ url('admin/get_users/shoppers') }}">Shoppers Associates</a>
                <a href="{{ url('admin/get_users/delivery_agents') }}">Delivery Merchants</a>
                <a href="{{ url('admin/get_users/professionals') }}">Professional Service</a>
                @if(auth()->guard('admin')->user()->role == 'super_admin')
                <a href="{{ url('admin/get_users/sub_admins') }}">Sub Admin</a>
                @endif
                <a href="{{ url('admin/get_users/fast_food_groceries') }}">Fast Food &amp; Groceries</a>
                <a href="{{ url('admin/get_users/manufacturers') }}">Manufacturers</a>
            </div>

            <a href="{{ url('/admin/reviews') }}"><i class="fas fa-comments mr-3"></i> Review/Feedback</a>
            <a href="{{ url('admin/all_messages') }}"><i class="fas fa-envelope  mr-3"></i> Messages</a>
            <a href="{{ url('admin/queries') }}"><i class="fas fa-envelope  mr-3"></i> Queries</a>
            <a href="{{ url('admin/bloomzonproducts') }}"><i class="fas fa-shopping-cart  mr-3"></i> Bloomzon Products</a>
            <button class="dropdown-btn"><i class="fas fa-user-cog mr-1"></i> Application Creation
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="{{ url('admin/create_category') }}">Create Product Categories</a>
                <a href="{{ url('admin/create_subcategory') }}">Create Subategories</a>
                <a href="{{ url('admin/all_categories') }}">All Categories</a>
            </div>
            <button class="dropdown-btn"><i class="fas fa-folder-open"></i> Food Catalogue
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="{{ route('admin.food-catalogues') }}">All Food Catalogues</a>
                <a href="{{ route('admin.create-catalogue') }}">Create Catalogue</a>
            </div>

            <a href="{{ url('admin/manufacturer-chats') }}"><i class="fas fa-tasks mr-2"></i> Manufacturers Mgt.</a>
            
            <button class="dropdown-btn"><i class="fas fa-user-cog mr-3"></i> Brands Management
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="{{ route('admin.all-brands') }}">All Brands</a>
                <a href="{{ route('admin.create-brand') }}">Create New Brand</a>
            </div>
            {{-- <button class="dropdown-btn"><i class="fas fa-newspaper mr-3"></i> Newsletter
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="allsubscribers.html">All Subscribers</a>
                <a href="newsletter.html">Send Out Newsletter</a>
                <a href="allnewslettersubcribers.html">All Newsletter Subscribers</a>
            </div> --}}

            <button class="dropdown-btn"><i class="fas fa-bullhorn mr-3"></i> Adverts
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="{{ route('admin.all-adverts') }}">All Adverts</a>
                <a href="{{ route('admin.create-advert') }}">Post Ad</a>
            </div>

            <button class="dropdown-btn"><i class="fas fa-cash-register mr-3"></i> Payout Requests
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a href="deliverypayout.html">Delivery Merchants</a>
                <a href="manufacturerpayout.html">Manufacturer</a>
                <a href="shopperpayout.html">Shopper</a>
                <a href="fastfoodpayout.html">Fast Food</a>
                <a href="grocerypayout.html">Grocery</a>
                <a href="networkingagentpayout.html">Networking Agent</a>
                <a href="proservicepayout.html">Professional Service</a>
            </div>
            @if($admin->role == 'super_admin')
            <button class="dropdown-btn d-none"><i class="fas fa-users"></i> Sub-Admin
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a class="dropdown-item" href="{{route('admin.all-subadmin')}}">All Sub - Admin</a>
                <a class="dropdown-item" href="create_subadmin.html">Create Sub - Admin</a>
            </div>
            <a href="account_sales_statements.html"><i class="fas fa-clipboard-list"></i> Account Sales Statements</a>
            <a href="site_analysis.html"><i class="fas fa-route"></i> Site Analysis</a>
            <a href="{{route("admin.site-config") }}"><i class="fas fa-route"></i> Site Configuration</a>
            <a href="system_control.html"><i class="fa fa-cog"></i>System Control</a>
            @endif
            <a href="#"><i class="fa fa-sign-out-alt mr-3"></i> Logout</a>
        </div>
    </div>
</div>
