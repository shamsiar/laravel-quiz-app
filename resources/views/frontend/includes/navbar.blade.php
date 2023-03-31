<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="{{ asset('frontend/img/logo-default-slim-dark.png') }}">
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
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle " href="{{ route('home') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle " href="{{ route('tests') }}">
                                                Tests
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle " href="{{ route('about_us') }}">
                                                About Us
                                            </a>
                                        </li>
                                        @guest
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle " href="{{ route('login') }}">
                                                Signup/Signin
                                            </a>
                                        </li>
                                        @else
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle " href="{{ route('profile') }}">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle " href="{{ route('logout') }}">
                                                Logout
                                            </a>
                                        </li>
                                        @endguest
                                        {{-- <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="index.html">
                                                Home
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="index.html">
                                                        Landing Page
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index.html#demos">
                                                        Demos
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Classic</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="index-classic.html">Classic -
                                                                Original</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-classic-color.html">Classic - Color</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-classic-light.html">Classic - Light</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-classic-video.html">Classic - Video</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-classic-video-light.html">Classic - Video -
                                                                Light</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Corporate <span
                                                            class="tip tip-dark">hot</span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate.html">Corporate - Version 1</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-2.html">Corporate - Version 2</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-3.html">Corporate - Version 3</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-4.html">Corporate - Version 4</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-5.html">Corporate - Version 5</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-6.html">Corporate - Version 6</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-7.html">Corporate - Version 7</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-8.html">Corporate - Version 8</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-9.html">Corporate - Version 9</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-10.html"->Corporate - Version
                                                                10</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-11.html"->Corporate - Version
                                                                11</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-12.html"->Corporate - Version
                                                                12</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-13.html"->Corporate - Version
                                                                13</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-14.html"->Corporate - Version
                                                                14</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-15.html"->Corporate - Version
                                                                15</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-16.html"->Corporate - Version
                                                                16</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-17.html"->Corporate - Version
                                                                17</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-18.html"->Corporate - Version
                                                                18</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-19.html"->Corporate - Version
                                                                19</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-20.html"->Corporate - Version
                                                                20</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Portfolio</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="index-portfolio.html">Portfolio - Version 1</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-portfolio-2.html">Portfolio - Version 2</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-portfolio-3.html">Portfolio - Version 3</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-portfolio-4.html">Portfolio - Version 4</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-portfolio-5.html">Portfolio - Version 5</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Blog</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="index-blog.html">Blog -
                                                                Version 1</a></li>
                                                        <li><a class="dropdown-item" href="index-blog-2.html">Blog -
                                                                Version 2</a></li>
                                                        <li><a class="dropdown-item" href="index-blog-3.html">Blog -
                                                                Version 3</a></li>
                                                        <li><a class="dropdown-item" href="index-blog-4.html">Blog -
                                                                Version 4</a></li>
                                                        <li><a class="dropdown-item" href="index-blog-5.html">Blog -
                                                                Version 5</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">One Page</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="index-one-page.html">One
                                                                Page Original</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --}}

                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
