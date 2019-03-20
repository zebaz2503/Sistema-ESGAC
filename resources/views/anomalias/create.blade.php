@extends('admin.layout')

@section('content')

<form action="{{ url('/anomalias')}}" method="post" enctype="multipart/form-data">


{{csrf_field()}}
@include('anomalias.form',['Modo'=>'crear'])

</form>

@endsection
