
<div class="portlet light bordered">
        <h2>Anomalias</h2>

        <div class="form-group">
                <label for="TipoAnomalia" class="control-label">{{'TipoAnomalia'}}</label>
                <span class="required" aria-required="true"> * </span>
                <input type="text"  class="form-control  {{$errors->has('TipoAnomalia')?'is-invalid':'' }}" 
                name="TipoAnomalia" 
                id="TipoAnomalia" 

                value="{{ isset($anomalias->TipoAnomalia) ? $anomalias->TipoAnomalia:old('TipoAnomalia') }}">

                {!! $errors->first('TipoAnomalia','<div class="invalid-feedback">:message</div>')    !!}


        </div>
        <!-- -------------------------------   -------------------------------------------->

        <div class="form-group">
                <label for="Descripcion" class="control-label">{{'Descripcion'}}</label>
                <span class="required" aria-required="true"> * </span>
                <!--<input type="text" class="form-control" name="Descripcion" id="Descripcion" 
                value="{{ isset($anomalias->Descripcion) ? $anomalias->Descripcion:'' }}">-->

                <textarea type="text" class="form-control {{$errors->has('Descripcion')?'is-invalid':'' }}" 
                name="Descripcion" 
                id="Descripcion" 
                value="{{ isset($anomalias->Descripcion) ? $anomalias->Descripcion:'' }}" rows="10" cols="40">  </textarea>

                {!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>')    !!}
        </div>
        <!-- -------------------------------   -------------------------------------------->



            <div class="form-group">
            <label for="id_can" class="control-label">{{'Can'}}</label>
            <span class="required" aria-required="true"> * </span>

            <select name="id_can" id="id_can" 
            class="form-control {{$errors->has('tipo_alimento')?'is-invalid':'' }}"  
                value="{{ isset($canes->id) ? $canes->id:old('id') }}">     
                
                <option value=""> >> Elija una opción << </option>
                @foreach($canes as $can)
                    <option value="{{ $can->id }}"> {{ $can->nombre_can}} </option>
                @endforeach
                
            </select>
            <!--{!! $errors->first('tipo_alimento','<div class="invalid-feedback">:message</div>')    !!}-->


            </div>
       

        <!--<div class="form-group">
                <label for="Descripcion" class="control-label">{{'Fecha'}}</label>
                <input id="date" type="date" class="form-control">
        </div>-->
<input class="btn btn-primary" type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'  }}">

<a href="{{ url('anomalias') }}" class="btn dark">Volver</a>


</div>        




