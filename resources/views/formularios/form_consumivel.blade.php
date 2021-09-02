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
                    Registo de Consumivel
                </div>
                <!-- .panel-heading -->
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">STOCK</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">


                                    <div class="table-responsive">
                                        <table class="display nowrap" style="width:100%" id="stock_cons">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tipo de Iten</th>
                                                    <th>Descri&ccedil;&aacute;o</th>
                                                    <th>Part Number</th>
                                                    <th>Cor</th>
                                                    <th>Quantidade</th>
                                                    <th>Opc&atilde;o</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($stock_sl as $st)
                                                <tr class="success">
                                                    <td>{{$st->id}}</td>
                                                    <td>{{$st->tipo}}</td>
                                                    <td>{{$st->descricao}}</td>
                                                    <td>{{$st->partN}}</td>
                                                    <td>{{$st->cor}}</td>
                                                    <td>{{$st->total}}</td>
                                                    <td>
                                                        {!!link_to_route('stock_movimento.edit',$title='Stock',$parameters=$st->id,$attributes=['class'=>'btn btn-primary'])!!}
                                                    </td>
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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Registo de novo Iten</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-lg-6">

                                            {!! Form::open(['route'=>'consumivel.store', 'method'=>'POST']) !!}

                                            <div class="form-group">
                                                <label for="enabledSelect">Tipo de Item</label>      
                                                <select class="form-control m-bot15" name="tipo">
                                                    <option value="">Selecionar Iten</option>
                                                    <option value="Consumivel">Consumivel</option> 
                                                    <option value="Peca">Peca</option> 
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('Descri&ccedil;&aacute;o:') !!}
                                                {!! Form::text('nome',null,['class'=>'form-control', 'placeholder'=>'Introduzir Descricao']) !!} 
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('Part Number:') !!}
                                                {!! Form::text('partn',null,['class'=>'form-control', 'placeholder'=>'Introduzir Part Number']) !!} 
                                            </div>



                                            <div class="form-group">
                                                <label for="enabledSelect">Cor do Iten</label>      
                                                <select class="form-control m-bot15" name="cor">
                                                    <option value="">N/A</option> 
                                                    <option value="Preto">Preto</option> 
                                                    <option value="Azul">Azul</option> 
                                                    <option value="Magenta">Magenta</option>
                                                    <option value="Amarelo">Amarelo</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="enabledSelect">Usuario</label>      
                                                <select class="form-control m-bot15" name="usuarioSys">
                                                    <option value="{{Auth::user()->id}}">{{Auth::user()->nameapelido}}</option>
                                                </select>
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
        var table = $('#stock_cons').DataTable({
            "scrollY": "200px",
            "paging": false
        });

    });
</script>
@endsection
