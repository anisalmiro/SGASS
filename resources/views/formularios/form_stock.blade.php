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
                    Stock Disponivel
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <form>
                            <table class="display nowrap" style="width:100%" id="historico_mov">
                                <thead>
                                    <tr>
                                        <th>Tipo de Iten</th>
                                        <th>Descri&ccedil;&aacute;o</th>
                                        <th>Part Number</th>
                                        <th>Cor</th>
                                        <th>Movimento</th>
                                        <th>Entradas</th>
                                        <th>Saidas</th>
                                        <th>Data do Movimento</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($stock_sl as $st)
                                    <tr class="success">
                                        <td>{{$st->tipo}}</td>
                                        <td>{{$st->descricao}}</td>
                                        <td>{{$st->partN}}</td>
                                        <td>{{$st->cor}}</td>
                                        <td>{{$st->estado}}</td>
                                        <td>{{$st->entrada}}</td>
                                        <td>{{$st->saida}}</td>
                                        <td>{{$st->created_at}}</td>
                                        <td>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>


                            </table>
                        </form>

                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.row -->


</div>

@stop

@section('js')
<script>
    $(document).ready(function () {
        var table = $('#historico_mov').DataTable({
            "scrollY": "200px",
            "paging": false
        });

    });
</script>
@endsection
