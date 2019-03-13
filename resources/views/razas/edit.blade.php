<form action=" {{ url('/razas/'. $razas->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('razas.form',['Modo'=>'editar'])



<!--label for="Foto">{{'Foto'}}</label>
<img src="{{ asset('storage').'/' .$razas->foto}}" alt="" width="200">
<br/>
<input type="file" name="Foto" id="Foto" value="">
<br/>

<input type="submit" value="Modificar">

<a href="{{ url('razas') }}">Volver</a>-->
</form>