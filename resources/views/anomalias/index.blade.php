@extends('admin.layout')

@section('content')


@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">

{{Session::get('Mensaje')}}
</div>
@endif

<a href="{{ url('anomalias/create') }}" id="sample_editable_1_new" class="btn green-meadow">Agregar Anomalias +</a>

<!----------------------------------------------------------METODO DE BUSCAR------------------------------------------------->
<div class="panel-body">
  <form class="form-inline pull-right">
  {!! Form::open(array('url' => '/anomalias/', 'method' => 'GET', 'class'=> 'navbar navbar-light bg-light pull-right', 'role'=>'search')) !!}
  
    <div class="form-group">  
    {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder'=> 'Buscar']) !!}                 
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </div>
  </form>
  {!! Form::close() !!}
</div>
<!----------------------------------------------------------------------------------------------------------->


<table class="table table-striped table-hover table-bordered dataTable no-footer">
    <thead class="thead-light">
        <tr>
        <th style="text-align: center">#</th>
        <th style="text-align: center">Nombre Can</th>
        <th style="text-align: center">Tipo de Anomalia</th>
        <th style="text-align: center">Descripción</th>
        <th style="text-align: center">Fecha</th>
        <th style="text-align: center">Acciones</th>
        </tr>
    </thead>



    <tbody>
    @foreach($anomalias as $anomalia) <!--variable unica para mostrar-->
        <tr>
        <td align="center">{{$loop->iteration}}</td>
        
        <td align="center">{{ $anomalia->id_can}}</th>
        <td align="center">{{ $anomalia->TipoAnomalia}}</th><!--tener cuidado con el nombre en la tabla de base de datos-->
        <td align="center">{{ $anomalia->Descripcion}}</th>
        <td align="center">{{ $anomalia->created_at}}</th>


        
        <td align="center">
            
            <a class="btn btn-transparent green btn-outline btn-circle btn-sm active" href="{{ url('/anomalias/'.$anomalia->id.'/edit') }}">
            Editar
            </a>

            
            
            <!--metodo para borrar un dato de la base de datos-->
            <form method="post" action="{{ url('/anomalias/'.$anomalia->id) }}" style="display:inline">
            {{csrf_field()}}

            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-transparent red btn-outline btn-circle btn-sm active" onclick="return confirm('Borrar?');">Borrar </button> 
                
            </form>
            
            </th>
        </tr>
    @endforeach   
    </tbody>
</table>

{{ $anomalias-> links() }}

@endsection

