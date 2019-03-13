Sección para crear razas

<form action="{{ url('/razas')}}" method="post" enctype="multipart/form-data">


{{csrf_field()}}
@include('razas.form',['Modo'=>'crear'])


</form>