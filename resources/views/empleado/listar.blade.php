@extends('index')
@section('listar')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">CI</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">FECHA NAC</th>
      <th scope="col">PROCEDENCIA</th>
      <th scope="col">ACCIONES</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($datos as $reg)
    <tr>
      <td>{{$reg->ci}}</td>
      <td>{{$reg->nombre}}</td>
      <td>{{$reg->direccion}}</td>
      <td>{{$reg->fecha_nac}}</td>
      <td>{{$reg->procedencia}}</td>
      <td>
        <form action="{{url('empleado/'.$reg->ci)}}" method="post">
          @csrf
          @method('DELETE')
          <a href="empleado/{{$reg->ci}}/edit" class="btn btn-info">EDITAR</a>
          <button type="submit" class="btn btn-danger" onclick="return confirm('Borrar?')">BORRAR</button>
        </form>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
@endsection