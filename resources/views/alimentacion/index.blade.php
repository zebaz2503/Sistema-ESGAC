@extends('admin.layout')

@section('content')


<h2>Control de Canes</h2>
<table class="table table-striped table-hover table-bordered dataTable no-footer">
    <thead class="thead-light">
        <tr>
        <th style="text-align: center">#</th>
        <th style="text-align: center">Nombre</th>
        <th style="text-align: center">Edad (Meses)</th>
        <th style="text-align: center">Peso (Kg)</th> 
        <th style="text-align: center">Ver</th>
        </tr>
    </thead>
    
    <tbody>
    @foreach($canes as $can)
      <tr>
          <td align="center">{{$loop->iteration}}</td>
          <td align="center">{{ $can->nombre_can}}</td><!--tener cuidado con el nombre en la tabla de base de datos-->
          <td align="center">{{ $can->edad}} Meses</td>
          <td align="center">{{ $can->peso}} Kg</td><!--tener cuidado con el nombre en la tabla de base de datos-->
          
          <td align="center">
            <a href="{{ url('/alimentacion/' .$can-> id) }}" id="sample_editable_1_new" class="btn yellow">
            Ver 
            </a>           
          </td>
   
      </tr>
    @endforeach
    </tbody>
















</table>

@endsection