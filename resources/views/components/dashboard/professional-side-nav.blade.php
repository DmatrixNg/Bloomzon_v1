<div class="col-md-2 pb-5">
    <div class="card p-0">
        <div class="sidenav p-0">
            <h2 class="text-center p-3">MENU</h2>
            <a href="{{route('professional.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="{{route('professional.profile')}}"><i class="fas fa-user-lock"></i> Profile Settings</a>
            <a href="{{route('professional.notifications')}}"><i class="fa fa-bell"></i> Notification</a>
            <a href="{{route("professional.products")}}"><i class="fas fa-shopping-cart"></i> Products</a>
            <a href="{{url('/professional/messages')}}"><i class="fas fa-envelope"></i> Messages</a>
            <a href="{{route('professional.shop-gallery')}}"><i class="fas fa-images"></i> Shop Gallery</a>
            <a href="{{url('/professional/orders')}}"><i class="fas fa-comments"></i> Requests</a>
            <a href="{{url('/professional/sales-history')}}"><i class="fa fa-file"></i> Sales History</a>
            <a href="{{route('professional.wallet')}}"><i class="fas fa-wallet"></i> Wallet</a>
            <a href="{{url('/professional/messages')}}"><i class="fas fa-headset"></i> Contact Admin</a>
            <a href="{{url('/professional/reviews-and-feedback')}}"><i class="fas fa-comment-alt"></i> Reviews &amp; Feedback</a>
            <button class="dropdown-btn"><i class="fas fa-bullhorn"></i> Adverts
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a class="dropdown-item" href="{{route('professional.all-ads')}}"> All Ads</a>
                <a class="dropdown-item" href="{{route('professional.post-new-ads')}}"> Post New Ads</a>
            </div>
            
            <a href="{{ url('professional/logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>
</div>