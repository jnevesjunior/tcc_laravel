@extends('layouts.base')

@section('container')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Pessoas</h1>
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
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>RG</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Celular</th>
                                <th>Situacao</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pessoas as $pessoa)
                                <tr class="odd gradeX">
                                    <td>{{ $pessoa->getId() }}</td>
                                    <td>{{ $pessoa->getNome() }}</td>
                                    <td>{{ $pessoa->getCpf() }}</td>
                                    <td>{{ $pessoa->getRg() }}</td>
                                    <td>{{ $pessoa->getEmail() }}</td>
                                    <td>{{ $pessoa->getTel() }}</td>
                                    <td>{{ $pessoa->getCel() }}</td>
                                    <td>{{ $pessoa->getSituacao() }}</td>
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