<!--Double navigation-->
<header>
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav sn-bg-5 custom-scrollbar">
        <!-- Logo -->
        <li>
            <div class="logo-wrapper waves-light">
                <a href="#"><img src="http://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
            </div>
        </li>
        <!--/. Logo -->
        <!--Social-->
        <li>
            <ul class="social">
                <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
            </ul>
        </li>
        <!--/Social-->
        <!--Search Form-->
        <li>
            <form class="search-form" role="search">
                <div class="form-group waves-light">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </li>
        <!--/.Search Form-->
        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                @if ($logged_in_user)
                    <li>{{ link_to_route('frontend.user.dashboard', trans('navs.frontend.dashboard')) }}</li>
                @endif
                <li><a class="collapsible-header waves-effect arrow-r" href="/brand/create"><i class="fa
                fa-suitcase"></i>
                        Create new page</a></li>
                <li><a class="collapsible-header waves-effect arrow-r" href="/categories"><i class="fa fa-th-list"></i>
                        Categories</a></li>
                <li><a class="collapsible-header waves-effect arrow-r" href="/trending"><i class="fa fa-fire"></i>
                        Trending</a></li>
                <li><a class="collapsible-header waves-effect arrow-r" href="/contests"><i class="fa fa-th-large"></i> Contests</a></li>
                <li><a class="collapsible-header waves-effect arrow-r disabled" href="/marketplace" ><i class="fa fa-opencart"></i> Marketplace</a>

                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Introduction</a>
                            </li>
                            <li><a href="#" class="waves-effect">Monthly meetings</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r" data-toggle="collapse" data-target="#demo"><i class="fa fa-envelope-o"></i> Contact me<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body in" >
                        <ul >
                            <li><a href="#" class="waves-effect">FAQ</a>
                            </li>
                            <li><a href="#" class="waves-effect">Write a message</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <!--/. Side navigation links -->
        <div class="sidenav-bg mask-strong"></div>
    </ul>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-xs-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <p>Constashare</p>
        </div>
        <ul class="nav navbar-nav">
            @if ($logged_in_user)
                {{--<li>{{ link_to_route('frontend.user.dashboard', trans('navs.frontend.dashboard')) }}</li>--}}
            <li class="nav-link"><a href="#"><i class="fa fa-envelope"></i></a> </li>
            <li class="nav-link"><a href="/submit"><i class="fa fa-plus-circle"></i></a></li>
            <li class="nav-link"><a href="#"><i class="fa fa-users"></i></a></li>
            <li class="nav-link"><a href="#"><i class="fa fa-globe"></i></a></li>

            @endif

            @if (! $logged_in_user)
                    <li class="nav-item"><a class="nav-link" href="/login"><i class="fa fa-sign-in"
                                                                              aria-hidden="true"></i> Sign-in</a>
                    </li>
            @endif

            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarSecurityMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-lock"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarSecurityMenu">
                    <a class="dropdown-item" href="/termsofservice">Terms of Service</a>
                    <a class="dropdown-item" href="/privacypolicy">Privacy Policy</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarMenu">
                    @if ($logged_in_user)
                        <a class="dropdown-item" href="{{ route('frontend.user.account') }}"><i class="fa
                        fa-user"></i> {{trans('navs.frontend.user.account')}}</a>

                        <a class="card-link" href="{{route('frontend.user.brand.create')}}"><i class="fa fa-suitcase"
                                                                           aria-hidden="true"></i> Create page</a>
                        <a class="dropdown-item" href="{{ route('frontend.auth.logout') }}"><i class="fa
                        fa-sign-out"></i> {{trans('navs.general.logout')}}</a>
                    @endif
                    <hr>
                    <a class="dropdown-item" href="#"><i class="fa fa-comments-o"></i> Support</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-envelope"></i> Contact</a>
                        <hr>
                    <a class="dropdown-item" href="#">Investor Relations</a>
                    <a class="dropdown-item" href="#">About</a>

                </div>
            </li>
        </ul>
    </nav>
    <!-- /.Navbar -->
</header>
<!--/.Double navigation-->