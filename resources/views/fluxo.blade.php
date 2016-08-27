@extends('layouts.base')

@section('container')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Fluxo de pessoas</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Fluxo de pessoas nos ultimos 12 meses
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-12-meses"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Donut Chart Example
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->

@stop

@section('javascript')
    @parent

    <script src="{{asset('sb-admin-2/bower_components/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('sb-admin-2/bower_components/morrisjs/morris.min.js')}}"></script>
    <script>
        $(function() {
            Morris.Area({
                element: 'morris-12-meses',
                data: [{
                    period: '2010-01',
                    entrada: 2666,
                    saida: null,
                    visitantes: 2647
                }, {
                    period: '2010-02',
                    entrada: 2778,
                    saida: 2294,
                    visitantes: 2441
                }, {
                    period: '2010-03',
                    entrada: 4912,
                    saida: 1969,
                    visitantes: 2501
                }, {
                    period: '2010-04',
                    entrada: 3767,
                    saida: 3597,
                    visitantes: 1
                }, {
                    period: '2010-05',
                    entrada: 6810,
                    saida: 1914,
                    visitantes: 2293
                }, {
                    period: '2010-06',
                    entrada: 5670,
                    saida: 4293,
                    visitantes: 1881
                }, {
                    period: '2010-07',
                    entrada: 4820,
                    saida: 3795,
                    visitantes: 1588
                }, {
                    period: '2010-08',
                    entrada: 15073,
                    saida: 5967,
                    visitantes: 5175
                }, {
                    period: '2010-09',
                    entrada: 10687,
                    saida: 4460,
                    visitantes: 2028
                }, {
                    period: '2010-10',
                    entrada: 8432,
                    saida: 5713,
                    visitantes: 1791
                }, {
                    period: '2010-11',
                    entrada: 8432,
                    saida: 5713,
                    visitantes: 1791
                }, {
                    period: '2010-12',
                    entrada: 8432,
                    saida: 5713,
                    visitantes: 1791
                }],
                xkey: 'period',
                ykeys: ['entrada', 'saida', 'visitantes'],
                labels: ['Entrada', 'Saida', 'Visitantes'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });
        });
    </script>

    <script>
        $(function() {
            $.ajax({
                type: "GET",
                url: "{{asset('fluxoApi')}}"
            })
                .done(function( data ) {
                    Morris.Donut({
                        element: 'morris-donut-chart',
                        data: data,
                        resize: true
                    });
                })
                .fail(function() {
                    alert( "error occured" );
                });

        });
    </script>
@stop