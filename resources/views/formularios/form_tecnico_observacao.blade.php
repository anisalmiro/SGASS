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
                        Emiss&atilde;o do Parecer da Av&agrave;ria
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                {!! Form::model($st,['route'=>['obs_tecn.store',$st->id],'method'=>'POST']) !!}
                                {!! csrf_field() !!}
                                <div class="col-lg-6"> 

                                    <fieldset hidden="true">
                                        <div class="form-group">
                                            {!! Form::label('Id:') !!} <p>
                                                {!! Form::text('id',null,['class'=>'form-control', 'placeholder'=>'ID']) !!} 
                                        </div>
                                    </fieldset>
                                    <div class="form-group">
                                        <label for="enabledSelect">T&eacute;cnico</label>      
                                        <select class="form-control m-bot15" name="usuarioSys">
                                            <option value="{{Auth::user()->id}}">{{Auth::user()->nameapelido}}</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <p>
                                                <label>Sec&ccedil;&atilde;o Reparada</label>
                                                <select class="form-control" name="av_reparacao">
                                                    <option>Selecionar Avaria </option>
                                                    <option>Document Feeder</option>
                                                    <option>Image unit</option>
                                                    <option>Drive Section</option>
                                                    <option>Optical Unit</option>
                                                    <option>Transport Section</option>
                                                    <option>Electrical</option>
                                                    <option>Tray</option>
                                                </select>
                                        </div>

                                    </div>
                                    <!-- /.table-responsive -->

                                </div>

                                <div class="col-lg-12 form-group" >  

                                    <div class="form-group col-md-6">
                                        {!! Form::label('Av&aacute;ria:') !!}
                                        {!! Form::textarea('descricao',null,['class'=>'form-control', 'placeholder'=>'Introduzir quantidade de entrada']) !!} 
                                    </div>
                                    <div class="form-group col-md-6">
                                        {!! Form::label('Solu&ccedil;&atilde;o:') !!}
                                        {!! Form::textarea('descsolucao',null,['class'=>'form-control', 'placeholder'=>'Introduzir quantidade de entrada']) !!} 
                                    </div>
                                </div>

                                
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="save" class="btn btn-default fa fa-save btn-lg"></button>
<!--                                <button type="update" class="btn btn-default fa fa-folder-open btn-lg"></button>-->
                                <!--<button type="email" class="btn btn-default fa fa-envelope-o btn-lg"></button>-->
                            </div>


                            {!! Form::close() !!}

                        </div>
                        <!-- /.row (nested) -->

                    </div>
                    <!-- /.row -->


                    @include('formularios.form_modal_table_updt')
                    @stop


                    @section('js')

                    @endsection

