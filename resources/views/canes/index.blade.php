@extends('admin.layout')

@section('content')

@if(Session::has('Mensaje')){{
Session::get('Mensaje')
}}
@endif

<a href="{{ url('canes/create') }}" id="sample_editable_1_new" class="btn green-meadow">Agregar Canes +</a>

<!---------------------------------------------------------------------------------->
<div class="panel-body">
<nav class="navbar navbar-light bg-light">
  <form class="form-inline pull-right">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</div>
<!---------------------------------------------------------------------------------->
<table class="table table-striped table-hover table-bordered dataTable no-footer">
    <thead class="thead-light">
        <tr>
        <th style="text-align: center">#</th>
        <th style="text-align: center">Foto</th>
        <th style="text-align: center">Nombre Del Can</th>
        <th style="text-align: center">Edad</th>
        <th style="text-align: center">Peso</th>
        <th style="text-align: center">Acciones</th>
        </tr>
    </thead>
</table>
@endsection