
<html>
    <head>
        <meta charse t="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ITEC SIGA</title>

        <!-- Bootstrap Core CSS -->
        {!!Html::style('css/bootstrap.min.css')!!}


        <!-- MetisMenu CSS -->
        {!!Html::style('css/metisMenu.min.css')!!}


        <!-- Custom CSS -->
        {!!Html::style('css/sb-admin-2.css')!!}

        <!-- Morris Charts CSS -->
        {!!Html::style('css/morris.css')!!}

        <!-- Custom Fonts -->
        {!!Html::style('css/font-awesome/css/font-awesome.min.css')!!}
        {!!Html::style('css/font-awesome/select.dataTables.min.css')!!}
        {!!Html::style('css/editor.dataTables.min.css')!!}
        {!!Html::style('css/jquery.dataTables.min.css')!!}
        {!!Html::style('css/buttons.dataTables.min.css')!!}
        {!!Html::style('css/select.dataTables.min.css')!!}
        {!!Html::style('css/editor.dataTables.min.css')!!}

<!--        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">-->
              <!-- <script type="text/javascript" src="js/jquery.js"></script> -->
              
               <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    </head>
    <body>

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/dashb">SUPORTE</a>
                @include( 'layouts.messages' )
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Developer</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Ideia de Representa&ccedil;&atilde;o das notificacoes</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Tempo de Reacao do Tecnico 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Tempo de Reacao do Tecnico 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Tempo de Reacao do Tecnico 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>

                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Ver todas acividades>> </strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>

                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>

                <!-- /.dropdown -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> {!!Auth::user()->nameapelido!!}<!--Usuario-->
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        @if(Auth::user()->nivel == 2)
                        <li><a href="/usuario"><i class="fa fa-user fa-fw"></i> Registar</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        @endif
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

                    <!-- /.dropdown-user -->
                </li>

                <!-- /.dropdown -->
            </ul>

        </nav>

        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">    

            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li>
                        <a href="/dashb"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench"></i> Suporte<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            @if(Auth::user()->nivel == 2)

                            <fieldset hidden="true">
                                <li>
                                    <a class="fa fa-file-text-o" href="#">  Cota&ccedil;&atilde;o <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a class="fa fa-university" href="v_cot">  Empresa/Particular</a>
                                        </li>
                                        <!--
                                        <li>
                                            <a class="fa fa-university" href="v_cotacao">  Empresa</a>
                                        </li>
                                        <li>  
                                            <a class="fa fa-user" href="#">  Particular</a>
                                        </li>
                                        -->

                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </fieldset>

                            <li>
                                <a class="fa fa-comment-o" href="/v_cli_chamado">  Abrir Solicitac&atilde;o</a>
                            </li>
                            @endif
                            <!--
                                                        <li>
                                                            <a class="fa fa-check-circle" href="/v_validar">   Validar Solicitac&atilde;o</a>
                                                        </li>
                            -->
                            @if(Auth::user()->nivel == 5)
                            <li>
                                <a class="fa fa-folder-open" href="/v_chamado">  Aloca&ccedil;&otilde;es</a>
                            </li>

                            @endif
                            @if(Auth::user()->nivel <> 6)
                            <li>
                                <a class="fa fa-comments-o" href="/v_alocacao">  Tickets</a>
                            </li>

                            <li>
                                <a class="fa fa-check" href="/v_aprovado">  Requisi&&ccedil;&otilde;es Aprovadas</a>
                            </li>
                            @endif

                            @if(Auth::user()->nivel == 2)
                            <li>
                                <a class="fa fa-shopping-cart" href="/v_estado_requisicao"> Aprovar Requisic&otilde;es</a>
                            </li>
                            @elseif(Auth::user()->nivel == 5)
                            <li>
                                <a class="fa fa-shopping-cart" href="/v_estado_requisicao"> Aprovar Requisic&otilde;es</a>
                            </li>
                            @endif
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    @if(Auth::user()->nivel == 2 and 6)
                    <li>
                        <a href="#"><i class="fa fa-database"></i>   G. Estoque<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">

                            <li>
                                <a class="fa fa-archive" href="#">Stock <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a class="fa fa-plus" href="/v_consumivel"></i>  Adicionar Iten</a>
                                    </li>
                                    <li>
                                        <a class="fa fa-check" href="/inicial_stock">Inicializar Stock</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>

                            <li>
                                <a class="fa fa-clipboard" href="/v_stock">  Listar Stock</a>
                            </li>

                            <li>
                                <a class="fa fa-minus" href="/v_abate_requisicao">   Abate das Requisi&ccedil;&otilde;es</a>
                            </li>

                            <li>
                                <a class="fa fa-stack-overflow" href="#">   Historico</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    @elseif(Auth::user()->nivel == 6)
                    <li>
                        <a href="#"><i class="fa fa-database"></i> G. Estoque<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="/v_consumivel"></i>Consumivel</a>
                            </li>
                            <li>
                                <a href="/v_stock">Stoque</a>
                            </li>
                            <li>
                                <a href="#">Historico</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    @endif

                    @if(Auth::user()->nivel == 2)
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Relat&oacute;rios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/v_relatorioGR">Estado das Solicita&ccedil;&otilde;es</a>
                                <a href="/v_relatorio">Balan&ccedil;o</a>

                            </li>
                            <li>
                                <a href="#">Assistencias <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Reparadas</a>
                                    </li>
                                    <li>
                                        <a href="#">Pedentes</a>
                                    </li>
                                    <li>
                                        <a href="#">Tempo de Reacao</a>
                                    </li>

                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>

                    </li>
                    @elseif(Auth::user()->nivel == 5)
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Relat&oacute;rios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/v_relatorioGR">Estado das Solicita&ccedil;&otilde;es</a>
                                <a href="/v_relatorio">Balan&ccedil;o</a>

                            </li>
                            <li>
                                <a href="#">Assistencias <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Reparadas</a>
                                    </li>
                                    <li>
                                        <a href="#">Pedentes</a>
                                    </li>
                                    <li>
                                        <a href="#">Tempo de Reacao</a>
                                    </li>

                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>

                    </li>
                    @endif

                    @if(Auth::user()->nivel == 2)
                    <li>
                        <a href="#"><i class="fa fa-gears"></i> Configurac&otilde;es<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <a class="fa fa-user" href="/v_cliente">  Cliente</a>
                            </li>

                            <li>
                                <a class="fa fa-users" href="/usuario">   Utilisadores</a>
                            </li>

                            <li>
                                <a  class=" fa fa-location-arrow" href="#">   Regi&atilde;o<span ></span></a>
                                <ul class="nav nav-third-level">

                                    <li>
                                        <a href="/v_prov">  Prov&iacute;ncia</a>
                                    </li>
                                    <li>
                                        <a href="/v_dist">  Distrito</a>
                                    </li>

                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                            <li> 
                                <a  class="fa fa-gears" href="#">  Equipamento<span ></span></a>
                                <ul class="nav nav-third-level">

                                    <li>
                                        <a href="/marcaviw">Marca</a>
                                    </li>
                                    <li>
                                        <a href="/modelov">Modelo</a>
                                    </li>
                                    <li>
                                        <a href="/v_equipamento">Registar Equipamento</a>
                                    </li>

                                </ul>
                                <!-- /.nav-third-level -->
                            </li>

                            <li>
                                <a class="fa fa-gears" href="/v_avaria"> Tipos de Av&agrave;ria</a>
                            </li>
                            <li>
                                <a href="/v_espec">Especificac&atilde;o</a>
                            </li>
                        </ul>

                        <!-- /.nav-second-level -->
                    </li>
                    @endif

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->


        <div id="wrapper">
            <!-- Navigation -->
            {!! Charts::assets() !!}
            @yield('content')

        </div>

        <!-- /#wrapper -->

        <!-- jQuery --> 


        {!!Html::script('js/jquery-3.3.1.js')!!}
        {!!Html::script('js/jquery.js')!!}


        <script src="../js/jquery/jquery.min.js"></script>

        {!!Html::script('js/mdb.js')!!}
        {!!Html::script('js/jquery/jquery.min.js')!!}
        {!!Html::script('js/dropdown.js')!!}

        <!-- Bootstrap Core JavaScript -->
        {!!Html::script('js/bootstrap/js/bootstrap.min.js')!!}

        <!-- Metis Menu Plugin JavaScript -->
        {!!Html::script('js/metisMenu/metisMenu.min.js')!!}

        <!-- Morris Charts JavaScript -->
        {!!Html::script('js/raphael/raphael.min.js')!!}
        {!!Html::script('js/morrisjs/morris.min.js')!!}
        {!!Html::script('js/data/morris-data.js')!!}

        <!-- Custom Theme JavaScript -->
        {!!Html::script('js/dist/js/sb-admin-2.js')!!}

        {!!Html::script('js/buttons.dataTables.min.js')!!}
        {!!Html::script('js/dataTables.editor.min.js')!!}
        <!-- {!!Html::script('../js/dataTables.buttons.min.js')!!} 
         {!!Html::script('../js/dataTables.select.min.js')!!}-->
        {!!Html::script('../js/jszip.min.js')!!}
        {!!Html::script('../js/pdfmake.min.js')!!}
        {!!Html::script('../js/vfs_fonts.js')!!}
        {!!Html::script('../formularios/charts/charts_solicitacoes.js')!!}
        <!-- {!!Html::script('../js/buttons.html5.min.js')!!} -->
        {!!Html::script('../js/raphael/raphael.js')!!}

        <!-- DataTables JavaScript -->
        <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
        @yield('js')
        <script>

            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });

        </script>

    </body>

</html>

