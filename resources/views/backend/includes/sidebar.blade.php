<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">UNICMINDS</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-group"></i>
                </div>
                <div class="menu-title">User Management</div>
            </a>
            <ul>
                <li> <a href="{{ route('users.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New User</a>
                </li>
                <li> <a href="{{ route('users.index') }}"><i class="bx bx-right-arrow-alt"></i>User List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Test Management</div>
            </a>
            <ul>
                <li> <a href="{{ route('tests.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New Test</a>
                </li>
                <li> <a href="{{ route('tests.index') }}"><i class="bx bx-right-arrow-alt"></i>Test List</a>
                </li>
                <li> <a href="{{ route('test.results') }}"><i class="bx bx-right-arrow-alt"></i>Test Results</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-book"></i>
                </div>
                <div class="menu-title">Questions </div>
            </a>
            <ul>
                <li> <a href="{{ route('questions.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New Question</a>
                </li>
                <li> <a href="{{ route('questions.index') }}"><i class="bx bx-right-arrow-alt"></i>Question List</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
