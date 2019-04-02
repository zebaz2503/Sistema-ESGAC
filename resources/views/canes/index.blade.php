@extends('admin.layout')

@section('content')

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje') }}
</div>
@endif

<a href="{{ url('canes/create') }}" id="sample_editable_1_new" class="btn green-meadow">Agregar Canes +</a>


<!----------------------------------------------------------METODO DE BUSCAR------------------------------------------------->
<div class="panel-body">
  <form class="form-inline pull-right">
  {!! Form::open(array('url' => '/canes/', 'method' => 'GET', 'class'=> 'navbar navbar-light bg-light pull-right', 'role'=>'search')) !!}
  
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
        <th style="text-align: center">Foto</th>
        <th style="text-align: center">Nombre Del Can</th>
        <th style="text-align: center">Edad (Meses)</th>
        <th style="text-align: center">Peso (Kg)</th> 
        <th style="text-align: center">Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($canes as $can)
      <tr>
          <td align="center">{{$loop->iteration}}</td>
          <td align="center">
          <img src="{{ asset('storage').'/' .$can->foto_can}}" class="img-thumbnail img-fluid" alt=""  width="100">
          </td>
          <td align="center">{{ $can->nombre_can}}</td><!--tener cuidado con el nombre en la tabla de base de datos-->
          <td align="center">{{ $can->edad}} Meses</td>
          <td align="center">{{ $can->peso}} Kg</td><!--tener cuidado con el nombre en la tabla de base de datos-->
          
          <td align="center">
            <a class="btn btn-transparent green btn-outline btn-circle btn-sm active" href="{{ url('/canes/'.$can->id.'/edit') }}">
            Editar
            </a> 

            <!--metodo para borrar un dato de la base de datos-->
            <form method="post" action="{{ url('/canes/'.$can->id) }}" style="display:inline">
            {{csrf_field()}}

            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-transparent red btn-outline btn-circle btn-sm active" onclick="return confirm('Borrar?');">Borrar </button> 
            
            </form>

            <a href="{{ url('/canes/' .$can-> id) }}" id="sample_editable_1_new" class="btn yellow">
            Ver 
            </a>
           

          </td>
   
      </tr>
    @endforeach
    </tbody>


</table>

{{ $canes -> links() }}

@endsection