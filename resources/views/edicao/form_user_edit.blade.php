@extends('layouts.principal')

@section('content')

    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h5 class="page-header"></h5>
                </div>


                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Atualizar Utilisador
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                           {!! Form::model($user,['route'=>['usuariodo.update',$user->id],'method'=>'PUT']) !!}

                                      <div class="form-group">
                                            {!! Form::label('Nome e Ap&eacute;lido:') !!}
                                            {!! Form::text('nameapelido',null,['class'=>'form-control', 'placeholder'=>'Introduzir nome']) !!} 
                                         </div>
                                          <div class="form-group">
                                            {!! Form::label('username:') !!}
                                            {!! Form::text('username',null,['class'=>'form-control', 'placeholder'=>'Introduzir nome do usuario']) !!} 
                                          </div>

                                          <div class="form-group">
                                            {!! Form::label('E-mail:') !!}
                                            {!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'email@itecgroup.co.mz']) !!} 
                                          </div>
        
                                           <div class="form-group">
                                            {!! Form::label('senha:') !!}
                                          </div>
                                          <div class="form-group">
                                            {!! Form::password('password',['class' => 'form-control','placeholder'=>'']) !!} 
                                          </div>
                                         <div class="form-group">
                                                <label for="enabledSelect">Tipo de Usuario</label>      
                                                        <select class="form-control m-bot15" name="nivel">
                                                          @if($especif->count() > 0)
                                                          @foreach($especif as $role)
                                                              <option value="{{$role->id}}">{{$role->nome}}</option>
                                                          @endForeach
                                                          @else
                                                            No Record Found
                                                          @endif   
                                                  </select>
                                        </div>
                                         <div class="form-group">
                                          {!! Form::label('Estado:') !!} 
                                                <select class="form-control m-bot15" name="status">
                                                      <option>Activo</option>
                                                      <option>Inactivo</option>
                                                 </select>
                                         </div>
    
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
                <!-- /.col-lg-6 -->
                

            </div>
            <!-- /.row -->


    </div>

@stop

