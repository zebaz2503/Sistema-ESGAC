@extends('admin.layout')

@section('content')
@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>
        {{ $error}}
        </li>
        @endforeach
    </ul>
</div>
@endif


<form action=" {{ url('/usuarios/'. $users->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('usuarios.form',['Modo'=>'editar'])

</form>

@endsection