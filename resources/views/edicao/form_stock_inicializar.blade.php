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
                        Adicionar stock
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open(['route'=>'stock_movimento.store', 'method'=>'POST']) !!}
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="enabledSelect">PartNumber</label>      
                                                                             
                                    <select class="form-control m-bot15" name="id_iten">
                                        @if($sl_partN->count() > 0)
                                        @foreach($sl_partN as $role)
                                        <option value="{{$role->id}}">{{$role->partN}}</option>
                                        @endForeach
                                        @else
                                        No Record Found
                                        @endif   
                                                  </select>
                                </div>


                                <div class="form-group">
                                    <label for="enabledSelect">Usuario</label>      
                                    <select class="form-control m-bot15" name="usuarioSys">
                                        <option value="{{Auth::user()->id}}">{{Auth::user()->nameapelido}}</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="form-group">
                                        {!! Form::label('Numero de DU') !!}
                                        {!! Form::text('anumeroDu',null,['class'=>'form-control', 'placeholder'=>'Numero de DU']) !!} 
                                    </div>
                                    <div>
                                        {!! Form::label('Quantidade:') !!}
                                        {!! Form::text('quant',null,['class'=>'form-control', 'placeholder'=>'Introduzir quantidade de entrada']) !!} 
                                    </div>
                                    <br>
                                    {!! Form::submit('Actualisar',['class' => 'btn btn-primary']) !!}
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                 {!! Form::close() !!}
                            </div   >
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


            @stop

            @section('js')
            <script>
                $(function () {
                    $('#partN').autocomplete({
                        source: function (request, response) {

                            $.getJSON('?term=' + request.term, function (data) {
                                var array = $.map(data, function (row) {
                                    return {
                                        value: row.id,
                                        label: row.partN,
                                        name: row.partN,
                                        id: row.id,
                                        partN: row.partN
                                    }
                                })

                                response($.ui.autocomplete.filter(array, request.term));
                            })
                        },
                        minLength: 1,
                        delay: 500,
                        select: function (event, ui) {
                            $('#partN').val(ui.item.name)
                            $('#id').val(ui.item.buy_rate)
                            $('#tipoiten').val(ui.item.sale_price)
                        }
                    })
                })


            </script>
            @endsection
