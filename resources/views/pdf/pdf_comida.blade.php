<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Reporte de Alimentación Canina</title>
</head>
<body>
<center>
<img class="login-logo" src="{{ asset('/escudo/logo.png') }}" />
</center>
<h4 align="center">SISTEMA DE INFORMACIÓN PARA EL CONTROL DE ALIMENTACIÓN |ESGAC| ALIMENTACIÓN CANINA</h4>

<table class="table table-striped table-hover table-bordered dataTable no-footer">
    <thead class="thead-light">
        <tr>
       
        <th style="text-align: center">Nombre Del Can</th>
        <th style="text-align: center">Ración (Gramos)</th>
        <th style="text-align: center">Fecha</th>
        <th style="text-align: center">Operario</th>

        </tr>
    </thead>

    <tbody>
    @foreach($alimentacion as $alimenta)
      <tr>
         
          <td align="center">{{ $alimenta->nombre_can}}</td><!--tener cuidado con el nombre en la tabla de base de datos-->
          <td align="center">{{ $alimenta->racion}} </td>
          <td align="center">{{ $alimenta->created_at->format('d/m/Y')}} </td>
          <td align="center">{{ $alimenta->name}} </td>

      </tr>
    @endforeach
    </tbody>

</table>

</body>
</html>