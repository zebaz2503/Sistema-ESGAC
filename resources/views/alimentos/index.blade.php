@extends('admin.layout')

@section('content')


@if(Session::has('Mensaje')){{

Session::get('Mensaje')
}}
@endif

<a href="{{ url('alimentos/create') }}" id="sample_editable_1_new" class="btn green-meadow">Agregar Alimento +</a>



<table class="table table-striped table-hover table-bordered dataTable no-footer">
    <thead class="thead-light">
        <tr>
        <th style="text-align: center">#</th>
        <th style="text-align: center">Nombre Alimento</th>
        <th style="text-align: center">Grasas Gr</th>
        <th style="text-align: center">Carbohidratos Kcal</th>
        <th style="text-align: center">Acciones</th>
        </tr>
    </thead>


    <tbody>
    @foreach($alimentos as $alimento) <!--variable unica para mostrar-->
        <tr>
        <td align="center">{{$loop->iteration}}</td>
         
        <td align="center">{{ $alimento->nombre_alimento}}</th><!--tener cuidado con el nombre en la tabla de base de datos-->
        <td align="center">{{ $alimento->grasas}}</th>
        <td align="center">{{ $alimento->carbohidratos}}</th>
        <td align="center">
        <!--  -->
            
            <a class="btn btn-transparent green btn-outline btn-circle btn-sm active" href="{{ url('/alimentos/'.$alimento->id.'/edit') }}">
            Editar
            </a>
            
            <!--metodo para borrar un dato de la base de datos-->
            <form method="post" action="{{ url('/alimentos/'.$alimento->id) }}" style="display:inline">
            {{csrf_field()}}

            {{ method_field('DELETE') }}

            <button class="btn btn-transparent red btn-outline btn-circle btn-sm active" type="submit" onclick="return confirm('Borrar?');">Borrar </button> 
                
            </form>
            
            </th>
        </tr>
    @endforeach   
    </tbody>
</table>

@endsection 
