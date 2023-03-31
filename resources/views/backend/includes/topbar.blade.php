<!--start header -->
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>

            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">

                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="{{ route('home') }}" role="button">
                            <i class='bx bx-home-circle'></i>

                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="{{ route('logout') }}"><i class='bx bx-log-out-circle'></i>
                        </a>
                    </li>

                </ul>
            </div>


            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{-- <img src="{{ asset('backend/images/avatars/avatar-2.png') }}" class="user-img" alt="user avatar"> --}}
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">
                            @if (Auth::check())
                            {{ Auth::user()->name ?? ""}}
                            @endif
                        </p>


                        {{-- <p class="designattion mb-0">Web Designer</p> --}}
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    {{-- <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                    </li>
                    <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
                    </li> --}}
                    <li><a class="dropdown-item" href="{{ route('home') }}"><i class='bx bx-home-circle'></i><span>Home</span></a>
                    </li>

                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--end header -->
