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
                    Registo de Marca
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::open(['route'=>'marca.store', 'method'=>'POST']) !!}
                            {{ csrf_field() }}
                            <div class="form-group">
                                {!! Form::label('Marca:') !!}
                                {!! Form::text('nome',null,['class'=>'form-control', 'placeholder'=>'Introduzir Marca']) !!} 
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
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


</div>

@stop

