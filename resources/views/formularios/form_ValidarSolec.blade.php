@extends('layouts.principal')

@section('content')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h5 class="page-header"></h5>
        </div>
        <!-- /.col-lg-12 -->
    </div>



    <form class="form-horizontal " method="post" action=""
          <input type="hidden" id="update" value="1">
        {{ csrf_field() }}
        <input type="hidden" id="update" value="0">

        <div class="box box-default box-solid">

            <div class="box-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group form-group-sm">
                            <label for="stk_referencia" class="col-md-4 control-label">Referência</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="stk_referencia" name="stk_referencia" placeholder="Referência" value="{{ $stk->stk_referencia ?? null}}">
                            </div>
                        </div>
                    </div>   
                    <div class="col-md-6">
                        <div class="form-group form-group-sm">
                            <label for="descricao" class="col-md-2 control-label">Descrição</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="stk_descricao" name="stk_descricao" placeholder="Descrição do Artigo/Serviço" value="">
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3">
                        <div class="form-group form-group-sm">
                            <label for="stk_servico" class="col-md-6 control-label">É um Serviço?</label>
                            <div class="col-md-6">
                                <input type="checkbox" name="stk_servico">
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12 panel panel-default">
                            <h1>
                                <button type="button" class="btn btn-default btn-lg" onClick="addLines();" title="Adicionar Acessorios">
                                    <i class="fa fa-plus-circle"></i>
                                </button>

                                <div class="col-md-12">

                                    <table id="tabpeca" class="table table-bordered">
                                        <caption><strong>Tabela de Requisi&ccedil;&otilde;es</strong></caption>
                                        <thead>
                                        <th>Tipo de Iten</th>
                                        <th>Part Number</th>
                                        <th>Designa&ccedil;&atilde;o</th>
                                        <th>Cor</th>
                                        <th>Quantidade</th>
                                        <th>Opera&ccedil;&atilde;o</th>

                                        </thead>
                                        <tbody>
                                            @if(isset($tabpeca))
                                            @foreach($tabpreco as $t)
                                            <tr>

                                                <td>
                                                    <input type="text" name="tabreq_tipo[]"  class="form-control form-control-sm" value="{{$t->tabpreco_codigo}}" readonly />
                                                </td>
                                                <td>
                                                    <input type="text" name="tabreq_PartN[]"  class="form-control form-control-sm" value="{{$t->tabpreco_codigo}}" readonly />
                                                </td>
                                                <td>
                                                    <input type="text" name="tabreq_desc[]" class="form-control form-control-sm" value="{{$t->tabpreco_preco}}" />
                                                </td>
                                                <td>
                                                    <input type="text" name="tabreq_cor[]" class="form-control form-control-sm" value="{{$t->tabpreco_preco}}" />
                                                </td>
                                                <td>
                                                    <input type="text" name="tabreq_quant[]" class="form-control form-control-sm" value="{{$t->tabpreco_preco}}" />
                                                </td>

                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>

                                </div>
                        </div>
                    </div>         
                </div>
            </div>
    </form>    

</div>

@stop


@section('js')

<script>
    var count = {{ isset($tabpeca) == true ? count($tabpeca) : 0 }};
    //GRID DE Tabela de Preços
    (function($) {
    addLines = function() {
    count = count + 1;
    var newRow = $("<tr>");
    var cols = "";
    cols += '<td><input type="text" name="tabreq_tipo[]" class="form-control form-control-sm" /></td>';
    cols += '<td><input type="text" name="tabreq_partN[]" class="form-control form-control-sm" /></td>';
    cols += '<td><input type="text" name="tabreq_desc[]" class="form-control form-control-sm" /></td>';
    cols += '<td><input type="text" name="tabreq_cor[]" class="form-control form-control-sm" /></td>';
    cols += '<td><input type="text" name="tabreq_quant[]" class="form-control form-control-sm" /></td>';
    cols += '</tr>';
    newRow.append(cols);
    $("#tabpeca").append(newRow);
    return false;
    }
    })(jQuery);
</script>

@endsection