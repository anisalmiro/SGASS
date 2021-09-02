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
                    Fluxo de Actividade
                </div>
                <!-- .panel-heading -->
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading dark-overlay">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Empresas Registadas</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table width="100%" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr class="success">
                                                    <th>#</th>
                                                    <th>Nome do Cliente</th>
                                                    <th>Tipo</th>
                                                    <th>e-mail</th>
                                                    <th>Nuit</th>
                                                    <th>Provincia</th>
                                                    <th>Distrito</th>
                                                    <th>Bairro</th>
                                                    <th>Avenida</th>
                                                </tr>
                                            </thead>
                                            @foreach($ls_clientes as $cli)
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>{{$cli->id}}</td>
                                                    <td>{{$cli->nomeemp}}</td>
                                                    <td>{{$cli->tipo}}</td>
                                                    <td>{{$cli->email}}</td>
                                                    <td>{{$cli->nuit}}</td>
                                                    <td>{{$cli->nomepv}}</td>
                                                    <td>{{$cli->nomedt}}</td>
                                                    <td>{{$cli->bairro}}</td>
                                                    <td>{{$cli->avenida}}</td>

                                                </tr>
                                            </tbody>
                                            @endforeach

                                        </table>
                                        {!!$ls_clientes->render()!!}
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Registo de Empresa</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">


                                <!-- /.col-lg-6 (nested) -->

                                <div class="col-lg-6">
                                    {!! Form::open(['route'=>'cliente.store', 'method'=>'POST']) !!}
                                    {{ csrf_field() }}
                                    <div class="form-group"></div>
                                    <div class="form-group">
                                        <label for="enabledSelect">Tipo de Cliente</label>      
                                        <select class="form-control m-bot15" name="tipo">
                                            <option value="">Selecionar Categoria</option> 
                                            <option value="CPP">CPP</option> 
                                            <option value="CASH">CASH</option> 
                                            <option value="RENTAL">RENTAL</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('Nome da Empresa:') !!}
                                        {!! Form::text('nomeemp',null,['class'=>'form-control', 'placeholder'=>'Introduzir Nome da Empresa']) !!} 
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('E-mail:') !!}
                                        {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'nome@emp.co.mz']) !!} 
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('Nuit:') !!}
                                        {!! Form::text('nuit',null,['class'=>'form-control', 'placeholder'=>'Introduzir Nuit']) !!} 
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('Nr de Tel:') !!}
                                        {!! Form::text('tell',null,['class'=>'form-control', 'placeholder'=>'Introduzir nr Telefone']) !!} 
                                    </div>



                                    <div class="form-group">
                                        <label for="enabledSelect">Provincia</label>  
                                        {!! Form::select('provincia',$provincia,null,['class'=>'form-control','id'=>'provincia'])!!}
                                    </div>                                        

                                    <div class="form-group">
                                        <label for="enabledSelect">Distritos</label>  
                                        {!! Form::select('distrito',['placeholder'=>'selecionar Distrito'],null,['class'=>'form-control','id'=>'distrito'])!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('Bairro:') !!}
                                        {!! Form::text('bairro',null,['class'=>'form-control', 'placeholder'=>'Introduzir Bairro']) !!} 
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('Avenida:') !!}
                                        {!! Form::text('avenida',null,['class'=>'form-control', 'placeholder'=>'Introduzir avenida']) !!} 
                                    </div>


                                    {!! Form::submit('Registar',['class' => 'btn btn-primary']) !!}

                                    {!!Form::close()!!}


                                </div>
                                <!-- /.col-lg-6 (nested) -->

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
