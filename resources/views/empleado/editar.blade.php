@extends('index');

@section('editar')
<form action="{{url('empleado/'.$datos->ci)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="formulario">
    <div class="mb-3">
        <label for="" class="form-label">CI:</label>
        <input type="text" class="form-control" id="ci" name="ci" value="{{$datos->ci}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">NOMBRE :</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$datos->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">DIRECCION :</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{$datos->direccion}}">
    </div><div class="mb-3">
        <label for="" class="form-label">FECHA DE NAC:</label>
        <input type="text" class="form-control" id="fecha_nac" name="fecha_nac" value="{{$datos->fecha_nac}}">
    </div><div class="mb-3">
        <label for="" class="form-label">PROCEDENCIA : </label>
        <input type="text" class="form-control" id="procedencia" name="procedencia" value="{{$datos->procedencia}}">
    </div>
    <a href="{{url('empleado')}}" class="btn btn-secondary">CANCELAR</a>
    <button type="submit" class="btn btn-primary">GUARDAR</button>
</form>
</div>
@endsection
