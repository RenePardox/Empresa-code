@extends('index');

@section('crear')
<form action="{{url('dependiente')}}" method="POST">
    @csrf
    <div class="formulario">
    <div class="mb-3">
        <label for="" class="form-label">CI DEPENDIENTE:</label>
        <input type="text" class="form-control" id="cid" name="cid">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">NOMBRE DEPENDIENTE:</label>
        <input type="text" class="form-control" id="nombred" name="nombred">
    </div>
    </div><div class="mb-3">
    <select name="tipod">
                    <option value="H" selected>HIJO</option>
                    <option value="E" >ESPOS@</option>
                    
                </select>
    </div><div class="mb-3">
    <div class="mb-3">
        <label for="" class="form-label">FECHA NACIMIENTO:</label>
        <input type="text" class="form-control" id="fecha_nacd" name="fecha_nacd">
    </div><div class="mb-3">

    <select name="ci">
    @foreach($datos as $reg)
            <option value="{{$reg->ci}}" selected>{{$reg->ci}} :{{$reg->nombre}}</option>
            @endforeach
                    
                </select>


    
    </div>

    <a href="{{url('empleado')}}" class="btn btn-secondary">CANCELAR</a>
    
    <button type="submit" class="btn btn-primary">GUARDAR</button>
    </div>
</form>

@endsection