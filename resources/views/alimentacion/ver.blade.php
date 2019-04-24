@extends('admin.layout')

@section('content')

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje') }}
</div>
@endif

<div class="portlet-body form" >
    <!-- BEGIN FORM-->
        <form class="form-horizontal" role="form" action="{{ route('alimentacion.store') }}" method="post">  
            {{ csrf_field() }}
        <a href="{{ url('/alimentacion/') }}" id="sample_editable_1_new" class="btn green-meadow">Volver</a>     
        <div class="form-body">
            <h1 class="form-section">Can # {{ $canes->id }}</h1>
            <input type="hidden" value="{{ $canes->id }}" name="id_can" readonly>    
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
                            <!--<p class="form-control-static"> {{ $canes-> nombre_can}} </p>-->
                            <input class="form-control"  type="text" value="{{ $canes->nombre_can }}" name="nombre_can" readonly>
                        </div>                                              
                    </div>
                </div>
                <!------------------------------------------------------------------->
                <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Ración (Gramos):</label>
                        <div class="col-md-3">
                            <!--<p class="form-control-static"> {{ $canes-> racion}} Gramos</p>-->
                            <input class="form-control"  type="text" value="{{ $canes->racion}}" name="racion" readonly>
                        </div>                                              
                    </div>
                </div> 
                        <!------------------------------------------------------------------->
                    <div class="col-md-6">
                        <div class="form-group">
                                                                                                                                    
                            <label class="control-label col-md-3">Raza:</label>
                        <div class="col-md-3">
                            <!--<p class="form-control-static"> {{ $canes-> raza}} </p>-->
                            <input class="form-control"  type="text" value="{{ $canes->raza }}" readonly>
                        </div>                                              
                    </div>

        <!------------------------------------------------------------------->
               
                    <div class="col-md-6">
                        <div class="col-md-3">
                            <!--<p class="form-control-static"> {{ $canes-> raza}} </p>-->
                            <input class="form-control"  type="hidden" value="{{ Auth::user()->name }}" name="name" readonly>
                        </div>                                              
                    </div>

                    
        <!------------------------------------------------------------------->
               
        <div class="col-md-6">
                        <div class="col-md-3">
                            <!--<p class="form-control-static"> {{ $canes-> raza}} </p>-->
                            <input class="form-control"  type="hidden" value="{{ Auth::user()->id }}" name="id_usuario" readonly>
                        </div>                                              
        </div>
               
        <!-- -------------------------------   -------------------------------------------->
        <hr>
        <div class="col-md-6">
            <div class="form-group">
 
                <input class="btn btn-primary" type="submit" value="Alimentar Can" 
                onclick="return confirm('¿DESEA VACIAR LA TOLVA DE ALIMENTO?');">

            </div>
        </div>    
        
        
        </form>
</div>                
@endsection