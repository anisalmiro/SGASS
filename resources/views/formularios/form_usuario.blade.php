@extends('layouts.principal')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="page-header"></h5>
        </div>
        <!-- /.col-lg-6 -->
    </div>

    <div class="row">
        <!-- /.col-lg-6 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Usuarios Registados
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome Completo</th>
                                    <th>usuaro</th>
                                    <th>e-mail</th>
                                    <th>Nivel</th>
                                    <th>Opc&atilde;o</th>
                                </tr>
                            </thead>
                            @foreach($users as $user)
                            <tbody>
                                <tr class="success">
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->nameapelido}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->nome}}</td>
                                    <td>
                                        {!!link_to_route('usuariodo.edit',$title='editar',$parameters=$user->id,$attributes=['class'=>'btn btn-primary'])!!}
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach

                        </table>
                        {!!$users->render()!!}
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->


        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registo de Utilisador
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">

                            {!! Form::open(['route'=>'usuariodo.store', 'method'=>'POST']) !!}
                            {{ csrf_field() }}
                            <div class="form-group">
                                {!! Form::label('Nome Completo') !!}
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
                                <select class="form-control m-bot15" name="estado">
                                    <option>Activo</option>
                                    <option>Inactivo</option>
                                </select>
                            </div>

                            {!! Form::submit('Registar',['class' => 'btn btn-primary']) !!}
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

