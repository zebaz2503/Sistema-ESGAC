
<div class="portlet light bordered">
<h2>Razas</h2>
    <div class="form-group">
        <label for="Nombre" class="control-label">{{'Nombre'}}</label>
        <span class="required" aria-required="true"> * </span>
        <input class="form-control" type="text" 
        name="Nombre" 
        id="Nombre" 

        value="{{ isset($razas->nombre) ? $razas->nombre:'' }}">
        {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>')    !!}
    </div>
    <!-- -------------------------------   -------------------------------------------->

    <div class="form-group">
        <label for="Descripcion" class="control-label">{{'Descripcion'}}</label>
        <span class="required" aria-required="true"> * </span>
        <input class="form-control" type="text" 
        name="Descripcion" 
        id="Descripcion" 

        value="{{ isset($razas->descripcion) ? $razas->descripcion:'' }}">
        {!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>')    !!}
    </div>
    <!-- -------------------------------   -------------------------------------------->

    <div class="form-group">
        <label for="Foto" class="control-label">{{'Foto'}}</label>
        @if(isset($razas->foto))

        <br/>
        <img src="{{ asset('storage').'/' .$razas->foto}}" class="img-thumbnail img-fluid" alt="" width="200">
        <br/>
        @endif

        <input class="form-control" type="file" name="Foto" id="Foto" value="">

    </div>
    <!-- -------------------------------   -------------------------------------------->
    
    <input  class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'  }}">

    <a href="{{ url('razas') }}" class="btn dark">Volver</a>
</div>



