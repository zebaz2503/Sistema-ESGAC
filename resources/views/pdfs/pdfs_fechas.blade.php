<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Reporte Por Fechas</title>

</head>
<body>
<center>
<img class="login-logo" src="{{ asset('/escudo/logo.png') }}" />
</center>
  <h4 align="center">SISTEMA DE INFORMACIÓN PARA EL CONTROL DE ALIMENTACIÓN |ESGAC| REPORTES POR FECHA</h4>
  
  <center>
  <div class="col-md-6">
        <div class="form-group">
            <label class="control-label col-md-3" for="">Fecha Inicial : {{ $fecha_inicial}}</label>
        </div>
  </div>    

  <div class="col-md-6">
        <div class="form-group">
            <label class="control-label col-md-3" for="">Fecha Final : {{ $fecha_final}}</label> 
        </div>
  </div>    
 </center>          

  <table class="table table-striped table-hover table-bordered dataTable no-footer">
    <thead class="thead-light">
        <tr>
       
        <th style="text-align: center">Nombre Del Can</th>
        <th style="text-align: center">Ración (Gramos)</th>

        </tr>
    </thead>

    <tbody>
    @foreach($alimentacion as $alimenta)
      <tr>
        
          <td align="center">{{ $alimenta->nombre_can}}</td><!--tener cuidado con el nombre en la tabla de base de datos-->
          <td align="center">{{ $alimenta->racion}} Gramos</td>
         }
      </tr>
    @endforeach
    </tbody>


</table>

    
</body>
</html>