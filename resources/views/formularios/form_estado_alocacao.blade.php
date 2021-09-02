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
                    Solicita&ccedil;&otilde;es Alocadas
                </div>
                <div class="panel-body">
                    <div class="row">



                        <div class="col-lg-12">
                            <h3 class="page-header">Solicita&ccedil;&otilde;es Alocadas</h3>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Tickets@ITEC MOZ
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form>

                                        {{ csrf_field() }}

                                        <fieldset hidden="false">
                                            <div class="form-group">
                                                <label>USER ID</label>
                                                <input class="form-control" name="userid" placeholder="{{Auth::user()->nameapelido}}" value="{{Auth::user()->nameapelido}}">
                                            </div>
                                        </fieldset>

                                        <table class="display nowrap" style="width:100%" id="alocrequisicao">
                                            <thead>
                                                <tr>
                                                    <th>Ticket</th>
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
                                                        @if($ass->estado == 'aprovado')
                                                        {!!link_to_route('obs_tecn.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Fechar Solicita&ccedil;&atilde;o','class'=>'btn btn-outline btn-default fa fa-check btn-sm'])!!}
                                                        <fieldset hidden="enable">
                                                            {!!link_to_route('requisica.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Requisi&ccedil;&atilde;o de pe&ccedil;as','class'=>'btn btn-outline btn-info fa fa-archive btn-sm'])!!}
                                                        </fieldset>
                                                        @else
                                                        @if (Auth::user()->nivel == 2) 
                                                        <fieldset hidden="true">
                                                            {!!link_to_route('obs_tecn.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Fechar Solicita&ccedil;&atilde;o','class'=>'btn btn-outline btn-default fa fa-check btn-sm'])!!}
                                                            {!!link_to_route('requisica.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Requisi&ccedil;&atilde;o de pe&ccedil;as','class'=>'btn btn-outline btn-info fa fa-archive btn-sm'])!!}

                                                        </fieldset>
                                                        @else
                                                        {!!link_to_route('obs_tecn.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Fechar Solicita&ccedil;&atilde;o','class'=>'btn btn-outline btn-default fa fa-check btn-sm'])!!}
                                                        {!!link_to_route('requisica.edit',$title='',$parameters=$ass->id,$attributes=['data-toggle'=>'tooltip', 'title'=>'Requisi&ccedil;&atilde;o de pe&ccedil;as','class'=>'btn btn-outline btn-info fa fa-archive btn-sm'])!!}

                                                        @endif

                                                        @endif


                                                        <!--{!!link_to('#', $title='',$attributes=['id'=>'obsRegistar', 'data-toggle'=>'tooltip', 'title'=>'Realocar T&eacute;cnico','class'=>'btn btn-outline btn-info fa fa-mail-forward btn-sm'],$secure=null)!!}-->

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
@stop

@section('js')

<script>

    $(document).ready(function () {
        $('#alocrequisicao').DataTable({
            "scrollY": 200,
            "scrollX": true,

        });
    });
</script>
@endsection


