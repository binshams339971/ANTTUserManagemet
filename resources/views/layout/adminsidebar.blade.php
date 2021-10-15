<header class="header body-pd" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu bx-x' id="header-toggle"></i>
            </div>
            <div class="ml-auto mr-4">
                <p class="mt-3" style="line-height: 0.1;">Name: <strong>{{ session()->get('admin') }}</strong></p>
                <p class="" style="line-height: 0.1;">Username: <strong>{{ session()->get('username') }}</strong></p>
            </div>
            <div class="header__img">
                <img src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="">
            </div>
        </header>

        <div class="l-navbar show" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="/" class="nav__logo">
                        <i class='bx bx-layer nav__logo-icon'></i>
                        <span class="nav__logo-name">ANTT Robotics Ltd.</span>
                    </a>
                    <div class="nav__list">
                        <a href="{{route('admin.home')}}" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                            <span style="font-size:8px; margin-left: -11px;" class="d-block d-md-none">Dashboard</span>
                        </a>

                        <a href="{{route('admin.allorder')}}" class="nav__link">
                            <i class='bx bx-list-ul nav__icon'></i>
                            <span class="nav__name">All Order's</span>
                            <span style="font-size:8px; margin-left: -11px;" class="d-block d-md-none">All Order's</span>
                        </a>
                        
                        <a href="{{route('admin.payments')}}" class="nav__link">
                            <i class='bx bxs-dollar-circle nav__icon'></i>
                            <span class="nav__name">Payment History</span>
                            <span style="font-size:8px; margin-left: -6px;" class="d-block d-md-none">Payment</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-book-content nav__icon'></i>
                            <span class="nav__name">All Registered User's</span>
                            <span style="font-size:8px; margin-left: -5px;" class="d-block d-md-none">All User's</span>
                        </a>

                        <div class="px-4 py-2 d-none d-md-block"><h4 class="text-white">Settings</h4></div>
                        @if(session()->get('username') == "superadmin")
                        <a href="{{route('admin.newadmin')}}" class="nav__link">
                            <i class='bx bxs-user-detail nav__icon'></i>
                            <span class="nav__name">Add New Admin</span>
                            <span style="font-size:8px; margin-left: -13px;" class="d-block d-md-none">Add Admin</span>
                        </a>
                        @endif
                        <a href="{{route('admin.changepassword')}}" class="nav__link">
                            <i class='bx bx-lock-open nav__icon'></i>
                            <span class="nav__name">Change Password</span>
                            <span style="font-size:8px; margin-left: -7px;" class="d-block d-md-none">Password</span>
                        </a>
                    </div>
                </div>

                <a href="{{route('admin.logout')}}" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                    <span style="font-size:8px; margin-left: -4px;" class="d-block d-md-none">Log Out</span>
                </a>
            </nav>
        </div>