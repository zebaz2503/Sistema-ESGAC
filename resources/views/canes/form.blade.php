<div class="portlet light bordered">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="foto_can" class="control-label">{{'Foto Can'}}</label>
                @if(isset($canes->foto_can))

                <br/>
                <img src="{{ asset('storage').'/' .$canes->foto_can}}" class="img-thumbnail img-fluid" alt="" width="200">
                <br/>
                @endif

                <input class="form-control" type="file" name="foto_can" id="foto_can" value="">

            </div>
        </div>

    <!---------------------------------------------------------------------------------------------------->

        <div class="col-md-6">
            <div class="form-group">
                <label for="nombre_can" class="control-label">{{'Nombre Can'}}</label>
                <span class="required" aria-required="true"> * </span>
                <input type="text"  class="form-control  {{$errors->has('nombre_can')?'is-invalid':'' }}" 
                name="nombre_can" 
                id="nombre_can" 

                value="{{ isset($canes->nombre_can) ? $canes->nombre_can:old('nombre_can') }}">

                {!! $errors->first('nombre_can','<div class="invalid-feedback">:message</div>') !!}

            </div>
        </div>

    <!---------------------------------------------------------------------------------------------------->
        <div class="col-md-6">
            <div class="form-group">
            <label for="raza" class="control-label">{{'Raza'}}</label>
            <span class="required" aria-required="true"> * </span>
            <input type="text"  class="form-control  {{$errors->has('raza')?'is-invalid':'' }}" 
            name="raza" 
            id="raza" 

            value="{{ isset($canes->raza) ? $canes->raza:old('raza') }}">

            {!! $errors->first('raza','<div class="invalid-feedback">:message</div>')    !!}

            </div>
        </div>   
        
    <!---------------------------------------------------------------------------------------------------->
        <div class="col-md-6">
            <div class="form-group">
            <label for="estado" class="control-label">{{'Estado'}}</label>
            <span class="required" aria-required="true"> * </span>
            <input type="text"  class="form-control  {{$errors->has('estado')?'is-invalid':'' }}" 
            name="estado" 
            id="estado" 

            value="{{ isset($canes->estado) ? $canes->estado:old('estado') }}">

            {!! $errors->first('estado','<div class="invalid-feedback">:message</div>')    !!}


            </div>
        </div>   
        <!---------------------------------------------------------------------------------------------------->
        <div class="col-md-6">
            <div class="form-group">
            <label for="edad" class="control-label">{{'Edad (Meses)'}}</label>
            <span class="required" aria-required="true"> * </span>
            <input type="text"  class="form-control  {{$errors->has('edad')?'is-invalid':'' }}" 
            name="edad" 
            id="edad" 

            value="{{ isset($canes->edad) ? $canes->edad:old('edad') }}">

            {!! $errors->first('edad','<div class="invalid-feedback">:message</div>')    !!}


            </div>
        </div>   
        <!---------------------------------------------------------------------------------------------------->
        <div class="col-md-6">
            <div class="form-group">
            <label for="peso" class="control-label">{{'Peso (Kg)'}}</label>
            <span class="required" aria-required="true"> * </span>
            <input type="text"  class="form-control  {{$errors->has('peso')?'is-invalid':'' }}" 
            name="peso" 
            id="peso" 

            value="{{ isset($canes->peso) ? $canes->peso:old('peso') }}">

            {!! $errors->first('peso','<div class="invalid-feedback">:message</div>')    !!}


            </div>
        </div>
        <!---------------------------------------------------------------------------------------------------->
        <div class="col-md-6">
            <div class="form-group">
            <label for="condicion_cor" class="control-label">{{'Condicion Corporal'}}</label>
            <span class="required" aria-required="true"> * </span>
            <input type="text"  class="form-control  {{$errors->has('condicion_cor')?'is-invalid':'' }}" 
            name="condicion_cor" 
            id="condicion_cor" 

            value="{{ isset($canes->condicion_cor) ? $canes->condicion_cor:old('condicion_cor') }}">

            {!! $errors->first('condicion_cor','<div class="invalid-feedback">:message</div>')    !!}


            </div>
        </div>
        <!---------------------------------------------------------------------------------------------------->
        <div class="col-md-6">
            <div class="form-group">
            <label for="rer" class="control-label">{{'Requerimiento Energetico En Reposo'}}</label>
            <span class="required" aria-required="true"> * </span>
            <input type="text"  class="form-control  {{$errors->has('rer')?'is-invalid':'' }}" 
            name="rer" 
            id="rer" 

            value="{{ isset($canes->rer) ? $canes->rer:old('rer') }}">

            {!! $errors->first('rer','<div class="invalid-feedback">:message</div>')    !!}


            </div>
        </div>
        <!---------------------------------------------------------------------------------------------------->
        <div class="col-md-6">
            <div class="form-group">
            <label for="red" class="control-label">{{'Requerimiento Energetico Diario'}}</label>
            <span class="required" aria-required="true"> * </span>
            <input type="text"  class="form-control  {{$errors->has('red')?'is-invalid':'' }}" 
            name="red" 
            id="red" 

            value="{{ isset($canes->red) ? $canes->red:old('red') }}">

            {!! $errors->first('red','<div class="invalid-feedback">:message</div>')    !!}


            </div>
        </div>
        <!---------------------------------------------------------------------------------------------------->
        <div class="col-md-6">
            <div class="form-group">
            <label for="racion" class="control-label">{{'Racion'}}</label>
            <span class="required" aria-required="true"> * </span>
            <input type="text"  class="form-control  {{$errors->has('racion')?'is-invalid':'' }}" 
            name="racion" 
            id="racion" 

            value="{{ isset($canes->racion) ? $canes->racion:old('racion') }}">

            {!! $errors->first('racion','<div class="invalid-feedback">:message</div>')    !!}


            </div>
        </div>
        <!---------------------------------------------------------------------------------------------------->
        <div class="col-md-6">
            <div class="form-group">
            <label for="sexo" class="control-label">{{'Sexo'}}</label>
            <span class="required" aria-required="true"> * </span>
            <input type="text"  class="form-control  {{$errors->has('sexo')?'is-invalid':'' }}" 
            name="sexo" 
            id="sexo" 

            value="{{ isset($canes->sexo) ? $canes->sexo:old('sexo') }}">

            {!! $errors->first('sexo','<div class="invalid-feedback">:message</div>')    !!}


            </div>
        </div>
        
       
        <!---------------------------------------------------------------------------------------------------->
         
        <div class="col-md-6">
            <div class="form-group">
            <label for="tipo_alimento" class="control-label">{{'Tipo De Alimento'}}</label>
            <span class="required" aria-required="true"> * </span>
            <input type="text"  class="form-control  {{$errors->has('tipo_alimento')?'is-invalid':'' }}" 
            name="tipo_alimento" 
            id="tipo_alimento" 

            value="{{ isset($canes->tipo_alimento) ? $canes->tipo_alimento:old('tipo_alimento') }}">

            {!! $errors->first('tipo_alimento','<div class="invalid-feedback">:message</div>')    !!}


            </div>
        </div>
        <!---------------------------------------------------------------------------------------------------->
        <div class="col-md-6">
            <div class="form-group">
            <label for="variables" class="control-label">{{'Variables'}}</label>
            <span class="required" aria-required="true"> * </span>
            <input type="text"  class="form-control  {{$errors->has('variables')?'is-invalid':'' }}" 
            name="variables" 
            id="variables" 

            value="{{ isset($canes->variables) ? $canes->variables:old('variables') }}">

            {!! $errors->first('variables','<div class="invalid-feedback">:message</div>')    !!}


            </div>
        </div>

    </div> 
</div>
<!---------------------------------------------------------------------------------------------------->

<input class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'  }}">

<a href="{{ url('canes') }}" class="btn dark">Volver</a>