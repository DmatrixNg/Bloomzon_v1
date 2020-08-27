<div class="col-md-2">
    <div class="mt-3 mb-3">
        <div class="text-center mt-5 mb-5">
            <img class="img" src="{{ asset('storage/assets/networking_agent/avatar/' . $networking_agent->avatar) }}" width="80" height="80" style="border-radius: 40px" >
            <br><br>
            <span><strong>{{ $networking_agent->full_name }}</strong> </span><br>
            <span><strong>Agent ID: </strong> {{ $networking_agent->id }}</span>
        </div>
        <hr>
        <div class="sidenav1">
            <a  href="{{route('networking_agent.dashboard')}}"><i class="fa fa-tachometer-alt mr-3"></i>Dashboard</a>
            <a href="{{route('networking_agent.profile')}}"><i class="fa fa-user-cog mr-3"></i> Profile Settings</a>
            <a href="{{route('networking_agent.notifications')}}"><i class="fa fa-bell mr-3"></i> Notifications</a>
            <a href="{{ url('networking_agent/messages')}}"><i class="fa fa-envelope mr-3"></i> Messages</a>
            <a href="{{route('networking_agent.create-seller')}}"><i class="fa fa-user mr-3"></i> Create Seller Account</a>
            <a href="{{route('networking_agent.pre-chart')}}"><i class="fa fa-users mr-3"></i> All Sellers Pre-chart</a>
            <a href="{{route('networking_agent.wallet')}}"><i class="fa fa-wallet mr-3"></i> Wallet</a>
            <button class="dropdown-btn"><i class="fas fa-bullhorn"></i> Adverts
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container1">
                <a class="dropdown-item" href="{{route('networking_agent.all-ads')}}"> All Ads</a>
                <a class="dropdown-item" href="{{route('networking_agent.post-new-ads')}}"> Post New Ads</a>
            </div>
            <a href="{{ url('networking_agent/messages')}}"><i class="fa fa-headset mr-3"></i> Contact Admin</a>
            <a href="{{route('networking_agent.verification')}}"><i class="fa fa-user-check mr-3"></i> Verification</a>
            <a href="{{route('networking_agent.logout')}}"><i class="fa fa-sign-out-alt mr-3"></i> Logout</a>
        </div>
    </div>
</div>
