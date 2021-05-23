<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-2">
            <div class="logo">
                <a href="{{ url('/') }}">
                   <strong class="log-text">FruttyLooks</strong>
                </a>
            </div>
        </div>
        <div class="col-lg-10 col-md-10">
            <div class="main-menu mobile-menu">
                <ul>
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about-us') }}">About Us</a></li>
                    <li><a href="{{ url('/book-now') }}">Book Now</a></li>
                    <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                    <li><a href="{{ url('/contact-form') }}">Contact</a></li>
                    @guest
                        <li><a href="{{ route('register') }}">Signup</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                        <li><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('logout') }}">Log-out</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    <div id="mobile-menu-wrap"></div>
</div>
