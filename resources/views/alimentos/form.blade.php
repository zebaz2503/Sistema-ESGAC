<div class="form-group">
<label for="nombre_alimento" class="control-label">{{'Nombre del Alimento'}}</label>
<input type="text" class="form-control" name="nombre_alimento" id="nombre_alimento" 

value="{{ isset($alimentos->nombre_alimento) ? $alimentos->nombre_alimento:'' }}">
</div>

<!-- -------------------------------   -------------------------------------------->

<div class="form-group">

<label for="grasas" class="control-label">{{'Grasas'}}</label>
<input type="text" class="form-control" name="grasas" id="grasas" 

value="{{ isset($alimentos->grasas) ? $alimentos->grasas:'' }}">
</div>


<!-- -------------------------------   -------------------------------------------->


<div class="form-group">
<label for="carbohidratos" class="control-label">{{'Carbohidratos'}}</label>
<input type="text" class="form-control" name="carbohidratos" id="carbohidratos" 

value="{{ isset($alimentos->carbohidratos) ? $alimentos->carbohidratos:'' }}">

</div>

<!-- -------------------------------   -------------------------------------------->


<input class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'  }}">

<a href="{{ url('alimentos') }}" class="btn dark">Volver</a>
