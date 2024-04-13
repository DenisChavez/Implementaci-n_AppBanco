@extends('layouts.principal')

@section('hijos')
<h1>Crear Empleado</h1>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="/empleado" method="POST">
                @csrf 
                <div class="mb-3">
                    <label for="codEmpleado">Código Empleado</label>
                    <input type="text" name="codigoEmpleado" id="codEmpleado" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nombre_empleado">Nombre</label>
                    <input type="text" name="nombreEmpleado" id="nombre_empleado" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="apellido_empleado">Apellido</label>
                    <input type="text" name="apellidoEmpleado" id="apellido_empleado" class="form-control">
                </div>

                 <div class="mb-3">
                    <label for="nivel_empleado">Nivel</label>
                    <input type="text" name="nivelEmpleado" id="nivel_empleado" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefonoEmpleado" id="telefono" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection('hijos')