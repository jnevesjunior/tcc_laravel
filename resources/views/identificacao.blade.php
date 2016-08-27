@extends('layouts.base')

@section('container')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Identificação</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-geral">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Pessoa</th>
                                <th>RFID</th>
                                <th>Senha</th>
                                <th>Situacao</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($identificacoes as $identificacao)
                                <tr class="odd gradeX">
                                    <td>{{ $identificacao->getId() }}</td>
                                    <td>{{ $identificacao->getIdPessoa()->getNome() }}</td>
                                    <td>{{ $identificacao->getRfid() }}</td>
                                    <td>{{ $identificacao->getSenha() }}</td>
                                    <td>{{ $identificacao->getSituacao() }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop