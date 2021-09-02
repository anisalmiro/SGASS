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
                    Control de Fluxo do Processo
                </div>
                <!-- .panel-heading -->
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading dark-overlay">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Altera&ccedil;&atilde;o do Tempo de Execu&ccedil;&atilde;o da Processo</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                   

                                     <!-- /.col-lg-6 (nested) -->
                                 {!! Form::model($et,['route'=>['etapa.update',$et->id],'method'=>'PUT']) !!}
                                <div class="col-lg-6">


                                    <div class="form-group">
                                        <label for="enabledSelect"></label>                 
                                    </div>
                                    <fieldset disabled>
                                    <div class="form-group">
                                        {!! Form::label('Nome da Etapa:') !!}
                                        {!! Form::text('nome_etapa',null,['class'=>'form-control', 'placeholder'=>'Introduzir Etapa']) !!} 
                                    </div>
                                   </fieldset>
                                    <div class="form-group">
                                        {!! Form::label('Tempo da actividade:') !!}
                                        {!! Form::text('tempo_maximo',null,['class'=>'form-control']) !!} 
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    {!! Form::submit('Submeter',['class' => 'btn btn-primary']) !!}
                                </div>
                                <p>

                                    {!!Form::close()!!}
                                </div>


                                
                                <!-- /.panel-body -->
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Processos</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">


                            <div class="table-responsive">
                                        <table width="100%" class="table table-striped table-bordered table-hover" id="entidade">
                                            <thead>
                                                <tr class="success">
                                                    <th>#</th>
                                                    <th>Nome da Etapa</th>
                                                    <th>Tempo de Execu&ccedil;&atilde;o</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                             @foreach($sl_etapa as $sl)
                                                <tr class="odd gradeX">
                                                    <td>{{$sl->id}}</td>
                                                    <td>{{$sl->nome_etapa}}</td>
                                                    <td>{{$sl->tempo_maximo}} Dia</td>
                                                </tr>
                                             @endforeach
                                            </tbody>


                                        </table>

                                    </div>
                                    <!-- /.table-responsive -->
                            </div>


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

@section('js')

<script>

    $(document).ready(function () {
        $('#entidade').DataTable({
            "scrollY": 200,
            "scrollX": true,

        });
    });
</script>
@endsection