<div class="portlet light bordered">
    <h2>Usuarios</h2>

    <div class="form-group">
        <label for="nombre_alimento" class="control-label">{{'Nombre del Alimento'}}</label>
        <span class="required" aria-required="true"> * </span>
        <input type="text" class="form-control {{$errors->has('nombre_alimento')?'is-invalid':'' }}" 
        name="nombre_alimento" 
        id="nombre_alimento" 
        
        value="{{ isset($alimentos->nombre_alimento) ? $alimentos->nombre_alimento:'' }}">
        {!! $errors->first('nombre_alimento','<div class="invalid-feedback">:message</div>')    !!}

    </div>

    <!-- -------------------------------   -------------------------------------------->

    <div class="form-group">

        <label for="grasas" class="control-label">{{'Grasas'}}</label>
        <span class="required" aria-required="true"> * </span>
        <input type="text" class="form-control {{$errors->has('grasas')?'is-invalid':'' }}" 
        name="grasas" 
        id="grasas" 

        value="{{ isset($alimentos->grasas) ? $alimentos->grasas:'' }}">
        {!! $errors->first('grasas','<div class="invalid-feedback">:message</div>')    !!}

    </div>


    <!-- -------------------------------   -------------------------------------------->


    <div class="form-group">
        <label for="carbohidratos" class="control-label">{{'Carbohidratos'}}</label>
        <span class="required" aria-required="true"> * </span>
        <input type="text" class="form-control {{$errors->has('carbohidratos')?'is-invalid':'' }}" 
        name="carbohidratos" 
        id="carbohidratos" 

        value="{{ isset($alimentos->carbohidratos) ? $alimentos->carbohidratos:'' }}">
        {!! $errors->first('carbohidratos','<div class="invalid-feedback">:message</div>')    !!}


    </div>

    <!-- -------------------------------   -------------------------------------------->


    <input class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'  }}">

    <a href="{{ url('alimentos') }}" class="btn dark">Volver</a>

</div>    
