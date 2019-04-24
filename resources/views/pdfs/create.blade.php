@extends('admin.layout')

@section('content')

<center>
<h2>Reporte Por Fecha</h2>
</center>
<br>

<form action="{{ route('pdfs.store')}}" method="post">

{{ csrf_field() }}

<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Fecha Inicial : </label>
            <div class="col-md-6">
                <input type="date"  class="form-control" name="fecha_inicial" id="fecha_inicial">
            </div>

    </div>
</div>        


<div class="col-md-6">
    <div class="form-group">
        <label class="control-label col-md-3">Fecha Final</label>
        <div class="col-md-6">
            <input type="date" class="form-control" name="fecha_final" id=fecha_final">
        </div>
    </div> 
</div>       

<hr style="border:15px;"><hr style="border:2px;">
<br>
<br>
<center>
    <input type="submit" class="btn btn-primary" value="Buscar">
</center>
</form>


@endsection