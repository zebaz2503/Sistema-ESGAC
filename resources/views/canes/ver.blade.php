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
                                                                                                                                    
                            <label class="control-label col-md-3">Varianbles:</label>
                        <div class="col-md-9">
                            <p class="form-control-static"> {{ $canes-> variables}} </p>
                        </div>                                              
                    </div>
                </div>     
                <!------------------------------------------------------------------->

    </div>
</div>

@endsection
