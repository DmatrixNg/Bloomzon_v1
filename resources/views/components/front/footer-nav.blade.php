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
                                    <li><a href="{{route('home','about')}}">About</a> </li>
                                    <li><a href="{{route('home','services')}}">Services</a> </li>
                                    <li><a href="{{ url('/agents') }}">Agents</a> </li>
                                    <li><a href="{{route('home','investor_relations')}}">Investor Relations</a></li>
                                    <li><a href="{{route('home','bloomzontrip')}}">Bloomzon trip</a></li>
                                    <li><a href="#">Make Money with Us</a></li>
                                    <li><a href="{{ url('/seller/register') }}">Sell on bloomzon</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="{{route('home','career')}}">Career</a> </li>
                                    <li class="d-none"><a href="{{route('home','blog')}}">Blog</a> </li>
                                    <li><a href="{{route('home','faq')}}">FAQ</a> </li>
                                    <li><a href=" {{ url('professional/register') }} ">Sell Your Services on bloomzon</a></li>
                                    <li><a href="{{route('home','advertise_on_bloomzon')}}">Advertise on bloomzon tv</a></li>
                                    <li><a href="{{route('home','contact_us')}}">contact us</a></li>
                                    <li><a href="{{route('home','advertise_your_products')}}">Advertise Your Products</a></li>
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
                                    <li><a href="{{route('home','termsandcondititons')}}">Terms and Condition</a> </li>
                                    <li><a href="{{route('home','retailpolicy')}}">Retail Policy</a> </li>
                                    <li><a href="{{route('home','accountpolicy')}}">Account Policy</a> </li>
                                    <li><a href="{{route('home','becomeanaffiliate')}}">Become an Affiliate</a></li>
                                    <li><a href="{{route('home','cookies')}}">cookies</a> </li>
                                    <li><a href="{{route('home','gifts')}}">Gifts</a> </li>
                                    <li><a href="{{route('home','datapolicy')}}">data policy</a> </li>
                                    <li><a href="{{route('home','privacy')}}">Privacy</a> </li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="{{route('home','refundpolicy')}}">Refund Policy</a> </li>
                                    <li><a href="{{route('home','shippingreturns')}}">Shipping &amp; Returns</a> </li>
                                    <li><a href="{{route('home','qualitycontrol')}}">Quality Control</a> </li>
                                    <li><a href="{{route('home','accountpolicy')}}">Account Policy</a> </li>
                                    <li><a href="/register">Register</a> </li>
                                    <li><a href="/login">Login</a> </li>
                                    <li><a href="{{route('home','help')}}">Help</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-45">
                <div class="footer-widget">
                    <div class="subscribe-form">
                        <h4 class="text-white">SOCIAL MEDIA</h4>
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