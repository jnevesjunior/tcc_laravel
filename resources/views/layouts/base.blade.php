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

<body>
    <header>
        <nav>
            <div class="nav-wrapper col l9">
                <form>
                    <div class="input-field">
                        <input id="search" type="search" required>
                        <label for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </nav>

        <ul id="nav-mobile" class="side-nav fixed">
            <li class="logo">LOGO</li>
            <li class="bold"><a href="{{asset('inicio')}}" class="waves-effect waves-teal">Inicio</a></li>
            <li class="bold"><a href="{{asset('identificacao')}}" class="waves-effect waves-teal">Identificação</a></li>
            <li class="bold"><a href="{{asset('fluxo')}}" class="waves-effect waves-teal">Fluxo</a></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal">CSS</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="color.html">Color</a></li>
                                <li><a href="grid.html">Grid</a></li>
                                <li><a href="helpers.html">Helpers</a></li>
                                <li><a href="media-css.html">Media</a></li>
                                <li><a href="sass.html">Sass</a></li>
                                <li><a href="shadow.html">Shadow</a></li>
                                <li><a href="table.html">Table</a></li>
                                <li><a href="typography.html">Typography</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect waves-teal"><i class="material-icons">account_box</i>Jose</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#!">Perfil</a></li>
                                <li><a href="#!">Configurç</a></li>
                                <li><a href="#!">Sair</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </header>

    <main>
        <div class="container">
            @yield('container')
        </div>
    </main>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    @section('javascript')
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="{{url('materialize/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{url('materialize/js/materialize.js')}}"></script>
    @show
</body>
</html>
