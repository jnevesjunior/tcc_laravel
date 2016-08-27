<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Meu TCC">
    <title>R.S.C</title>

    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">

@section('css')
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="{{url('materialize/css/googlefonts.css')}}"/>
    <!--Import materialize.css-->
    <link rel="stylesheet" href="{{url('materialize/css/teste-ghpages.css')}}" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
@show
</head>

<body class="blue">
<div class="container">
    <div class="row">
        <div class="col l4 offset-l4">
            <div class="card-panel">
                <form role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field center">
                            <i class="material-icons large">web</i>
                            <p class="login-form-text center">Seja bem vindo</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="login" name="login" type="text" autofocus>
                            <label for="login">CPF | Login</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="senha" name="senha" type="password">
                            <label for="senha">Senha</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field center">
                            <input type="checkbox" id="remember-me" />
                            <label for="remember-me">Lembrar</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field center">
                            <button class="btn-large waves-effect waves-light" type="submit" name="action">Entrar
                                <i  class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('javascript')
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{url('materialize/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{url('materialize/js/materialize.js')}}"></script>
@show

</body>
</html>
