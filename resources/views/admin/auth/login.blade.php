<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <title>Jorzine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Jorzine" name="description"/>
    <meta content="Themesdesign" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">
    <!-- Bootstrap Css -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css"/>

</head>


<body class="authentication-bg bg-primary">
<div class="home-center">
    <div class="home-desc-center">

        <div class="container">

{{--            <div class="home-btn">--}}
{{--                <a href="#" class="text-white router-link-active"><i--}}
{{--                        class="fas fa-home h2"></i></a>--}}
{{--            </div>--}}

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="px-2 py-3">

                                <div class="text-center">
                                    <a href="#">
                                        <img src="{{asset('admin/assets/images/logo.jpg')}}" height="100"
                                             alt="logo" class="rounded">
                                    </a>

                                    <h5 class="text-primary mb-2 mt-4">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to Jorzine.</p>
                                    @include('admin.layouts.status')
                                </div>

                                <form class="form-horizontal mt-4 pt-2" method="post" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="Enter Email" required>
                                        <small>Email : admin@admin.com</small>
                                    </div>

                                    <div class="mb-3">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword" name="password"
                                               placeholder="Enter password" required >
                                        <small>Pass : 123456</small>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="remember"
                                                   id="customControlInline">
                                            <label class="form-label"
                                                   for="customControlInline">Remember me</label>
                                        </div>
                                    </div>

                                    <div>
                                        <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Log In
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center text-white">
                        <p>©
                            <script>document.write(new Date().getFullYear())</script>
                              Crafted with <i class="mdi mdi-heart text-danger"></i> by
                            <a href="https://oplus.ae/" target="_blank" class="text-white">Oplus</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- End Log In page -->
</div>

<!-- JAVASCRIPT -->
<script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

<script src="{{asset('admin/assets/js/app.js')}}"></script>

</body>

</html>
