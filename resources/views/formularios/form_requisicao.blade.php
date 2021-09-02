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
                        Requisi&ccedil;&atilde;o de Pe&ccedil;as
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <form action="{{ route("requisica.store")}}" method="post">
                                {!! csrf_field() !!}
                                <div class="col-lg-12">



                                    <div class="col-lg-6">  
                                        <fieldset hidden="true">
                                            <div class="form-group">
                                                {!! Form::label('Id:') !!}
                                                <input class="form-control" name="id"  value="{{$ass->id}}">
                                            </div>

                                            <div class="form-group">
                                                <label>USER ID</label>
                                                <input class="form-control" name="userid" placeholder="{{Auth::user()->id}}" value="{{Auth::user()->id}}">
                                            </div>

                                            <div class="form-group">
                                                <div class="form-group">
                                                    <br>
                                                    <label>Nivel da Requisi&ccedil;&atilde;o</label>
                                                    <select name="tipoItenn" class="form-control">

                                                        <option>Normal</option>

                                                    </select>
                                                </div>

                                            </div>
                                        </fieldset>


                                        <!-- /.table-responsive -->

                                    </div>

                                    <!--  formulario de Requisicao-->


                                    <div class="box box-default box-solid">

                                        <div class="box-body">
                                            <div class="col-lg-12">
                                                <div class="row">

                                                </div> 
                                                <!--FIm da div lg 12--> 
                                            </div> 
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="col-md-12 panel panel-default">
                                                        <h1>

                                                            <button type="button" class="btn btn-default btn-lg" id="addLine" data-toggle="modal" data-target="#modal-addline" title="Adicionar Peço">
                                                                <i class="fa fa-plus-circle"></i>
                                                            </button>
                                                            <!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus-circle"></i>
                                                            </button>   -->


                                                            <div class="col-md-12">

                                                                <!--Seccao de exibicao do error de requisicao-->
                                                                @if(count($errors=$errors))
                                                                <div class="alert alert-danger alert-dismissible" role="alert">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><apan aria-hidden="true">&times;</span></button>
                                                                    <ul>

                                                                        <li>
                                                                            {!! Form::label('N&atilde;o existen Itens por Requisitar na tabela') !!}
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                                @endif
                                                                <!--Fim da Seccao de exibicao do error de requisicao-->

                                                                <table id="tabpecas"  class="table table-bordered">
                                                                    <caption><strong>Tabela de Requisi&ccedil;&otilde;es</strong></caption>
                                                                    <thead>
                                                                    <th>Part Number</th>
                                                                    <th>Quanidade</th>
                                                                    <th>Opera&ccedil;&atilde;o</th>

                                                                    </thead>
                                                                    <tbody>

                                                                    </tbody>
                                                                </table>

                                                            </div>


                                                    </div>
                                                </div>         
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="form-group col-lg-12">

                                    <button type="submit" class="btn btn-default btn-default" id="addFormaPag" title="Adicionar" >
                                        <i class="fa fa-plus-circle"></i>
                                    </button>

                                    {!!link_to('#', $title='',$attributes=['id'=>'obsenvmail', 'class'=>'btn btn-default fa fa-envelope-o btn-lg'],$secure=null)!!}

                                </div>


                            </form>

                        </div>
                        <!-- /.row (nested) -->

                    </div>
                    <!-- /.row -->

                    @stop


                    @section('js')
                    @include('formularios.modaladdline')

                    <script>

                        function addLines() {
                            var stk_partN = document.getElementById('stk_partN').value;
                            var stk_quant = document.getElementById('stk_quant').value;

                            var newRow = $("<tr>");

                            var cols = "";
                            cols += '<td><input type="text" name="tabpro_partN[]" class="form-control form-control-sm" value="' + stk_partN + '" readonly/></td>';
                            cols += '<td><input type="text" name="tabpro_quant[]" class="form-control form-control-sm" value="' + stk_quant + '" readonly /></td>';
                            cols += '<td style="width:3%"><button type="button" class="btn btn-default btn-lg" onClick="removeLine(this);" ><i class="fa fa-trash"></i></button></td>';
                            cols += '</tr>';

                            newRow.append(cols);
                            $("#tabpecas").append(newRow);

                            return false;
                        }

                        function removeLine(line) {
                            var tr = $(line).closest('tr');
                            tr.remove();
                            return false;
                        }

                        $(document).ready(function () {
                            $('#tabpecas').DataTable();
                        });


// Run Select2 on element
                        function Select2Test() {
                            $("#stk_partN").select2();
                        }

                    </script>

                    @endsection

