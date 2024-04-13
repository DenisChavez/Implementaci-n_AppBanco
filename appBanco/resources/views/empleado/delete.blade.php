@extends('layouts.principal')

@section('hijos')
<h3>¿Seguro que deseas eliminar el empleado?</h3>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('empleado.destroy', $eliminar->id)}}" method="POST">
                @csrf 
                @method('DELETE')
                <div class="mb-3">
                    <label for="codEmpleado">Código Empleado</label>
                    <input type="text" name="codigoEmpleado" id="codEmpleado" value="{{$eliminar->codempleado}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nombre_empleado">Nombre</label>
                    <input type="text" name="nombreEmpleado" id="nombre_empleado" value="{{$eliminar->nombre}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="apellido_empleado">Apellido</label>
                    <input type="text" name="apellidoEmpleado" id="apellido_empleado" value="{{$eliminar->apellido}}" class="form-control">
                </div>

                 <div class="mb-3">
                    <label for="nivel_empleado">Nivel</label>
                    <input type="text" name="nivelEmpleado" id="nivel_empleado" value="{{$eliminar->nivel}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefonoEmpleado" id="telefono" value="{{$eliminar->telefono}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection('hijos')