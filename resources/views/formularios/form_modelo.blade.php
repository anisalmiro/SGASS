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
                            Registo de Modelo
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    {!! Form::open(['route'=>'modelo.store', 'method'=>'POST']) !!}
                                        {{ csrf_field() }}
                                         <div class="form-group">
                                                <label for="enabledSelect">Marca</label>      
                                                        <select class="form-control m-bot15" name="marc">
                                                          @if($marca->count() > 0)
                                                          @foreach($marca as $role)
                                                              <option value="{{$role->id}}">{{$role->nome}}</option>
                                                          @endForeach
                                                          @else
                                                            No Record Found
                                                          @endif   
                                                  </select>
                                        </div>
                                        
                                         <div class="form-group">
                                               {!! Form::label('Modelo:') !!}
                                            {!! Form::text('nome',null,['class'=>'form-control', 'placeholder'=>'Introduzir Marca']) !!} 
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
