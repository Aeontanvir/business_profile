<nav class="fh5co-nav" role="navigation">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <p class="site">{{ Voyager::setting('site.domain') }}</p>
                    <p class="num">Call: +01 123 456 7890</p>
                    <ul class="fh5co-social">
                        <li><a href="{{ Voyager::setting('social.social_facebook') }}"><i class="icon-facebook2"></i></a></li>
                        <li><a href="{{ Voyager::setting('social.social_twitter') }}"><i class="icon-twitter2"></i></a></li>
                        <li><a href="{{ Voyager::setting('social.social_facebook') }}"><i class="icon-dribbble2"></i></a></li>
                        <li><a href="{{ Voyager::setting('social.social_facebook') }}"><i class="icon-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="fh5co-logo"><a href="{{ url('/') }}"><i class="icon-study"></i>{{ Voyager::setting('site.title') }}</a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/groups') }}">Courses</a></li>
                        <li><a href="{{ url('/members') }}">Members</a></li>
                        <li><a href="#">Archives</a></li>
                        <li class="has-dropdown">
                            <a href="#">Blog</a>
                            <ul class="dropdown">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">eCommerce</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">API</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                        @guest
                        @else
                        @endguest
                        <li class="btn-cta"><a href="{{ url('/admin') }}"><span>Login</span></a></li>
                        <!-- <li class="btn-cta"><a href="#"><span>Create a Course</span></a></li> -->
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</nav>