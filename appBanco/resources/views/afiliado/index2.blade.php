@extends('layouts.principal')

@section('hijos')
<head>
    <style>
        .titulo{
            text-align: center;
            font-size: 26px;
            font-weight: 700;
            margin: 16px 0 16px;
            text-transform: uppercase;
        }
        .titulo > span{
            font-weight: 300;
            letter-spacing: 2px;
            margin-left: 14px;
        }
    </style>
</head>
<h1 class="titulo">Nombre del empleado: <span>{{$empleado->codempleado}} {{$empleado->nombre}} {{$empleado->apellido}}</span> </h1>

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
                <a href="/retiro/{{$afiliado->id}}/{{$empleado->id}}" class='btn btn-info'>Retiro</a>
                <a href="/deposito/{{$afiliado->id}}/{{$empleado->id}}" class='btn btn-info'>Deposito</a>
            </th>
        </tr>    
        @endforeach
    </tbody>
</table>
@endsection('hijos')