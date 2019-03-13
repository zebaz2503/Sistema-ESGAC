
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



</head>
<body>
@if(Session::has('Mensaje')){{

Session::get('Mensaje')
}}
@endif

<a href="{{ url('anomalias/create') }}">Agregar Anomalias</a>



<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Tipo de Anomalia</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>
    @foreach($anomalias as $anomalia) <!--variable unica para mostrar-->
        <tr>
            <td>{{$loop->iteration}}</td>
         
            <th>{{ $anomalia->TipoAnomalia}}</th><!--tener cuidado con el nombre en la tabla de base de datos-->
            <th>{{ $anomalia->Descripcion}}</th>
            <th>
            
            <a href="{{ url('/anomalias/'.$anomalia->id.'/edit') }}">
            Editar
            </a>

            | 
            
            <!--metodo para borrar un dato de la base de datos-->
            <form method="post" action="{{ url('/anomalias/'.$anomalia->id) }}">
            {{csrf_field()}}

            {{ method_field('DELETE') }}

            <button type="submit" onclick="return confirm('Borrar?');">Borrar </button> 
                
            </form>
            
            </th>
        </tr>
    @endforeach   
    </tbody>
</table>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</body>
</html>



