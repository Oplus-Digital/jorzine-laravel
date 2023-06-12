<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{route('admin.main')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('admin/assets/images/logo.jpg')}}" alt="" height="22">
                        </span>
                    <span class="logo-lg">
                            <img src="{{asset('admin/assets/images/logo.jpg')}}" alt="" height="40">
                        </span>
                </a>

                <a href="{{route('admin.main')}}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('admin/assets/images/logo.jpg')}}" alt="" height="22">
                        </span>
                    <span class="logo-lg">
                            <img src="{{asset('admin/assets/images/logo.jpg')}}" alt="" height="40">
                        </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                    id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

        </div>

        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
                <input class="search-input form-control" placeholder="Search"/>
                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                    <i class="mdi mdi-close-circle"></i>
                </a>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <img class="rounded-circle header-profile-user"
                         src="{{auth()->user()->image ? auth()->user()->image : asset('admin/assets/images/user.jpg')}}"
                         alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{auth()->user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('admin.admins.edit',auth()->id())}}"><i
                            class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i>Edit Profile</a>
{{--                    <a class="dropdown-item" href="#"><i--}}
{{--                            class="mdi mdi-wallet-outline font-size-16 align-middle me-1"></i> My Wallet</a>--}}
{{--                    <a class="dropdown-item d-block" href="#"><span--}}
{{--                            class="badge badge-success float-end">11</span><i--}}
{{--                            class="mdi mdi-cog-outline font-size-16 align-middle me-1"></i> Settings</a>--}}
{{--                    <a class="dropdown-item" href="#"><i--}}
{{--                            class="mdi mdi-lock-open-outline font-size-16 align-middle me-1"></i> Lock screen</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}

                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

{{--            <div class="dropdown d-inline-block">--}}
{{--                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">--}}
{{--                    <i class="mdi mdi-cog-outline font-size-20"></i>--}}
{{--                </button>--}}
{{--            </div>--}}

        </div>
    </div>
</header>
