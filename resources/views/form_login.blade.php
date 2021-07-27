<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Anisio Bule">

    <title>Itec HelpDesk</title>

    <!-- Bootstrap Core CSS -->
    {!!Html::style('css/bootstrap.min.css')!!}

    <!-- MetisMenu CSS -->
    {!!Html::style('css/metisMenu.min.css')!!}

    <!-- Custom CSS -->
    {!!Html::style('css/sb-admin-2-login.css')!!}

    <!-- Custom Fonts -->
    {!!Html::style('css/font-awesome.min.css')!!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <bacgroud src="{!! asset('imagens/home-banner-integrate.jpg')!!}"
</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-md-4 col-md-offset-4">
              <br><br><br><center><img src="{!! asset('imagens/itec-logo.png') !!}"> 
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>

                     @include('alerts.errors')
                     @include('alerts.request')
                    
                    <div class="panel-body">

                           {!! Form::open(['route'=>'log.store', 'method'=>'POST']) !!}
                                  <fieldset>
                                          <div class="form-group">
                                            {!! Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Introduzir o e-mail']) !!} 
                                          </div>
        
                                          <div class="form-group">
                                            {!! Form::password('password',['class' => 'form-control','placeholder'=>'']) !!} 
                                          </div>

                                          <div class="checkbox">
                                              <label>
                                                  <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                              </label>
                                          </div>
                                  </fieldset>   
                                      {!! Form::submit('Iniciar',['class' => 'btn btn-lg btn-success btn-block']) !!}
                           {!! Form::close() !!}
                          </div>  

                    </div>

                </div>

            </div>

        </div>
         <div>     
                     <footer class="we-footer clearfix">
                           <h4><center><p class="text-info">  <p>Copyright &copy;  Itec Solutions Mz@Anisio Bule . Todos Direitos Reservados</p>
                    </footer>
                            </div>

    </div>

    <!-- jQuery -->
    {!!Html::script('js/jquery.min.js')!!}


    <!-- Metis Menu Plugin JavaScript -->
    {!!Html::script('js/metisMenu/metisMenu.min.js')!!}

    <!-- Custom Theme JavaScript -->
    {!!Html::script('js/sb-admin-2.js')!!}

    {!!Html::script('js/jquery/jquery.min.js')!!}

    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('js/bootstrap/js/bootstrap.min.js')!!}

    <!-- Metis Menu Plugin JavaScript -->
    {!!Html::script('js/metisMenu/metisMenu.min.js')!!}

</body>

</html>
