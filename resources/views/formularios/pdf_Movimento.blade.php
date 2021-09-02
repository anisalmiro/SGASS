<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Movimentos de Doa&cedil;&otilde;es</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <table class="table table-bordered">
            <thead>
                <tr class="table-danger">
                    <th>Doador</th>
                    <th>Sexo</th>
                    <th>Valor de Entrada</th>
                    <th>Paroquia</th>
                    <th>Contacto</th>
                    <th>Tipo de Trasa&ce&cedil;&atilde;o</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $ass)
                <tr>
                    <td>{{$ass->Nome}}</td>
                    <td>{{$ass->Sexo}}</td>
                    <td>{{$ass->entrada}}</td>
                    <td>{{$ass->Paroquia}}</td>
                    <td>{{$ass->Telefone}}</td>
                    <td>{{$ass->tipoTrasancao}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>