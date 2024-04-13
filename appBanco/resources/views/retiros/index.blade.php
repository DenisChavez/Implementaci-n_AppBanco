@extends('layouts.principal')

@section('hijos')
<h1>Transacciones Realizadas - Afiliado: {{$afiliado}}</h1>

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
        @if($retiro->codafiliado == $afiliado)
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