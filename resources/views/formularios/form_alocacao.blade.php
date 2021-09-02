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
                        Alocar de T&eacute;cnico
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::model($st,['route'=>['alocacao.store',$st->id],'method'=>'POST']) !!}
                                {{ csrf_field() }}
                                <fieldset hidden="true">


                                    <div class="form-group">
                                        {!! Form::label('Ticket ID') !!}
                                        {!! Form::text('id',null,['class'=>'form-control', 'placeholder'=>'']) !!} 
                                    </div>

                                </fieldset>

                                <div class="form-group">

                                    <label>Nivel de Urgencia   </label>
                                    <p>

                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="Normal" checked>Normal
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="Urgente">Urgente
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="Baixo">Baixo
                                        </label>
                                </div>


                                <div class="form-group">
                                    <label>Nome do T&eacute;cnico</label>
                                    <select name="tecnico" class="form-control">
                                        @if($soltecn->count() > 0)
                                        @foreach($soltecn as $role)
                                        <option value="{{$role->id}}">{{$role->nameapelido}} </option>
                                        @endForeach
                                        @else
                                        No Record Found
                                        @endif  
                                    </select>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('Nota:') !!}
                                    {!! Form::textarea('descricao',null,['class'=>'form-control', 'placeholder'=>'Introduzir quantidade de entrada']) !!} 
                                </div>
                                {!! Form::submit('Alocar',['class' => 'btn btn-primary']) !!}
                                <!--{!! Form::submit('Actualisar',['class' => 'btn btn-primary']) !!}-->
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