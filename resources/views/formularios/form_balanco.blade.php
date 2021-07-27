@extends('layouts.principal')

@section('content')


<div id="wrapper">


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Relatorios Gerais</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Solicita&ccedil;&otilde;s
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="stats-container"></div>
                    </div>
                    <!-- /.panel-body -->
                    <ul class="nav nav-pills ranges">
                        <li class="active"><a href="#" data-range='7'>7 Days</a></li>
                        <li><a href="#" data-range='30'>30 Days</a></li>
                        <li><a href="#" data-range='60'>60 Days</a></li>
                        <li><a href="#" data-range='90'>90 Days</a></li>
                        <li><a href="#" data-range='120'>120 Days</a></li>
                        <li><a href="#" data-range='150'>150 Days</a></li>
                        <li><a href="#" data-range='365'>365 Days</a></li>
                    </ul>
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Soicitacoes Fechadas
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="solecitacoes-container"></div>
                    </div>
                    <!-- /.panel-body -->
                    <ul class="nav nav-pills ranges">
                        <li class="active"><a href="#" data-range='7'>30 Days</a></li>

                    </ul>
                </div>
                <!-- /.panel -->
            </div>

            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Resumo das solicitacoes
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="resume-charts"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->

            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        solicitacoes
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="solecitacoes-container"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@stop

@section('js')
<!--Assistencias feitas-->
<script>
    $(function () {

        // Create a function that will handle AJAX requests
        function requestData(days, chart) {
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "./solapi", // This is the URL to the API
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
            element: 'stats-container',
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


<!--Assistencias Fechadas-->
<script>
    $(function () {

        // Create a function that will handle AJAX requests
        function requestData(days, chart) {
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "./solfechado", // This is the URL to the API
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
            element: 'solecitacoes-container',
            data: [0, 0], // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Assistencias Fechadas'] // Set the label when bar is rolled over
        });


        // Request initial data for the past 7 days:
        requestData(7, chart);

        $('ul.ranges a').click(function (e) {
            e.preventDefault();

            // Get the number of days from the data attribute
            var el = $(this);
            days = el.attr('data-ranges');

            // Request the data and render the chart using our handy function
            requestData(days, chart);
        })
    });

</script>


<script>

//    resumo das solicitacoes
    Morris.Donut({
        element: 'resume-charts',
        data: [
            {label: "s aberto", value: 10]},
            {label: "s pedente", value: 16]},
            {label: "s atendemento", value: 50]},
            {label: "s fechado", value: 5]}
        ]
    });
    
</script>

@endsection

