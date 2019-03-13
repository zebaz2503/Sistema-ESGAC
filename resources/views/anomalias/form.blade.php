

<label for="TipoAnomalia">{{'TipoAnomalia'}}</label>
<input type="text" name="TipoAnomalia" id="TipoAnomalia" 

value="{{ isset($anomalias->TipoAnomalia) ? $anomalias->TipoAnomalia:'' }}">
<br/>

<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" name="Descripcion" id="Descripcion" 

value="{{ isset($anomalias->Descripcion) ? $anomalias->Descripcion:'' }}">
<br/>


<input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'  }}">

<a href="{{ url('anomalias') }}">Volver</a>
