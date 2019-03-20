@extends('admin.layout')

@section('content')

<form action=" {{ url('/alimentos/'. $alimentos->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('alimentos.form',['Modo'=>'editar'])

</form>
@endsection