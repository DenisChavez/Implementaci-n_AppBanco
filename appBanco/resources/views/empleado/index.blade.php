@extends('layouts.principal')

@section('hijos')
<h1>Modulo de Empleados</h1>
<a href="empleado/create" class="btn btn-primary">Crear Nuevo Empleado</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodEmpleado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nivel</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <th>{{$empleado->id}}</th>
            <th>{{$empleado->codempleado}}</th>
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>
            <th>{{$empleado->nivel}}</th>
            <th>{{$empleado->telefono}}</th>
            <th>
                <a href="{{route('empleado.edit', $empleado->id)}}" class='btn btn-info'>Edit</a>
                <a href="/afiliado/{{$empleado->id}}" class='btn btn-success'>Afiliados</a>
                <a href="/empleado/delete/{{$empleado->id}}" class="btn btn-warning">Eliminar</a>
            </th>
        </tr>    
        @endforeach
    </tbody>
</table>

@endsection('hijos')