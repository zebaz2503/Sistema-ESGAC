<form action=" {{ url('/anomalias/'. $anomalias->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('anomalias.form',['Modo'=>'editar'])


<!--<a href="{{ url('anomalias') }}">Volver</a>-->
</form>