@extends('layouts.principal')

@section('content')

 	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="page-header"></h5>
                </div>
                <!-- /.col-lg-12 -->
            </div>

 	               <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registo do Equipamento
                        </div>
                        <div class="panel-body">
                            <div class="row">



                <div class="col-lg-12">
                    <h1 class="page-header">Equipamentos Registados</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Maquinas Alocadas
                        </div>

                                
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Provincia</th>
                                        <th>Cliente</th>
                                        <th>Modelo da Maquina</th>
                                        <th>Numero de Serie</th>
                                        <th>Estado</th>
                                        <th>Op&ccedil;&otilde;es</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td class="center">#</td>
                                        <td class="center">#</td>
                                        <td>
                                              {!!link_to_route('equipamento.edit',$title='Update',$attributes=['class'=>'btn btn-info btn-circle btn-lg'])!!}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

                                <div class="col-lg-6">
                                      {!! Form::open(['route'=>'equipamento.store', 'method'=>'POST']) !!}
                                        {{ csrf_field() }}
                                         <div class="form-group">
                                                <label for="enabledSelect">Modelo</label>      
                                                        <select class="form-control m-bot15" name="modelo_id">
                                                          @if($modelo->count() > 0)
                                                          @foreach($modelo as $role)
                                                              <option value="{{$role->id}}">{{$role->nome}}</option>
                                                          @endForeach
                                                          @else
                                                            No Record Found
                                                          @endif   
                                                  </select>
                                        </div>
                                        
                                         <div class="form-group">
                                               {!! Form::label('N&uacute;mero de S&eacute;rie:') !!}
                                            {!! Form::text('nr_serie',null,['class'=>'form-control', 'placeholder'=>'Introduzir Nr Serie']) !!} 
                                         
                                         </div>
                                                                                  <div class="form-group">
                                                <label for="enabledSelect">Cliente</label>      
                                                        <select class="form-control m-bot15" name="cliente_id">
                                                          @if($ls_clientes->count() > 0)
                                                          @foreach($ls_clientes as $role)
                                                              <option value="{{$role->id}}">{{$role->nomeemp}}</option>
                                                          @endForeach
                                                          @else
                                                            No Record Found
                                                          @endif   
                                                  </select>
                                        </div>
                                     {!! Form::submit('Registar',['class' => 'btn btn-primary']) !!}
                                   
                                    {!!Form::close()!!}




                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


    </div>

@stop

