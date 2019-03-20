@extends('admin.layout')

@section('content')

<form action=" {{ url('/anomalias/'. $anomalias->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('anomalias.form',['Modo'=>'editar'])


</form>
@endsection