
<div class="form-group">
<label for="TipoAnomalia" class="control-label">{{'TipoAnomalia'}}</label>
<input type="text"  class="form-control" name="TipoAnomalia" id="TipoAnomalia" 

value="{{ isset($anomalias->TipoAnomalia) ? $anomalias->TipoAnomalia:'' }}">
</div>
<!-- -------------------------------   -------------------------------------------->

<div class="form-group">
<label for="Descripcion" class="control-label">{{'Descripcion'}}</label>
<input type="text" class="form-control" name="Descripcion" id="Descripcion" 

value="{{ isset($anomalias->Descripcion) ? $anomalias->Descripcion:'' }}">
</div>
<!-- -------------------------------   -------------------------------------------->


<input class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'  }}">

<a href="{{ url('anomalias') }}" class="btn dark">Volver</a>
