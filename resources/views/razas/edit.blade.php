@extends('admin.layout')

@section('content')

<form action=" {{ url('/razas/'. $razas->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('razas.form',['Modo'=>'editar'])
</form>

@endsection