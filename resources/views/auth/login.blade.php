<!DOCTYPE html>
<html>
<head>
    <title>R.S.C</title>

@section('css')
    <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('sb-admin-2/dist/css/sb-admin-2.css')}}">
        <!-- Timeline CSS -->
        <link rel="stylesheet" href="{{asset('sb-admin-2/dist/css/timeline.css')}}">
        <!-- MetisMenu CSS -->
        <link rel="stylesheet" href="{{asset('sb-admin-2/bower_components/metisMenu/dist/metisMenu.min.css')}}">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="{{asset('sb-admin-2/bower_components/font-awesome/css/font-awesome.min.css')}}" type="text/css">
    @show
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Seja Bem Vindo</h3>
                </div>

                <div class="panel-body">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="CPF | Login" name="login" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Senha" name="password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember">Remember Me
                                </label>
                            </div>
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                        </fieldset>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@section('javascript')
    <!-- Jquery -->
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('sb-admin-2/dist/js/sb-admin-2.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('sb-admin-2/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
@show
</body>
</html>