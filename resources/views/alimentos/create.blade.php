Sección para crear anomalias

<form action="{{ url('/alimentos')}}" method="post" enctype="multipart/form-data">


{{csrf_field()}}
@include('alimentos.form',['Modo'=>'crear'])


</form>