@extends('admin.layout')

@section('content')


<div class="portlet-body form">
    <!-- BEGIN FORM-->
        <form class="form-horizontal" role="form">  
        <a href="{{ url('/alimentacion/') }}" id="sample_editable_1_new" class="btn green-meadow">Volver</a>     
        <div class="form-body">
            <h1 class="form-section">Can # {{ $canes->id }}</h1>
                
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
                                                                                                                                    
                            <label class="control-label col-md-3">Ración:</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> racion}} Gramos</p>
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
               
        <!------------------------------------------------------------------->
        <hr>
        <div class="col-md-6">
            <div class="form-group">
                <a href="{{ url('/alimentacion/') }}" id="sample_editable_1_new" 
                class="btn btn-transparent red btn-outline btn-circle btn-sm active" 
                onclick="return confirm('¿DESEA VACIAR LA TOLVA DE ALIMENTO?');">Alimentar Can</a>
            </div>
        </div>    
        
        
        </form>
</div>                
@endsection