@extends('index');

@section('crear')
<form action="{{url('empleado')}}" method="POST">
    @csrf
    <div class="formulario">
    <div class="mb-3">
        <label for="" class="form-label">CI:</label>
        <input type="text" class="form-control" id="ci" name="ci">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">NOMBRE EMPLEADO:</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    </div><div class="mb-3">
        <label for="" class="form-label">DIRECCION EMPLLEDO:</label>
        <input type="text" class="form-control" id="direccion" name="direccion">
    </div><div class="mb-3">
    <div class="mb-3">
        <label for="" class="form-label">FECHA NACIMIENTO:</label>
        <input type="text" class="form-control" id="fecha_nac" name="fecha_nac">
    </div><div class="mb-3">
        <label for="" class="form-label">procedencia: </label>
        <input type="text" class="form-control" id="procedencia" name="procedencia">
    </div>

    <a href="{{url('empleado')}}" class="btn btn-secondary">CANCELAR</a>
    
    <button type="submit" class="btn btn-primary">GUARDAR</button>
    </div>
</form>

@endsection