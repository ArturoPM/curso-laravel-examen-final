<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('titulo') | Autenticación</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('imagenes/plantilla/logo-negro-bloque.png')}}" alt="logo-negro-bloque.png" height="60px">
                </a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <center>
                    <h2>@yield('titulo')</h2>
                </center>
                @yield('contenido')
            </div>
        <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="{{('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
            <!-- iCheck -->
            <script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
            <script>
            $(function () {
                $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
