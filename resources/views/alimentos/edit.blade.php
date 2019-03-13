<form action=" {{ url('/alimentos/'. $alimentos->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('alimentos.form',['Modo'=>'editar'])


<!--<a href="{{ url('anomalias') }}">Volver</a>-->
</form>