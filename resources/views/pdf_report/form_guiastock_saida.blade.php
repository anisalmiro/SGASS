<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Guia de Entrega</title>
        {!!Html::style('css/bootstrap.min.css')!!}
      <link href='../css/bootstrap.min.css' rel='stylesheet'>
      <link href='../css/bootstrap.css' rel='stylesheet'><!-- comment -->
      <link href='../css/bootstrap-social.css' rel='stylesheet'><!-- comment -->

      <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="container mt-5">
            <h2 class="text-center mb-3" center>Guia de Entrega</h2>

            <table class="table table-bordered mb-5" center>
                <thead>
                    <tr class="table-danger">
<!--                        <th scope="col">#</th>-->
                        <th scope="col">PartNumber</th>
                        <th scope="col">Quantidade</th
                        <th scope="col">Nome  do Requisitante</th>

                        <th scope="col">Data da Requisicao</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($listpecas ?? '' as $data)
                    <tr>
                         <td center>{{$data->partN}}</td>
                         <td center>{{$data->quantidade}}</td>
                         <td center>{{$data->nameapelido}}</td>
                        <td center>{{$data->created_at}}</td>                
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <h4 left>Tecnico</h4><h4 left>_____________________</h4><h4 right>Gestor de estoque</h4><h4 right>_____________________</h4><p><!-- comment -->
        
    </body>

</html>