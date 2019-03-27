<h1>Crear Usuario</h1>
<div class="portlet light bordered">
    <div class="row">
        <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombres" class="control-label">{{'Nombres'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="text"  class="form-control  {{$errors->has('nombres')?'is-invalid':'' }}" 
                        name="nombres" 
                        id="nombres" 

                        value="{{ isset($usuarios->nombres) ? $usuarios->nombres:old('nombres') }}">

                        {!! $errors->first('nombres','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="apellidos" class="control-label">{{'Apellidos'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="text"  class="form-control  {{$errors->has('apellidos')?'is-invalid':'' }}" 
                        name="apellidos" 
                        id="apellidos" 

                        value="{{ isset($usuarios->apellidos) ? $usuarios->apellidos:old('apellidos') }}">

                        {!! $errors->first('apellidos','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="cedula" class="control-label">{{'Cedula'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="text"  class="form-control  {{$errors->has('cedula')?'is-invalid':'' }}" 
                        name="cedula" 
                        id="cedula" 

                        value="{{ isset($usuarios->cedula) ? $usuarios->cedula:old('cedula') }}">

                        {!! $errors->first('cedula','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="correo" class="control-label">{{'Correo'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="email"  class="form-control  {{$errors->has('correo')?'is-invalid':'' }}" 
                        name="correo" 
                        id="correo" 

                        value="{{ isset($usuarios->correo) ? $usuarios->correo:old('correo') }}">

                        {!! $errors->first('correo','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefono" class="control-label">{{'Telefono'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="text"  class="form-control  {{$errors->has('telefono')?'is-invalid':'' }}" 
                        name="telefono" 
                        id="telefono" 

                        value="{{ isset($usuarios->telefono) ? $usuarios->telefono:old('telefono') }}">

                        {!! $errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
             <div class="col-md-6">
                    <div class="form-group">
                        <label for="contraseña" class="control-label">{{'Contraseña'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="password"  class="form-control  {{$errors->has('contraseña')?'is-invalid':'' }}" 
                        name="contraseña" 
                        id="contraseña" 


                        value="{{ isset($usuarios->contraseña) ? $usuarios->contraseña:old('contraseña') }}">

                        <!--@if ($errors->has('contraseña'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contraseña') }}</strong>
                                    </span>
                        @endif

                        <label for="password-confirm" class="control-label">{{('Confirma Contraseña') }}</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        -->
                        
                        {!! $errors->first('contraseña','<div class="invalid-feedback">:message</div>') !!}  



                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="rango" class="control-label">{{'Rango'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="text"  class="form-control  {{$errors->has('rango')?'is-invalid':'' }}" 
                        name="rango" 
                        id="rango" 

                        value="{{ isset($usuarios->rango) ? $usuarios->rango:old('rango') }}">

                        {!! $errors->first('rango','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="rol" class="control-label">{{'Rol'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="text"  class="form-control  {{$errors->has('rol')?'is-invalid':'' }}" 
                        name="rol" 
                        id="rol" 

                        value="{{ isset($usuarios->rol) ? $usuarios->rol:old('rol') }}">

                        {!! $errors->first('rol','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
     </div>
</div>  

<input class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'  }}">

<a href="{{ url('usuarios') }}" class="btn dark">Volver</a>