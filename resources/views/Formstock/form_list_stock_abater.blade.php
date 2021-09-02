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
                    <h4>Sotck Requisitado</h4>
                </div>

                <!-- .panel-heading -->
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading dark-overlay">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Pe&ccedil;as para Maquina </a>
                                </h4>
                            </div>
                            <!--                            {!! Form::model($st,['route'=>['estado_requisicao.create',$st->id],'method'=>'PUT']) !!}
                                                        
                                                        {!! csrf_field() !!}
                            --> 
                            <!--  rota: -->
                            <form action="{{route("abate_requisicao.create",$st->id)}}" method="PUT">
                                {!! csrf_field() !!}

                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <!--Divisao 1 -->
                                        <!-- /.col-lg-12 (nested) -->

                                        <div class="col-lg-12">


                                            <div class="form-group">
                                                <label for="enabledSelect"></label>                 
                                            </div>

                                            <fieldset hidden="true">
                                                <div class="form-group">
                                                    <label>USER ID</label>
                                                    <input class="form-control" name="userid" placeholder="{{Auth::user()->id}}" value="{{Auth::user()->id}}">
                                                </div>

                                                <div>
                                                    <label>consumivel is</label>
                                                    <<input type="type" name="cons_id"></input>
                                                </div>
                                                <select class="form-control m-bot15" name="idrequis">

                                                    @foreach($listpecas as $role)
                                                    <option value="{{$role->id}}">{{$role->id}}</option>
                                                    @endForeach
                                                </select>
                                                <select class="form-control m-bot15" name="idsolec">

                                                    @foreach($listpecas as $role)
                                                    <option value="{{$role->solec_id}}">{{$role->solec_id}}</option>
                                                    @endForeach

                                                </select>

                                            </fieldset>

                                            <!-- inicio da div body -->
                                            <div class="panel-body">
                                                <div class="table-responsive col-lg-12">        
                                                    <table width="100%" class="table table-striped table-bordered table-hover" id="tabela_abate">
                                                        <thead>
                                                            <tr>
                                                                <th>ID Rq</th>
                                                                <th>PartNumber</th>
                                                                <th>Quantidade</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach($listpecas as $lp)
                                                            <tr class="odd gradeX">
                                                                <td>{{$lp->id}}</td>  
                                                                <td>{{$lp->partN}}</td>
                                                                <td class="center">{{$lp->quantidade}}</td>

                                                            </tr>
                                                            @endforeach
                                                        </tbody>

                                                    </table>
                                                    <!-- /.table-responsive -->
                                                </div>

                                            </div>

                                            <fieldset hidden="true">
                                                <div class="form-group col-lg-12">
                                                    <div class="form-group col-lg-3">
                                                        {!! Form::label('ID:') !!}
                                                        {!! Form::text('id',null,['class'=>'form                                                </table>
                                                        -control', 'placeholder'=>'']) !!} 
                                                    </div> 
                                                </div>
                                            </fieldset>

                                            <div class="panel panel-default col-lg-3" >
                                                <div class="panel-heading">
                                                    Abater Stock
                                                </div>
                                                <!-- /.panel-heading -->
                                                <div class="panel-body">

                                                    {!! Form::submit($title='Deduzir Stock',$attributes=['id'=>'obsRegistar', 'data-toggle'=>'tooltip', 'title'=>'Deduzir do Stock','class'=>'btn btn-outline btn-Danger fa fa-check-square-o btn-lg']) !!}

                                                </div>
                                                <!-- /.panel-body -->
                                            </div>

                                            <!-- colspan 6 -->
                                        </div>


                                        <!--feixo da viv com sexoes-->
                                    </div>


                                </div>
                            </form>
                            <!--{!!Form::close()!!}-->
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

    myTable = $('#tabela_abate').DataTable();
    var form_data = myTable.rows().data();
    var tipo_id = document.getElementById('id').value;
    var tipo_NumerS = document.getElementById('partN').value;
    var tipo_Quantidade = document.getElementById('quantidade').value;
    
    $.each(form_data, function (key, value) {
        alert(key + ": " + tipo_NumerS);
    });



// Run Select2 on element
    function Select2Test() {
        $("#tabela_abate").select2();
    }

</script>

@endsection

