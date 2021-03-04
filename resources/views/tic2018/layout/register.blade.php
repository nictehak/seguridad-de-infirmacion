@section('content')

<body class="hold-transition register-page">
    <div id="app">
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/mediapp') }}"><b>Medi</b>App</a>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ah ocurrido un problema<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <title>Registro</title>

            <div class="register-box-body">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{url('/')}}/registro/css/main.css">
</head>
<body class="cover" style="background-image: url(./registro/assets/img/a.jpg);">
    <form action="{{ url('/register') }}" method="post" autocomplete="off" class="full-box logInForm">
        <p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
        <center><p class="login-box-msg">Registrar nuevo miembro</p></center>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="{{ trans('Nombre') }}" name="name" value="{{ old('name') }}"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Confirmacion contreseña" name="password_confirmation"/>
                        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-1">
                            <label>
                                <div class="checkbox_register icheck">
                                    <label>
                                        <input type="checkbox" name="terms">
                                    </label>
                                </div>
                            </label>
                        </div><!-- /.col -->
                        <div class="col-xs-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">Terminos</button>
                            </div>
                        </div><!-- /.col --><br
                        <div class="col-xs-4 col-xs-push-1">
                            <center><button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button></center>
                        </div><!-- /.col -->
                    </div>
                </form>





    <!--====== Scripts -->

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>

    <script src="{{url('/')}}/registro/js/jquery-3.1.1.min.js"></script>
    <script src="{{url('/')}}/registro/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/registro/js/material.min.js"></script>
    <script src="{{url('/')}}/registro/js/ripples.min.js"></script>
    <script src="{{url('/')}}/registro/js/sweetalert2.min.js"></script>
    <script src="{{url('/')}}/registro/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{url('/')}}/registro/js/main.js"></script>
    <script>
        $.material.init();
    </script>
</body>
</html>