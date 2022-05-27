
<!doctype html>
<html lang="en">
<head>
    <title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{{--    <link rel="stylesheet" href="{{ asset('assets')}}/panel/css/demo.css" />--}}

{{--    <link rel="stylesheet" href="{{ asset('assets')}}/panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />--}}

{{--    <link rel="stylesheet" href="{{ asset('assets')}}/panel/vendor/libs/apex-charts/apex-charts.css" />--}}

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">

</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url(images/bg-1.jpg);">
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Sign In</h3>
                            </div>
{{--                            <div class="w-100">--}}
{{--                                <p class="social-media d-flex justify-content-end">--}}
{{--                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>--}}
{{--                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>--}}
{{--                                </p>--}}
{{--                            </div>--}}
                        </div>

                        @include('home.message');
                        <form action="{{route('adminlogincheck')}}" method="post" class="signin-form">
                            @csrf
{{--                            @method('put')--}}
{{--                            @method('hidden')--}}
                            <div class="form-group mb-3">
                                <label class="label"  for="name">email</label>
                                <input type="email" name="email" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="text-center">Not a member? <a data-toggle="tab" href="/adminregister">Sign Up</a></p>
{{--                        {{route('adminregister')}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<script href="{{asset('assets')}}/panel/vendor/libs/jquery/jquery.js"></script>--}}
{{--<script href="{{ asset('assets') }}/panel/vendor/libs/popper/popper.js"></script>--}}
{{--<script href="{{ asset('assets') }}/panel/vendor/js/bootstrap.js"></script>--}}
{{--<script href="{{ asset('assets') }}/panel/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>--}}

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js')}}/popper.js"></script>
<script src="{{asset('assets/js')}}/bootstrap.min.js"></script>
<script src="{{asset('assets/js')}}/main.js"></script>

</body>
</html>






{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>AdminLTE 2 | Log in</title>--}}
{{--    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>--}}
{{--    <!-- Bootstrap 3.3.2 -->--}}
{{--    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />--}}
{{--    <!-- Font Awesome Icons -->--}}
{{--    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />--}}
{{--    <!-- Theme style -->--}}
{{--    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />--}}
{{--    <!-- iCheck -->--}}
{{--    <link href="../../plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />--}}

{{--    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
{{--    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
{{--    <!--[if lt IE 9]>--}}
{{--    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>--}}
{{--    <![endif]-->--}}
{{--</head>--}}
{{--<body class="login-page">--}}
{{--<div class="login-box">--}}
{{--    <div class="login-logo">--}}
{{--        <a href="../../index2.html"><b>Admin</b>LTE</a>--}}
{{--    </div><!-- /.login-logo -->--}}
{{--    <div class="login-box-body">--}}
{{--        <p class="login-box-msg">Sign in to start your session</p>--}}
{{--        <form action="../../index2.html" method="post">--}}
{{--            <div class="form-group has-feedback">--}}
{{--                <input type="text" class="form-control" placeholder="Email"/>--}}
{{--                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}
{{--            </div>--}}
{{--            <div class="form-group has-feedback">--}}
{{--                <input type="password" class="form-control" placeholder="Password"/>--}}
{{--                <span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-8">--}}
{{--                    <div class="checkbox icheck">--}}
{{--                        <label>--}}
{{--                            <input type="checkbox"> Remember Me--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div><!-- /.col -->--}}
{{--                <div class="col-xs-4">--}}
{{--                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>--}}
{{--                </div><!-- /.col -->--}}
{{--            </div>--}}
{{--        </form>--}}

{{--        <div class="social-auth-links text-center">--}}
{{--            <p>- OR -</p>--}}
{{--            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>--}}
{{--            <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>--}}
{{--        </div><!-- /.social-auth-links -->--}}

{{--        <a href="#">I forgot my password</a><br>--}}
{{--        <a href="register.html" class="text-center">Register a new membership</a>--}}

{{--    </div><!-- /.login-box-body -->--}}
{{--</div><!-- /.login-box -->--}}

{{--<!-- jQuery 2.1.3 -->--}}
{{--<script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>--}}
{{--<!-- Bootstrap 3.3.2 JS -->--}}
{{--<script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>--}}
{{--<!-- iCheck -->--}}
{{--<script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>--}}
{{--<script>--}}
{{--    $(function () {--}}
{{--        $('input').iCheck({--}}
{{--            checkboxClass: 'icheckbox_square-blue',--}}
{{--            radioClass: 'iradio_square-blue',--}}
{{--            increaseArea: '20%' // optional--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
