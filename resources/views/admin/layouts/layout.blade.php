<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Jorzine" name="description"/>
    <meta content="Themesdesign" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    @include('admin.layouts.styles')
</head>

<body>

<!-- Begin page -->
<div id="layout-wrapper">

    @include('admin.layouts.top-bar')

    <!-- ========== Left Sidebar Start ========== -->

            <!--- Sidemenu -->
           @include('admin.layouts.left-sidebar')
            <!-- Sidebar -->

    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        @yield('content')

        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script>
                        © Oplus.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Oplus
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
{{--@include('admin.layouts.right-bar')--}}
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

@include('admin.layouts.scripts')

@stack('scripts')

</body>

</html>
