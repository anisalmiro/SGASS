@extends('layouts.principal')

@section('content')

    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="page-header"></h5>
                </div>




 	          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Adicionar stock
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    {!! Form::model($st,['route'=>['stock_movimento.update',$st->id],'method'=>'PUT']) !!}
                                   
                            <fieldset disabled>
                                      <div class="form-group">
                                            {!! Form::label('Tipo de Iten:') !!}
                                            {!! Form::text('tipo',null,['class'=>'form-control', 'placeholder'=>'Introduzir nome']) !!} 
                                         </div>
                                          <div class="form-group">
                                            {!! Form::label('Codigo:') !!}
                                            {!! Form::text('partN',null,['class'=>'form-control', 'placeholder'=>'Introduzir codigo']) !!} 
                                          </div>
                            </fieldset>
                                           <div class="form-group">
                                                <label for="enabledSelect">Usuario</label>      
                                                        <select class="form-control m-bot15" name="usuarioSys">
                                                              <option value="{{Auth::user()->id}}">{{Auth::user()->nameapelido}}</option>
                                                        </select>
                                           </div>
                                    
                                    <div class="form-group">
                                         <div class="form-group">
                                            {!! Form::label('Numero de DU') !!}
                                            {!! Form::text('numeroDu',null,['class'=>'form-control', 'placeholder'=>'Numero de DU']) !!} 
                                          </div>
                                        <div>
                                        {!! Form::label('Quantidade:') !!}
                                            {!! Form::text('quant',null,['class'=>'form-control', 'placeholder'=>'Introduzir quantidade de entrada']) !!} 
                                          </div>
                                        <br>
                                          {!! Form::submit('Actualisar',['class' => 'btn btn-primary']) !!}
                                  {!! Form::close() !!}
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


@stop