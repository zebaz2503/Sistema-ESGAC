@extends('admin.layout')

@section('content')


@if(Session::has('Mensaje')){{

Session::get('Mensaje')
}}
@endif

<a href="{{ url('anomalias/create') }}" id="sample_editable_1_new" class="btn green-meadow">Agregar Anomalias +</a>



<table class="table table-striped table-hover table-bordered dataTable no-footer">
    <thead class="thead-light">
        <tr>
        <th style="text-align: center">#</th>
        <th style="text-align: center">Tipo de Anomalia</th>
        <th style="text-align: center">Descripción</th>
        <th style="text-align: center">Acciones</th>
        </tr>
    </thead>


    <tbody>
    @foreach($anomalias as $anomalia) <!--variable unica para mostrar-->
        <tr>
        <td align="center">{{$loop->iteration}}</td>
         
        <td align="center">{{ $anomalia->TipoAnomalia}}</th><!--tener cuidado con el nombre en la tabla de base de datos-->
        <td align="center">{{ $anomalia->Descripcion}}</th>
        
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

@endsection

