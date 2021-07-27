@extends('layouts.principal')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Painel Principal</h1>
        </div>
    </div>
    <!-- /.row -->
     <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$solec_abertas}}</div>
                            <div>Solicitacoes!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Mais Detalhes</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        @if(Auth::user()->nivel == 2)
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-database fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"></div>
                            <div>STOCK</div>
                        </div>
                    </div>
                </div>
                <a href="/v_stock">
                    <div class="panel-footer">
                        <span class="pull-left">Mais Detalhes</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        @endif

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-print fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"> {{$equipamento}}</div>
                            <div>Numero de MFP'S!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Mais Detalhes</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$peg_pedent}}</div>
                            <div>Pedentes!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Mais Detalhes</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Inicio da DIV PARA O PAINEL -->
    <div class="row">


        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Analise de Actividades
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Action</a>
                                </li>
                                <li><a href="#">Another action</a>

                            </ul>
                        </div>
                    </div>
                </div>



                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="dash_sharts" style="height: 250px;"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <ul class="nav nav-pills ranges">
                <li class="active"><a href="#" data-range='7'>7 Days</a></li>
                <li><a href="#" data-range='30'>30 Days</a></li>
                <li><a href="#" data-range='60'>2 Meses</a></li>
                <li><a href="#" data-range='90'>3 Meses</a></li>
                <li><a href="#" data-range='120'>4 Meses</a></li>
                <li><a href="#" data-range='150'>5 Meses</a></li>
            </ul>
        </div>

        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Painel de Notifica&ccedil;&otilde;es
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <i class="fa fa-comment fa-fw"></i> Solicita&ccedil;&otilde;es
                            <span class="pull-right text-muted small"><em>4 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="pull-right text-muted small"><em>27 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-fw"></i> Estados
                            <span class="pull-right text-muted small"><em>43 minutes ago</em>
                            </span>
                        </a>

                    </div>
                    <!-- /.list-group -->
                    <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                </div>
                <!-- /.panel-body -->
            </div>


        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->  

@stop
@section('js')
<script>
    $(function () {

        // Create a function that will handle AJAX requests
        function requestData(days, chart) {
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "./api", // This is the URL to the API
                data: {days: days}
            })
                    .done(function (data) {
                        // When the response to the AJAX request comes back render the chart with new data
                        chart.setData(data);
                    })
                    .fail(function () {
                        // If there is no communication between the server, show an error
                        alert("error occured");
                    });
        }


        var chart = Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'dash_sharts',
            data: [0, 0], // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Assistencias'] // Set the label when bar is rolled over
        });


        // Request initial data for the past 7 days:
        requestData(7, chart);

        $('ul.ranges a').click(function (e) {
            e.preventDefault();

            // Get the number of days from the data attribute
            var el = $(this);
            days = el.attr('data-range');

            // Request the data and render the chart using our handy function
            requestData(days, chart);
        })
    });

</script>
@endsection


