<div class="col-md-2 pb-5">
    <div class="card p-0">
        <div class="sidenav p-0">
            <h2 class="text-center p-3">MENU</h2>
            <a href="{{route('shopper.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="{{route('shopper.delivery-request')}}"><i class="fa fa-comment-alt"></i> Delivery Request</a>
            <button class="dropdown-btn"><i class="fas fa-warehouse"></i> Warehouse 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a class="dropdown-item" href="{{route('shopper.warehouse-package')}}"> Package Goods</a>
            </div>
            <a href="{{route('shopper.delivery-merchant')}}"><i class="fa fa-user"></i> Merchant Status</a>
        <a href="{{route('shopper.routing')}}"><i class="fas fa-route"></i> Control/Routing Check</a>
            <a href="{{route('shopper.wallet')}}"><i class="fas fa-wallet"></i> Wallet</a>
            <button class="dropdown-btn"><i class="fas fa-bullhorn"></i> Adverts
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a class="dropdown-item" href="{{route('shopper.all-ads')}}"> All Ads</a>
                <a class="dropdown-item" href="{{route('shopper.post-new-ads')}}"> Post New Ads</a>
            </div>
            <a href="{{url('/shopper/messages')}}"><i class="fas fa-users-cog"></i> Contact Admin</a>
            <a href="{{url('shopper/reviews-and-feedback')}}"><i class="fas fa-comment-alt"></i> Customers Feedback</a>
            <a href="{{url('/shopper/settings')}}"><i class="fa fa-cog"></i> Settings</a>
            <a href="{{url('#')}}"><i class="fa fa-envelope"></i> Messages</a>
            <a href="notifications.html"><i class="fa fa-bell"></i> Notification</a>
            <a href="{{route('shopper.logout')}}"><i class="fa fa-sign-out-alt mr-3"></i> Logout</a>
        </div>
    </div>
</div>