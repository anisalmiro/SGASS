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
                    Registo de Avaria
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::open(['route'=>'avaria.store', 'method'=>'POST']) !!}
                            {{ csrf_field() }}
                            <div class="form-group">
                                {!! Form::label('Sec&ccedil;&aacute;o:') !!}
                                {!! Form::text('tipo',null,['class'=>'form-control', 'placeholder'=>'Tipo de avaria']) !!} 
                            </div>

                            <div class="form-group">
                                {!! Form::label('Descri&ccedil;&atilde;o:') !!}
                                {!! Form::textarea('descricao',null,['class'=>'form-control','rows'=>'3' , 'placeholder'=>'Descri&ccedil;&atilde; da Av&aacute;ria']) !!} 
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
