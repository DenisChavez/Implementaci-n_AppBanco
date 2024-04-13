@extends('layouts.principal')

@section('hijos')

<h1>Editar Empleado</h1>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('empleado.update', $empleado->id)}}" method="GET">
                @csrf 
                @method('PUT')
                <div class="mb-3">
                    <label for="codEmpleado">Código Empleado</label>
                    <input type="text" name="codigoEmpleado" id="codEmpleado" value="{{$empleado->codempleado}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nombre_empleado">Nombre</label>
                    <input type="text" name="nombreEmpleado" id="nombre_empleado" value="{{$empleado->nombre}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="apellido_empleado">Apellido</label>
                    <input type="text" name="apellidoEmpleado" id="apellido_empleado" value="{{$empleado->apellido}}" class="form-control">
                </div>

                 <div class="mb-3">
                    <label for="nivel_empleado">Nivel</label>
                    <input type="text" name="nivelEmpleado" id="nivel_empleado" value="{{$empleado->nivel}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefonoEmpleado" id="telefono" value="{{$empleado->telefono}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-info">Editar</button>
            </form>
        </div>
    </div>
</div>

@endsection('hijos')