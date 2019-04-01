@extends('admin.layout')

@section('content')



    <div class="portlet-body form">
    <!-- BEGIN FORM-->
        <form class="form-horizontal" role="form">  
        <a href="{{ url('/canes/') }}" id="sample_editable_1_new" class="btn green-meadow">Volver</a>     
        <div class="form-body">
            <h1 class="form-section">Can # {{ $canes->id}}</h1>
                
                    <div class="col-md-6">
                        <div class="form-group">
                                                                        
                            <img  src="{{ asset('storage').'/' .$canes->foto_can}}" class="img-thumbnail img-fluid" alt=""  width="250">
                                                                            
                        </div>                                                
                    </div>
                

        <!------------------------------------------------------------------->
                <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Nombre:</label>
                        <div class="col-md-3">
                            <p class="form-control-static"> {{ $canes-> nombre_can}} </p>
                        </div>                                              
                    </div>
                </div>
        <!------------------------------------------------------------------->
        <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Raza:</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> raza}} </p>
                        </div>                                              
                    </div>
                </div>
        <!------------------------------------------------------------------->
        <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Estado:</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> estado}} </p>
                        </div>                                              
                    </div>
                </div>
        <!------------------------------------------------------------------->
                <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Edad (Meses):</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> edad}} Meses</p>
                        </div>                                              
                    </div>
                </div> 
                <!------------------------------------------------------------------->
                <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Peso (Kg):</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> peso}} Kg</p>
                        </div>                                              
                    </div>
                </div>     
                <!------------------------------------------------------------------->
                <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Condicion Corporal:</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> condicion_cor}} </p>
                        </div>                                              
                    </div>
                </div>     
                <!------------------------------------------------------------------->
                <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Requerimiento Energetico en Reposo (R.E.R):</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> rer}} </p>
                        </div>                                              
                    </div>
                </div>     
                <!------------------------------------------------------------------->
                <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Requerimiento Energetico Diario (R.E.D):</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> red}} </p>
                        </div>                                              
                    </div>
                </div>     
                <!------------------------------------------------------------------->
                <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Sexo:</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> sexo}} </p>
                        </div>                                              
                    </div>
                </div>     
                <!------------------------------------------------------------------->
                <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Tipo de Alimento:</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> tipo_alimento}} </p>
                        </div>                                              
                    </div>
                </div>     
                <!------------------------------------------------------------------->
                <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Variables:</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> variables}} </p>
                        </div>                                              
                    </div>
                </div>     
                <!------------------------------------------------------------------->

    </div>
</div>

<!--------------------------------------------Anomalias Canes----------------------------------------------->
<div class="portlet-body form">
     
        <!-- -------------------------------   -------------------------------------------->

        <div class="form-group">
        <hr style="width:75%;">
        </div>
        <!-- -------------------------------   -------------------------------------------->
</div>

<div class="portlet box blue">

    <div class="portlet-title">
        <div class="caption">
                    <i class="fa fa-gift"></i>Registrar Anomalias </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>                                     
                </div>
            </div>
            <div class="portlet-body form">
                                                        <!-- BEGIN FORM-->
                <form action="#" method="post">
                <!--<input  type="hidden" value="{{ csrf_field() }}"></input>-->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                        <div class="portlet light form-fit ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-social-dribbble font-green"></i>
                                    <span class="caption-subject font-green bold uppercase">Registrar Anomalias</span>
                                </div>                         
                        </div>
                            <div class="portlet-body form">
                            <div class="mt-clipboard-container">
                        
                                <div class="form-group">
                                    <label for="TipoAnomalia" class="control-label">{{'Tipo Anomalia'}}</label>
                                    <!--<span class="required" aria-required="true"> * </span>-->
                                    <input type="text"  class="form-control  {{$errors->has('TipoAnomalia')?'is-invalid':'' }}" 
                                    name="TipoAnomalia" 
                                    id="TipoAnomalia" 

                                    value="{{ isset($anomalias->TipoAnomalia) ? $anomalias->TipoAnomalia:old('TipoAnomalia') }}">

                                   <!-- {!! $errors->first('TipoAnomalia','<div class="invalid-feedback">:message</div>')    !!}--


                                </div>

                                    <!-- -------------------------------   -------------------------------------------->

                                <div class="form-group">
                                    <label for="Descripcion" class="control-label">{{'Descripcion'}}</label>
                                    <!--<span class="required" aria-required="true"> * </span>-->
                            
                                    <textarea type="text" class="form-control {{$errors->has('Descripcion')?'is-invalid':'' }}" 
                                    name="Descripcion" 
                                    id="Descripcion" 
                                    value="{{ isset($anomalias->Descripcion) ? $anomalias->Descripcion:'' }}" >  </textarea>

                                    <!--{!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>')    !!}-->
                                </div>

                                <div class="form-group">
                                    <label for="Descripcion" class="control-label">{{'Fecha'}}</label>
                                    <input id="date" type="date" class="form-control">
                                </div>

                                
                                <button type="submit" class="btn btn-primary">
                                        Registrar Anomalia
                                </button>
                                <a href="{{ url('canes') }}" class="btn dark">Volver</a>




                </form>        

            </div>
        </div>
    </div>
</div>    

<div class="portlet-body form">
     
        <!-- -------------------------------   -------------------------------------------->

        <div class="form-group">
        <hr style="width:75%;">
        </div>
        <!-- -------------------------------   -------------------------------------------->
</div>


<div class="portlet box blue">

    <div class="portlet-title">
        <div class="caption">
                    <i class="fa fa-gift"></i>Ver Anomalias </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>                                     
                </div>
            </div>
            <div class="portlet-body form">
                                                        <!-- BEGIN FORM-->
                <form action="#">
                        <div class="portlet light form-fit ">
                            <div class="portlet-title">
                                
                                    <i class="icon-social-dribbble font-green"></i>
                                    <span class="caption-subject font-green bold uppercase">Ver Anomalias</span>
                            </div>                         
                        </div>
                </form>        

            </div>
        </div>
    </div>
</div>    






















@endsection
