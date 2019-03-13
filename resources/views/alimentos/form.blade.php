

<label for="nombre_alimento">{{'Nombre del Alimento'}}</label>
<input type="text" name="nombre_alimento" id="nombre_alimento" 

value="{{ isset($alimentos->nombre_alimento) ? $alimentos->nombre_alimento:'' }}">
<br/>

<label for="grasas">{{'Grasas'}}</label>
<input type="text" name="grasas" id="grasas" 

value="{{ isset($alimentos->grasas) ? $alimentos->grasas:'' }}">
<br/>

<label for="carbohidratos">{{'Carbohidratos'}}</label>
<input type="text" name="carbohidratos" id="carbohidratos" 

value="{{ isset($alimentos->carbohidratos) ? $alimentos->carbohidratos:'' }}">
<br/>


<input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'  }}">

<a href="{{ url('alimentos') }}">Volver</a>
