
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
                    Estado das Requisi&cc&ccedil;&otilde;es
                </div>
                <div class="panel-body">
                    <div class="row">



                        <div class="col-lg-12">
                            <h3 class="page-header">Requisicoes  Pedentes</h3>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Timeline@ITEC MOZ
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form>

                                        <table class="display nowrap" style="width:100%" id="req_peden">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Provincia</th>
                                                    <th>Cliente</th>
                                                    <th>Modelo</th>
                                                    <th>Nr de Serie</th>
                                                    <th>Tipo de Av&aacute;ria</th>
                                                    <th>Descri&ccedil;&atilde;o da Av&aacute;ria</th>
                                                    <th>Estado</th>
                                                    <th>Data da Aloca&ccedil;&atildeo</th>
                                                    <th>Tecnico Alocado</th>
                                                    <th>Op&ccedil;&otilde;es</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($solecitacao as $ass)
                                                <tr class="odd gradeX">
                                                    <td>{{$ass->id}}</td>
                                                    <td>{{$ass->nomepv}}</td>
                                                    <td>{{$ass->nomeemp}}</td>
                                                    <td>{{$ass->nome}}</td>
                                                    <td>{{$ass->nr_serie}}</td>
                                                    <td class="center">{{$ass->tipo}}</td>
                                                    <td class="center">{{$ass->descricao}}</td>
                                                    <td class="center">  {{$ass->estado}}</td>
                                                    <td class="center">{{$ass->created_at}}</td>
                                                    <td>{{$ass->nameapelido}}</td>
                                                    <td>
                                                        {!!link_to_route('estado_requisicao.show',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Stock Requisitado','class'=>'btn btn-outline btn-info fa fa-list-alt btn-sm'])!!}
                                                        <!--{!!link_to_route('estado_requisicao.edit', $title='',$parameters=$ass->id,$attributes=['id'=>'obsRegistar', 'data-toggle'=>'tooltip', 'title'=>'Aprovar Requisi&ccedil;&atilde;o','class'=>'btn btn-outline btn-info fa fa-check btn-sm'],$secure=null)!!}-->
                                                        {!!link_to('v_stock', $title='',$attributes=['id'=>'obsRegistar', 'data-toggle'=>'tooltip', 'title'=>'Consultar Stock Disponivel','class'=>'btn btn-outline btn-info fa fa-database btn-sm'],$secure=null)!!}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </form>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->

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








<!--modal painel-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <form>

                    <table class="display nowrap" style="width:100%" id="req_itens">
                        <thead>
                            <tr>
                                <th>#ID Solicitacao</th>
                                <th>Tipo de Iten</th>
                                <th>Partnumber</th>
                                <th>Cor</th>
                                <th>Op&ccedil;&otilde;es</th>
                            </tr>
                        </thead>

                        <tbody>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tbody>

                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@stop

@section('js')

<script>

    $(document).ready(function () {
        $('#req_peden').DataTable({
            "scrollY": 200,
            "scrollX": true,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>
@endsection


