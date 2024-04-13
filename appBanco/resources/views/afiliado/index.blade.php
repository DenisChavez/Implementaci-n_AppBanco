@extends('layouts.principal')

@section('hijos')
<h1>Modulo de Afiliado</h1>
<a href="afiliado/create" class="btn btn-primary">Crear Nuevo Afiliado</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>ID Afiliado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ciudad</th>
            <th>Teléfono</th>
            <th>Edad</th>
        </tr>
    </thead>

    <tbody>
        @foreach($afiliados as $afiliado)
        <tr>
            <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->codafiliado}}</th>
            <th>{{$afiliado->nombre}}</th>
            <th>{{$afiliado->apellido}}</th>
            <th>{{$afiliado->ciudad}}</th>
            <th>{{$afiliado->telefono}}</th>
            <th>{{$afiliado->edad}}</th>
            <th>
                <a href="/afiliado/edit/{{$afiliado->id}}" class='btn btn-info'>Edit</a>
                <a href="/afiliado/destroy/{{$afiliado->id}}" type="submit" class="btn btn-warning">Eliminar</a>
            </th>
        </tr>    
        @endforeach
    </tbody>
</table>
@endsection('hijos')