<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/ui_template/assets/images/perkeso.jpg') }}">
    <title>BeAMS</title>

    <!-- <link href="{{ asset('/css/overrides.css') }}" rel="stylesheet" /> -->
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('ui_template/reference/dist/css/pages/login-register-lock.css') }}" rel="stylesheet">
    <link href="{{ asset('ui_template/reference/dist/css/style.min.css') }}" rel="stylesheet">
</head>

<body class="skin-default card-no-border blurbg">

    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Beams Perkeso</p>
        </div>
    </div>
    <section id="wrapper">
        <div class="login-register">
            <img class="logo-perkeso" src="{{ asset('ui_template/assets/images/perkeso-logo.png') }}">
            <h1 class="title-perkeso">Benefit Automated Management System</h1>
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="input-group-prepend">
                                </div>
                                <input class="form-control" type="text" name="loginid" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" placeholder="Password"> </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button type="submit" class="btn waves-effect waves-light btn-success btn-lg">Login</button>
                            </div>
                        </div>
                        <div class="form-group text-center lastitem">
                            <div class="col-xs-12">
                                <a href="#" class="btn waves-effect waves-light btn-rounded btn-danger">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('/ui_template/assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/ui_template/assets/node_modules/popper/popper.min.js') }}"></script>
    <script src="{{ asset('/ui_template/assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // Login and Recover Password
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    @include('sweetalert::alert')
</body>

</html>
</section>