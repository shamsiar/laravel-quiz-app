<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img alt="Porto" width="240" height="48" data-sticky-width="120" data-sticky-height="40" src="{{ asset('frontend/img/um/Logo-UnicMinds.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        {{-- <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle " href="{{ route('home') }}">
                                        Home
                                        </a>
                                        </li> --}}
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle @if(Route::is('home')) {{ 'active' }} @endif " href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>
                                        {{-- <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle " href="{{ route('about_us') }}">
                                        About Us
                                        </a>
                                        </li> --}}
                                        @guest
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle " href="{{ route('login') }}">
                                                Signup/Signin
                                            </a>
                                        </li>
                                        @else
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle @if(Route::is('profile')) {{ 'active' }} @endif" href="{{ route('profile') }}">

                                                Profile
                                            </a>
                                        </li>
                                        @if(auth()->user()->is_admin)
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href=" {{ route('dashboard') }}">
                                                Admin Dashboard
                                            </a>
                                        </li>


                                        @endif
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle " href="{{ route('logout') }}">
                                                Logout
                                            </a>
                                        </li>
                                        @endguest

                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                {{-- <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                            <span class="input-group-append">
                                                <button class="btn" type="submit">
                                                    <i class="fa fa-search header-nav-top-icon text-color-dark"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
