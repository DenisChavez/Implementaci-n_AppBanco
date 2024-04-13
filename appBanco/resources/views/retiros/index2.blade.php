@extends('layouts.principal')

@section('hijos')
<h1>Empleado : {{$empleado->nombre}} {{$empleado->apellido}}</h1>
<h1>Modulo de Retiros Afiliados : {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}}</h1>

<a href="/retiro/create/{{$empleado->id}}/{{$afiliado->id}}" class="btn btn-info">Realizar retiro</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codigo Empleado</th>
            <th>Codigo Afiliado</th>
            <th>Fecha</th>
            <th>Monto</th>
        </tr>
    </thead>

    <tbody>
        @foreach($retiros as $retiro)
        @if($retiro->codafiliado == $afiliado->id)
        <tr>
            <th>{{$retiro->id}}</th>
            <th>{{$retiro->codempleado}}</th>
            <th>{{$retiro->codafiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->monto}}</th>
        </tr>         
        @endif   
        @endforeach
    </tbody>
</table>

@endsection