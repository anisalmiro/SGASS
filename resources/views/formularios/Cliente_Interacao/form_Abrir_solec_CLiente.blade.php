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
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Abrir uma Solicita&ccedil;&atilde;o</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                       
            
                                <div class="col-lg-6">
                   


                                    {!! Form::open(['route'=>'chamado.store', 'method'=>'POST']) !!}
                                         <div>
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
                                            {!! Form::label('Cliente:') !!}
                                                {!! Form::select('cliente_action',$cliente,null,['class'=>'form-control','id'=>'cliente_action'])!!}
                                         </div>

                                          <div class="form-group">
                                            {!! Form::label('Equipamento:') !!}
                                                {!! Form::select('equip_action',['placeholder'=>'selecionar Equipamento'],null,['class'=>'form-control','id'=>'equip_action'])!!}
                                         </div>

                                         <div class="form-group">
                                            {!! Form::label('Seccao Av&aacute;riada:') !!}
                                                {!! Form::select('avaria',$avaria,null,['class'=>'form-control','id'=>'avaria'])!!}
                                         </div>

                                          <div class="form-group">
                                            {!! Form::label('Descri&ccedil;&atilde;o:') !!}
                                            {!! Form::textarea('descricao',null,['class'=>'form-control','rows'=>'3' , 'placeholder'=>'Descri&ccedil;&atilde; da Av&aacute;ria']) !!} 
                                         </div>

                                            {!! Form::submit('',['class' => 'btn btn-primary fa fa-envelope-square btn-lg']) !!}
                                    {!! Form::close() !!}
                                
                             
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                        <!-- /.panel-body -->
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <!-- .panel-body -->


                         <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading dark-overlay">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Reabrir Solicita&ccedil;&otilde;es</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                       <!-- /.panel-heading -->
                        <div class="panel-body">
                                                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ticket</th>
                                        <th>Provincia</th>
                                        <th>Cliente</th>
                                        <th>Modelo da Maquina</th>
                                        <th>Numero de Serie</th>
                                        <th>Tipo de Av&aacute;ria</th>
                                        <th>Descri&ccedil;&atilde;o da Av&aacute;ria</th>
                                        <th>Estado</th>
                                        <th>Data do Chamado</th>
                                        <th>Alocar Tecnico </th>
                                    </tr>
                                </thead>
                                @foreach($solecitacao as $ass)
                                <tbody>
                                    
                                    <tr class="odd gradeX">
                                        <td>{{$ass->id}}</td>
                                        <td>{{$ass->nomepv}}</td>
                                        <td>{{$ass->nomeemp}}</td>
                                        <td>{{$ass->nome}}</td>
                                        <td>{{$ass->nr_serie}}</td>
                                        <td class="center">{{$ass->tipo}}</td>
                                        <td class="center">{{$ass->descricao}}</td>
                                        <td class="center">
                                           @if (($ass->estado) <> 'fechado')
                                                      <button type="button" class="btn btn-danger" onclick="location.href='{{ url('/v_alocacao') }}'"> {{$ass->estado}} </button>
                                            
                                                @else
                                                <button type="button" class="btn btn-warning" onclick="location.href='{{ url('/v_alocacao') }}'"> Pedente </button>

                                                @endif       

                                           </td>
                                        <td class="center">{{$ass->created_at}}</td>
                                        <td>
                                      
                                             {!!link_to_route('alocacao.edit',$title='',$parameters=$ass->id,$attributes=['class'=>'btn btn-primary btn-default fa fa-link btn-lg'])!!}
                                        </td>
                                    </tr>
                                  
                                </tbody>
                                @endforeach
                            </table>
                            {!!$solecitacao->render()!!}
                           
                        </div>
                        <!-- /.panel-body -->
                                    </div>
                                </div>
                               
                               
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


    </div>

@stop
