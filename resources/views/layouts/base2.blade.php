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
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="{{asset('sb-admin-2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}">
        <!-- DataTables Responsive CSS -->
        <link rel="stylesheet" href="{{asset('sb-admin-2/bower_components/datatables-responsive/css/dataTables.responsive.css')}}">
        <!-- DataTables Responsive CSS -->
        <link rel="stylesheet" href="{{asset('my.css')}}">
    @show
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{asset('inicio')}}">R.S.C v1.1</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{asset('')}}"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Pesquisar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="{{asset('inicio')}}"><i class="fa fa-home fa-fw"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="{{asset('identificacao')}}"><i class="fa fa-home fa-fw"></i> Identificacao</a>
                    </li>
                    <li>
                        <a href="{{asset('fluxo')}}"><i class="fa fa-home fa-fw"></i> Fluxo</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('container')
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@section('javascript')
    <!-- Jquery -->
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('sb-admin-2/dist/js/sb-admin-2.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('sb-admin-2/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
    <!-- DataTables JavaScript -->
    <script src="{{asset('sb-admin-2/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sb-admin-2/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('sb-admin-2/bower_components/datatables-responsive/js/dataTables.responsive.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-geral').DataTable({
                responsive: true,
                "language": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                }
            });
        });
    </script>
@show
</body>
</html>




