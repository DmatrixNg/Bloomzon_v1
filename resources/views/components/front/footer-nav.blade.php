<div>
    <!-- Well begun is half done. - Aristotle -->
    <footer class="footer-area mt-50" style="background-color: #000;">
    <div class="container-fluid pl-5 pr-5">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="fooer-widget">
                    <h4 class="text-white">BLOOMZON</h4>
                    <div class="footer-menu">
                        <div class="row footer-list border-right">
                            <div class="col">
                                <ul>
                                    <li><a href="{{route('home','about')}}">{{ __("About")}}</a> </li>
                                    <li><a href="{{route('home','services')}}">{{ __("Services")}}</a> </li>
                                    <li><a href="{{route('home','agent')}}">{{ __("Agents")}}</a> </li>
                                    <li><a href="{{route('home','investor_relations')}}">{{ __("Investor Relations")}}</a></li>
                                    <li><a href="{{route('home','bloomzontrip')}}">{{ __("Bloomzon trip")}}</a></li>
                                    <li><a href="{{route('home','make_money')}}">{{ __("Make Money with Us")}}</a></li>
                                    <li><a href="{{route('home','sell_on_bloomzon')}}">{{ __("Sell on")}} bloomzon</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="{{route('home','career')}}">{{ __("Career")}}</a> </li>
                                    <li><a href="{{route('home','blog')}}">{{ __("Blog")}}</a> </li>
                                    <li><a href="{{route('home','faq')}}">{{ __("FAQ")}}</a> </li>
                                    <li><a href="{{route('home','sell_your_service')}}">{{ __("Sell Your Services on")}} bloomzon</a></li>
                                    <li><a href="{{route('home','advertise_on_bloomzon')}}">{{ __("Advertise")}} on bloomzon tv</a></li>
                                    <li><a href="{{route('home','contact_us')}}">{{ __("contact us")}}</a></li>
                                    <li><a href="{{route('home','advertise_your_products')}}">{{ __("Advertise Your Products")}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-3 mt-sm-45">
                <div class="fooer-widget">
                    <h4 class="text-white">LEGAL</h4>
                    <div class="footer-menu">
                        <div class="row footer-list border-right">
                            <div class="col">
                                <ul>
                                    <li><a href="{{route('home','termsandcondititons')}}">{{ __("Terms and Condition")}}</a> </li>
                                    <li><a href="{{route('home','retailpolicy')}}">{{ __("Retail Policy")}}</a> </li>
                                    <li><a href="{{route('home','accountpolicy')}}">{{ __("Account Policy")}}</a> </li>
                                    <li><a href="{{route('home','accountpolicy')}}">{{ __("Become an Affiliate")}}</a></li>
                                    <li><a href="{{route('home','cookies')}}">{{ __("cookies")}}</a> </li>
                                    <li><a href="{{route('home','gifts')}}">{{ __("Gifts")}}</a> </li>
                                    <li><a href="{{route('home','datapolicy')}}">{{ __("data policy")}}</a> </li>
                                    <li><a href="{{route('home','privacy')}}">{{ __("Privacy")}}</a> </li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="{{route('home','refundpolicy')}}">{{ __("Refund Policy")}}</a> </li>
                                    <li><a href="{{route('home','shippingreturns')}}">{{ __("Shipping")}} &amp; {{ __("Returns")}}</a> </li>
                                    <li><a href="{{route('home','qualitycontrol')}}">{{ __("Quality Control")}}</a> </li>
                                    <li><a href="{{route('home','accountpolicy')}}">{{ __("Account Policy")}}</a> </li>
                                    <li><a href="/register">{{ __("Register")}}</a> </li>
                                    <li><a href="/login">{{ __("Login")}}</a> </li>
                                    <li><a href="{{route('home','help')}}">{{ __("Help")}}</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-45">
                <div class="footer-widget">
                    <div class="subscribe-form">
                        <h4 class="text-white">{{ __("SOCIAL MEDIA")}}</h4>
                    </div>
                    <div class="social-icons style-2">
                        <div class="row footer-list">
                            <div class="col">
                                <ul>
                                    <li class="text-white"><img src="{{asset('assets/frontend/img/tv.PNG')}}" alt="" width="20"> Youtube</li>
                                    <li class="text-white pt-3"><img src="{{asset('assets/frontend/img/facebook-logo.png')}}" alt="" width="20"> Facebook</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li class="text-white"><img src="{{asset('assets/frontend/img/twitter-logo.PNG')}}" alt="" width="20"> Twitter</li>
                                    <li class="text-white pt-3"><img src="{{asset('assets/frontend/img/youtube.JPEG')}}" alt="" width="20"> Bloomzon</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="social-icons style-2">
                        <div class="row footer-list">

                            <br>
                            <form method="post" action="{{ url('newsletter_subscribe') }}">

                                @csrf
                                @if(session()->has('message'))
                                    <div class="alert alert-primary">{{ session()->get('message') }}</div>
                                @endif

                                <div class="col">
                                    <input class="form-control" placeholder="Email" name="email">
                                    @error('email')
                                        <span class="text-danger">
                                            <small style="color: white;">{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <input type="submit" value="Subscribe" class="btn btn-danger ">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
