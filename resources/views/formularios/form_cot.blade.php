@extends('layouts.principal')

@section('content')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="page-header"></h5>
        </div>
        <!-- /.col-lg-12 -->
    </div>



    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Formulario para Gerar Cotac&otilde;es</h4>
                </div>
                
                <!-- .panel-heading -->
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading dark-overlay">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Selecionar Empresa por Gerar</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <!--Divisao 1 -->
                                    <!-- /.col-lg-12 (nested) -->

                                    <div class="col-lg-12">


                                        <div class="form-group">
                                            <label for="enabledSelect"></label>                 
                                        </div>

                                        <!-- inicio da div body -->
                                        <div class="panel-body">
                                            <div class="table-responsive col-lg-12">        
                                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>Nr Entidade</th>
                                                            <th>Nome</th>
                                                            <th>Nuit</th>
                                                            <th>Endereco</th>
                                                            <th>Contacto</th>
                                                            <th>Abrir Cotacao</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td class="center"></td>
                                                            <td class="center"></td>
                                                            <td class="center">

                                                        </tr>



                                                    </tbody>

                                                </table>
                                                <!-- /.table-responsive -->
                                            </div>

                                        </div>
                                        <!--fim div body -->

                                        <!-- colspan 6 -->
                                    </div>


                                    <!--feixo da viv com sexoes-->
                                </div>


                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Cota&ccedil;&otilde;es Abertas</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">

                                <!-- divisao 2 -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table width="100%" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr class="success">
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Tipo</th>
                                                    <th>e-mail</th>
                                                    <th>Nuit</th>
                                                    <th>Avancar</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr class="odd gradeX">

                                                </tr>
                                            </tbody>


                                        </table>

                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->



                                <!-- /.panel-body -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- .panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


</div>

@stop
