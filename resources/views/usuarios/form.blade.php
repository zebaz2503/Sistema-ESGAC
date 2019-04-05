
    <div class="portlet light bordered">
    <h2>Usuarios</h2>

    <div class="row">
        <div class="col-md-6">
                    <div class="form-group">
                        <label for="name" class="control-label">{{'Nombres'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="text"  class="form-control  {{$errors->has('name')?'is-invalid':'' }}" 
                        name="name" 
                        id="name" 

                        value="{{ isset($users->name) ? $users->name:old('name') }}">

                        {!! $errors->first('name','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
            <div class="col-md-6">
                    <div class="form-group">
                        <label for="apellido" class="control-label">{{'Apellidos'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="text"  class="form-control  {{$errors->has('apellido')?'is-invalid':'' }}" 
                        name="apellido" 
                        id="apellido" 

                        value="{{ isset($users->apellido) ? $users->apellido:old('apellido') }}">

                        {!! $errors->first('apellido','<div class="invalid-feedback">:message</div>') !!}

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

                        value="{{ isset($users->cedula) ? $users->cedula:old('cedula') }}">

                        {!! $errors->first('cedula','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email" class="control-label">{{'Email'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="email"  class="form-control  {{$errors->has('email')?'is-invalid':'' }}" 
                        name="email" 
                        id="email" 

                        value="{{ isset($users->email) ? $users->email:old('email') }}">

                        {!! $errors->first('email','<div class="invalid-feedback">:message</div>') !!}

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

                        value="{{ isset($users->telefono) ? $users->telefono:old('telefono') }}">

                        {!! $errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
             <div class="col-md-6">
                    <div class="form-group">
                        <label for="password" class="control-label">{{'Contraseña'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="password"  class="form-control  {{$errors->has('password')?'is-invalid':'' }}" 
                        name="password" 
                        id="password" 


                        value="{{ isset($users->password) ? $users->password:old('password') }}">

                        <!--@if ($errors->has('contraseña'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contraseña') }}</strong>
                                    </span>
                        @endif

                        <label for="password-confirm" class="control-label">{{('Confirma Contraseña') }}</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        -->
                        
                        {!! $errors->first('password','<div class="invalid-feedback">:message</div>') !!}  



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

                        value="{{ isset($users->rango) ? $users->rango:old('rango') }}">

                        {!! $errors->first('rango','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>
<!------------------------------------------------------------------------------------------------------------------------>
                <!--<div class="col-md-6">
                    <div class="form-group">
                        <label for="rol" class="control-label">{{'Rol'}}</label>
                        <span class="required" aria-required="true"> * </span>
                        <input type="text"  class="form-control  {{$errors->has('rol')?'is-invalid':'' }}" 
                        name="rol" 
                        id="rol" 

                        value="{{ isset($users->rol) ? $users->rol:old('rol') }}">

                        {!! $errors->first('rol','<div class="invalid-feedback">:message</div>') !!}

                    </div>
            </div>-->

            <div class="col-md-6">
            <div class="form-group">
            <label for="rol" class="control-label">{{'Rol'}}</label>
            <span class="required" aria-required="true"> * </span>

            <select name="rol" id="rol" 
            class="form-control {{$errors->has('rol')?'is-invalid':'' }}"  
                value="{{ isset($canes->rol) ? $canes->rol:old('rol') }}">     
                
                <option value=""> >> Elija una opción << </option>
                @foreach($roles as $rol)
                    <option value="{{ $rol->id }}"> {{ $rol->name}} </option>
                @endforeach
                
            </select>
            {!! $errors->first('rol','<div class="invalid-feedback">:message</div>')    !!}


            </div>
        </div>














<!------------------------------------------------------------------------------------------------------------------------>
     </div>
<input class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'  }}">

<a href="{{ url('usuarios') }}" class="btn dark">Volver</a>


</div>  

